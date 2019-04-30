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
												<input type="text" id="" placeholder="" class="span8" name="nama">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Stok</label>
											<div class="controls">
													<input type="text" placeholder="" class="span8" name="stok">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Harga</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" placeholder="" class="span8" name="harga">
												</div>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Deskripsi</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="deskripsi"></textarea>
											</div>
										</div>
										<div class="control-group">
											<label class="controls" for="basicinput" style="color: red;"><i>*Isi data dengan lengkap dan benar</i></label>
										</div>
										<div class="control-group">
											<div class="controls">
												<input type="submit" class="btn" name="submit" value="Simpan">
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
