<?php
namespace App\Bitm\SEIP105413\Utility;
class Utility {
    static public function d($expression){
        echo "<pre>";
        var_dump($expression);
        echo "</pre>";
    }
    
     static public function dd($expression){
         self::d($expression);
         die();
    }
     static public function redirect($url = ""){
         header("Location:".$url);
         exit;
    }
}
