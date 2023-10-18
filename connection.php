<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "";
$port_database = "3306";
$connection = mysqli_connect($host, $user, $pass, $db);

if ($connection) {
    echo "<script>console.log('berhasil konek ke database')</script>";
} else {
    echo "<script>console.log('gagal konek ke database')</script>";
}

class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "pencatatan_suhu_tubuh";
    var $connection = "";

    function __construct()
    {
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }

    //Regist
    function AddDataRegist($nik, $username, $password, $nmLengkap, $email, $jk, $alamat, $noTelp, $tglLahir, $tmpLahir)
    {
        $result = mysqli_query($this->connection, "INSERT INTO `pengguna`(`nik`, `username`, `password`, `nm_lengkap`, `email`, `level`, `jk`, `alamat`, `no_telp`, `tgl_lhr`, `tmpt_lhr`) VALUES('" . $nik . "', '" . $username . "', '" . $password . "', '" . $nmLengkap . "', '" . $email . "', 'masyarakat', '" . $jk . "', '" . $alamat . "', '" . $noTelp . "', '" . $tglLahir . "', '" . $tmpLahir . "')");

        if ($result) {
            header('location: ../login/login_screen.php');
        }
    }

    //Login 
    function LoginCheck($username, $password)
    {
        echo $username;
        echo $password;

        $loginCheckQuery = mysqli_query($this->connection, "SELECT * FROM `pengguna` WHERE username ='" . $username . "' AND password = '" . $password . "'");
        $dataFound = mysqli_num_rows($loginCheckQuery);
        if ($dataFound > 0) {
            $userLoginData = mysqli_fetch_array($loginCheckQuery);
            $idUserLogin = $userLoginData['nik'];
            $usernameLogin = $userLoginData['username'];
            $nmLengkapLogin = $userLoginData['nm_lengkap'];
            $levelLogin = $userLoginData['level'];

            $_SESSION['nikLogin'] = $idUserLogin;
            $_SESSION['usernameLogin'] = $usernameLogin;
            $_SESSION['nmLengkapLogin'] = $nmLengkapLogin;
            $_SESSION['levelLogin'] = $levelLogin;


            header('location: ../home/home_screen.php');
        } else {
            $_SESSION['msg'] = "Username atau password yang anda masukan salah";
            header('location: login_screen.php');
        }
    }

    //Show Data Location
    function ShowDataLocation()
    {
        $dataLokasi = mysqli_query($this->connection, "SELECT * FROM lokasi");
        while ($row = mysqli_fetch_array($dataLokasi)) {
            $dataLokasiResult[] = $row;
        }
        return $dataLokasiResult;
    }
    //Add Data Location
    function addDataLocation($nmLokasi, $nmAlamat)
    {
        mysqli_query($this->connection, "INSERT INTO `lokasi` VALUES (null, '" . $nmLokasi . "', '" . $nmAlamat . "')");
    }
    //Delete Data Location
    function deleteDataLocation($idLokasi)
    {
        mysqli_query($this->connection, "DELETE FROM `lokasi` WHERE id_lokasi = '" . $idLokasi . "'");
    }
    //Get Data Location
    function getDataLocation($idLokasi)
    {
        $dataLoc = mysqli_query($this->connection, "SELECT `id_lokasi`, `nama_lokasi`, `alamat_lokasi` FROM `lokasi` WHERE id_lokasi =" . $idLokasi . "");
        $row = mysqli_num_rows($dataLoc);
        if ($row > 0) {
            $data = mysqli_fetch_array($dataLoc);
            return $data;
        }
    }


    //Update Data Location
    function updateDataLocation($idLokasi, $namaLokasi, $alamatLokasi)
    {
        $sql = "UPDATE `lokasi` SET `nama_lokasi`='" . $namaLokasi . "',`alamat_lokasi`='" . $alamatLokasi . "' WHERE `lokasi`.`id_lokasi` = '" . $idLokasi . "'";
        $editDataLoc = mysqli_query($this->connection, $sql);
        return $editDataLoc;
    }

    //Add Data Perjalanan
    function addCatatanPerjalanan($nik, $tgl, $jam, $suhu_tubuh, $id_lokasi)
    {
        mysqli_query($this->connection, "INSERT INTO `catatan_perjalanan`(`id_perjalanan`, `nik`, `tgl_perjalanan`, `jam_perjalanan`, `suhu_tubuh`, `id_lokasi`) VALUES (null,'" . $nik . "','" . $tgl . "','" . $jam . "','" . $suhu_tubuh . "','" . $id_lokasi . "')");
    }

    //Show Data History Perjalanan
    function showHistoryPerjalanan($nik)
    {
        $sql = "SELECT catatan_perjalanan.tgl_perjalanan, catatan_perjalanan.jam_perjalanan, catatan_perjalanan.suhu_tubuh, lokasi.nama_lokasi FROM `catatan_perjalanan` INNER JOIN lokasi ON catatan_perjalanan.id_lokasi = lokasi.id_lokasi WHERE catatan_perjalanan.nik = '" . $nik . "'";
        $sqlHistoryPerjalanan = mysqli_query($this->connection, $sql);
        while ($row = mysqli_fetch_array($sqlHistoryPerjalanan)) {
            $hisPerResult[] = $row;
        }

        return $hisPerResult;
    }

    //Count data of History Perjalanan
    function countDataHisPer($nik)
    {
        $sql = "SELECT catatan_perjalanan.tgl_perjalanan, catatan_perjalanan.jam_perjalanan, catatan_perjalanan.suhu_tubuh, lokasi.nama_lokasi FROM `catatan_perjalanan` INNER JOIN lokasi ON catatan_perjalanan.id_lokasi = lokasi.id_lokasi WHERE catatan_perjalanan.nik = '" . $nik . "'";
        $sqlHistoryPerjalanan = mysqli_query($this->connection, $sql);
        $numsqlHistoryPerjalanan = mysqli_num_rows($sqlHistoryPerjalanan);
        return $numsqlHistoryPerjalanan;
    }

    //Count data Lokasi
    function countLokasi()
    {
        $sql = "SELECT * FROM `lokasi`";
        $data = mysqli_query($this->connection, $sql);
        $countData = mysqli_num_rows($data);
        return $countData;
    }

    //Count data pengguna
    function countDataPengguna()
    {
        $sql = "SELECT * FROM `pengguna`";
        $data = mysqli_query($this->connection, $sql);
        $countData = mysqli_num_rows($data);
        return $countData;
    }
}
