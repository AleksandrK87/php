<?php

// Database credentials (replace with your actual details)
$host = 'localhost';
$dbname = 'classicmodels';
$username = 'root';
$password = '';

// DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$dbname";

try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $username, $password);

    // Set error mode to exceptions for better error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected to database successfully!<br>";
   } catch (PDOException $i) {
      die("Dont connected to database");
  }