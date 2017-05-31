<section class="content">

	<div class="panel">
		<div class="panel-heading">
			Tambah Produk
		</div>
		<div class="panel-body">
		<?php echo $this->session->flashdata("pesan");?>
			<br><br>
				<form class="form-horizontal" method="post" action="upload_process" enctype="multipart/form-data">
				 <input type="hidden" name="id" value="<?php echo $model->id?>">
				 <div class="form-group">
					 <div class="col-sm-1"></div>
					 <label class="control-label col-sm-3">Nama Menu :</label>
					 <div class="col-sm-4" data-role="input-control">
						 <input type="text" name="nama" class="form-control" id="hp" placeholder="Masukkan Nama Menu" rel="tooltip" title="Nama Paket" data-placement="right" required="required" >
						</div>
				 </div>
				 <div class="form-group">
					 <div class="col-sm-1"></div>
					 <label class="control-label col-sm-3">Pilih Paket :</label>
					 <div class="col-sm-4" data-role="input-control">
						 <select name="paket" class="form-control" required>
							<option value="">--paket--</option>
                                <?php
									foreach ($list->result() as $list){
										echo "<option>",$list->nama_paket, "</option>";
									}
                                ?>
						</select>
						</div>
				 </div>
				<div class="form-group">
					 <div class="col-sm-1"></div>
					 <label class="control-label col-sm-3">Stok :</label>
					 <div class="col-sm-4" data-role="input-control">
						 <input type="text" name="stok" class="form-control" id="hp" placeholder="Jumlah Paket" rel="tooltip" title="Nama Paket" data-placement="right" required="required" >
						</div>
				 </div>
				 <div class="form-group">
					 <div class="col-sm-1"></div>
					 <label class="control-label col-sm-3">Deskripsi Paket :</label>
					 <div class="col-sm-4">
						<textarea name="deskripsi" class="form-control" required="required" placeholder="Jumlah Paket"> </textarea>
					 </div>
				 </div>
				 
				 <div class="form-group">
					 <div class="col-sm-1"></div>
					 <label class="control-label col-sm-3">Pilih Foto :</label>
					 <div class="col-sm-4">
					<input type="file" name="image" class="form-control" required accept="image/*"><br><br>
					</div>
				 </div>
                 <div class="row">
                     <div class="col-sm-4"></div>
                     <div class="col-sm-3">
                         <button type="submit" class="btn btn-danger" name="tambah">Tambah</button>
                     </div>
                 </div>

         </form>
		</div>
	</div>
    </section>