<?php

namespace App\Utility;

class Utility{
    
    
    static public function d($param=false){
        echo "<pre>";
        var_dump($param);
        echo "</pre>";
    }
    
    static public function dd($param=false){
        self::d($param);
        die();
    }
    
    static public function redirect($url=""){
        header("Location:".$url);
    }

    static public function message($message = null){
        if(is_null($message)){
            return self::getMessage();
        }else{
            return self::setMessage($message);
        }

    }

    static private function getMessage(){
        $message = $_SESSION["message"];
        $_SESSION["message"] = "";
        return $message;
    }

    static private function setMessage($message){
         $_SESSION["message"] = $message;
    }


}