<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>FORM ADMIN</h3>
							</div>
							<div class="module-body">
									<br />
									<form class="form-horizontal row-fluid"  method="post" action="<?= base_url('Admin/tambah_produk')?>">
										<div class="control-group">
											<label class="control-label" for="basicinput">Kategori</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="category" value="<?= set_value('category')?>">
												<large style="color: red;"><?= form_error('category');?></large>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama Produk</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="nama_produk" value="<?= set_value('nama_produk')?>">
												<large style="color: red;"><?= form_error('nama_produk');?></large>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Deskripsi</label>
											<div class="controls">
												<textarea type="textArea" id="" placeholder="" class="span8" name="deskripsi" value="<?= set_value('deskripsi')?>"></textarea>
												<large style="color: red;"><?= form_error('deskripsi');?></large>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Harga</label>
											<div class="controls">
													<input type="number" placeholder="" class="span7" name="harga" value="<?= set_value('harga')?>" id="number">
													<large style="color: red;"><?= form_error('harga')?></large>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Stok</label>
											<div class="controls">
													<input type="number" placeholder="" class="span7" name="stok" value="<?= set_value('stok')?>" id="number">
													<large style="color: red;"><?= form_error('stok')?></large>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">View</label>
											<div class="controls">
													<input type="number" placeholder="" class="span7" name="views" value="<?= set_value('views')?>" id="number">
													<large style="color: red;"><?= form_error('views')?></large>
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<input type="submit" class="btn" name="submit" value="Simpan">
												<a href="<?= base_url('Admin/produk')?>" class="btn">Kembali</a>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
