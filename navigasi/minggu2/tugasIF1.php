<?php
/*Buatlah program untuk menentukan kelulusan matapelajaran, dengan ketentuan sebagai berikut: 
nilai akhir = (20%*nilai uts) + (30%*nilai uas) + (50%*nilai project)
dinyatakan lulus jika nilai akhir lebih besar sama dengan 76 */

//deklarasi dan input
$nilaiUTS=76;
$nilaiUAS=89;
$nilaiProject=80;

//proses
$nilaiAkhir=(0.2*$nilaiUTS)+(0.3*$nilaiUAS)+(0.5*$nilaiProject);

echo "Nilai Akhir Anda adalah <b>".$nilaiAkhir."</b>";
if($nilaiAkhir>=76){
    echo " Selamat Anda <strong>Lulus</strong>";
}else{
    echo "Mohon Maaf Anda Tidak Lulus";
}


