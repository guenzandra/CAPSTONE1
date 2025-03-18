<?php
$host = "localhost"; 
$username = "root";
$password = "";
$dbname = "customer_db";

try {

  $pdo = new PDO("mysql:host=$host", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $pdo->exec("CREATE DATABASE IF NOT EXISTS $dbname");
  echo "Database '$dbname' created successfully! <br>";


  $pdo->exec("USE $dbname");


  $sql = "CREATE TABLE IF NOT EXISTS customer_orders (
        id INT AUTO_INCREMENT PRIMARY KEY,
        customer_id VARCHAR(50) NOT NULL,
        dish_count INT NOT NULL,
        order_date DATETIME DEFAULT CURRENT_TIMESTAMP,
        location VARCHAR(255) NOT NULL,
        name VARCHAR(100) NOT NULL,
        phone_number VARCHAR(20) NOT NULL,
        total_price DECIMAL(10,2) NOT NULL,
        dish_name TEXT NOT NULL
    )";

  $pdo->exec($sql);
  echo "Table 'customer_orders' created successfully!";
} catch (PDOException $e) {
  die("Database error: " . $e->getMessage());
}
