<?php
// using POD method connection;
$host = 'localhost';
$user ='root';
$password = '';
$dbname = 'sofalite';

// creating an instance of class;
$pdo = new PDO("mysql:host=$host; dbname=$dbname", $user, $password);
?>