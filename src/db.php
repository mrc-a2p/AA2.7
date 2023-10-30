<?php
require 'config.php';
if (!function_exists('getConnection')) {
    function getConnection(string $dsn,string $dbuser,string $dbpass){
        try{
                $gdb = new PDO($dsn, $dbuser, $dbpass);
                $gdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $gdb->setAttribute( PDO::ATTR_EMULATE_PREPARES, false);
                $gdb->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);      
                return $gdb;
        } catch (PDOException $e){
            $_SESSION['error']=$e->getMessage();
            return null;
        }  
    }
}
?>