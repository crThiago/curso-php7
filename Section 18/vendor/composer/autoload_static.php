<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39f477ef0c072927dba17e5c2545bffd
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NFePHP\\Mail\\' => 12,
        ),
        'H' => 
        array (
            'Html2Text\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NFePHP\\Mail\\' => 
        array (
            0 => __DIR__ . '/..' . '/nfephp-org/sped-mail/src',
        ),
        'Html2Text\\' => 
        array (
            0 => __DIR__ . '/..' . '/soundasleep/html2text/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit39f477ef0c072927dba17e5c2545bffd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39f477ef0c072927dba17e5c2545bffd::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit39f477ef0c072927dba17e5c2545bffd::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit39f477ef0c072927dba17e5c2545bffd::$classMap;

        }, null, ClassLoader::class);
    }
}
