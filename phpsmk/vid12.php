<form action="" method="get">

nama :
<input type="text" name="nama">
alamat :
<input type="text" name="alamat">
<input type="submit" name="kirim" value="simpan">

</form>

<?php

if (isset($_GET['nama'])){
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];

echo $_GET['nama'];
echo '<br>';
echo $_GET['alamat']; 
}

?>