<div class="span9">
					<div class="content">

						<div class="module">
							<!-- <div class="module-head">
								<h3>Data <?= set_value('Nama', $admin->nama)?></h3>
							</div> -->
							<div class="module-body">
									<br />
									<form class="form-horizontal row-fluid"  method="post" action="<?= base_url('Admin/edit_produk/'.$admin->id_produk)?>">
										<div class="control-group">
											<label class="control-label" for="basicinput">Kategori</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="category" value="<?php echo set_value('category', $admin->category)?>" >
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama Produk</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="nama_produk" value="<?php echo set_value('nama_produk', $admin->nama_produk)?>" >
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Deskripsi</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="deskripsi" value="<?php echo set_value('deskripsi', $admin->deskripsi)?>" >
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Harga</label>
											<div class="controls">
													<input type="text" placeholder="" class="span8" name="harga" value="<?= set_value('harga', $admin->harga)?>" >
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Stok</label>
											<div class="controls">
													<input type="text" placeholder="" class="span8" name="stok" value="<?= set_value('stok', $admin->stok)?>" >
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Views</label>
											<div class="controls">
													<input type="text" placeholder="" class="span8" name="views" value="<?= set_value('views', $admin->views)?>" >
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
