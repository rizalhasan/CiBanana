<div class="span9">
					<div class="content">
						<div class="module">
                                <div class="module-head">
                                    <h3>DATA KONFIRMASI</h3>
                                </div>
                                <br>
                                        &nbsp;  &nbsp;
                                        <a href="<?= base_url('admin/form_artikel')?>">
                                        	<button><b> &nbsp;<i class="icon-plus"></i> TAMBAH DATA KONFIRMASI</b></button>
                                        </a>
                                <div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th><center>No.</center></th>
											<th>Tanggal</th>
											<th>Nama Pemilik</th>
											<th>Nama Bank</th>
											<th>Jumlah Transfer</th>
											<th>Alamat Kirim</th>
											<th>ID Pembelian</th>
											<th>Bukti</th>
											<th><center>Aksi</center></th>
										</tr>
									</thead>
									<tbody>
										<?php
											$no = 1;
											if(!empty($konfirmasi)){
												foreach ($konfirmasi as $data) {
										?>
										<tr class="odd gradeX">
											<td><center><?php echo $no++;?></center></td>
											<td><?php echo $data->tanggal;?></td>
											<td><?php echo $data->nama_pemilik;?></td>
											<td><?php echo $data->nama_bank;?></td>
											<td><?php echo convRupiah($data->jumlah_transfer);?></td>
											<td><?php echo $data->alamat_kirim;?></td>
											<td><?php echo $data->id_pembelian;?></td>
											<td><?php echo $data->bukti;?></td>

											<td><center>
												<a href="<?php echo base_url('admin/edit_konfirmasi/'.$data->id_order)?>">
													<u>Ubah</u>
												</a>
                                                <a href="<?php echo base_url('admin/lihat_konfirmasi/'.$data->id_order)?>">&nbsp;
                                                	<u>Cek</u>
                                                </a>
                                                <a href="<?php echo base_url('admin/hapus_konfirmasi/'.$data->id_order)?>" onclick="javascript: return confirm('Hapus data?')">&nbsp;
                                                	<u>Hapus</u>
                                                </a>
											</center></td>
										</tr>
										<?php
											}
										}?>
									</tbody>
									<tfoot>
									</tfoot>
								</table>
							</div>
						</div><!--/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
