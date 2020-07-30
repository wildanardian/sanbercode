<?php

function papan_catur($angka) {
// tulis kode di sini
    // for($row=1; $row<=$angka; $row++){
    //     echo "#<br>";
    //     for($col=$row; $col<=$angka; $col++){
    //         echo "*<br>";
    //     }
    // }
    echo "Papan Catur : $angka<br>";
    for($i=0; $i<=$angka; $i++){
        if($i%2 == 1){
            echo "";
            for($j=0; $j<=$angka-1; $j++){
                echo "&nbsp;#";
            }
        }else{
            for($j=0; $j<=$angka; $j++){
                echo "#&nbsp;";
            }
        }
        echo "<br>";
    }
    echo "<br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/