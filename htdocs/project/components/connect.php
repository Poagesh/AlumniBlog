<?php
$host = 'localhost'; // or your MySQL server host
$dbname = 'blog_db'; // ensure this database name is correct
$username = 'root'; // your MySQL username
$password = ''; // your MySQL password

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}
?>
