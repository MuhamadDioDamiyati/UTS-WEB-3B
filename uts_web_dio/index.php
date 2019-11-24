 <!-- NAMA       : Muhamad Dio Damiyati
 NIM        : 11180910000050
 Jurusan    : Teknik Informatika 18     -->
 
 <!DOCTYPE html>
<html>
<head>
    <title>YOWORLD.ID</title>
	<body Logo = "image/Logo.png">
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body background="image/Background.png">
    <div class="wrap">
        <div class="logo">          
            <img src="image/Logo.png">
        </div>
        <div class="header">          
            <h1><font face="Century Gothic">YOWORLD.ID</font></h1>
            <div class="tanggal">
                <?php
                    // Real Time Clock
                    echo date('d F Y');
                ?> 
            </div> 
        </div>         
        <div class="sidebar">
            <ul>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=Home">Home</a></li>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=pendaftaran">Pendaftaran</a></li>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=BeratIdeal">Mengukur Berat Badan Ideal</a></li>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=usia">Menghitung Kategori Usia</a></li>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=persegiPanjang">Menghitung Persegi Panjang</a></li>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=segitiga">Menghitung Segi Tiga</a></li>
                <li><a href="<?php $_SERVER['PHP_SELF']; ?>?op=dftrMhs">Daftar Mahasiswa</a></li>              
            </ul>
        </div>
        <div class="content"><center>
            <?php
            // Bagian Home
            if (@$_GET['op'] == "Home")
            {
                include "content/Home.php";
            }
            // Pendaftaran
            else if (@$_GET['op'] == "pendaftaran")
            {
                include "content/Pendaftaran.php";
            }
            // BeratBadan
            else if (@$_GET['op'] == "BeratIdeal")
            {
                include "content/BeratBadan.php";
            }
            // Usia
            else if (@$_GET['op'] == "usia")
            {
                include "content/usia.php";
            }
            // PersegiPanjang
            else if (@$_GET['op'] == "persegiPanjang")
            {
                include "content/PersegiPanjang.php";
            }
            // Segitiga
            else if (@$_GET['op'] == "segitiga")
            {
                include "content/Segitiga.php";
            }
            // Table Database
            else if (@$_GET['op'] == "dftrMhs")
            {
            ?>
             
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "universitas";
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                if (!$connection){
                        die("Connection Failed:".mysqli_connect_error());
                    }
                $query = mysqli_query($connection,"SELECT * FROM mahasiswa");
                ?>

                <form action="" method="post">
					<p>DAFTAR MAHASISWA</p>
                    <table border="5" cellpadding="2" cellspacing="2">
                        <tr>
                            <th>NIM </th>
                            <th>Nama </th>
                            <th>Tempat Lahir </th>
                            <th>Tanggal Lahir </th>
                            <th>Jurusan </th>
                            <th>IPK </th>
                        </tr>
                        <?php if(mysqli_num_rows($query)>0){ ?>
                        <?php
                            $no = 1;
                            while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $data["nim"];?></td>
                            <td><?php echo $data["nama"];?></td>
                            <td><?php echo $data["tempat_lahir"];?></td>
                            <td><?php echo $data["tanggal_lahir"];?></td>
                            <td><?php echo $data["jurusan"];?></td>
                            <td><?php echo $data["ipk"];?></td>
                        </tr>
                        <?php $no++; } ?>
                        <?php } ?>
                    </table>
                </form>
            <?php
            }
            //Data dan Proses
            if (@$_GET['show'] == "BeratIdeal")
            { 
              $tinggi=$_POST['tb'];
                $berat=$_POST['bb'];
                $persen=($tinggi-100)*0.1;
                $ideal=($tinggi-100)-$persen;
                    if($berat <= $ideal+2 && $berat >= $ideal-2)
                    {
                    echo "<p>Selamat Berat Badan Anda Termasuk Ideal.</p>";
                    }else
                    {
                    echo "<p>Mohon Maaf Berat Badan Anda Tidak Ideal.</p>";
                    }
            }elseif (@$_GET["show"] == "usia") {
                $usia=$_POST['yo'];
                    if($usia >= 0 && $usia <= 5.5)
                    {
                        echo "<p>Status Usia Anda : Balita.</p>";
                    }else if($usia > 5.5 && $usia <= 16.5)
                    {
                        echo "<p>Status Usia Anda : Anak-anak.</p>";
                    }else if($usia > 16.5 && $usia <= 50.5)
                    {
                        echo "<p>Status Usia Anda : Dewasa.</p>";
                    }else if($usia > 50.5)
                    {
                        echo "<p>Status Usia Anda : Lansia.</p>";
                    }else
                    {
                        echo "<p>Unknown</p>";
                    }
            }elseif (@$_GET["show"] == "pendaftaran") {
                $namaLengkap = $_POST['nama'];  
                $tempatLahir = $_POST['tempat'];
                $tanggalLahir = $_POST['tanggal'];
                $bulanLahir = $_POST['bulan'];
                $tahunLahir = $_POST['tahun'];
                $alamatAnda = $_POST['alamat'];  
                $kelaminAnda = $_POST['sex'];  
                $asalSekolah = $_POST['sekolah'];
                $nilaiUAN = $_POST['nilai'];
                $tbtLahir;
                echo "<table>";
                echo "<tr><td>Halo $namaLengkap Terima Kasih Sudah Mengisi Form Pendaftaran</tr></td>";
                echo "<tr><td>Nama Lengkap : ".$namaLengkap."</td></tr>";
                echo "<tr><td>Tempat Lahir : ".$tempatLahir."</td></tr>";
                echo "<tr><td>Tanggal Lahir : ".$tanggalLahir."/".$bulanLahir."/".$tahunLahir."</td></tr>";
                echo "<tr><td>Alamat Rumah : ".$alamatAnda."</td></tr>";
                echo "<tr><td>Jenis Kelamin : ".$kelaminAnda."</td></tr>";
                echo "<tr><td>Sekolah Asal : ".$asalSekolah."</td></tr>";
                echo "<tr><td>Nilai UAN : ".$nilaiUAN."</td></tr>";
                echo "</table>";
            }elseif (@$_GET["show"] == "persegiPanjang") {
                function luas_persegiPanjang($panjang,$lebar)
                {
                  $hasil = $panjang*$lebar;
                  echo "<p>Panjangnya adalah <b>".$panjang."</b> </p>";
                  echo "<p>Lebarnya adalah <b>".$lebar."</b> </p>";
                  echo "<p>Luasnya adalah <b>".$hasil."</b> </p>";
                }
                  $panjang = $_POST['panjang'];
                  $lebar = $_POST['lebar'];
                  luas_persegiPanjang($panjang, $lebar);
            }elseif (@$_GET["show"] == "segitiga") {
                function luas_segitiga($alas,$tinggi)
                {
                  $hasil = ($alas/2)*$tinggi;
                  echo "<p>Alasnya adalah <b>".$alas."</b> </p>";
                  echo "<p>Tingginya adalah <b>".$tinggi."</b> </p>";
                  echo "<p>Luasnya adalah <b>".$hasil."</b> </p>";
                }
                  $alas = $_POST['alas'];
                  $tinggi = $_POST['tinggi'];
                  luas_segitiga($alas, $tinggi);
            }
            ?>
        </center></div>
        <div class="footer">
            Copyright © 2019 YOWORLD.ID All Right Reserved
        </div>
    </div>
</body>
</html>
