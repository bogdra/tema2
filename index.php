<?php
define('ROOT', __DIR__);

require_once('core/config.php');
require_once( 'core/autoload.php');

use \App\Client;

$user = new Client(2);
echo $user->email;


//var_dump($test->getArrayCollection());
