<?php 
//fungsi untuk menampilkan 7 angka terbesar

$bil = array(72,65,73,78,75,74,90,81,87,65,55,69,72,78,79,91,100,40,67,77,86); 

$n = count($bil); 

$i = 0;
echo "Data aslinya</br>";
while(list($indeks,$nilai)=each($bil))
{
echo "$nilai  ";
$i=$i+1;
}
echo "</br>";

for ($i=0; $i<=count($bil)-1; $i++)
{
$bilangan[$i]=$bil[$i];
$jumlah=$jumlah+$bilangan[$i];
}
echo"</br>";
echo "Rata-rata nya "." = ".$jumlah/count($bil);
echo"</br>";

echo "7 angka terbesar = ";
rsort($bil);
for($x = 0; $x < 7; $x++) {
    echo $bil[$x];
    echo "  ";
}

echo "</br>";

sort($bil);
echo "7 angka terkecil = ";
for($x = 0; $x < 7; $x++) {
    echo $bil[$x];
    echo "  ";
}
?>