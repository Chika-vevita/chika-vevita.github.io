<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

$cari=$_POST['cari'];
$connection=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$sqlstr= "select * from stok where $barang like '%$cari%'";
$hasil=mysqli_query($connection,$sqlstr) or die(mysqli_error($connection));
$jumlah=mysqli_num_rows($hasil);
echo "<br>";
echo "Ditemukan: $jumlah";
echo "<br>";
while($baris = mysqli_fetch_array($hasil)) {
    echo " ";
    echo $baris[1];
    echo "<br>";
    echo " ";
    echo $baris[2];
}
?>