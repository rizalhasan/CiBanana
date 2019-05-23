<div class="span9">
					<div class="content">
						<div class="module">
                                <div class="module-head">
                                    <h3>DATA KATEGORI</h3>
                                </div>
                                <br>
                                        &nbsp;  &nbsp;
                                        <a href="<?= base_url('admin/form_isiKategori')?>">
                                        	<button><b> &nbsp;<i class="icon-plus"></i> TAMBAH DATA KATEGORI</b></button>
                                        </a>
                                <div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th width="30px;"><center>No.</center></th>
											<th>Nama Kategori</th>
											<th width="100px;"><center>Aksi</center></th>
											<th><center>No.</center></th>
											<th>Nama</th>
											<th><center>Aksi</center></th>
										</tr>
									</thead>
									<tbody>
										<?php
											$no = 1;
											if(!empty($isiKategori)){
												foreach ($isiKategori as $data) {
										?>
										<tr class="odd gradeX">
											<td><center><?php echo $no++;?></center></td>
											<td><?php echo $data->nama;?></td>
											<td><center>
												<a href="<?php echo base_url('admin/edit_isiKategori/'.$data->id_kategori)?>">
													<u>Ubah</u>
												</a>
                                                <a href="<?php echo base_url('admin/lihat_isiKategori/'.$data->id_kategori)?>">&nbsp;
                                                	<u>Cek</u>
                                                </a>
                                                <a href="<?php echo base_url('admin/hapus_isiKategori/'.$data->id_kategori)?>" onclick="javascript: return confirm('Hapus data?')">&nbsp;
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
											<th width="30px;"><center>No.</center></th>
											<th>Nama Kategori</th>
											<th><center>Aksi</center></th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					<br />
					</div>
				</div>
									</tfoot>
								</table>
							</div>
						</div><!--/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
