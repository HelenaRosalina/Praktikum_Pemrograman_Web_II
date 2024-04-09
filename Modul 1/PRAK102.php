<?php
function hitungVolumeTabung($jari_jari, $tinggi) {
    return M_PI * pow($jari_jari, 2) * $tinggi;
}

$jari_jari = 4.2;
$tinggi = 5.4;
$volume_tabung = hitungVolumeTabung($jari_jari, $tinggi);

echo "Volume tabung adalah " . number_format($volume_tabung, 3) . " m3";
?>