<div class="span9">
					<div class="content">
						<div class="module">
                                <div class="module-head">
                                    <h3>DATA KHIMAR</h3>
                                </div>
                                <br>
                                        &nbsp;  &nbsp;
                                        <a href="<?= base_url('admin/form_khimar')?>">
                                        	<button><b> &nbsp;<i class="icon-plus"></i>  TAMBAH DATA KHIMAR</b></button>
                                        </a>
                                <div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th><center>No.</center></th>
											<th>Nama Produk</th>
											<th>Harga</th>
											<th>Stok</th>
											<th><center>Aksi</center></th>
										</tr>
									</thead>
									<tbody>
										<?php
											$no = 1;
											if(!empty($khimar)){
												foreach ($khimar as $data) {
										?>
										<tr class="odd gradeX">
											<td><center><?php echo $no++;?></center></td>
											<td><?php echo $data->nama_produk;?></td>
											<td>
												<?php 
												echo convRupiah($data->harga);
												?>		
											</td>
											<td><?php echo $data->stok;?></td>
											<td><center>
												<a href="<?php echo base_url('admin/edit_khimar/'.$data->id_produk)?>">
													<u>Ubah</u>
												</a>
                                                <a href="<?php echo base_url('admin/lihat_khimar/'.$data->id_produk)?>">&nbsp;
                                                	<u>Cek</u>
                                                </a>
                                                <a href="<?php echo base_url('admin/hapus_khimar/'.$data->id_produk)?>" onclick="javascript: return confirm('Hapus data?')">&nbsp;
                                                	<u>Hapus</u>
                                                </a>
											</center></td>
										</tr>
										<?php
											}
										}?>
									</tbody>
									<tfoot>
										<tr>
											<th><center>No.</center></th>
											<th>Nama Produk</th>
											<th>Harga</th>
											<th>Stok</th>
											<th><center>Aksi</center></th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div><!--/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
