<?php
    require_once __DIR__ . '/Product.php';

    class Toy extends Product {
        public $toyBrand;
        public $toyName;
        public $toyType;

        public function __construct($id, $price, $category, $description, $toyBrand, $toyName, $toyType) {
            parent::__construct($id, $price, $category, $description);
            $this->toyBrand = $toyBrand;
            $this->toyName = $toyName;
            $this->toyType = $toyType;
        }
        
        public function getToyBrand() {
            return $this->toyBrand;
        }

        public function getToyName() {
            return $this->toyName;
        }

        public function getToyType() {
            return $this->toyType;
        }
    }
?>