<?php
$connect = true;
$host = 'localhost';
$db_name = '';
$user = '';
$password = '';
$message = '';
try {
  $dbh = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $user, $password);
} catch (PDOException $e) {
  $connect = false;
  exit('Database connection failure ' .$e->getMessage());
  $message .= 'Database connection failure ' .$e->getMessage() .'';
}
if ($connect) {
  $message .= 'Database connection success!';
}
$dbh = null;
echo $message;
