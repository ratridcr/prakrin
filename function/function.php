<?php

class database{

    protected $koneksi;

    public function __construct()
    {
        $this->koneksi = mysqli_connect('localhost','root','','prakrin');
    }

    public function login()
    {

        

        

        $username = $_POST['username']; 
        $password = $_POST['password'];

        $query = mysqli_query($this->koneksi,"SELECT * FROM login WHERE username = '$username' AND password = '$password'");

        $cek = mysqli_num_rows($query);

        var_dump

        if($cek > 0){
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
        }else{

        }

        // if (isset($_POST['login'])) {
        //     $user = $_POST["user"]; 
        //     $pass = $_POST["pass"];
        //     $query = mysqli_query($this->koneksi,"SELECT * FROM login WHERE username = '$user'");
        //     $tampil = mysqli_fetch_array($query);
        //     $username = $tampil[2];
        //     $password = $tampil[3];
        // }
    }
}

?>