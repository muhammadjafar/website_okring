<html>
<head>
	<title>Katering</title>
</head>
<body>
		<h2>Daftar Katering</h2>
		<table border="1px" width="250px">
			<?php
				foreach($rows as $row){
			?>
			<tr>
				<td><h4><?php echo $row->namakatering; ?></h4></td>
				<td><h6>Kode Katering : <?php echo $row->kodekatering; ?></h6></td>
			</tr>
			
			<tr>
				<td colspan="2" align="right"><img  src="<?=base_url()?>assets/foto/<?=$row->foto;?>" width="200px" height="80px"></td>
			</tr>
		
			<tr>
				<td>Rating</td>
				<td align="right"><input type="button" value="View"/></td>
			</tr>
			<?php
				}
			?>
			</table>
</body>
</html>