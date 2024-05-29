<?php

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

foreach ($cars as $car) {
    echo "Model: " . $car[0] . ", Stock: " . $car[1] . ", Sold: " . $car[2] . "<br>";
}
echo "<br>";

for ($i = 0; $i < count($cars); $i++) {
    echo "Model: " . $cars[$i][0] . ", Stock: " . $cars[$i][1] . ", Sold: " . $cars[$i][2] . "<br>";
}
echo "<br>";

$no_hp = array("62821", "08213");
$pesan = array("Selamat A", "Selamat B");

$kirim = array(
    'phone' => $no_hp,
    'message' => $pesan,    
);

// Menampilkan array 'kirim' secara terstruktur
for ($i = 0; $i < count($kirim['phone']); $i++) {
    echo "Phone: " . $kirim['phone'][$i] . ", Message: " . $kirim['message'][$i] . "<br>";
}
?>