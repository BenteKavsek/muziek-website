<?php

include ('connect.php');

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '
        <li class="singel">
            <img src= "'.$row["imgLink"].'" alt="" class="cover">
            <a href ="song.php?song='.$row["titel"].'" class="titel">'.$row["titel"].'</a>
            <div>
                <p class="artiest">'.$row["artiest"].'</p>
                <p class="genre">'.$row["genre"].'</p>
            </div>
        </li> ';
      
    }
  
  }
// ?>