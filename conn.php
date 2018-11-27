<?php

//conn.php
session_start();

// if(!isset($_SESSION['logged'])){
// 	header("location:login.php");
// }

$engi = "mysql";
$host = "localhost";
$dbsa = "blogs_0";
$user = "root";
$pass = "";

$koneksi = new PDO($engi.':dbname='.$dbsa.";host=".$host,
					$user,
					$pass);
?>