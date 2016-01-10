<?php

namespace App\ProfilePicture;

use \App\Utility\Utility;

class ProfilePicture{
    
    public $id = "";
    public $name = "";
    public $profile_pic = "";
    
    public function __construct($data = false,$file = false ){
        if(is_array($data) && array_key_exists("id", $data) && !empty($data['id'])){
            $this->id = $data['id'];
        }
        $this->name = $data['name'];
        $this->profile_pic = $file['profile_pic'];
    }
    
    public function index(){
        
        $profiles = array();
        
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "SELECT * FROM `profile_pic`";
        $result = mysql_query($query);
        
        while($row = mysql_fetch_object($result)){
            $profiles[] = $row;
        }
        return $profiles;
    }
    
    
    public function store(){
       
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        if(!file_exists("upload")){
                mkdir("upload");
         }
            $ext = strtolower(pathinfo($this->profile_pic["name"],PATHINFO_EXTENSION));
            $file_name = basename(strtolower(substr($this->profile_pic["name"], 0,15)));
            $path = trim($file_name.".".$ext);
            if(!file_exists("upload/".$path)){
              move_uploaded_file($this->profile_pic["tmp_name"], "upload/".$path);
            }
            
            $query = "INSERT INTO `atomicproject`.`profile_pic` ( `name`,`profile_pic`) VALUES ( '".$this->name."','".$path ."')";
        
            $result = mysql_query($query);
        
        if($result){
            Utility::message("<div class=\"message_success\">Profile picture has added successfully.</div>");
        }else{
            Utility::message("<div class=\"message_error\">There is an error while added profile picture. Please try again later.</div>");
        }
        
        Utility::redirect('index.php');
    }

    public function show($id = false){
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        $query = "SELECT * FROM `profile_pic` WHERE id=".$id;
        $result = mysql_query($query);
        $row = mysql_fetch_object($result);
        return $row;

    }

    public function update(){
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        if(!file_exists("upload")){
                mkdir("upload");
         }
            $ext = strtolower(pathinfo($this->profile_pic["name"],PATHINFO_EXTENSION));
            $file_name = basename(strtolower(substr($this->profile_pic["name"], 0,15)));
            $path = trim($file_name.".".$ext);
            if(!file_exists("upload/".$path)){
              move_uploaded_file($this->profile_pic["tmp_name"], "upload/".$path);
            }
            $query = "UPDATE `atomicproject`.`profile_pic` SET "; 
            $query .="name='{$this->name}'";
            if($path && !empty($this->profile_pic["name"])){
              $query .=", profile_pic='{$path}' ";
            }
            $query .= "WHERE `profile_pic`.`id` = ".$this->id;

        $result = mysql_query($query);
               
        if($result){
            Utility::message("<div class=\"message_success\">Profile Picture is edited successfully.</div>");
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

        $query = "DELETE FROM `atomicproject`.`profile_pic` WHERE `profile_pic`.`id` = ".$id;
        $result = mysql_query($query);
               
        if($result){
            Utility::message("<div class=\"message_success\">Profile Picture is deleted successfully.</div>");
        }else{
            Utility::message("<div class=\"message_error\">Cannot delete.</div>");
        }
        
        Utility::redirect('index.php');
    }

}
