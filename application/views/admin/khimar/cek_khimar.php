<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>FORM KHIMAR</h3>
							</div>
							<div class="module-body">
									<br />
									<form class="form-horizontal row-fluid"  method="post" action="<?= base_url('admin/tambah_khimar')?>">
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama Produk</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="nama" value="<?php echo set_value('nama', $khimar->nama_produk)?>" disabled>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Stok</label>
											<div class="controls">
												<input type="text" placeholder="" class="span3" name="stok" value="<?php echo set_value('Stok', $khimar->stok)?>" disabled>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Harga</label>
											<div class="controls">
													<input type="text" placeholder="" class="span3" name="harga" value="<?php echo convRupiah(set_value('Harga', $khimar->harga))?>" disabled>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Deskripsi</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="deskripsi" disabled>
													<?= set_value('Deskripsi', $khimar->deskripsi)?>
												</textarea>
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<a href="<?= base_url('admin/khimar')?>" class="btn">Kembali</a>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
