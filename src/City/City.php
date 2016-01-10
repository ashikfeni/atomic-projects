<?php

namespace App\City;

use \App\Utility\Utility;

class City{
    
    public $id = "";
    public $user = "";
    public $city_name = "";
    
    public function __construct($data = false){
        if(is_array($data) && array_key_exists("id", $data) && !empty($data['id'])){
            $this->id = $data['id'];
        }
        $this->user = $data['user'];
        $this->city_name = $data['city_name'];
    }
    
    public function index(){
        
        $city_names = array();
        
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "SELECT * FROM `city`";
        $result = mysql_query($query);
        
        while($row = mysql_fetch_object($result)){
            $city_names[] = $row;
        }
        return $city_names;
    }
    
    
    public function store(){
       
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "INSERT INTO `atomicproject`.`city` ( `user`,`city_name`) VALUES ( '".$this->user."','".$this->city_name."')";
        
        $result = mysql_query($query);
        if($result){
            Utility::message("City has added successfully.");
        }else{
            Utility::message("There is an error while added city name. Please try again later.");
        }
        
        Utility::redirect('index.php');
    }

     public function show($id = false){
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        $query = "SELECT * FROM `city` WHERE id=".$id;
        $result = mysql_query($query);
        $row = mysql_fetch_object($result);
        return $row;

    }

    public function update(){
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "UPDATE `atomicproject`.`city` SET `user` = '".$this->user."', `city_name` = '".$this->city_name."' WHERE `city`.`id` = ".$this->id;

        $result = mysql_query($query);
               
        if($result){
            Utility::message("<div class=\"message_success\">City is edited successfully.</div>");
        }else{
            Utility::message("<div class=\"message_error\">There is an error while saving data. Please try again later.</div>");
        }
        
        Utility::redirect('index.php');
    }

    public function delete($id = null){
       
        if(is_null($id)){
            Utility::message("<div class=\"message_error\">No id avaiable. Sorry !</div>");
            Utility::redirect('index.php');
        }
        
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");

        $query = "DELETE FROM `atomicproject`.`city` WHERE `city`.`id` = ".$id;
        $result = mysql_query($query);
               
        if($result){
            Utility::message("<div class=\"message_success\">City is deleted successfully.</div>");
        }else{
            Utility::message("<div class=\"message_error\">Cannot delete.</div>");
        }
        
        Utility::redirect('index.php');
    }

}
