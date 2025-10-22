<?php
$angka = $_POST["angka"];

for ($i = 1; $i <= $angka; $i++){
    if ($i==1){
        echo "1 ";
    }elseif ($i == $angka){
        echo $angka;
    }else{
        echo"*";
    }
}
?>