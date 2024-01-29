<?php
    require_once __DIR__ . '/Product.php';

    class Food extends Product {
        public $foodBrand;
        public $foodName;
        public $foodType;

        public function __construct($id, $price, $category, $description, $foodBrand, $foodName, $foodType) {
            parent::__construct($id, $price, $category, $description);
            $this->foodBrand = $foodBrand;
            $this->foodName = $foodName;
            $this->foodType = $foodType;
        }
        
        public function getFoodBrand() {
            return $this->foodBrand;
        }

        public function getFoodName() {
            return $this->foodName;
        }

        public function getFoodType() {
            return $this->foodType;
        }
    }
?>