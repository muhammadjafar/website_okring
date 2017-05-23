<html>
<head>
	<title>Demo CRUD</title>
</head>
<body>
	<h2>Demo CRUD</h2>
	<p><a href="Crud/create">Tambah Data</a></p>
	<table border="1">
		<tr>
			<th width="100">Id</th>
			<th width="120">Username</th>
			<th width="100">Password</th>
			<th width="150">Email</th>
			<th width="100">Stok</th>
			</tr>
		
		<?php
			foreach($rows as $row) {
		?>
		<tr>
			<td><?php echo $row->id; ?></td>
			<td><?php echo $row->username; ?></td>
			<td><?php echo $row->password; ?></td>
			<td><?php echo $row->email; ?></td>
			<td><?php echo $row->stok; ?></td>
			<td align="center"><a href="Crud/update/<?php echo $row->id; ?>">Ubah</a>
			<a href="crud/delete/<?php echo $row->id; ?>">Hapus</a></td>
			</tr>
			<?php
				}
			?>
			</table>
			</body>
		</html>