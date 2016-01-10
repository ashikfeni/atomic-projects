<?php

namespace App\SingleCheckbox;

use \App\Utility\Utility;

class SingleCheckbox{
    
    public $id = "";
    public $name = "";
    public $agree = "";
    
    public function __construct($data = false){
        if(is_array($data) && array_key_exists("id", $data) && !empty($data['id'])){
            $this->id = $data['id'];
        }
        $this->name = trim($data['name']);
        $this->agree = trim($data['agree']);
    }
    
    public function index(){
        
        $agrees = array();
        
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "SELECT * FROM `single_check_box`";
        $result = mysql_query($query);
        
        while($row = mysql_fetch_object($result)){
            $agrees[] = $row;
        }
        return $agrees;
    }
    
    
    public function store(){
       
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "INSERT INTO `atomicproject`.`single_check_box` (`name`,`agree`) VALUES ( '".$this->name."','".$this->agree."')";
        $result = mysql_query($query);
        
        if($result){
            Utility::message("<div class=\"message_success\">Single Checkbox has Added successfully.</div>");
        }else{
            Utility::message("<div class=\"message_error\">There is an error while Added agree. Please try again later.</div>");
        }
        
        Utility::redirect('index.php');
    }

    public function show($id = false){
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        $query = "SELECT * FROM `single_check_box` WHERE id=".$id;
        $result = mysql_query($query);
        $row = mysql_fetch_object($result);
        return $row;

    }

    public function update(){
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "UPDATE `atomicproject`.`single_check_box` SET `name` = '".$this->name."', `agree` = '".$this->agree."' WHERE `single_check_box`.`id` = ".$this->id;
        
        $result = mysql_query($query);
               
        if($result){
            Utility::message("<div class=\"message_success\">Single Checkbox is edited successfully.</div>");
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

        $query = "DELETE FROM `atomicproject`.`single_check_box` WHERE `single_check_box`.`id` = ".$id;
        $result = mysql_query($query);
               
        if($result){
            Utility::message("<div class=\"message_success\">SingleCheckbox is deleted successfully.</div>");
        }else{
            Utility::message("<div class=\"message_error\">Cannot delete.</div>");
        }
        
        Utility::redirect('index.php');
    }

}
