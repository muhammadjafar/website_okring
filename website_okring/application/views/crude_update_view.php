<html>
<head>
	<title>Demo CRUD</title>
</head>
<body>	
	<h2>Edit Profil</h2>
	<p><strong>Tambah User</strong></p>
	
	<form action="create" method="post">
		<?php echo $model->labels['id']; ?></br>
		<input type="text" name="id" size="10" maxlength="10" placeholder="<?php echo $model->id; ?>"/><br/><br/>
		
		<?php echo $model->labels['username']; ?></br>
		<input type="text" name="username" size="10" maxlength="10" placeholder="<?php echo $model->username; ?>"/><br/><br/>
		
		<?php echo $model->labels['password']; ?></br>
		<input type="password" name="password" size="10" maxlength="10" placeholder="<?php echo $model->password; ?>"/><br/><br/>
		
		<?php echo $model->labels['email']; ?></br>
		<input type="text" name="email" size="25" maxlength="25" placeholder="<?php echo $model->email; ?>"/><br/><br/>
		
		<?php echo $model->labels['stok']; ?></br>
		<textarea name="stok"></textarea><br/><br/>
		
				
		<input type="submit" name="btnSubmit" value="Simpan"/>
		<input type="button" value="Batal" onclik="javascript:history.go(-1);"/>
	</form>
	</body>
	</html>