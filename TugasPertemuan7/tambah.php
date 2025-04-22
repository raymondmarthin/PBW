<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data KRS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h2 class="mb-4">Tambah Data KRS</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Mahasiswa</label>
            <select name="npm" class="form-control" required>
                <option value="">-- Pilih Mahasiswa --</option>
                <?php
                $mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa");
                while ($row = mysqli_fetch_assoc($mahasiswa)) {
                    echo "<option value='{$row['npm']}'>{$row['nama']} ({$row['npm']})</option>";
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label>Mata Kuliah</label>
            <select name="kodemk" class="form-control" required>
                <option value="">-- Pilih Mata Kuliah --</option>
                <?php
                $matakuliah = mysqli_query($conn, "SELECT * FROM matakuliah");
                while ($row = mysqli_fetch_assoc($matakuliah)) {
                    echo "<option value='{$row['kodemk']}'>{$row['nama']} ({$row['kodemk']})</option>";
                }
                ?>
            </select>
        </div>

        <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $npm = $_POST['npm'];
        $kodemk = $_POST['kodemk'];

        mysqli_query($conn, "INSERT INTO krs (mahasiswa_npm, matakuliah_kodemk) VALUES ('$npm', '$kodemk')");
        echo "<div class='alert alert-success mt-3'>Data berhasil ditambahkan!</div>";
    }
    ?>

</body>

</html>
