<!doctype html>
<head>
<link rel="shortcut icon" href="<?php echo base_url()?>assets/logo2.png">
	<title>Edit Profil</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet" />
<style>
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
<div style="background-color:#FBFBFB; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:14px;">
<nav class="navbar navbar-custom" style="background-color:#e33211">
  <div class="container">
    <ul class="nav navbar-nav navbar-left">
    	<li><a href="../index.php"><span class="glyphicon glyphicon-chevron-left"></span> kembali</a></li>
    </ul>
  </div>
</nav>
	<div class="container">
	<center><h3>Edit Profil Catering</h3></center>
    	<div class="panel">
        	<div class="panel-body">
        <br><br>
				<form class="form-horizontal" method="post" action="register" id="tambahakun">
						 
				 <div class="form-group">
					<div class="col-sm-1"></div>
					<label class="control-label col-sm-3" for="nama">Username :</label>
					<div class="col-sm-4" data-role="input-control">
						<input type="text" value="<?php echo $model->username;?>" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Catering" rel="tooltip" title="Isikan nama lengkap anda" data-placement="right" required="required">
					 </div>
				</div>

				 <div class="form-group">
					<div class="col-sm-1"></div>
					<label class="control-label col-sm-3" for="email">Email :</label>
					<div class="col-sm-4" data-role="input-control">
						<input type="email" value="<?php echo $model->email;?>" class="form-control" name="email" id="email" placeholder="Masukkan Email" rel="tooltip" title="Email digunakan untuk Lupa Password" data-placement="right" required="required">
					 </div>
				</div>

				 <div class="form-group">
					 <div class="col-sm-1"></div>
					 <label class="control-label col-sm-3" for="hp">No Handphone :</label>
					 <div class="col-sm-4" data-role="input-control">
						 <input type="text" name="telp" value="<?php echo $model->telp;?>" maxlength="13" pattern="[0-9]+.{10,13}" oninvalid="setCustomValidity('Input Hanya Boleh Angka!')" oninput="setCustomValidity('')" class="form-control" id="hp" placeholder="No Handphone" rel="tooltip" title="No Handphone Anda" data-placement="right" required="required" >
						</div>
				 </div>


				 <div class="form-group">
					 <div class="col-sm-1"></div>
					 <label class="control-label col-sm-3" for="password">Password :</label>
					 <div class="col-sm-4">
						 <input type="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" value="<?php echo $model->password;?>" oninvalid="setCustomValidity('Minimal 1 Huruf Kapital,1 Huruf Kecil dan 1 Angka!')" oninput="setCustomValidity('')" class="form-control" name="pass" id="password" placeholder="Password" required="required">
					 </div>

				 </div>

				 <div class="form-group">
					 <div class="col-sm-1"></div>
					 <label class="control-label col-sm-3" for="alamat">Alamat :</label>
					 <div class="col-sm-4">
						<textarea name="alamat" class="form-control" required="required" placeholder="Masukkan Alamat" id="alamat">value="<?php echo $model->alamat;?>"</textarea>
					 </div>
				 </div>

                 <div class="row">
                     <div class="col-sm-4"></div>
                     <div class="col-sm-3">
                         <button type="submit" class="btn btn-danger" name="register">Daftar</button>
                     </div>
                 </div>

         </form>
		</div>
	</div>
    <center>Copyright &copy; O Kring<br>Since 2017</center>
</div>
</div>
</body>
</html>
