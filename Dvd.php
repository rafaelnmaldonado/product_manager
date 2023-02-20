<?php
    include_once("Product.php");

    class Dvd extends Product {
        private $size;

        public function getSize() {
            return $this->size;
        }

        public function setSize($size) {
            $this->size = $size;
        }

        public function __construct($sku, $name, $price, $type, $size) {
            parent::__construct($sku, $name, $price, $type);
            $this->setSize($size);
        }

        public function getTypeAttribute() {return ($this->size.' MB');}
    }
?>