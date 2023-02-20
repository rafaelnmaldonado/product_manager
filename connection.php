<?php

    $hostname = 'localhost';
    $database = 'id20167939_juniordevelopertesttask';
    $user = 'id20167939_root';
    $password = 'Bq$LJ$zDd$Dk8D?U';

    $mysqli = new mysqli($hostname, $user, $password, $database);
    if ($mysqli -> connect_errno) {
        echo "Falha ao conectar: ($mysqli -> connect_errno) $mysqli -> connect_error";
    }

    /*CREATE DATABASE product_manager;
    USE product_manager;

    CREATE TABLE `product_manager`.`product` (
    `product_form` ID NOT NULL AUTO INCREMENT,
    `sku` VARCHAR(200) NOT NULL,
    `name` VARCHAR(32) NOT NULL,
    `price` INT NOT NULL,
    `type` VARCHAR(16) NOT NULL,
    `size` FLOAT,
    `weight` FLOAT,
    `height` INT,
    `width` INT,
    `length` INT,
    PRIMARY KEY (`sku`));

    INSERT INTO `usuario` (``,``,``, ``, ``) VALUES (1,'','', '', ' ');*/

?>