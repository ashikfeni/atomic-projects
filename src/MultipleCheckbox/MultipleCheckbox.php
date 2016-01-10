<?php

namespace App\MultipleCheckbox;

use \App\Utility\Utility;

class MultipleCheckbox{
    
    public $id = "";
    public $name = "";
    public $hobby = array();
    
    public function __construct($data = false){
        if(is_array($data) && array_key_exists("id", $data) && !empty($data['id'])){
            $this->id = $data['id'];
        }
        $this->name = trim($data['name']);
        $this->hobby = serialize($data['hobby']);
    }
    
    public function index(){
        
        $hobbys = array();
        
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "SELECT * FROM `hobby`";
        $result = mysql_query($query);
        
        while($row = mysql_fetch_object($result)){
            $hobbys[] = $row;
        }
        return $hobbys;
    }
    
    
    public function store(){
       
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "INSERT INTO `atomicproject`.`hobby` (`name`,`hobby`) VALUES ( '".$this->name."','".$this->hobby."')";
        $result = mysql_query($query);
        
        if($result){
            Utility::message("<div class=\"message_success\">Hobby has Added successfully.</div>");
        }else{
            Utility::message("<div class=\"message_error\">There is an error while Added hobby. Please try again later.</div>");
        }
        
        Utility::redirect('index.php');
    }

    public function show($id = false){
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        $query = "SELECT * FROM `hobby` WHERE id=".$id;
        $result = mysql_query($query);
        $row = mysql_fetch_object($result);
        return $row;

    }

    public function update(){
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "UPDATE `atomicproject`.`hobby` SET `name` = '".$this->name."', `hobby` = '".$this->hobby."' WHERE `hobby`.`id` = ".$this->id;
        
        $result = mysql_query($query);
               
        if($result){
            Utility::message("<div class=\"message_success\">Hobby is edited successfully.</div>");
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

        $query = "DELETE FROM `atomicproject`.`hobby` WHERE `hobby`.`id` = ".$id;
        $result = mysql_query($query);
               
        if($result){
            Utility::message("<div class=\"message_success\">Hobby is deleted successfully.</div>");
        }else{
            Utility::message("<div class=\"message_error\">Cannot delete.</div>");
        }
        
        Utility::redirect('index.php');
    }

}
