<?php

$hari = 5;

switch ($hari) {
    case 1:
        echo 'minggu';
        break;
    case 2:
        echo 'senin';
        break;
    case 3:
        echo 'selasa';
        break;
    default:
        echo 'hari ini belum dibuat';
        break;
}

$pilihan = 'tambah';

switch ($pilihan) {
    case 'tambah':
    echo 'anda memilih nambah';
    break;
    case 'ubah':
    echo 'anda memilih ngubah';
    break;
    case 'hapus':
    echo 'anda memilih ngehapus';
    break;
    default:
    echo 'pilihan tidak tersedia';
    break;
}


?> 