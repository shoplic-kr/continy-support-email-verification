<?php

namespace ShoplicKr\Continy\Tests;

use WP_UnitTestCase;
use ShoplicKr\Continy\Supports\TransientEmailVerification;

class TestTransientEmailVerification extends WP_UnitTestCase
{
    private TransientEmailVerification $module;

    public function setUp(): void
    {
        $this->module = new TransientEmailVerification();
    }

    public function testiscardAllAuthCodes()
    {
        $emails = [
            'foo@email.com',
            'bar@email.com',
        ];

        foreach ($emails as $email) {
            $this->module->setAuthCode($email);
        }

        // 실재로 transient 값이 설정되었는지 확인한다.
        foreach ($emails as $email) {
            $authCode = $this->module->getAuthCode($email);
            $this->assertNotEmpty(
                $authCode,
                sprintf('이메일 %s 인증코드가 발견되지 않음!', $email),
            );
        }

        $this->module->discardAllAuthCodes();

        // 삭제 후 저말로 값이 검출되지 않는지 확인한다.
        foreach ($emails as $email) {
            $authCode = $this->module->getAuthCode($email);
            $this->assertEmpty(
                $authCode,
                sprintf('이메일 %s 인증코드가 남아 있음!', $email),
            );
        }
    }
}
