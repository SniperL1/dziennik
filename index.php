<?php

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;

require 'vendor/autoload.php';

    session_start();

    $logger = new Logger('app_logger');

    $file_handler = new streamHandler(__DIR__.'/logs/app.log',Level::Info);

    $logger->pushHandler($file_handler);

    $logger->log(level::Info, "czy to działą?");


    //logowanie /security








    include "src/templates/header.php";

    include "src/templates/footer.php";

