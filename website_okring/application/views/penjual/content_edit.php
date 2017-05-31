<section class="content">
	<div class="panel">
		<div class="panel-heading">
			Edit Profil
		</div>
		<div class="panel-body">
			<br><br>
			<form class="form-horizontal" method="post" action="edit" enctype="multipart/form-data">
				<div class="col-sm-5">
				<input type="hidden" value="<?php echo $model->id;?>" name="id">
				<input type="hidden" value="<?php echo $model->foto;?>" name="fotolama">
				<div class="form-group">
				<div class="" data-role="input-control">
					<img src="<?php echo base_url()?>/assets/<?php echo $model->foto?>" alt="foto profil" width="150" height="150" class="img-rounded"><br>
					<label class="control-label">ganti foto</label>
					<input type="file" name="image" class="form-control" accept="image/*">
				</div>
				</div>
				 <div class="form-group">
					<label class="control-label" for="nama">Nama Catering </label>
					<div class="" data-role="input-control">
						<input type="text" name="nama" value="<?php echo $model->nama;?>" class="form-control" id="nama" placeholder="Masukkan Nama Catering" rel="tooltip" title="Isikan nama lengkap anda" data-placement="right" required="required">
					 </div>
				</div>
				<div class="row">
                     <div class="">
                         <button type="submit" class="btn btn-danger" name="edit_profil">Edit</button>
                     </div>
                 </div>
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<div class="form-group">
					<label class="control-label">Username </label>
					<div class="" data-role="input-control">
						<input type="text" value="<?php echo $model->user;?>" class="form-control" rel="tooltip" readonly>
					 </div>
				</div>
				 <div class="form-group">	
					<label class="control-label " for="email">Email :</label>
					<div class="" data-role="input-control">
						<input type="email" value="<?php echo $model->email;?>" class="form-control" name="email" id="email" placeholder="Masukkan Email" rel="tooltip" title="Email digunakan untuk Lupa Password" data-placement="right" required="required">
					 </div>
				</div>

				 <div class="form-group">
					 
					 <label class="control-label" for="hp">No Handphone :</label>
					 <div class="" data-role="input-control">
						 <input type="text" name="telp" value="<?php echo $model->telp;?>" maxlength="13"  class="form-control" id="hp" placeholder="No Handphone" rel="tooltip" title="No Handphone Anda" data-placement="right" required="required" >
						</div>
				 </div>

				 <div class="form-group">
					 
					 <label class="control-label" for="alamat">Alamat :</label>
					 <div class="">
						<textarea name="alamat" class="form-control" required="required" placeholder="Masukkan Alamat" id="alamat"><?php echo $model->alamat;?></textarea>
					 </div>
				 </div>
				</div>
         </form>
		</div>
	</div>
</section>