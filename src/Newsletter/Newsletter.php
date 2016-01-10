<?php

namespace App\Email;

use \App\Utility\Utility;

class Email{
    
    public $id = "";
    public $name = "";
    public $email = "";
    
    public function __construct($data = false){
        if(is_array($data) && array_key_exists("id", $data) && !empty($data['id'])){
            $this->id = $data['id'];
        }
        $this->name = $data['name'];
        $this->email = $data['email'];
    }
    
    public function index(){
        
        $emails = array();
        
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "SELECT * FROM `email`";
        $result = mysql_query($query);
        
        while($row = mysql_fetch_object($result)){
            $emails[] = $row;
        }
        return $emails;
    }
    
    
    public function store(){
       
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "INSERT INTO `atomicproject`.`email` ( `name`,`email`) VALUES ( '".$this->name."','".$this->email."')";
        
        $result = mysql_query($query);
        
        if($result){
            Utility::message("<div class=\"message_success\">Email has subscribed successfully.</div>");
        }else{
            Utility::message("<div class=\"message_error\">There is an error while subscribed email. Please try again later.</div>");
        }
        
        Utility::redirect('index.php');
    }

    public function show($id = false){
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        $query = "SELECT * FROM `email` WHERE id=".$id;
        $result = mysql_query($query);
        $row = mysql_fetch_object($result);
        return $row;

    }

    public function update(){
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "UPDATE `atomicproject`.`email` SET `name` = '".$this->name."', `email` = '".$this->email."' WHERE `email`.`id` = ".$this->id;

        $result = mysql_query($query);
               
        if($result){
            Utility::message("<div class=\"message_success\">Email is edited successfully.</div>");
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

        $query = "DELETE FROM `atomicproject`.`email` WHERE `email`.`id` = ".$id;
        $result = mysql_query($query);
               
        if($result){
            Utility::message("<div class=\"message_success\">Email is deleted successfully.</div>");
        }else{
            Utility::message("<div class=\"message_error\">Cannot delete.</div>");
        }
        
        Utility::redirect('index.php');
    }

}
