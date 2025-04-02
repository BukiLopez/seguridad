<?php
// config.php - Configuración de Auth0 y MySQL
return [
    'auth0' => [
        'domain'        => 'dev-obhk67cgczmjzek4.us.auth0.com',
        'client_id'     => 'sy77czgLErNimuJxzlydkMbIR82FGg5x',
        'client_secret' => 'sZv6hcMqGh1prYpQTVhtLwy0Zba0vbGPZFdTgehr5MuXzYnecb',
        'redirect_uri'  => 'http://localhost:8888/callback.php',
    ],
    'db' => [
        'host'     => 'localhost',
        'dbname'   => 'seguridad',
        'user'     => 'root',
        'password' => 'root',
    ]
];
?>