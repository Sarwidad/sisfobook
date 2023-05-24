<?php
$buah = [
[
"nama" => "Jeruk",
"rasa" => "Manis",
"warna" => "Oranye"
],
[
"nama" => "Semangka",
"rasa" => "Manis",
"warna" => "Merah"
],
[
"nama" => "Pisang",
"rasa" => "Manis",
"warna" => "Kuning"
]

];

foreach ($buah as $bh) {
    echo $bh['warna']."\n";
}
