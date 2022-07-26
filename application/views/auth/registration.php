<div class="container">
	<!-- Outer Row -->
	<div class="row justify-content-center">
		<div class="col-lg-5">
			<div class="card o-hidden border-0 shadow-lg my-5" style="background:rgba(255, 255, 255, 0.300)">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg">
							<div class="p-5">
								<div class="login-logo mb-4">
									<img src="<?= base_url('assets/'); ?>img/truck_icon.png"
									circle-img style="width:50%" class="mover" alt="">
								</div>
								<hr>
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
								</div>
								<form class="user" method="post"<?php base_url('auth/registration'); ?>>
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="name"
										placeholder="Full Name"	name="name" value="<?= set_value('name'); ?>">
											<?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
									</div>
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="email"
										placeholder="Email Address"	name="email" value="<?= set_value('email'); ?>">
											<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
									</div>
									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<input type="password" class="form-control form-control-user" id="password1"
												placeholder="Password" name="password1">
												<?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
										</div>
										<div class="col-sm-6">
											<input type="password" class="form-control form-control-user" id="password2"
												placeholder="Repeat Password" name="password2">
										</div>
									</div>
									<button type="submit" class="btn btn-outline-primary btn-user btn-block">
										Register Account
									</button>
								</form>
								<hr>
								<div class="text-center">
									<a class="small" href="<?= base_url(); ?>auth">Already have an account? Login!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>