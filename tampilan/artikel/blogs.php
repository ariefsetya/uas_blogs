<?php
$hasil = $koneksi->prepare("SELECT * FROM artikel ORDER BY id DESC");
$hasil->execute();
$data = $hasil->fetchAll();
?>
<table>
<tbody>
<?php
foreach ($data as $key) {
?>
<tr>
<td><h2><?php echo $key['judul'];?></h2><br>Ditulis oleh <?php echo $key['penulis'];?></td>
<tr>
</tr>
<td><p><?php echo $key['konten'];?></p>
<hr></td>
</tr>
<?php
}
?>
</tbody>
</table>