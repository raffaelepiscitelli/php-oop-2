<?php
    class Product {
        public $id;
        public $price;
        public $category;
        public $description;

        public function __construct($id, $price, $category, $description) {
            $this->id = $id;
            $this->price = $price;
            $this->category = $category;
            $this->description = $description;
        }
        
        public function getId() {
            return $this->id;
        }

        public function getPrice() {
            return $this->price;
        }

        public function getCategory() {
            return $this->category;
        }

        public function getDescription() {
            return $this->description;
        }
    }
?>