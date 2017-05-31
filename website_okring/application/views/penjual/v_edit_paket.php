<section class="content">
	<div class="panel panel-default">
		<div class="panel">
			<div class="panel-heading">
				Daftar Paket
			</div>
			<div class="panel-body">
				<table width="100%" class="table table-striped table-hover table-bordered" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Paket</th>
										<th>Nama Menu</th>
										<th>Stok</th>
                                        <th>Deskripsi</th>
										<th>Foto</th>
										<th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php foreach ($row as $row){?>
									<tr>
										<td width="30px"><?php echo $row->id_barang?></td>
										<td width="120px"><?php echo $row->nama_paket?></td>
										<td width="120px"><?php echo $row->nama_barang?></td>
										<td width="100px"><?php echo $row->jumlah_barang?></td>
										<td><?php echo $row->deskripsi_barang?></td>
										<td width="70px"><img src="<?php echo base_url()?>assets/<?php echo $row->foto_barang?>" width="50px"></td>
										<td width="30px"><a href="<?php echo base_url()?>index.php/Home/hapus_paket/<?php echo $row->id_barang?>"><button type="button" class="btn btn-sm btn-danger" rel="tooltip" title="Hapus"><span class="glyphicon glyphicon-trash"></span></button></a></td>
									</tr>
								<?php }?>
                                </tbody>
                            </table>
					</div>
				</div>
			</div>
</section>