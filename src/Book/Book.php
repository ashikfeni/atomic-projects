<?php

namespace App\Book;

use \App\Utility\Utility;

class Book{
    public $id = "";
    public $title = "";
    public $author = "";
    //public $created = "";
    ///public $modified = "";
    // public $created_by = "";
    // public $modified_by = "";
    // public $deleted_at = ""; //soft delete
    
    public function __construct($data = false){
        if(is_array($data) && array_key_exists("id", $data) && !empty($data['id'])){
            $this->id = $data['id'];
        }
        $this->title = $data['book_title'];
        $this->author = $data['author'];
    }
    
    public function index(){
        
        $books = array();
        
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "SELECT * FROM `books`";
        $result = mysql_query($query);
        
        while($row = mysql_fetch_object($result)){
            $books[] = $row;
        }
        return $books;
    }
    
    
    public function store(){
       
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "INSERT INTO `atomicproject`.`books` ( `title`,`author`) VALUES ( '".$this->title."','".$this->author."')";
        
        $result = mysql_query($query);
        
        if($result){
            Utility::message("<div class=\"message_success\">Book title is added successfully.</div>");
        }else{
            Utility::message("<div class=\"message_error\">There is an error while saving data. Please try again later.</div>");
        }
        
        Utility::redirect('index.php');
    }

    public function show($id = false){
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        $query = "SELECT * FROM `books` WHERE id=".$id;
        $result = mysql_query($query);
        $row = mysql_fetch_object($result);
        return $row;

    }

    public function update(){
        $conn = mysql_connect("localhost","root","") or die("Cannot connect database.");
        $lnk = mysql_select_db("atomicproject") or die("Cannot select database.");
        
        $query = "UPDATE `atomicproject`.`books` SET `title` = '".$this->title."', `author` = '".$this->author."' WHERE `books`.`id` = ".$this->id;

        $result = mysql_query($query);
               
        if($result){
            Utility::message("<div class=\"message_success\">Book title is edited successfully.</div>");
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

        $query = "DELETE FROM `atomicproject`.`books` WHERE `books`.`id` = ".$id;
        $result = mysql_query($query);
               
        if($result){
            Utility::message("<div class=\"message_success\">Book title is deleted successfully.</div>");
        }else{
            Utility::message("<div class=\"message_error\">Cannot delete.</div>");
        }
        
        Utility::redirect('index.php');
    }


}
