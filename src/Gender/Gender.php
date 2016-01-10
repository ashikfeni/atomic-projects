<?php

namespace App\Gender;

use \App\Utility\Utility;

class Gender{
    
    public $id = "";
    public $name = "";
    public $gender = "";
    
    public function __construct($data = false){
        if(is_array($data) && array_key_exists("id", $data) && !empty($data['id'])){
            $this->id = $data['id'];
        }
        $this->name = trim($data['name']);
        $this->gender = trim($data['gender']);
    }
    
    public function index(){
        
        $genders = array();
        
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "SELECT * FROM `gender`";
        $result = mysql_query($query);
        
        while($row = mysql_fetch_object($result)){
            $genders[] = $row;
        }
        return $genders;
    }
    
    
    public function store(){
       
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "INSERT INTO `atomicproject`.`gender` (`name`,`gender`) VALUES ( '".$this->name."','".$this->gender."')";
        $result = mysql_query($query);
        
        if($result){
            Utility::message("<div class=\"message_success\">Gender has Added successfully.</div>");
        }else{
            Utility::message("<div class=\"message_error\">There is an error while Added gender. Please try again later.</div>");
        }
        
        Utility::redirect('index.php');
    }

    public function show($id = false){
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        $query = "SELECT * FROM `gender` WHERE id=".$id;
        $result = mysql_query($query);
        $row = mysql_fetch_object($result);
        return $row;

    }

    public function update(){
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "UPDATE `atomicproject`.`gender` SET `name` = '".$this->name."', `gender` = '".$this->gender."' WHERE `gender`.`id` = ".$this->id;

        $result = mysql_query($query);
               
        if($result){
            Utility::message("<div class=\"message_success\">Gender is edited successfully.</div>");
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

        $query = "DELETE FROM `atomicproject`.`gender` WHERE `gender`.`id` = ".$id;
        $result = mysql_query($query);
               
        if($result){
            Utility::message("<div class=\"message_success\">Gender is deleted successfully.</div>");
        }else{
            Utility::message("<div class=\"message_error\">Cannot delete.</div>");
        }
        
        Utility::redirect('index.php');
    }

}
