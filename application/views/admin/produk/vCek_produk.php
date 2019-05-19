<div class="span9">
					<div class="content">

						<div class="module">
							
							<div class="module-body">
									<br />
									<form class="form-horizontal row-fluid"  method="post" action="<?= base_url('Admin/tambah_produk')?>">
										<div class="control-group">
											<label class="control-label" for="basicinput">Kategori</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="category" value="<?php echo set_value('category', $admin->category)?>" disabled>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama Produk</label>
											<div class="controls">
													<input type="text" placeholder="" class="span8" name="nama_produk" value="<?= set_value('nama_produk', $admin->nama_produk)?>" disabled>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Deskripsi</label>
											<div class="controls">
													<input type="textarea" placeholder="" class="span8" name="deskripsi" value="<?= set_value('deskripsi', $admin->deskripsi)?>" disabled>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Harga</label>
											<div class="controls">
													<input type="text" placeholder="" class="span8" name="harga" value="<?= set_value('harga', $admin->harga)?>" disabled>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Stok</label>
											<div class="controls">
													<input type="text" placeholder="" class="span8" name="stok" value="<?= set_value('stok', $admin->stok)?>" disabled>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Views</label>
											<div class="controls">
													<input type="text" placeholder="" class="span8" name="Views" value="<?= set_value('views', $admin->views)?>" disabled>
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<a href="<?= base_url('Admin/produk')?>" class="btn">Kembali</a>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
