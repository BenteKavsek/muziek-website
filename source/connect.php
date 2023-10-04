<?php

$servername = "mariadb";
$username = "db_user";
$password = "mijn_p@ss#";
$dbname = "voorbeeld_db";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT artiest, titel, genre, imgLink FROM nummers";
$result = $conn->query($sql);
?>