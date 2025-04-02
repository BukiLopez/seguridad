<?php
// callback.php - Maneja la respuesta de Auth0
require '../vendor/autoload.php';
$config = require '../config/config.php';
use Auth0\SDK\Auth0;

$auth0 = new Auth0([
    'domain'        => $config['auth0']['domain'],
    'clientId'      => $config['auth0']['client_id'],
    'clientSecret'  => $config['auth0']['client_secret'],
    'redirectUri'   => $config['auth0']['redirect_uri'],
]);

$userInfo = $auth0->getUser();
if ($userInfo) {
    session_start();
    $_SESSION['user'] = $userInfo;
    header('Location: index.php');
    exit;
} else {
    die("Error en la autenticación.");
}
?>