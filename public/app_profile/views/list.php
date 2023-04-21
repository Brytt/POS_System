<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Profile</h1>

	<div class="row">
		<div class="col-sm-12 col-md-6">
			<p class="mb-4">Edit your Profile details </p>
		</div>
		<div class="col-sm-12 col-md-6">
			
		</div>
	</div>

	
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col-sm-7">
					<h6 class="m-0 font-weight-bold text-primary">Enter Profile's details</h6>
				</div>
				<div class="col-sm-3">
					<a href="javascript:void(0);" onclick="$('#pg').val('app_products');$('#view').val('changepassword');$('#keys').val('<?php echo ''; ?>');document.myform.submit();" class="btn btn-primary btn-icon-split" style="float: right;">
						<span class="icon text-white-50">
							<i class="fas fa-key"></i>
						</span>
						<span class="text">Change Password</span>
					</a>
				</div>
				<div class="col-sm-2">
					<a href="javascript:void(0);" onclick="$('#pg').val('app_profile');$('#view').val('list');$('#class_call').val('update');$('#keys').val('<?php echo ''; ?>');document.myform.submit();" class="btn btn-success btn-icon-split" style="float: right;">
						<span class="icon text-white-50">
							<i class="fas fa-plus"></i>
						</span>
						<span class="text">Submit</span>
					</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
					<div class="row">
						<div class="col-sm-3">
						</div>

						<div class="col-sm-6">
							
							<div class="form-group">
								<label for="">First Name <span>*</span></label>
								<input type="email" class="form-control form-control-user" id="admin_fname" aria-describedby="emailHelp" name="admin_fname" value="<?php echo $result->USR_FIRSTNAME; ?>">
							</div>

							<div class="form-group">
								<label for="">Last Name <span>*</span></label>
								<input type="email" class="form-control form-control-user" id="admin_lname" aria-describedby="emailHelp" name="admin_lname" value="<?php echo $result->USR_OTHERNAME; ?>">
							</div>

							<div class="form-group">
								<label for="">Email <span>*</span></label>
								<input type="text" class="form-control form-control-user" id="admin_email" name="admin_email" value="<?php echo $result->USR_EMAIL; ?>">
							</div>

							<div class="form-group">
								<label for="">Phone Number <span>*</span></label>
								<input type="number" class="form-control form-control-user" id="admin_phone" name="admin_phone" value="<?php echo $result->USR_PHONE; ?>">
							</div>

						</div>

						<div class="col-sm-3">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>