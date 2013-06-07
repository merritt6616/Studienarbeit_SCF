<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=Studienarbeit_Kataloge", 'studienarbeit', 'studienarbeit', array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION)
    );
} catch (PDOException $e) {
    die($e);
}
