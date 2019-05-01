<div class="span9">
					<div class="content">
						<div class="module">
                                <div class="module-head">
                                    <h3>DATA ADMIN</h3>
                                </div>
                                <br>
                                        &nbsp;  &nbsp;
                                        <a href="<?= base_url('admin/form_admin')?>">
                                        	<button><b> &nbsp;<i class="icon-plus"></i>  TAMBAH DATA ADMIN</b></button>
                                        </a>
                                <div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th><center>No.</center></th>
											<th>Nama Lengkap</th>
											<th>Username</th>
											<th>Password</th>
											<th><center>Aksi</center></th>
										</tr>
									</thead>
									<tbody>
										<?php
											$no = 1;
											if(!empty($admin)){
												foreach ($admin as $data) {
										?>
										<tr class="odd gradeX">
											<td><center><?= $no++;?></center></td>
											<td><?= $data->nama?></td>
											<td><?= $data->username?></td>
											<td><?= $data->password?></td>
											<td><center>
												<a href="<?php echo base_url('Admin/edit_admin/'.$data->id_admin)?>">
													<u>Ubah</u>
												</a>
                                                <a href="<?php echo base_url('Admin/cek_admin/'.$data->id_admin)?>">&nbsp;
                                                	<u>Cek</u>
                                                </a>
                                                <a href="<?php echo base_url('Admin/hapus_admin/'.$data->id_admin)?>" onclick="javascript: return confirm('Hapus data?')">&nbsp;
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
											<th>Nama Lengkap</th>
											<th>Username</th>
											<th>Password</th>
											<th><center>Aksi</center></th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div><!--/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
