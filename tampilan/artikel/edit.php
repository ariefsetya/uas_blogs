<?php
$hasil = $koneksi->prepare("SELECT * FROM artikel WHERE `id` =
'".get('id')."'");
$hasil->execute();
$data = $hasil->fetch(PDO::FETCH_ASSOC);
?>
<form method="POST" action="proses/artikel/update.php">
<input type="hidden" name="id" value="<?php echo $data['id'];?>">
<table>
<tr>
<td>Judul</td>
<td><input type="text" name="judul" value="
<?php echo $data['judul'];?>"></td>
</tr>
<tr>
<td>Konten</td>
<td><textarea name="konten">
<?php echo $data['konten'];?></textarea></td>
</tr>
<tr>
<td>Penulis</td>
<td><input type="text" name="penulis" value="
<?php echo $data['penulis'];?>"></td>
</tr>
<tr>
<td></td>
<td><button type="submit">Update</button></td>
</tr>
</table>
</form>