<?php

function palindrome_angka($angka) {
  // tulis kode di sini
    $res = "";
    $strAngka = strval($angka);
    $reverseString = "";
    for($i=strlen($strAngka)-1; $i>=0; $i--){
        $reverseString .= $strAngka[$i];
    }

    if($reverseString == $strAngka){
        $angka += 1;
    }

    while(true){
        $strAngka = strval($angka);
        $reverseString = "";
        for($i=strlen($angka)-1; $i>=0; $i--){
            $reverseString .= $strAngka[$i];
        }
        if($reverseString == $strAngka){
            global $res;
            $res = $strAngka . "<br>";
            return $res;
        }else{
            $angka += 1;
        }
    }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>