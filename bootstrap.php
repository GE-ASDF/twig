<?php

use app\classes\Bind;

require "vendor/autoload.php";
require "app/functions/helpers.php";
$config = (object) require 'config.php';
Bind::set('config', $config);