<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>FORM ADMIN</h3>
							</div>
							<div class="module-body">
									<br />
									<form class="form-horizontal row-fluid"  method="post" action="<?= base_url('Admin/tambah_admin')?>">
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama Lengkap</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="nama" value="<?= set_value('nama')?>">
												<large style="color: red;"><?= form_error('nama');?></large>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Telepon</label>
											<div class="controls">
													<input type="number" placeholder="" class="span7" name="tlp" value="<?= set_value('tlp')?>" id="number">
													<large style="color: red;"><?= form_error('tlp')?></large>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Username</label>
											<div class="controls">
													<input type="text" placeholder="" class="span8" name="username" value="<?= set_value('username')?>">
													<large style="color: red;"><?= form_error('username')?></large>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Password</label>
											<div class="controls">
													<input type="password" placeholder="" class="span8" name="password1">
													<large style="color: red;"><?= form_error('password1')?></large>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">re-Password</label>
											<div class="controls">
													<input type="password" placeholder="" class="span8" name="password2">
											</div>
										</div>
										<div class="control-group">
											<label class="controls" for="basicinput" style="color: red;"><i>*Isi data dengan lengkap dan benar</i></label>
										</div> 
										<div class="control-group">
											<div class="controls">
												<input type="submit" class="btn" name="submit" value="Simpan">
												<a href="<?= base_url('Admin/admin')?>" class="btn">Kembali</a>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
