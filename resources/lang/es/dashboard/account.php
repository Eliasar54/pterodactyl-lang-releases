<?php

return [
    'email' => [
        'title' => 'Actualiza tu correo electrónico',
        'updated' => 'Tu dirección de correo electrónico ha sido actualizada.',
    ],
    'password' => [
        'title' => 'Cambia tu contraseña',
        'requirements' => 'Tu nueva contraseña debe tener al menos 8 caracteres de longitud.',
        'updated' => 'Tu contraseña ha sido actualizada.',
    ],
    'two_factor' => [
        'button' => 'Configurar la autenticación de dos factores',
        'disabled' => 'La autenticación de dos factores ha sido desactivada en tu cuenta. Ya no se te pedirá proporcionar un token al iniciar sesión.',
        'enabled' => '¡La autenticación de dos factores ha sido activada en tu cuenta! A partir de ahora, cuando inicies sesión, se te pedirá que ingreses el código generado por tu dispositivo.',
        'invalid' => 'El token proporcionado no es válido.',
        'setup' => [
            'title' => 'Configurar autenticación de dos factores',
            'help' => '¿No puedes escanear el código? Ingresa el código a continuación en tu aplicación:',
            'field' => 'Ingresa el token',
        ],
        'disable' => [
            'title' => 'Desactivar la autenticación de dos factores',
            'field' => 'Ingresa el token',
        ],
    ],
];