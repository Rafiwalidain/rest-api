<?php
// $mahasiswa = [
//     [
//         'nama' => 'Budi',
//         'npm' => '123456789',
//         'jurusan' => 'Teknik Informatika',
//         'angkatan' => 2020,
//         'ipk' => 3.75
//     ],
//     [
//         'nama' => 'Andi',
//         'npm' => '456789123',
//         'jurusan' => 'Teknik Komputer',
//         'angkatan' => 2022,
//         'ipk' => 3.65
//     ]
// ];

$dbh = new PDO("mysql:host=localhost;dbname=phpdasar", "root", "");
$db = $dbh->prepare("SELECT * FROM mahasiswa");
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
