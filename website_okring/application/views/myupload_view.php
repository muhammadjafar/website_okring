<html>
<head>
	<title>My Upload</title>
</head>
<body>
	<h3>My Upload Form</h3>
	<?php echo form_open_multipart('myupload/upload_process'); ?>
    	<label>Nama Paket</label>
    	<input type="text" name="nama" required><br><br>

    	<label>Deskripsi Paket</label>
    	<input type="text" name="deskripsi" required><br><br>
	
	    <label>Foto</label>
	    <input type="file" name="image" required><br><br>
				
  		<input type="submit" value="Submit" name="submit">
</body>