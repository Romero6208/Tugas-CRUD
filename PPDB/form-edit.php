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
           <li><a href="list siswa.php" >Pendaftaran</a></li>
       </ul>
    </nav>

    <h4>Formulir PPDB</h4>
    <?php
    include_once("config.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM calon_siswa WHERE id = $id";
    $query = mysqli_query($db, $sql);
    $r = mysqli_fetch_assoc($query);
    ?>
    <div>
        <form action="proses-pendaftaran.php" method="post">
    </div>
            <div>
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama" value="<?= $r['nama']; ?>" require>
            </div> 
            <div>
                <label for="">Alamat Lengkap</label>
                <textarea name="Alamat" cols="30" rows="10"><?= $r['alamat']; ?></textarea>
            </div>
            <div>
                <label for="">Jenis Kelamin</label>
                <input type="radio" name="jenis_kelamin" <?= $r ['jenis_kelamin'] =='Laki-laki' ? 'checked' : ''?> value="Laki-laki">Laki-laki</label>
                <input type="radio" name="jenis_kelamin" <?= $r ['jenis_kelamin'] =='Perempuan' ? 'checked' : ''?> value="Perempuan">Perempuan</label>
            </div>
            <div>
                <label for="">Agama</label>
                <select name="agama">
                    <option value="Islam" <?= $r['agama'] == 'Islam' ? "selected" : ''?>>Islam</option>
                    <option value="Kristen" <?= $r['agama'] == 'Kristen' ? "selected" : ''?>>Kristen</option>
                    <option value="Katholik" <?= $r['agama'] == 'Katholik' ? "selected" : ''?>>Katholik</option>
                    <option value="Buddha" <?= $r['agama'] == 'Budhha' ? "selected" : ''?>>Buddha</option>
                    <option value="Hindu" <?= $r['agama'] == 'Hindu' ? "selected" : ''?>>Hindu</option>
                    <option value="Khonghucu" <?= $r['agama'] == 'Khonghucu' ? "selected" : ''?>>Khonghucu</option>
                    <option value="Lainnya" <?= $r['agama'] == 'Lainnya' ? "selected" : ''?>>Lainnya</option>
                </select>
            </div>
            <div>
                <label for="sekolah_asal">Sekolah Asal</label>
                <input type="text" name="sekolah_asal" value="<?= $r['sekolah_asal']; ?>"0>
            </div>
            <div>
                <input type="hidden" name="id" value="<?= $r['id']; ?>">
                <input type="reset">
                <input type="submit" value="Daftar" nama="daftar">
            </div> 
        </form>
    </div>
    <footer>
        <hr>
        <i>Dibuat dengan semangat &copy;by <b> Student Day Progamming Web<b></i>

    </footer>
</body>
</html>