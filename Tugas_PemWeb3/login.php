<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $u = 'lidya madini';
    $p = '456';

    if($username == $u AND $password == $p)
    {
        session_start();
        $_SESSION['nama'] = $username;
        $_SESSION['is_logged_id'] = TRUE;

        header("Location: halaman1.php");
    }
    else
    {
        echo "Username atau password salah";
    }
?>
