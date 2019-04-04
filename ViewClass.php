<?php

class ViewClass
{
    public function render($data)
    {
        require_once 'vendor/autoload.php';

        // $loader = new \Twig\Loader\ArrayLoader([
        //     'index' => '{{ name }}',
        // ]);
        // $twig = new \Twig\Environment($loader);
        // echo $twig->render('index', ['name' => $data]);

        $loader = new \Twig\Loader\FilesystemLoader('/');
        $twig = new \Twig\Environment($loader, [
                'cache' => '/compilation_cache',
        ]);
    }
}

