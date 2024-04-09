<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        table {
            width: auto; 
            border-collapse: collapse;
            border-spacing: 0; 
        }

        th, td {
            padding: 1px; 
            text-align: left;
            border: 1.5px solid #000; 
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        td::after {
            content: '';
            position: absolute;
            left: -1px;
            top: -1px;
            width: calc(100% + 2px);
            height: calc(100% + 2px);
            border: 1px solid transparent;
            box-sizing: border-box;
        }

        table.inner-table {
            border-collapse: separate;
            border-spacing: 2px;
        }

        table.inner-table th,
        table.inner-table td {
            border: 1.5px solid #000;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>
                <table class="inner-table">
                    <tr>
                        <th colspan="2">Daftar Smartphone Samsung</th> 
                    </tr>
                    <?php
                    $smartphones = array(
                        "Samsung Galaxy S22",
                        "Samsung Galaxy S22+",
                        "Samsung Galaxy A03",
                        "Samsung Galaxy Xcover 5"
                    );

                    foreach ($smartphones as $smartphone) {
                        echo "<tr>";
                        echo "<td>$smartphone</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>