<?php

    session_start();


    require 'src/router.php';
    require 'src/routes.php';
    require 'config.php';
    require 'src/db.php';

    try{  
        $controller=getRoute($routes);
        if($controller==null){
            $controller="home";
        }
        require 'controllers/'.$controller.'.php';
    }catch(Exception $e){
        $_SESSION['error']=$e->getMessage();
        require 'public/error.php';
    }



