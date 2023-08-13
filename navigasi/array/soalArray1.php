<?php
// buatlah array yang menampung bilangan  bulat acak dan, tampilkan nilai array yg habis dibagi 3.

$angka = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($angka as $nilai) {
    if ($nilai % 3 == 0) 
        echo $nilai;
        
    
    
}
