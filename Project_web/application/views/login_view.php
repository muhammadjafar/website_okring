<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="http://localhost/Android/upload/okring.png">
<title>Login Admin</title>
<link rel="stylesheet" href="http://localhost/web2/assets/css/bootstrap.min.css">
<script src="http://localhost/web2/assets/js/jquery-3.1.1custom/jquery-3.1.1.min.js"></script>
<style>
.login-panel{
	margin-top:5%;
}
body{background-color:#e76a58; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:14px;}

</style>
</head>

<body>
<?php
	/*include "../../connect.php";
	if(isset($_REQUEST['submit'])){
		$admin=$_REQUEST['admin'];
		$pass=$_REQUEST['pass'];
		$sql=mysqli_query($db, "select * from admin where admin='$admin'");
		$num=mysqli_num_rows($sql);
		$isi=mysqli_fetch_array($sql);
		if($num!=0){
			if($isi['admin']==$admin){
				if($isi['password']==$pass){
					if($isi['status']!='blokir'){
					session_start();
					$_SESSION['admin']=$isi['admin'];
					$_SESSION['pass']=$isi['password'];
					header('location:admin.php');
					}else{
						echo "<script>document.location.href='index.php?status=Anda diblokir';</script>";
					}
				}else{
					echo "<script>document.location.href='index.php?status=password salah';</script>";
				}
			}else{
				/*echo "<script>document.location.href='index.php?status=username salah';</script>";*/
		/*	}
		}else{
			echo "<script>document.location.href='index.php?status=username tidak ditemukan';</script>";
		}
	}*/
?>
<div class="container">
<center><h3>Login Penjual</h3></center>
<center><img src="http://localhost/Android/upload/okring.png" width="200px" height="200px"></center>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class=" login-panel panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign in</h3>
                </div>
                <div class="panel-body">
                <form name="login1" action="" method="post" class="form-horizontal" role="form">
                    <fieldset>
                        <?php  
							if(isset($_REQUEST['status'])){
						?>
						<div class="alert alert-danger text-center"><span class="glyphicon glyphicon-warning-sign"></span><?php echo " &nbsp;".$_GET['status']."";?></div>
						<?php }?>
		
						<div class="form-group">
                            <label class=" control-label col-sm-4" for="admin">Username:</label>
                                <div class=" col-sm-8">
                                    <input type="text" name="txt_user" class="form-control" id="admin" autofocus required>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class=" control-label col-sm-4" for="password">Password:</label>
                            <div class="col-sm-8">
                            <input type="password" name="txt_password" class="form-control" id="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-4">
                            <input type="submit" name="btnLog" class="btn btn-warning" value="Masuk">
                        </div>
                        </div>
                    </fieldset>
                </form>
                </div>
            </div>
        </div>
    </div>
    <center>Copyright &copy; O Kring<br>Since 2017</center>
</div>
</body>
</html>