<?php

// Database connection:

$host = '127.0.0.1';
$port = '3306';
$db = '';
$user = '';
$pw = '';
$charset = 'utf8';

/* This sets up the $pdo variable for use for writing and retrieving data from the database */
$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pw, $opt);

 ?>
