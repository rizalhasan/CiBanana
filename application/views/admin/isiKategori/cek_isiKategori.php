<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>FORM KATEGORI</h3>
							</div>
							<div class="module-body">
									<br />
									<form class="form-horizontal row-fluid"  method="post" action="<?= base_url('admin/tambah_isiKategori')?>">
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="nama" value="<?php echo set_value('nama', $isiKategori->nama)?>">
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<a href="<?= base_url('admin/isiKategori')?>" class="btn">Kembali</a>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
