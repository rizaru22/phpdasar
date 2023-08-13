<?php
$nilaiUTS=76;
$nilaiUAS=89;
$nilaiProject=80;

//proses
$nilaiAkhir=(0.2*$nilaiUTS)+(0.3*$nilaiUAS)+(0.5*$nilaiProject);
$keterangan='';

if($nilaiAkhir>=76){
    $keterangan='Selamat Anda <b>LULUS</b>';
}else{
    $keterangan='Mohon Maaf<b>TIDAK LULUS</b>';
}

$nilai=$nilaiAkhir;

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

echo "Nilai Akhir Anda Adalah <b>".$nilai."</b> Predikat Anda Adalah <strong>".$predikat."</strong><br>".$keterangan;
