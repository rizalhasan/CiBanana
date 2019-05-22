<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Data <?= set_value('Nama', $admin->nama)?></h3>
							</div>
							<div class="module-body">
									<br />
									<form class="form-horizontal row-fluid"  method="post" action="<?= base_url('Admin/edit_admin/'.$admin->id_admin)?>">
										<div class="control-group">
											<label class="control-label" for="basicinput">Nama Lengkap</label>
											<div class="controls">
												<input type="text" id="" placeholder="" class="span8" name="nama" value="<?php echo set_value('Nama', $admin->nama)?>" >
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Telepon</label>
											<div class="controls">
													<input type="text" placeholder="" class="span8" name="tlp" value="<?= set_value('Telepon', $admin->telepon)?>" >
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Username</label>
											<div class="controls">
													<input type="text" placeholder="" class="span8" name="username" value="<?= set_value('Username', $admin->username)?>" >
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Password</label>
											<div class="controls">
													<input type="text" placeholder="" class="span8" name="password" value="<?= set_value('Password', $admin->password)?>" >
											</div>
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
