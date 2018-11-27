<?php

//login.php
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
?>

<form method="POST" action="proses/ceklogin.php">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td colspan="2"><button type="submit">Log In</button></td>
		</tr>
	</table>
</form>