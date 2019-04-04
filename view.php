<?php
    require_once 'vendor/autoload.php';

    $loader = new \Twig\Loader\ArrayLoader([
        'index' => '{{ name }}',
    ]);
?>