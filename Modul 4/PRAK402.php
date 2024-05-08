<?php
$data = array(
    array("Nama" => "Andi", "NIM" => "2101001", "Nilai UTS" => 87, "Nilai UAS" => 65),
    array("Nama" => "Budi", "NIM" => "2101002", "Nilai UTS" => 76, "Nilai UAS" => 79),
    array("Nama" => "Tono", "NIM" => "2101003", "Nilai UTS" => 50, "Nilai UAS" => 41),
    array("Nama" => "Jessica", "NIM" => "2101004", "Nilai UTS" => 60, "Nilai UAS" => 75)
    
);

foreach ($data as $key => $row) {
    $nilai_akhir = 0.4 * $row["Nilai UTS"] + 0.6 * $row["Nilai UAS"];
    $data[$key]["Nilai Akhir"] = $nilai_akhir;

    if ($nilai_akhir >= 80) {
        $data[$key]["Huruf"] = "A";
    } elseif ($nilai_akhir >= 70) {
        $data[$key]["Huruf"] = "B";
    } elseif ($nilai_akhir >= 60) {
        $data[$key]["Huruf"] = "C";
    } elseif ($nilai_akhir >= 50) {
        $data[$key]["Huruf"] = "D";
    } else {
        $data[$key]["Huruf"] = "E";
    }
}

echo "<table border='1' style='border-collapse: collapse;'>
        <tr style='background-color: #D3D3D3;'>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>";
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>" . $row['Nama'] . "</td>";
    echo "<td>" . $row['NIM'] . "</td>";
    echo "<td>" . $row['Nilai UTS'] . "</td>";
    echo "<td>" . $row['Nilai UAS'] . "</td>";

    $nilai_akhir = ($row['Nama'] == 'Jessica' && $row['Nilai Akhir'] == (int)$row['Nilai Akhir']) ? number_format($row['Nilai Akhir'], 0) : number_format($row['Nilai Akhir'], 1);
    echo "<td style='line-height: 2.0;'>" . $nilai_akhir . "</td>";
    
    echo "<td>" . $row['Huruf'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>