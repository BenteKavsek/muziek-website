<?php
include ('connect.php');

$song = $_GET['song'];


$result = mysqli_query($conn, "SELECT * FROM nummers WHERE titel = '$song'");

if ($result) {

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $artiest = $row['artiest'];
        $titel = $row['titel'];
        $genre = $row['genre'];
        $link = $row['imgLink'];
        $duur = $row['duur'];
        $datum = $row['releaseDatum'];

        echo '
        <article class="song">
        <figure class="song__figure">
            <img class="song__image" src="'. $link .'">
        </figure>
        
        <section class="song__details">
            <div class="song__details__top">
                <h2 class="song__h2">'. $titel .'</h2>
                <h2 class="song__h2">'. $artiest .'</h2>
            </div>
            <div class="song__details__bottom">
                <p class="song__p">'. $genre .'</p>
                <div class="song__playsec">
                    <i class="fa-solid fa-play"></i>
                    <p class="song__p">'. $duur .'</p>
                </div>
                <p class="song__p">'. $datum .'</p>
            </div>
        </section>

    </article>
        ';
    }
}