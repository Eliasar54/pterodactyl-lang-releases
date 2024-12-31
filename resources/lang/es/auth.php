<?php

return [
    'sign_in' => 'Iniciar sesión',
    'go_to_login' => 'Ir a Iniciar sesión',
    'failed' => 'No se encontró ninguna cuenta que coincida con esas credenciales.',

    'forgot_password' => [
        'label' => '¿Olvidaste tu contraseña?',
        'label_help' => 'Ingresa la dirección de correo electrónico de tu cuenta para recibir instrucciones sobre cómo restablecer tu contraseña.',
        'button' => 'Recuperar cuenta',
    ],

    'reset_password' => [
        'button' => 'Restablecer e Iniciar sesión',
    ],

    'two_factor' => [
        'label' => 'Token de 2 factores',
        'label_help' => 'Esta cuenta requiere una capa adicional de autenticación para continuar. Ingresa el código generado por tu dispositivo para completar este inicio de sesión.',
        'checkpoint_failed' => 'El token de autenticación de dos factores no es válido.',
    ],

    'throttle' => 'Demasiados intentos de inicio de sesión. Intenta nuevamente en :seconds segundos.',
    'password_requirements' => 'La contraseña debe tener al menos 8 caracteres de longitud y ser única para este sitio.',
    '2fa_must_be_enabled' => 'El administrador ha requerido que la autenticación de dos factores esté habilitada para tu cuenta a fin de usar el Panel.',
];