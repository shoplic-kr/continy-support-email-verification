<?php

declare(strict_types=1);

namespace ShoplicKr\Continy\Supports;

use WP_Error;

class TransientEmailVerification implements EmailVerification
{
    public static function getKey(string $email): string
    {
        return static::getKeyPrefix() . $email;
    }

    protected static function getKeyPrefix(): string
    {
        return "continy_email_verification_";
    }

    public function discardAllAuthCodes(): void
    {
        global $wpdb;

        $length      = strlen('_transient_' . static::getKeyPrefix());
        $optionNames = $wpdb->get_col(
            "SELECT option_name FROM {$wpdb->options}" .
            " WHERE option_name LIKE '\_transient_continy\_email\_verification\_%'",
        );

        foreach ($optionNames as $optionName) {
            delete_transient(static::getKey(substr($optionName, $length)));
        }
    }

    public function discardAuthCode(string $email): void
    {
        delete_transient(self::getKey($email));
    }

    public function generateAuthcode(int $length = 8): string
    {
        $output = '';

        for ($i = 0; $i < $length; ++$i) {
            $output .= rand(0, 9);
        }

        return $output;
    }

    public function getAuthCode(string $email): string
    {
        return get_transient(self::getKey($email)) ?: '';
    }

    public function getEmailTemplate(string $email): array
    {
        $subject = sprintf(
            '[%s] 회원 가입을 위한 인증 코드를 보내드립니다.',
            wp_specialchars_decode(get_bloginfo('name'), ENT_QUOTES),
        );

        $body = include dirname(__DIR__) . '/misc/email-mockup.php';

        return [
            'subject' => $subject,
            'body'    => $body,
        ];
    }

    public function getTimeout(): int
    {
        return self::DEFAULT_TIMEOUT;
    }

    public function sendEmail(string $email, array $template = []): void
    {
        if ( ! $template) {
            $template = $this->getEmailTemplate($email);
        }

        $subject   = $template['subject'] ?? '';
        $body      = $template['body'] ?? '';
        $lastError = null;

        $actionCallback = function (WP_Error $error) use (&$lastError) {
            $lastError = $error;
        };

        $filterCallback = fn() => 'text/html';

        add_action('wp_mail_failed', $actionCallback);
        add_filter('wp_mail_content_type', $filterCallback);

        $result = wp_mail($email, $subject, $body);

        remove_action('wp_mail_failed', $actionCallback);
        remove_filter('wp_mail_content_type', $filterCallback);

        if ( ! $result && $lastError) {
            throw new EmailErrorException(
                $lastError->get_error_message(),
                $lastError->get_error_code(),
            );
        }
    }

    public function setAuthCode(string $email, int $timeout = -1,): string
    {
        $key      = static::getKey($email);
        $authCode = $this->generateAuthcode();
        $timeout  = $timeout > 0 ? $timeout : $this->getTimeout();

        if ( ! set_transient($key, $authCode, $timeout)) {
            return '';
        }

        return $authCode;
    }

    public function verifyAuthCode(string $email, string $code): bool
    {
        return $code === get_transient(self::getKey($email));
    }
}
