<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>FORM ARTIKEL</h3>
							</div>
							<div class="module-body">
									<br />
									<form class="form-horizontal row-fluid"  method="post" action="<?= base_url('admin/tambah_artikel')?>">
										<div class="control-group">
											<label class="control-label" for="basicinput">Judul</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="judul" value="<?php echo set_value('judul', $artikel->judul)?>" disabled>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Tanggal</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="tanggal" value="<?php echo set_value('tanggal', $artikel->tanggal)?>" disabled>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Author</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="author" value="<?php echo set_value('author', $artikel->author)?>" disabled>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Isi</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="isi" disabled>
													<?= set_value('isi', $artikel->isi)?>
												</textarea>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Kategori</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="kategori" value="<?php echo set_value('kategori', $artikel->kategori)?>" disabled>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Views</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="views" value="<?php echo set_value('views', $artikel->views)?>" disabled>
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<a href="<?= base_url('admin/artikel')?>" class="btn">Kembali</a>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
