/*
** Random String Count
** Membuat random 2 string dan menghitung hasil dari 2 perubahan ke dalam 2 variabel
** Konsep mirip dengan fliip coin hny dengan tambahan penampung data dari hasil flip coin
*/
<?php
// Define Variabel
$i1= 'GD';
$i2='REACT';
$min = 0;//Nilai minimal yg di random
$max = 1;//Nilai min dan max sesuai dengan index terakhir dan awal array
$jml = 10;
$ar = [$i1,$i2];
$isi = [];
// Merandomize $i1 dan $i2 yang muncul kedalam array(jmlh $i1 dan $i2 = $jml)
for ($i = 0; $i < $jml; $i++) {
     // code...
     array_push($isi, $ar[random_int($min,$max)]);
}

function ekstraks(){
global $isi;
global $i1;
global $i2;
global $jml;
$a =0;
$b=0;
// Membuat nilai untuk $i1 dan $i2 kedalam variabel
for($i = 0; $i < $jml; $i++){
    $isi[$i] == $i1 ? $a += 1 : $b += 1; 
}
// jumlah masing masing jmlh nilai dari $i1 dan $i2
$ab = [$i1=>$a,$i2=>$b];

    return $ab;
}

print_r(ekstraks());
?>
