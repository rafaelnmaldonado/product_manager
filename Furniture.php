<?php
    include_once("Product.php");

    class Furniture extends Product {
        private $height;
        private $width;
        private $length;

        public function getHeight() {
            return $this->height;
        }

        public function setHeight($height) {
            $this->height = $height;
        }

        public function getWidth() {
            return $this->width;
        }

        public function setWidth($width) {
            $this->width = $width;
        }

        public function getLength() {
            return $this->length;
        }

        public function setLength($length) {
            $this->length = $length;
        }

        public function __construct($sku, $name, $price, $type, $height, $width, $length) {
            parent::__construct($sku, $name, $price, $type);
            $this->setHeight($height);
            $this->setWidth($width);
            $this->setLength($length);
        }
    }
?>