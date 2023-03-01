<?php
// definisikan variable konstanta
define ('PHI', 3.14);

// soal 1 hitung luas lingkaran dengan jari2
// soal 2 hitung keliling nya

// definisikan nilai jari2
$jari = 8;

// definisikan nilai luas 
$luas = PHI * $jari * $jari;

//definisikan nilai keliling. 
$kll = 2 * PHI * $jari;

echo 'luas lingkaran dengan jari jari ' .$jari. ' = ' .$luas;
echo '<br/> Keliling nya : ' .$kll;
?>