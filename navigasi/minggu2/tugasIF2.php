<?php
/*

Buatlah program php untuk mengkonversi nilai angka menjadi nilai huruf. Dengan ketentuan sebagai berikut
A= 85 s.d 100
B= 76 s.d 84
C= 60 s.d 75
D= 40 s.d 59
E= 0 s.d 39

*/

$nilai=89;
$predikat='';
if($nilai>=85 and $nilai<=100){
    $predikat='A';
}elseif($nilai>=76 and $nilai<=84){
    $predikat='B';  
}elseif($nilai>=60 and $nilai<=75){
    $predikat='C';  
}elseif($nilai>=40 and $nilai<=59){
    $predikat='D';  
}else{
    $predikat='E';  
}

echo "Predikat Anda adalah ".$predikat;