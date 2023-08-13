<?php

$huruf='A';
$huruf=strtoupper($huruf);

if($huruf=='A' or $huruf=='I' or $huruf=='U' or $huruf=='E' or $huruf=='O'){
    echo 'Huruf Vocal';
}else{
    echo 'Huruf Konsonan';
}