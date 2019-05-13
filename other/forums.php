<?php

    foreach ($forums as $item) {
        echo '<div class="col">
        <center><a target="_blank" href="' .$item['URL']. '">
        <img src="' .$item['Image']. '" width="500px" height="300px"></a></center>
      </div>';
    }

?>