<?php
require_once 'nilai_mahasiswa.php';

// Membuat objek mahasiswa
$mhs1 = new NilaiMahasiswa("Budi", "Pemrograman Web", 80, 90, 78);
$mhs2 = new NilaiMahasiswa("Andi", "Pemrograman Web", 90, 85, 72);
$mhs3 = new NilaiMahasiswa("Ilal", "Pemrograman Web", 24, 20, 40);

$data_mahasiswa = [$mhs1, $mhs2, $mhs3];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Mahasiswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #eaeaea;
        }
    </style>
</head>

<body>

    <h3>Daftar Nilai Mahasiswa</h3>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Nilai UAS</th>
                <th>Nilai UTS</th>
                <th>Nilai Tugas</th>
                <th>Nilai Akhir</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $mhs->nama ?></td>
                    <td><?= $mhs->matakuliah ?></td>
                    <td><?= $mhs->nilai_uas ?></td>
                    <td><?= $mhs->nilai_uts ?></td>
                    <td><?= $mhs->nilai_tugas ?></td>
                    <td><?= number_format($mhs->nilaiAkhir(), 2) ?></td>
                    <td><?= $mhs->kelulusan() ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>