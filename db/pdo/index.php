<?php
require_once 'connect_db.php';
require_once 'functions.php';
require_once 'product.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<table id="customers">
    <tr>
        <th>Company</th>
        <th>Contact</th>
        <th>Country</th>
    </tr>
    <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
    </tr>
</table>


</body>
</html>






<!-- <?php

// Database configuration
$host = 'localhost';
$dbname = 'classicmodels';
$username = 'root';
$password = '';
$charset = 'utf8';


try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Function to create a new customer
    function createCustomer($pdo, $name, $email) {
        $stmt = $pdo->prepare("INSERT INTO customers (name, email) VALUES (?, ?)");
        $stmt->execute([$name, $email]);
        return $pdo->lastInsertId();
    }
    
    // Function to read all customers
    function readCustomers($pdo) {
        $stmt = $pdo->query("SELECT * FROM customers");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Function to update a customer
    function updateCustomer($pdo, $id, $name, $email) {
        $stmt = $pdo->prepare("UPDATE customers SET name = ?, email = ? WHERE id = ?");
        $stmt->execute([$name, $email, $id]);
        return $stmt->rowCount();
    }
    
    // Function to remove a customer
    function removeCustomer($pdo, $id) {
        $stmt = $pdo->prepare("DELETE FROM customers WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->rowCount();
    }
    
    // Example usage
    $customerId = createCustomer($pdo, 'John Doe', 'john@example.com');
    echo "New customer ID: $customerId <br>";
    
    $customers = readCustomers($pdo);
    echo "All customers: <pre>";
    print_r($customers);
    echo "</pre>";
    
    $updatedRows = updateCustomer($pdo, $customerId, 'Jane Doe', 'jane@example.com');
    echo "Updated rows: $updatedRows <br>";
    
    $removedRows = removeCustomer($pdo, $customerId);
    echo "Removed rows: $removedRows <br>";
    
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?> -->
