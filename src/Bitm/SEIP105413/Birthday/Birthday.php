<?php
    namespace App\Bitm\SEIP105413\Birthday;
    
    class Birthday{
        //public $id = "";
        public $name= "";
        public  $birthday = "";
        //public $created = "";
        ///public $modified = "";
        // public $created_by = "";
        // public $modified_by = "";
        // public $deleted_at = ""; //soft delete

        public function __construct($name="",$birthday=""){
            $this->name = $name;
            $this->birthday = $birthday;
        }
        
        public function index(){
            return "I am listing data";
        }
        
         public function create(){
             return $this->name."\'s birthday is ".$this->birthday;
        }

         public function store(){
             return " I am storing data";
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
