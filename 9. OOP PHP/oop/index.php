<?php

    require_once('animal.php');
    require_once('frog.php');
    require_once('ape.php');
    
    $sheep = new Animal("sheep");

    echo "Nama Hewan : $sheep->name<br>";
    echo "Jumlah Kaki : $sheep->legs<br>";
    echo "Berdarah Dingin : $sheep->cold_blooded<br><br>";

    $kodok = new Frog("buduk");
    
    echo "Nama Hewan : $kodok->name<br>";
    echo "Jumlah Kaki : ".$kodok->legs."<br>";
    echo "Berdarah Dingin : $kodok->cold_blooded<br>";
    echo "Suara : $kodok->jump<br><br>";

    $sungokong = new Ape("kera sakti");

    echo "Nama Hewan : $sungokong->name<br>";
    echo "Jumlah Kaki : $sungokong->legs<br>";
    echo "Berdarah Dingin : $sungokong->cold_blooded<br>";
    echo "Suara : $sungokong->yell<br>";

?>