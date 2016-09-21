<?php 

include 'koneksi';

// header colom
$field = array("ID Berita","Judul","Berita","Tanggal");

?>

<h1>Daftar Berita</h1>
	<hr>
	<table cellpadding=10 cellspacing=0 border=1>
		<thead>
			<?php 
				// looping header
				foreach ($field as $value) { 
			?>
			<th><?php echo $value; ?></th>
			<?php } ?>
		</thead>

		<tbody>
			<?php 	
				// looping row
				$result = $koneksi->query("SELECT * FROM tb_berita");
				foreach ($result as  $row) {  ?>
			<tr>	
	 			<td><?php echo $row['id_berita'];?></td>
	 			<td><?php echo $row['judul_berita']; ?></td>
	 			<td><?php echo $row['isi_berita']; ?></td>
	 			<td><?php echo $row['tanggal']; ?></td>
			</tr>			
			<?php  } ?>
		</tbody>
	</table>
	<br>
	<button><a href="laporan.php">Export to PDF</a></button>