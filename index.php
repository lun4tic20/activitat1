<?php

    session_start();

    //configuració entorn
    require 'config.php'; //diferencia con include es q solo lo usa cuando se necesita (el include usa todo)
    require 'src/router.php';
    require 'src/routes.php';
    //enrutament
    $controlador=getRoute($routes);
    
    require 'src/controllers/'.$controlador.'.php';
    //crida al controlador

    /*$ruta = $_GET['url'];
    $url=$_SERVER['REQUEST_URI'];
    $ar_url=parse_url($url);
    var_dump($ar_url);
    if($ar_url['path']=='login'){
        header('Location:login.php');
    }*/