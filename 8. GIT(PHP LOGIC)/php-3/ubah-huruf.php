<?php
function ubah_huruf($string){
    $panjangString = strlen($string);
    $stringBaru = "";
    for($i=0; $i<$panjangString; $i++){
        if($string[$i] == 'a'){
            $string[$i] = 'b';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'b'){
            $string[$i] = 'c';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'c'){
            $string[$i] = 'd';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'd'){
            $string[$i] = 'e';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'e'){
            $string[$i] = 'f';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'f'){
            $string[$i] = 'g';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'g'){
            $string[$i] = 'h';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'h'){
            $string[$i] = 'i';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'i'){
            $string[$i] = 'j';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'j'){
            $string[$i] = 'k';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'k'){
            $string[$i] = 'l';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'l'){
            $string[$i] = 'm';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'm'){
            $string[$i] = 'n';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'n'){
            $string[$i] = 'o';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'o'){
            $string[$i] = 'p';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'p'){
            $string[$i] = 'q';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'q'){
            $string[$i] = 'r';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'r'){
            $string[$i] = 's';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 's'){
            $string[$i] = 't';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 't'){
            $string[$i] = 'u';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'u'){
            $string[$i] = 'v';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'v'){
            $string[$i] = 'w';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'w'){
            $string[$i] = 'x';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'x'){
            $string[$i] = 'y';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'y'){
            $string[$i] = 'z';
            $stringBaru .= $string[$i];
        }
        else if($string[$i] == 'z'){
            $string[$i] = 'a';
            $stringBaru .= $string[$i];
        }
    }
    echo "$stringBaru<br>";
//kode di sini
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>