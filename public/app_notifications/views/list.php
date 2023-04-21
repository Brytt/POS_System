
<?php //echo "LIST ";
$rs= $paging->paginate();
?>

<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Notifications</h1>

	<div class="row">
		<div class="col-sm-12 col-md-6">
			<p class="mb-4">A list of notifications </p>
		</div>
		<div class="col-sm-12 col-md-6">
			
		</div>
	</div>

	
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Notifications</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
					<div class="row">
						<div class="col-sm-12 col-md-3">
							<div class="dataTables_length" id="dataTable_length">
								<label style="margin-bottom: 0rem;">Show 
								</label>
								<div>
									<?php echo $paging->renderFirst('<span class="fa fa-angle-double-left"></span>');?>
									<?php echo $paging->renderPrev('<span class="fa fa-arrow-circle-left"></span>','<span class="fa fa-arrow-circle-left"></span>');?>
									<input name="page" size="5" type="text" class="pagedisplay short" value="<?php echo $paging->renderNavNum();?>" readonly />
									<?php echo $paging->renderNext('<span class="fa fa-arrow-circle-right"></span>','<span class="fa fa-arrow-circle-right"></span>');?>
									<?php echo $paging->renderLast('<span class="fa fa-angle-double-right"></span>');?>
									<?php $paging->limitList($list->limit,"myform");?>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-3">
							<div class="dataTables_length" id="dataTable_length">
								<label>Type 
									<select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
										<option value="all">All</option>
										<option value="0">Read</option>
										<option value="1">Unread</option>
									</select> 
								</label>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search"
										class="form-control form-control-sm" placeholder=""
										aria-controls="dataTable"></label></div>
						</div>
					</div>

					<br>

					<div class="row">

						<!-- Border Left Utilities -->
						<div class="col-lg-8">

							<?php 

								if($paging->total_rows > 0 ){

									$page = (empty($page))? 1:$page;
									$num = (isset($page))? ($list->limit*($page-1))+1:1;
									
									$x=1;

									foreach ($rs as $val){
										$data =  $engine->getDataEncrypt($val);
										// var_dump($val); die();
							?>
							<div class="card mb-4 py-3 border-left-primary">
								<div class="card-body">
									<div class="row">
										<div class="col-lg-1">
											<div class="mr-3">
												<div class="icon-circle bg-primary">
												<i class="<?php echo $val['NOTI_ICON']; ?> text-white"></i>
												</div>
											</div>
										</div>
										<div class="col-lg-11">
											<div class="font-weight-bold">
												<div class="text-truncate"><?php echo $val['NOTI_MESSAGE']; ?>.</div>
												<div class="small text-gray-500"><?php echo $val['NOTI_TYPE']; ?></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<?php
										if($val['NOTI_STATUS'] == "0"){
							?>

							<?php
										}else if($val['NOTI_STATUS'] == "1"){
							?>

							<?php
										}
							?>


							<?php
										$x= $x + 1;
									}

								}

							?>
										
									
								
							
							
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

</div>