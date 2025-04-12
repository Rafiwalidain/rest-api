<?php
$data = file_get_contents("cbae.json");
$mahasiswa = json_decode($data, true);

var_dump($mahasiswa);
echo $mahasiswa[0]['alamat']['kota'];
