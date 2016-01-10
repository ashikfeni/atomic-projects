<?php
    namespace AtomicProjects\City;
    
    class City{
        public $id;
        public $title;
        public $created;
        public $modified;
        public $created_by;
        public $modified_by;
        public $deleted_at;

        public function __construct($tittle=""){
            $this->title = $tittle;
        }
        
        public function index(){
            return "I am listing data";
        }
        
         public function create(){
             return "I am create form";
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
