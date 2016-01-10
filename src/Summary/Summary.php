<?php

namespace App\Summary;

use \App\Utility\Utility;

class Summary{
    
    public $id = "";
    public $name = "";
    public $summary = "";
    
    public function __construct($data = false){
        if(is_array($data) && array_key_exists("id", $data) && !empty($data['id'])){
            $this->id = $data['id'];
        }
        $this->name = $data['name'];
        $this->summary = $data['summary'];
    }
    
    public function index(){
        
        $summary = array();
        
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "SELECT * FROM `summary`";
        $result = mysql_query($query);
        
        while($row = mysql_fetch_object($result)){
            $summary[] = $row;
        }
        return $summary;
    }
    
    
    public function store(){
       
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "INSERT INTO `atomicproject`.`summary` ( `name`,`summary`) VALUES ( '".$this->name."','".$this->summary."')";
        
        $result = mysql_query($query);
        
        if($result){
            Utility::message("<div class=\"message_success\">Summary has subscribed successfully.");
        }else{
            Utility::message("<div class=\"message_error\">There is an error while subscribed summary. Please try again later.");
        }
        
        Utility::redirect('index.php');
    }

    public function show($id = false){
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        $query = "SELECT * FROM `summary` WHERE id=".$id;
        $result = mysql_query($query);
        $row = mysql_fetch_object($result);
        return $row;

    }

    public function update(){
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "UPDATE `atomicproject`.`summary` SET `name` = '".$this->name."', `summary` = '".$this->summary."' WHERE `summary`.`id` = ".$this->id;

        $result = mysql_query($query);
               
        if($result){
            Utility::message("<div class=\"message_success\">Summary is edited successfully.</div>");
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

        $query = "DELETE FROM `atomicproject`.`summary` WHERE `summary`.`id` = ".$id;
        $result = mysql_query($query);
               
        if($result){
            Utility::message("<div class=\"message_success\">Summary is deleted successfully.</div>");
        }else{
            Utility::message("<div class=\"message_error\">Cannot delete.</div>");
        }
        
        Utility::redirect('index.php');
    }
}
