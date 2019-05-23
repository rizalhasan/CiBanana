<div class="span9">
					<div class="content">
						<div class="module">
                                <div class="module-head">
                                    <h3>DATA ARTIKEL</h3>
                                </div>
                                <br>
                                        &nbsp;  &nbsp;
                                        <a href="<?= base_url('admin/form_artikel')?>">
                                        	<button><b> &nbsp;<i class="icon-plus"></i> TAMBAH DATA ARTIKEL</b></button>
                                        </a>
                                <div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th><center>No.</center></th>
											<th>Judul</th>
											<th>Tanggal</th>
											<th>Author</th>
											<th>Kategori</th>
											<th>Views</th>
											<th><center>Aksi</center></th>
										</tr>
									</thead>
									<tbody>
										<?php
											$no = 1;
											if(!empty($artikel)){
												foreach ($artikel as $data) {
										?>
										<tr class="odd gradeX">
											<td><center><?php echo $no++;?></center></td>
											<td><?php echo $data->judul;?></td>
											<td><?php echo $data->tanggal;?></td>
											<td><?php echo $data->author;?></td>
											<td><?php echo $data->kategori;?></td>
											<td><?php echo $data->views;?></td>
											<td><center>
												<a href="<?php echo base_url('admin/edit_artikel/'.$data->id)?>">
													<u>Ubah</u>
												</a>
                                                <a href="<?php echo base_url('admin/lihat_artikel/'.$data->id)?>">&nbsp;
                                                	<u>Cek</u>
                                                </a>
                                                <a href="<?php echo base_url('admin/hapus_artikel/'.$data->id)?>" onclick="javascript: return confirm('Hapus data?')">&nbsp;
                                                	<u>Hapus</u>
                                                </a>
											</center></td>
										</tr>
										<?php
											}
										}?>
									</tbody>
									<tfoot>
											<th><center>No.</center></th>
											<th>Judul</th>
											<th>Tanggal</th>
											<th>Author</th>
											<th>Kategori</th>
											<th>Views</th>
											<th><center>Aksi</center></th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div><!--/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
