<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>FORM KONFIRMASI</h3>
							</div>
							<div class="module-body">
									<br />
									<form class="form-horizontal row-fluid"  method="post" action="<?= base_url('admin/edit_konfirmasi/'.$konfirmasi->id_order)?>">
										<div class="control-group">
											<label class="control-label" for="basicinput">Tanggal</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="tanggal" value="<?php echo set_value('tanggal', $konfirmasi->tanggal)?>">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama Pemilik</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="nama_pemilik" value="<?php echo set_value('nama_pemilik', $konfirmasi->nama_pemilik)?>">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama BANK</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="nama_bank" value="<?php echo set_value('nama_bank', $konfirmasi->nama_bank)?>" disabled>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Jumlah Transfer</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="jumlah_transfer" value="<?php echo set_value('jumlah_transfer', $konfirmasi->jumlah_transfer)?>">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Alamat Kirim</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="alamat_kirim">
													<?= set_value('alamat_kirim', $konfirmasi->alamat_kirim)?>
												</textarea>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">ID Pembelian</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="id_pembelian" value="<?php echo set_value('id_pembelian', $konfirmasi->id_pembelian)?>" disabled>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Bukti</label>
											<div class="controls">
												<img src="">
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<input type="submit" class="btn" name="submit" value="Simpan">
												<a href="<?= base_url('admin/konfirmasi')?>" class="btn">Kembali</a>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
