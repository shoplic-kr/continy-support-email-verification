<?php
/**
 * @formatter:off
 *
 * @link https://github.com/ColorlibHQ/email-templates/tree/master/10
 *
 * 이메일 목업
 *
 * [주의]
 * 포함된 이메일 이미지는 상대 경로이니 반드시 이메일 서버에서 접근 가능한 형태로 변경하세요.
 */
 ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title>이메일 템플릿</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:300,400,700" rel="stylesheet">
    <!-- CSS Reset : BEGIN -->
    <style>
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #f1f1f1;
        }
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        img {
            -ms-interpolation-mode: bicubic;
        }
        a {
            text-decoration: none;
        }
        *[x-apple-data-detectors], /* iOS */
        .unstyle-auto-detected-links *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }
        .im {
            color: inherit !important;
        }
        img.g-img + div {
            display: none !important;
        }
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u ~ div .email-container {
                min-width: 320px !important;
            }
        }
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u ~ div .email-container {
                min-width: 375px !important;
            }
        }
        @media only screen and (min-device-width: 414px) {
            u ~ div .email-container {
                min-width: 414px !important;
            }
        }
    </style>
    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>
        .primary {
            background: #30e3ca;
        }

        .bg_white {
            background: #ffffff;
        }

        .bg_light {
            background: #fafafa;
        }

        .bg_black {
            background: #000000;
        }

        .bg_dark {
            background: rgba(0, 0, 0, .8);
        }

        .email-section {
            padding: 2.5em;
        }

        /*BUTTON*/
        .btn {
            padding: 10px 15px;
            display: inline-block;
        }

        .btn.btn-primary {
            border-radius: 5px;
            background: #30e3ca;
            color: #ffffff;
        }

        .btn.btn-white {
            border-radius: 5px;
            background: #ffffff;
            color: #000000;
        }

        .btn.btn-white-outline {
            border-radius: 5px;
            background: transparent;
            border: 1px solid #fff;
            color: #fff;
        }

        .btn.btn-black-outline {
            border-radius: 0;
            background: transparent;
            border: 2px solid #000;
            color: #000;
            font-weight: 700;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Noto Sans KR', sans-serif;
            color: #000000;
            margin-top: 0;
            font-weight: 400;
        }

        body {
            font-family: 'Noto Sans KR', sans-serif;
            font-weight: 400;
            font-size: 15px;
            line-height: 1.8;
            color: rgba(0, 0, 0, .4);
        }

        a {
            color: #30e3ca;
        }

        table {
        }

        /*LOGO*/
        .logo h1 {
            margin: 0;
        }

        .logo h1 a {
            color: #30e3ca;
            font-size: 24px;
            font-weight: 700;
            font-family: 'Lato', sans-serif;
        }

        /*HERO*/
        .hero {
            position: relative;
            z-index: 0;
        }

        .hero .text {
            color: rgba(0, 0, 0, .3);
        }

        .hero .text h2 {
            color: #000;
            font-size: 40px;
            margin-bottom: 0;
            font-weight: 400;
            line-height: 1.4;
        }

        .hero .text h3 {
            font-size: 24px;
            font-weight: 300;
        }

        .hero .text h2 span {
            font-weight: 600;
            color: #30e3ca;
        }

        /*HEADING SECTION*/
        .heading-section {
        }

        .heading-section h2 {
            color: #000000;
            font-size: 28px;
            margin-top: 0;
            line-height: 1.4;
            font-weight: 400;
        }

        .heading-section .subheading {
            margin-bottom: 20px !important;
            display: inline-block;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(0, 0, 0, .4);
            position: relative;
        }

        .heading-section .subheading::after {
            position: absolute;
            left: 0;
            right: 0;
            bottom: -10px;
            content: '';
            width: 100%;
            height: 2px;
            background: #30e3ca;
            margin: 0 auto;
        }

        .heading-section-white {
            color: rgba(255, 255, 255, .8);
        }

        .heading-section-white h2 {
            font-family: "Noto Sans KR", sans-serif;
            line-height: 1;
            padding-bottom: 0;
        }

        .heading-section-white h2 {
            color: #ffffff;
        }

        .heading-section-white .subheading {
            margin-bottom: 0;
            display: inline-block;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(255, 255, 255, .4);
        }

        ul.social {
            padding: 0;
        }

        ul.social li {
            display: inline-block;
            margin-right: 10px;
        }

        /*FOOTER*/

        .footer {
            border-top: 1px solid rgba(0, 0, 0, .05);
            color: rgba(0, 0, 0, .5);
        }

        .footer .heading {
            color: #000;
            font-size: 20px;
        }

        .footer ul {
            margin: 0;
            padding: 0;
        }

        .footer ul li {
            list-style: none;
            margin-bottom: 10px;
        }

        .footer ul li a {
            color: rgba(0, 0, 0, 1);
        }

        @media screen and (max-width: 500px) {

        }
    </style>
</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
<center style="width: 100%; background-color: #f1f1f1;">
    <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
        &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>
    <div style="max-width: 600px; margin: 0 auto;" class="email-container">

        <!-- BEGIN BODY -->
        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
            <tr>
                <td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td class="logo" style="text-align: center;">
                                <h1><a href="#">e-Verify</a></h1>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr><!-- end tr -->
            <tr>
                <td valign="middle" class="hero bg_white" style="padding: 3em 0 2em 0;">
                    <img src="./email.png" alt="" style="width: 300px; max-width: 600px; height: auto; margin: auto; display: block;">
                </td>
            </tr><!-- end tr -->
            <tr>
                <td valign="middle" class="hero bg_white" style="padding: 2em 0 4em 0;">
                    <table>
                        <tr>
                            <td>
                                <div class="text" style="padding: 0 2.5em; text-align: center;">
                                    <h2 style="margin-bottom: 8px">회원 가입 인증 코드</h2>
                                    <h3 style="font-size: 24px; margin-bottom: 0;">샘플 사이트에서 회원 가입을 요청하혔습니다.</h3>
                                    <h4 style="font-size: 18px; font-weight: 300; margin: -4px 0 22px 0;">아래 인증 코드를 가입 폼에 입력하시기 바랍니다.</h4>
                                    <p class="auth-code" style="border: 2px solid rgba(0, 0, 0, .2); border-radius: 2px; background-color: rgba(0, 0, 0, .1); color: rgba(0, 0, 0, .9); font-size: 3rem; letter-spacing: 0.5rem; line-height: 2.5; padding: 0; margin: 0;">
                                        123456
                                    </p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr><!-- end tr -->
            <!-- 1 Column Text + Button : END -->
        </table>
        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
            <tr>
                <td valign="middle" class="bg_light footer email-section">
                    <table>
                        <tr>
                            <td valign="top" width="33.333%" style="padding-top: 20px;">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="text-align: left; padding-right: 10px;">
                                            <h3 class="heading">소개</h3>
                                            <p>사이트 소개입니다</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td valign="top" width="33.333%" style="padding-top: 20px;">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="text-align: left; padding-left: 5px; padding-right: 5px;">
                                            <h3 class="heading">Contact Info</h3>
                                            <ul>
                                                <li><span class="text">주소입니다.</span></li>
                                                <li><span class="text">+82 02 1234 5678</span></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td valign="top" width="33.333%" style="padding-top: 20px;">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="text-align: left; padding-left: 10px;">
                                            <h3 class="heading">유용한 링크</h3>
                                            <ul>
                                                <li><a href="#">Home</a></li>
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Services</a></li>
                                                <li><a href="#">Work</a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr><!-- end: tr -->
        </table>

    </div>
</center>
</body>
</html>
<?php // @formatter:on ?>
