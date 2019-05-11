<?php

define('ROOT', __DIR__);

require_once( 'core/autoload.php');

use \App\User;
use \App\Client;

echo (new User(4))->get_user_details();
echo (new Client(2))->get_client_details();
