<?php


    function getRoute($routes){
        if(isset($_REQUEST['url'])){
            $url=$_REQUEST['url'];
            if(in_array($url,$routes)){
                return $url;
            }else{
                throw new Exception("Route not found");
            }
                
        }
        return null;
    }
            


?>