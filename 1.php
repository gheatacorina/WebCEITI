<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucrare1</title>
    <style>
        .sah_container{
            display: flex;
            width: 300px;
            height: 300px;
            flex-wrap: wrap;
            border: 1px solid black;
        }
        .sah_cell{
            width: 12.5%;
            height:12.5%;
        }
        .black{
            background-color: black;
        }
        .white{
            background-color: white;
        }
    </style>
</head>
<body>
<h3>ex 1</h3>
<?php
$n = 9;
        $k = 8;
        for($i = 0; $i < $k; $i++){
            echo $n;
        }
?>
<h3>ex 2</h3>
    <?php
        echo "<h3>Tabla înmulțirii</h3>\n";
        echo "<table>\n";
        for($i = 0; $i <=12; $i++){
            //tiparire rând
            echo "<tr>";
            for($j = 0; $j <=12; $j++){
                if($j == 0 || $i == 0){
                    //tiparirea headerilor
                    echo "<th>".$j+$i."</th>\n";
                }else{
                    //tiparirea celulelor simple
                    echo "<td>".$j*$i."</td>\n";
                }
            }
            echo "</tr>";
        }
        echo "</table>\n</div>\n</div>";
    ?>
<h3>ex 3</h3>
<?php
        echo"<div class='sah_container'>\n";
        for($i = 0; $i < 8; $i++){
            for($j = 0; $j <8; $j++){
                if(($j+$i)%2 == 0){
                    echo "<div class='sah_cell white'></div>\n";
                }else{
                    echo "<div class='sah_cell black'></div>\n";
                }
            }
        }
        echo"</div>";
    ?>
<h3>ex 4</h3>
<?php
    //declararea zilei de nastere si obtinerea datei curente
    $birthday = date("Y-m-d", strtotime("August 18 2002"));
    $today = date("Y-n-j");
    echo"<div>Rata de nastere: $birthday</div>\n";
    echo"<div>Data de azi: $today</div>\n";

    //aflarea diferentei in zile
    $diff = abs(strtotime($today)- strtotime($birthday));

    //transferarea in ani, luni, zile
    $years= floor($diff / (365*60*60*24));
    $monts= floor(($diff-$years * 365*60*60*24) / (30*60*60*24));
    $days= floor(($diff-$years * 365*60*60*24 - $monts*30*60*60*24) / (60*60*24));
    echo"<div>Diferenta: $years ani, $monts luni, $days zile</div>\n";
?>
<h3>ex 5</h3>
<?php
        for($i = 2; $i <= 10; $i++){
            $num5 = 0;
            for($j = 1; $j < $i; $j++){
                $num5 *= 10;
                $num5 += $j;
            }
            echo "<div>$num5 * 9 + $i = ".$num5*9+$i."</div>\n";
        }
    ?>
<h3>ex 6</h3>
<?php
        $num6 = 5;
        echo"<div class='ex6_container'>\n";
        for($i = 1; $i <= (2 * $num6 - 1); $i++){
            if($i % 2 == 1){
                echo "<div>";
                for($j = 1; $j <= $i; $j++){
                    echo " ".$j;
                }
                echo "</div>\n";
            }
        }
        echo"</div>\n";
    ?>
</body>
</html>