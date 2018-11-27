<?php

//ceklogin.php
include '../conf.php';

session_start();

if(isset($_SESSION['logged'])){
	header("location:index.php");
}

$engi = "mysql";
$host = "localhost";
$dbsa = "crud";
$user = "root";
$pass = "";

$koneksi = new PDO($engi.':dbname='.$dbsa.";host=".$host,
					$user,
					$pass);

$username = post('username');
$password = post('password');

$login = $koneksi->prepare('SELECT * FROM user WHERE username="'.$username.'" and password="'.$password.'"');

$login->execute();

$hasil = $login->fetch(PDO::FETCH_ASSOC);
if(isset($hasil['username'])){
	$_SESSION['logged'] = true;
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	header("location:../index.php");
}else{
	header("location:../login.php");
}
?>