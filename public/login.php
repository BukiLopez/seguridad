<?php
// login.php - Redirige a Auth0
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../vendor/autoload.php';
$config = require '../config/config.php';
use Auth0\SDK\Auth0;

$auth0 = new Auth0([
    'domain'        => $config['auth0']['domain'],
    'clientId'      => $config['auth0']['client_id'],
    'clientSecret'  => $config['auth0']['client_secret'],
    'redirectUri'   => $config['auth0']['redirect_uri'],
]);
$auth0->login();
?>