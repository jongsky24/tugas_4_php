<?php
echo "Harga Beli = Rp 8000 <br>";
echo "Harga Jual = Rp 7500 <br>";
echo "Keuntungan = Rp 300 <br>";
echo "Berapa Jumlah Kambing yang dibeli ? <br>";
echo "Jawaban : ";

$w = 300;
$x = 8000;
$y = 7500;

$z = round(($x - $y) / $w);
echo "$z ekor";
