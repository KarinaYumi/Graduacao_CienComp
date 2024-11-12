<?php

    $temperaturaC = $_POST['temperatura'];
    $temperaturaF = ($temperaturaC * 9/5) + 32;

    echo($temperaturaC."°C equivalem a " . $temperaturaF."°F");
?>