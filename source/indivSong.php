<?php
include ('connect.php');

$song = $_GET['song'];

$conn = db_connect();

$stmt = $conn->prepare("SELECT * FROM nummers WHERE titel = '". $song ."';");
$stmt->execute();

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row) {
    $artiest = $row['artiest'];
    $titel = $row['titel'];
    $genre = $row['genre'];
    $link = $row['imgLink'];
    $duur = $row['duur'];
    $datum = $row['releaseDatum'];
}

    echo'
        <section>
            <img src="'. $link .'" alt="Alt text">

            <h1>'. $titel .'</h1>
            <h2>'. $artiest .'</h2>
            <p>'. $genre .'</p>
            <p>'. $duur .'</p>
            <p>'. $datum .'</p>
        </section>
        ';
        
?>