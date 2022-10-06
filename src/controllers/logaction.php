<?php
    require 'src/db.php';
    //Agafar $_REQUEST['email'], i ['password']
    //Comprova si existeixen a la base de dades
    //Tenim dos possib.
    //1. Existeix ==> dashboard i obrim sessió usuari
    //2. No existeix ==> o retornem a home o ens quedem al login
    
    $db=connectMysql($dsn,$dbuser,$dbpass);
    
    if(!empty($_POST['email'])&&!empty($_POST['password'])){
        if(isset($_POST['email'])&& isset($_POST['password'])){
            $email=$_REQUEST['email'];
            $password=$_REQUEST['password'];
            
            if(auth($db,$email,$password)){
                //true
                
                header('Location:?url=dashboard');
            }else{
                //false
                header('Location:?url=login');
            }
        }
    }