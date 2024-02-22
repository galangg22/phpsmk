<?php

require_once "../function.php";

$sql = "SELECT * FROM tblkategori";

$result = mysqli_query($koneksi, $sql);

// var_dump ($result);

$jumlah = mysqli_num_rows($result);
// echo '<br>';
// echo $jumlah;

if ($jumlah > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['kategori'];
        echo '<br>';
    }
}
?>