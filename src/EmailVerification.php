<?php

namespace ShoplicKr\Continy\Modules;

use Exception;
use ShoplicKr\Continy\Module;

interface EmailVerification extends Module
{
    const DEFAULT_TIMEOUT = 1_800;

    /**
     * 모든 이메일 인증 코드를 폐기한다
     *
     * @return void
     */
    public function discardAllAuthCodes(): void;

    /**
     * 특정 이메일의 인증 코드를 폐기한다.
     *
     * @param string $email 대상 이메일 주소
     *
     * @return void
     */
    public function discardAuthCode(string $email): void;

    /**
     * 특정 이메일의 인증 코드를 리턴한다
     *
     * @param int $length
     *
     * @return string 유효하지 않은 인증 코드에는 빈 문자열이 리턴
     *                e.g. 유효 시간을 넘기거나, 발급 이력이 없는 이메일 주소 등.
     */
    public function generateAuthcode(int $length = 8): string;

    /**
     * 이메일을 위한 인증 코드르 조회한다.
     *
     * @param string $email
     *
     * @return string
     * @uses setAuthCode
     */
    public function getAuthCode(string $email): string;

    /**
     * 해당 이메일로 기본 이메일 콘텐츠를 생성한다.
     *
     * @param string $email
     *
     * @return array{
     *     subject: string,
     *     body: string,
     * }
     */
    public function getEmailTemplate(string $email): array;

    public function getTimeout(): int;

    /**
     * 이메일로 인증 코드 안내를 보낸다
     *
     * WordPress 의 기본 wp_mail 함수를 사용한다.
     *
     * @param string $email    대상 이메일 주소
     * @param array{
     *     subject: string,
     *     body: string,
     * }             $template 읽어들일 이메일 HTML, 없다면 디폴트 이메일 내용을 사용한다.
     *
     * @return void
     * @throws Exception 이메일 전송 과정에서 발생하는 예외
     */
    public function sendEmail(string $email, array $template = []): void;

    /**
     * 이메일을 위한 인증 코드를 생성한다.
     *
     * 중복으로 생성하는 경우 항상 나중에 생성된 코드와 유효 시간이 적용된다.
     *
     * @param string $email   대상 이메일 주소
     * @param int    $timeout 인증 코드가 유효한 시간 - 기본 30분, 1800초
     *
     * @return string
     */
    public function setAuthCode(string $email, int $timeout = 1_800): string;

    /**
     * 해당 이메일로 발급된 인증 코드를 검증한다
     *
     * @param string $email 대상 이메일 주소
     * @param string $code  검증할 코드
     *
     * @return bool
     */
    public function verifyAuthCode(string $email, string $code): bool;
}
