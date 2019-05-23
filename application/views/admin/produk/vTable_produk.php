<div class="span9">
					<div class="content">
						<div class="module">
                                <div class="module-head">
                                    <h3>DATA PRODUK</h3>
                                    <h3>DATA ADMIN</h3>
                                </div>
                                <br>
                                        &nbsp;  &nbsp;
                                        <a href="<?= base_url('admin/form_produk')?>">
                                        	<button><b> &nbsp;<i class="icon-plus"></i>TAMBAH DATA PRODUK</b></button>
                                        	<button><b> &nbsp;<i class="icon-plus"></i>TAMBAH DATA ADMIN</b></button>
                                        </a>
                                <div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th><center>No.</center></th>
											<th>Kategori</th>
											<th>Nama Produk</th>
											<th>Deskripsi</th>
											<th>Harga</th>
											<th>Stok</th>
											<th>View</th>
											<th><center>Aksi</center></th>
										</tr>
									</thead>
									<tbody>
										<?php
											$no = 1;
											if(!empty($produk)){
												foreach ($produk as $data) {
											if(!empty($admin)){
												foreach ($admin as $data) {
										?>
										<tr class="odd gradeX">
											<td><center><?= $no++;?></center></td>
											<td><?= $data->category?></td>
											<td><?= $data->nama_produk?></td>
											<td><?= convRupiah($data->harga)?></td>
											<td><?= $data->deskripsi?></td>
											<td><?= $data->harga?></td>
											<td><?= $data->stok?></td>
											<td><?= $data->views?></td>
											<td><center>
												<a href="<?php echo base_url('Admin/edit_produk/'.$data->id_produk)?>">
													<u>Ubah</u>
												</a>
                                                <a href="<?php echo base_url('Admin/cek_produk/'.$data->id_produk)?>">&nbsp;
                                                	<u>Cek</u>
                                                </a>
                                                <a href="<?php echo base_url('Admin/hapus_produk/'.$data->id_produk)?>" onclick="javascript: return confirm('Hapus data?')">&nbsp;
                                                	<u>Hapus</u>
                                                </a>
											</center></td>
										</tr>
										<?php }
										} ?>
									</tbody>
									<tfoot>
										<tr>
											<th><center>No.</center></th>
											<th>Kategori</th>
											<th>Nama Produk</th>
											<th>Harga</th>
											<th>Stok</th>
											<th>View</th>
											<th><center>Aksi</center></th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div><!--/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
