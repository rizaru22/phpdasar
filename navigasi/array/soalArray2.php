<?php

$array=array(
    "asus" => 5600000,
    "lenovo"=>4700000,
    "axioo"=>3800000,
    "apple"=>12300000,
    "hp"=>6700000
);

foreach ($array as $key => $value){
    if($value<5000000){
        echo $key." Harganya Rp. ".number_format($value)."<br>";
        
    }
}