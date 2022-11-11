<?php
// koneksi kedalam database
$server = "localhost";
$user = "root";
$password = "";
$database = "latihancrudk1";

// membuat koneksi
$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

if (!function_exists('selected')) {
    function selected($base, $mine)
    {
        return $base !== $mine ?: "selected";
    }
}