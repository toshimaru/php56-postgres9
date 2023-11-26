<?php
$dsn = 'pgsql:host=db;dbname=exampledb';
$username = 'exampleuser';
$password = 'examplepass';

try {
  $pdo = new PDO($dsn, $username, $password);

  // SQL query to list all tables
  // $sql = "SELECT tablename FROM pg_catalog.pg_tables";
  // $stmt = $pdo->query($sql);
  // $tables = $stmt->fetchAll();
  // foreach ($tables as $table) {
  //     echo $table['tablename'] . "\n";
  // }

  echo "Connected to the database successfully!";
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}
