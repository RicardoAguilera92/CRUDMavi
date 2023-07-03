<?php

    $server = "localhost";
    $database = "mavi_occidente";
    $username = "riagma5";
    $password = "Electronica556";

    $connection = new PDO("mysql:host=$server; dbname=$database, $username, $password");

    $setnames = $connection->prepare("SET NAMES 'utf8'");
    $setnames->execute();