<!DOCTYPE html>
<html>
<head>
    <title>Form Pengisian Data Dosen</title>
</head>
<body>
<?php
    $nama = $email = $katasandi = $jk =$agama = $saran= "";
    $nameErr = $katasandiErr = $emailErr = $jkErr = "";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) {
            $nameErr = "<font color='red'>Nama pengguna dibutuhkan</font>";
        } else {
            $nama = test_input($_POST["nama"]);
        }
        if (empty($_POST["katasandi"])) {
            $katasandiErr = "<font color='red'>Kata Sandi dibutuhkan</font>";
        } else {
            $katasandi = test_input($_POST["katasandi"]);
        }
        if (empty($_POST["email"])) {
            $emailErr = "<font color='red'>Email dibutuhkan</font>";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Format email salah";  }
        }
        if (empty($_POST["jk"])) {
            $jkErr = "<font color='red'>Jenis Kelamin dibutuhkan</font>";
        } else {
            $jk = test_input($_POST["jk"]);
        }
        $agama = $_POST['agama'];
        $saran = $_POST['saran'];
    }
    ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2><b>Form Pengisian Data<br></b></h2>
        NIP : <br><input type="text" name="nip" value="<?php echo $nip;?>" size="20" autofocus><font color='red'> *</font>
        <span class="error"><?php echo $nameErr;?></span><br><br>
        NIDN : <br><input type="text" name="nidn" value="<?php echo $nidn;?>" size="20" autofocus><font color='red'> *</font>
        <span class="error"><?php echo $nameErr;?></span><br><br>
        Nama Dosen : <br><input type="text" name="nama" value="<?php echo $nama_dosen;?>" size="20" autofocus><font color='red'> *</font>
        <span class="error"><?php echo $nameErr;?></span><br><br>
        Tempat Lahir : <br><input type="text" name="tempat_lahir" value="<?php echo $tmpt_lahir;?>" size="20" autofocus><font color='red'> *</font>
        <span class="error"><?php echo $nameErr;?></span><br><br>
        Tanggal Lahir :<br> <input type="date" name="tanggal_lahir" value="<?php echo $tgl_lahir;?>" size="25"><font color='red'> *</font>
        <span class="error"><?php echo $emailErr;?></span><br><br>
        Program Studi : <br><input type="text" name="prodi" value="<?php echo $prodi;?>" size="20" autofocus><font color='red'> *</font>
        <span class="error"><?php echo $nameErr;?></span><br><br>
        Pangkat Golongan : <br><input type="text" name="pangkat_gol" value="<?php echo $pangkat_gol;?>" size="20" autofocus><font color='red'> *</font>
        <span class="error"><?php echo $nameErr;?></span><br><br>
        Jabatan Fungsional : <br><input type="text" name="jabatan_fung" value="<?php echo $jabatan_fung;?>" size="20" autofocus><font color='red'> *</font>
        <span class="error"><?php echo $nameErr;?></span><br><br>
        No Handphone : <br><input type="text" name="nope" value="<?php echo $nope;?>" size="20" autofocus><font color='red'> *</font>
        <span class="error"><?php echo $nameErr;?></span><br><br>



        Pendidikan Terakhir : <br>
        <input type="radio" name="pend_terakhir" value="s2" checked>Magister (S2)
        <input type="radio" name="pend_terakhir" value="s3">Doktor (S3)
        <br>
        Email :<br> <input type="email" name="email" value="<?php echo $email;?>" size="25"><font color='red'> *</font>
        <span class="error"><?php echo $emailErr;?></span><br>
        <!-- -------------------------------------------------------------- -->
        <input type="submit" name="simpan" value="Simpan">
        <input type="reset" name="reset" value="Reset">

    </form>

<?php
    echo "<h2>Hasil Pendaftaran</h2>";
    echo "Nama Kamu adalah <b>$nama</b><br>";
    echo "<br>Kata Sandi Kamu adalah <b>$katasandi</b><br>";
    echo "<br>Email Kamu adalah <b>$email</b><br>";
    echo "<br>Jenis Kelamin Kamu adalah <b>$jk</b><br>";
    echo "<br>Agama Kamu adalah <b>$agama</b><br>";
    echo "<br>Kamu Tertarik pada :<br>";
        if (isset($_POST['bidang1'])) {echo "<b>+ ".$_POST['bidang1']."</b><br>";}
        if (isset($_POST['bidang2'])) {echo "<b>+ ".$_POST['bidang2']."</b><br>";}
        if (isset($_POST['bidang3'])) {echo "<b>+ ".$_POST['bidang3']."</b><br>";}
        if (isset($_POST['bidang4'])) {echo "<b>+ ".$_POST['bidang4']."</b><br>";}
    echo "<br>Saran Kamu adalah <br><b>$saran</b><br>";
?>

</body>
</html>
