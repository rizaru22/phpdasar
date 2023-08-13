<?php

$umur=0;

if($umur>=16 and $umur<=20){
    echo "remaja";
}elseif($umur>=21 and $umur<=40){
    echo "dewasa";
}elseif($umur>=41 and $umur<=60){
    echo "tua";
}elseif($umur>=61){
    echo "lansia";
}elseif($umur>=4 and $umur<=15){
    echo "anak-anak";
}else{
    echo "bayi";
}

echo "<br>selesai";