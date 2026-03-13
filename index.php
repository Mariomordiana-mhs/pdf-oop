<?php
    include "Mahasiswa.php";

    echo "Data Mahasiswa : ";
    echo "<br>";

    $mahasiswaTI = new Mahasiswa();
    $mahasiswaTI -> setData('A11.2000.00001', 'Fulan', 'Teknik Informatika');
    $mahasiswaTI->tambahData();

    echo "<br>";

    $mahasiswaSI = new Mahasiswa();
    $mahasiswaSI -> setData('A12.2000.00001', 'Junior', 'Sistem Informasi');
    $mahasiswaSI-> tambahData();
