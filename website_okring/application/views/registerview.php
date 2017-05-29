<!doctype html>
<head>
<link rel="shortcut icon" href="<?php echo base_url()?>assets/logo2.png">
	<title>Pendaftaran</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet" />
<style>
body{background-color:#eae8e8; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:14px;}
.navbar-custom{
	background-color:#3D9970;
	color:#6c6c6c;
}
.navbar-custom .navbar-nav > li > a{
	color:#FEFEFE;
}
.navbar-custom .navbar-nav > li > a:active{
	background-color:#2f5780;
}
.navbar-custom .navbar-nav > li > a:visited{
	background-color:#337ab7;
}
</style>
</head>

<body>
<div class="container" style="padding-top:1%">
	<center><img src="<?php echo base_url()?>/tugas/images/logookring.png" height='120' width='100'></center>
	<center><h3>Pendaftaran Member Catering</h3></center><br>
	<div class="col-md-8 col-md-offset-2">
    	<div class="panel">
        	<div class="panel-body">
        <br><br>
				<form class="form-horizontal" method="post" action="register" id="tambahakun">
				 <div class="form-group">
					
					<label class="control-label col-sm-3" for="username"><?php echo $model->labels['username']; ?></label>
					<div class="col-sm-7" data-role="input-control">
						<input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username" rel="tooltip" title="Isikan nama lengkap anda" data-placement="right" required="required">
					 </div>
				</div>
				 <div class="form-group">
					
					<label class="control-label col-sm-3" for="nama"><?php echo $model->labels['nama']; ?></label>
					<div class="col-sm-7" data-role="input-control">
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Catering" rel="tooltip" title="Isikan nama lengkap anda" data-placement="right" required="required">
					 </div>
				</div>

				 <div class="form-group">
				
					<label class="control-label col-sm-3" for="email"><?php echo $model->labels['email']; ?></label>
					<div class="col-sm-7" data-role="input-control">
						<input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" rel="tooltip" title="Email digunakan untuk Lupa Password" data-placement="right" required="required">
					 </div>
				</div>

				 <div class="form-group">
					 
					 <label class="control-label col-sm-3" for="hp"><?php echo $model->labels['telp']; ?></label>
					 <div class="col-sm-7" data-role="input-control">
						 <input type="text" name="telp" maxlength="13" pattern="[0-9]+.{10,13}" oninvalid="setCustomValidity('Input Hanya Boleh Angka!')" oninput="setCustomValidity('')" class="form-control" id="hp" placeholder="No Handphone" rel="tooltip" title="No Handphone Anda" data-placement="right" required="required" >
						</div>
				 </div>


				 <div class="form-group">
					 
					 <label class="control-label col-sm-3" for="password"><?php echo $model->labels['pass']; ?></label>
					 <div class="col-sm-7">
						 <input type="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" oninvalid="setCustomValidity('Minimal 1 Huruf Kapital,1 Huruf Kecil dan 1 Angka!')" oninput="setCustomValidity('')" class="form-control" name="pass" id="password" placeholder="Password" required="required">
					 </div>

				 </div>

				 <div class="form-group">
					 
					 <label class="control-label col-sm-3" for="alamat"><?php echo $model->labels['alamat']; ?></label>
					 <div class="col-sm-7">
						<textarea name="alamat" class="form-control" required="required" placeholder="Masukkan Alamat" id="alamat"></textarea>
					 </div>
				 </div>

                 <div class="row">
                     <div class="col-sm-5"></div>
                     <div class="col-sm-3">
                         <button type="submit" class="btn btn-danger" name="register">Daftar</button>
                     </div>
                 </div>

         </form>
		</div>
	</div>
	</div>
</div>
<center>Sudah Punya Akun? <a href="<?php echo base_url()?>index.php/Login1">Login</a></center><br>
<center>Copyright &copy; O Kring<br>Since 2017</center>
<br>
</body>
</html>
