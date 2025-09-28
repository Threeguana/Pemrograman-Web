<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 50%;
            border: 1px solid #ddd;
        }

        th, td {
            text-align: left;
            padding: 5px;
        }

        th {
            background-color: rgb(121, 168, 255);
        }

        tr:nth-child(even) {
            background-color: #b0d6ea9e;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>Domisili</th>
            <th>Jenis Kelamin</th>
        </tr>
        <?php
            $Dosen = array (
                array ("Elok Nur Hamdana", 'Malang', 'Perempuan'),
            );
            foreach ($Dosen as $data) {
            echo "<tr>";
                echo "<td>{$data[0]}</td>";
                echo "<td>{$data[1]}</td>";
                echo "<td>{$data[2]}</td>";
            echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
