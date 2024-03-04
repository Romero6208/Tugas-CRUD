<?php include_once("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi PPDB By WebPro</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="shortcut icon" href="images/WebPro.png" type="image/x-icon">
</head>
<body>
    <header>
        <h1>WebPro 7</h1>
        <h3>Penerimaan Peserta Didik Baru</h3>
    </header>
    <nav>
       <ul>
           <li><a href="form-daftar.php">Daftar Baru</a></li>
           <li><a href="list siswa.php">Pendaftaran</a></li>
       </ul>
    </nav>

    <h4>Siswa yang mendaftar</h4>
    <table border="1" cellspasing=0  cellpadding="10"
    <thead>
        <tr bgcolor="green">
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);
        $no=1;
        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td align='center'>".$no."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."' onclick='return confirm(\"Apakah anda yakin?\")'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
            $no++;
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    <footer>
        <hr>
        <i>Dibuat dengan semangat &copy;by <b> Student Day Progamming Web<b></i>

    </footer>
</body>
</html>