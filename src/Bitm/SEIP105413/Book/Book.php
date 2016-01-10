<?php
    namespace App\Bitm\SEIP105413\Book;
    
    class Book{
        //public $id = "";
        public $title = "";
        //public $created = "";
        ///public $modified = "";
        // public $created_by = "";
        // public $modified_by = "";
        // public $deleted_at = ""; //soft delete
        public $result = "";

        public function __construct($tittle=""){
            $this->title = $tittle;
        }
        
        public function index(){
            return "I am listing data";
        }
        
         public function create(){
             return "I'm storing data for ".$this->title;
        }
        
        public function store(Book $book){
            $this->result = "I am storing data for ".$book->title."<br>";
            if($this->result){
                return "Book title is added successfully.";
            }else{
                return "There is an error while saving data. Please try again later.";
            }
        }

            
         public function edit(){
             return "I am editing form";
        }

         public function update(){
             return "I am updating data";
        }

        public function delete(){
             return "I delete data";
        }
        

    }
