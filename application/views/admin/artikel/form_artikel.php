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
												<input type="text" id="" placeholder="" class="span8" name="judul">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Tanggal</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="tanggal">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Author</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="author">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Isi</label>
											<div class="controls">
													<textarea class="span8" rows="5" name="isi"></textarea>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Kategori</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="kategori">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Views</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="views">
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
