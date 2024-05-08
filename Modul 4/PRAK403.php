<?php
$data = array(
    array(
        "no" => "1",
        "nama" => "Ridho",
        "matkul" => array(
            array("pilihan" => "Pemrograman I", "sks" => 2),
            array("pilihan" => "Praktikum Pemrograman I", "sks" => 1),
            array("pilihan" => "Pengantar Lingkungan Lahan Basah", "sks" => 2),
            array("pilihan" => "Arsitektur Komputer", "sks" => 3)
        )
    ),
    array(
        "no" => "2",
        "nama" => "Ratna",
        "matkul" => array(
            array("pilihan" => "Basis Data I", "sks" => 2),
            array("pilihan" => "Praktikum Basis Data I", "sks" => 1),
            array("pilihan" => "Kalkulus", "sks" => 3)
        )
    ),
    array(
        "no" => "3",
        "nama" => "Tono",
        "matkul" => array(
            array("pilihan" => "Rekayasa Perangkat Lunak", "sks" => 3),
            array("pilihan" => "Analisis dan Perancangan Sistem", "sks" => 3),
            array("pilihan" => "Komputasi Awan", "sks" => 3),
            array("pilihan" => "Kecerdasan Bisnis", "sks" => 3)
        )
    )
);

function hitungTotalSKS($matkul){
    $totalSks = 0;
    foreach($matkul as $matakuliah){
        $totalSks += $matakuliah["sks"];
    }
    return $totalSks;
}

function keterangan($totalSks){
    return $totalSks < 7 ? "Revisi KRS" : "Tidak Revisi";
}

echo "<table border='1' style='border-collapse: collapse; line-height: 1.8;'>
        <tr style='background-color: #D3D3D3;'>
            <th width='30'>No</th>
            <th width='80'>Nama</th>
            <th width='170'>Mata Kuliah diambil</th>
            <th width='50'>SKS</th>
            <th width='100'>Total SKS</th>
            <th width='85'>Keterangan</th>
        </tr>";

foreach($data as $mahasiswa){
    echo "<tr>";
    echo "<td>".$mahasiswa["no"]."</td>";
    echo "<td>".$mahasiswa["nama"]."</td>";

    if(count($mahasiswa["matkul"]) > 0){
        echo "<td>".$mahasiswa["matkul"][0]["pilihan"]."</td>";
        echo "<td>".$mahasiswa["matkul"][0]["sks"]."</td>";
    } else {
        echo "<td></td>";
        echo "<td></td>";
    }

    $totalSks = hitungTotalSKS($mahasiswa["matkul"]);
    $keterangan = keterangan($totalSks);

    $background_color = $keterangan == "Revisi KRS" ? "red" : "#00AF50";

    echo "<td>".$totalSks."</td>";
    echo "<td style='background-color: $background_color;'>".$keterangan."</td>";
    echo "</tr>";

    for($i = 1; $i < count($mahasiswa["matkul"]); $i++){
        echo "<tr>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td>".$mahasiswa["matkul"][$i]["pilihan"]."</td>";
        echo "<td>".$mahasiswa["matkul"][$i]["sks"]."</td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "</tr>";
    }
}

echo "</table>";
?>
