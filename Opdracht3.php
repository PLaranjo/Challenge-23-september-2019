<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php

    $boodschappen = array("aardappelen", "aardbeien", "3 pakken melk", "yoghurt");
    foreach ($boodschappen as $boodschap) {
        echo "$boodschap <br> <img alt='$boodschap' src='img/$boodschap.jpg'> <br>";
    }
    ?>
</body>

</html>