<?php 
    require_once 'Routing.php';
    require_once 'view.php';
    require_once 'ViewClass.php';

    $routing = new Routing();
    $routing->processURL();

    echo 'Hello world';