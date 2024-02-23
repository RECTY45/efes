<?php

session_start();
$koneksi = mysqli_connect('localhost', 'u527366907_efes', 'BintangFery123$$', 'u527366907_db_efes');
if (!$koneksi) {
    echo 'Koneksi ke database gagal!';
}

function is_login($level = '')
{
    if (!$_SESSION['login']) {
        header('location: login.php');
    } 
    
    if ($level !== '') {
        if ($_SESSION['level'] !== $level) {
            header('location: login.php');
        }
    }
}
