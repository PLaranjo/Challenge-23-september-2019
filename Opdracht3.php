<?php
$boodschappen = ["aardappelen", "aardbeien", "3 pakken melk", "yoghurt"];

$boodschappen = array("aardappelen", "aardbeien", "3 pakken melk", "yoghurt");
foreach ($boodschappen as $boodschap) {
    echo "$boodschap <br> <img alt='$boodschap' src='img/$boodschap.jpg'> <br>";
}
