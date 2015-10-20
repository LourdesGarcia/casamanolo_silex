<?php

/* Configuration */

use Symfony\Component\HttpFoundation\Session\Session;

if (file_exists(__DIR__.'/local.php')) {
    include __DIR__.'/local.php';
}

$config = new Pimple();


$config['env'] = 'prod';
$config['db_options'] = array(
    'driver'    => 'pdo_mysql',
    'host'      => DB_HOST,
    'dbname'    => DB_NAME,
    'user'      => DB_USER,
    'password'  => DB_PASSWORD,
    'charset'   => 'utf8',
);
//$config['app_id'] = APP_ID;
//$config['app_secret'] = APP_SECRET;
//$config['ga_tracking'] = '';

