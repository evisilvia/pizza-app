<?php

// $mahasiswa = [[
// "nama" => "evi silvia",
// "nrp" => "173040050",
// "email" => "evi@mail.com"
// ],

// [
// "nama" => "mandalita",
// "nrp" => "173040050",
// "email" => "evi@mail.com"
// ]	


// ];


$dbh = new PDO('mysql:host=localhost;dbname=phpmvc', 'root', '');

$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db -> execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);


$data = json_encode($mahasiswa);
echo $data;
 ?>