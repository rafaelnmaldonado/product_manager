<?php
    include_once("Product.php");

    class Book extends Product {
        private $weight;

        public function getWeight() {
            return $this->weight;
        }

        public function setWeight($weight) {
            $this->weight = $weight;
        }

        public function __construct($sku, $name, $price, $type, $weight) {
            parent::__construct($sku, $name, $price, $type);
            $this->setWeight($weight);
        }

        public function getTypeAttribute() {return ($this->weight.' KG');}
    }
?>