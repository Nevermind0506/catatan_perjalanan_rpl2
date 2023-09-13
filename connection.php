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
    var $msg = null;
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
        mysqli_query($this->connection, "INSERT INTO `pengguna`(`nik`, `username`, `password`, `nm_lengkap`, `email`, `level`, `jk`, `alamat`, `no_telp`, `tgl_lhr`, `tmpt_lhr`) VALUES('" . $nik . "', '" . $username . "', '" . $password . "', '" . $nmLengkap . "', '" . $email . "', 'masyarakat', '" . $jk . "', '" . $alamat . "', '" . $noTelp . "', '" . $tglLahir . "', '" . $tmpLahir . "')");
    }

    //Login 
    function LoginCheck($username, $password)
    {

        $loginCheckQuery = mysqli_query($this->connection, "SELECT * FROM `pengguna` WHERE username = '" . $username . "' AND password = '" . $password . "'");
        $dataFound = mysqli_num_rows($loginCheckQuery);
        if ($dataFound > 0) {
            $userLoginData = mysqli_fetch_array($loginCheckQuery);
            echo $idUserLogin = $userLoginData['nik'];
            echo $usernameLogin = $userLoginData['username'];
            echo $nmLengkapLogin = $userLoginData['nm_lengkap'];
            echo $levelLogin = $userLoginData['level'];

            $_SESSION['nikLogin'] = $idUserLogin;
            $_SESSION['usernameLogin'] = $usernameLogin;
            $_SESSION['nmLengkapLogin'] = $nmLengkapLogin;
            $_SESSION['levelLogin'] = $levelLogin;


            header('location: ../home/home_screen.php');
        } else {
            $this->msg = 'Akun tidak ditemukan!';
            header('location: login_screen.php');
        }
    }
}
