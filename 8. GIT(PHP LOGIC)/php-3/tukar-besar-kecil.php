<?php
function tukar_besar_kecil($string){
//kode di sini
    $stringNew = "";
    $stringLenght = strlen($string);
    for($i=0; $i<$stringLenght; $i++){
        if(ctype_upper($string[$i])){
            $stringNew .= strtolower($string[$i]);
        }else{
            $stringNew .= strtoupper($string[$i]);
        }
    }
    echo "$stringNew<br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>