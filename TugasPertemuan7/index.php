<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h2 class="mb-4">Data Mahasiswa</h2>
    <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Data</a>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Mata Kuliah</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
        $no = 1;
        $result = mysqli_query($conn, "
        SELECT m.nama AS nama_mahasiswa, mk.nama AS nama_matakuliah, mk.jumlah_sks
        FROM krs k
        JOIN mahasiswa m ON k.mahasiswa_npm = m.npm
        JOIN matakuliah mk ON k.matakuliah_kodemk = mk.kodemk
        ORDER BY k.id ASC");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>$no</td>
                    <td>{$row['nama_mahasiswa']}</td>
                    <td>{$row['nama_matakuliah']}</td>
                    <td><span class='text-danger fw-bold'>{$row['nama_mahasiswa']}</span> Mengambil Mata Kuliah <span class='text-danger fw-bold'>{$row['nama_matakuliah']}</span> ({$row['jumlah_sks']} SKS)</td>
                  </tr>";
            $no++;
        }
        ?>
        </tbody>
    </table>
</body>

</html>