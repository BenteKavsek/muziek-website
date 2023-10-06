<?php
include("config.php");

    $servername = SERVERNAME;
    $username = USERNAME;
    $password = PASSWORD;
    $dbname = DBNAME;

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT artiest, titel, genre, imgLink, duur, releaseDatum FROM nummers";
    
    $result = $conn->query($sql);