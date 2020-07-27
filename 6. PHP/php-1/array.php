<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = ["Mike","Dustin","Will","Lucas","Max","Eleven"]; // Lengkapi di sini
        $adults = ["Hopper","Nancy","Joyce","Jonathan","Murray"]; 

        echo '<pre>'; print_r($kids); echo '</pre>';
        echo '<pre>'; print_r($adults); echo '</pre>';

        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids: ",count($kids); // Berapa panjang array kids
        echo "<br>";
        echo "<ol>"; 
        echo "<li> $kids[0] </li>";
        echo "<li> $kids[1] </li>";
        echo "<li> $kids[2] </li>";
        echo "<li> $kids[3] </li>";
        echo "<li> $kids[4] </li>";
        echo "<li> $kids[5] </li>";
        
        // for($i=0;$i<count($kids);$i++){
        //     echo "<li> $kids[$i] </li>";
        // }
        // Lanjutkan

        echo "</ol>";
        
        echo "Total Adults: ",count($adults) ;// Berapa panjang array adults
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        echo "<li> $adults[1] </li>";
        echo "<li> $adults[2] </li>";
        echo "<li> $adults[3] </li>";
        echo "<li> $adults[4] </li>";
        // Lanjutkan
        // for($i=0;$i<count($adults);$i++){
        //     echo "<li> $adults[$i] </li>";
        // }

        echo "</ol>";

        echo "<h3> Soal 3</h3>";
        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
        $data = array(
            array("Will Byers",12,"Will the Wise","Alive"),
            array("Mike Wheeler",12,"Dungeon Master","Alive"),
            array("Jim Hopper",43,"Chief Hopper","Deceased"),
            array("Eleven",12,"El","Alive")
        );

        foreach($data as $bio){
            echo "Name : ".$bio[0]."<br>";
            echo "Age : ".$bio[1]."<br>";
            echo "Aliases : ".$bio[2]."<br>";
            echo "Status : ".$bio[3]."<br><br>";
        }

        
        
    ?>
</body>
</html>