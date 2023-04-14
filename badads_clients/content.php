<main class="page-content">
<style type="text/css">
		.gradient-text{
			font-size: 40px!important;
			background: linear-gradient(90deg, rgba(31, 17, 206, 1) 0%, rgba(229, 43, 43, 1) 47%);
			-webkit-background-clip: text;
  			-webkit-text-fill-color: transparent;
		}
		.gradient-text1{
			background: linear-gradient(90deg, rgba(31, 17, 206, 1) 0%, rgba(229, 43, 43, 1) 47%);
			-webkit-background-clip: text;
  			-webkit-text-fill-color: transparent;
		}
	</style>
	<?php
	require_once 'config.php';
	switch ($_SESSION['subs-stats']) {
		case 'UNLPAFOM01':
			Subs1();
			break;

		case 'UNLPAFOM02':
			Subs2();
			break;

		case 'UNLPAFOM03':
			Subs3();
			break;
		
		default:
			// code...
			break;
	}

	function Subs1(){
		global $connection, $client_data, $clientID;
	?>
	<!-- Panel Dashboard-->
	<div id="dashboard">
		<div class="row">
			<div class="col-12">
				<div class="card rounded">
					<div class="card-body">
						<h2 class="mb-0 gradient-text1">Hello ! <?php echo $client_data['first_name']; ?></h2>
						<div class="container">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
			<div class="col-6">
				<div class="card rounded-6">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div class="">
								<h5 class="mb-1 gradient-text1">Graphics</h5>
                          		<h4 class="mb-0" id="vR_count"></h4>
                          		<p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span class="gradient-text1">Total Request</span></p>
							</div>
							<div class="ms-auto widget-icon text-white" style="background: rgb(19,0,125);background: linear-gradient(286deg, rgba(19,0,125,1) 0%, rgba(224,0,123,1) 100%);">
								<i class="bi bi-basket2"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="card rounded-6">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div class="">
								<h5 class="mb-1 gradient-text1">Video</h5>
                          		<h4 class="mb-0" id="gR_count"></h4>
                          		<p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span class="gradient-text1">Total Request</span></p>
							</div>
							<div class="ms-auto widget-icon text-white" style="background: rgb(19,0,125);background: linear-gradient(286deg, rgba(19,0,125,1) 0%, rgba(224,0,123,1) 100%);">
								<i class="bi bi-basket2"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="card rounded-6">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div class="">
								<h5 class="mb-1 gradient-text1">%</h5>
                          		<h4 class="mb-0" id="aR_count"></h4>
                          		<p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span class="gradient-text1">Overall Request</span></p>
							</div>
							<div class="ms-auto widget-icon text-white" style="background: rgb(19,0,125);background: linear-gradient(286deg, rgba(19,0,125,1) 0%, rgba(224,0,123,1) 100%);">
								<i class="bi bi-basket2"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="card rounded-6">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div class="">
								<h5 class="mb-1 gradient-text1">Your Registered Brands</h5>
                          		<h4 class="mb-0" id="brand-count"></h4>
                          		<p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span class="gradient-text1">Total Request</span></p>
							</div>
							<div class="ms-auto widget-icon text-white" style="background: rgb(19,0,125);background: linear-gradient(286deg, rgba(19,0,125,1) 0%, rgba(224,0,123,1) 100%);">
								<i class="bi bi-basket2"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Panel Chat Support-->
	<div id="ChatSupport">
		<div class="row">
			<div class="col-12">
				<div class="card rounded">
					<div class="card-body">
						<h1 style="color: rgb(70,53,163);color: linear-gradient(196deg, rgba(70,53,163,1) 10%, rgba(224,0,123,1) 100%);">Chat Support</h1>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="card rounded">
					<div class="card-body">
    					<div class="row">
      						<div class="col-md-8">
        						<div id="chat-box" class="well">
          								<!-- Chat messages will be displayed here -->
        						</div>
        						<br>
        						<form id="chat-form" class="form-inline">
        							<div class="form-group">
        								<input type="hidden" name="client-id-messengger" value="<?php echo $_SESSION['client-id'] ?>">
        								<label class="input-group-text" for="inputGroupSelect01">Bad Ads Admins Avail to send messages</label>
  										<select class="form-select" name="receiver-identification" id="reset-select-rg2">
    										<option selected>Select</option>
    										<?php
    											$sqlOptions = "SELECT * FROM employees";
												$resultOptions = mysqli_query($connection, $sqlOptions);

												while($row = mysqli_fetch_assoc($resultOptions)){
													echo "<option value='".$row['employee_id']."'>".$row['first_name']." ".$row['last_name']."</option>";
												}
    										?>
  										</select>
        							</div>
          							<div class="form-group">
            							<input type="text" class="form-control" name="message-ko" id="message" placeholder="Enter your message">
          							</div>
          							<button type="submit" class="btn btn-primary">Send</button>
        						</form>
      						</div>
    					</div>
					</div>
				</div>
			</div>
		</div>				
	</div>
	<!-- Panel Requests Graphics-->
	<div id="RequestsGraphics">
		<div class="row">
			<div class="col-12">
				<div class="card rounded">
					<div class="card-body">
						<h1 style="color: rgb(70,53,163);color: linear-gradient(196deg, rgba(70,53,163,1) 10%, rgba(224,0,123,1) 100%);">Requests Graphics</h1>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col">
						<div class="card rounded">
							<div class="card-body">
								<form id="form-submit-graphics" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
  									<div class="form-row">
  										<input type="hidden" name="client-identification" value="<?php echo $clientID ?>">
    									<div class="col-md-4 mb-3">
      										<label for="validationCustom01">Name Set</label>
      										<input type="text" class="form-control" name="name-set" id="reset-name-rg" placeholder="Name of your request" required>
    									</div>
    									<div class="col-md-4 mb-3">
      										<label for="validationCustom02">Product</label>
      										<input type="text" class="form-control" name="product-name" id="reset-pname-rg" placeholder="Product" required>
    									</div>
  									</div>
  									<div class="input-group mb-3">
  										<label class="input-group-text" for="inputGroupSelect01">Base Color</label>
  										<select class="form-select" name="base-color-req" id="reset-select-rg1">
    										<option selected></option>
    										<option value="1">Blue</option>
    										<option value="2">Red</option>
    										<option value="3">Green</option>
    										<option value="4">Yellow</option>
    										<option value="5">Violet</option>
    										<option value="6">Orange</option>
  										</select>
									</div>
									<div class="input-group mb-3">
  										<label class="input-group-text" for="inputGroupSelect01">Your Brands</label>
  										<select class="form-select" name="brand-cid-req" id="reset-select-rg2">
    										<option selected></option>
    										<option value="1">One</option>
    										<option value="2">Two</option>
    										<option value="3">Three</option>
  										</select>
									</div>
									<div class="mb-3">
  										<label for="formFileMultiple" class="form-label">Assets</label>
  										<input class="form-control" type="file" id="reset-img-rg1" name="assets-image" accept=".jpg, .jpeg, .png">
									</div>
									<div class="mb-3">
  										<label for="formFileMultiple" class="form-label">Refference</label>
  										<input class="form-control" type="file" id="reset-img-rg2" name="ref-image" accept=".jpg, .jpeg, .png">
									</div>
  									<div class="form-group">
    									<div class="form-check">
      										<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      										<label class="form-check-label" for="invalidCheck">
        										Agree to terms and conditions
      										</label>
      										<div class="invalid-feedback">
        										You must agree before submitting.
      										</div>
    									</div>
  									</div>
  									<button class="btn text-white" type="submit" style="background: rgb(70,53,163);background: linear-gradient(196deg, rgba(70,53,163,1) 10%, rgba(224,0,123,1) 100%);">Submit Request</button>
								</form>
								<div id="progressBar">
  									<div id="progress"></div>
								</div>
								<style>
									#progressBar {
  										width: 500px;
  										height: 20px;
  										border: 1px solid #ccc;
  										margin: 10px 0;
  										position: relative;
									}
									#progress {
  										height: 20px;
  										background-color: #428bca;
  										position: absolute;
  										left: 0;
  										top: 0;
									}
								</style>
								<script>
									// Example starter JavaScript for disabling form submissions if there are invalid fields
									(function() {
  										'use strict';
  										window.addEventListener('load', function() {
    										// Fetch all the forms we want to apply custom Bootstrap validation styles to
    										var forms = document.getElementsByClassName('needs-validation');
    										// Loop over them and prevent submission
    										var validation = Array.prototype.filter.call(forms, function(form) {
      											form.addEventListener('submit', function(event) {
        											if (form.checkValidity() === false) {
          												event.preventDefault();
          												event.stopPropagation();
        											}
        											form.classList.add('was-validated');
      											}, false);
    										});
  										}, false);
									})();
								</script>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card rounded">
							<div class="card-body">
								<br>
								<p>Based Subscription Reminder</p>
								<br>
								<center>
									<h1>Starter Package</h1>
								</center>
								<div class="container d-flex justify-content-center">
									<img class="img-fluid" src="badads_image/ICON.png" style="width:50%;">
									<br>
								</div>
								<br>
								<h3 style="margin: 20px 30px 30px 50px;color: rgb(70,53,163);color: linear-gradient(196deg, rgba(70,53,163,1) 10%, rgba(224,0,123,1) 100%);"><i class="bi bi-bezier"></i> Graphic Design + 1 <i class="bi bi-camera-reels"></i> Free Video</h3>
								<h3 style="margin: 20px 30px 30px 50px;color: rgb(70,53,163);color: linear-gradient(196deg, rgba(70,53,163,1) 10%, rgba(224,0,123,1) 100%);"><i class="bi bi-file-earmark-image-fill"></i> 1 Active Request</h3>
								<h3 style="margin: 20px 30px 30px 50px;color: rgb(70,53,163);color: linear-gradient(196deg, rgba(70,53,163,1) 10%, rgba(224,0,123,1) 100%);"><i class="bi bi-calendar-check-fill"></i> 2-3 Business Day Turnaround</h3>
								<h3 style="margin: 20px 30px 30px 50px;color: rgb(70,53,163);color: linear-gradient(196deg, rgba(70,53,163,1) 10%, rgba(224,0,123,1) 100%);"><i class="bi bi-infinity"></i> Unlimited Request</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Downloads -->
	<div id="downloads-client">
		<div class="row">
			<div class="col-12">
				
			</div>
		</div>
	</div>
	<!-- Panel Requests 1 Time Video-->
	<div id="Requests1TimeVideo">
		<div class="row">
			<div class="col-12">
				<div class="card rounded">
					<div class="card-body">
						<h1 style="color: rgb(70,53,163);color: linear-gradient(196deg, rgba(70,53,163,1) 10%, rgba(224,0,123,1) 100%);">Requests 1 Time Video</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Panel Requested List-->
	<div id="RequestsList">
		<div class="row">
			<div class="col-12">
				<div class="card rounded-6">
					<div class="card-body">
						<h1 style="color: rgb(70,53,163);color: linear-gradient(196deg, rgba(70,53,163,1) 10%, rgba(224,0,123,1) 100%);">Your Requested List</h1>
						<div class="table-responsive mt-3">
        					<table class="table align-middle mb-0">
            					<thead class="table-light">
                					<tr>
                    					<th>Request Code</th>
                    					<th>Request Name</th>
                    					<th>Type</th>
                    					<th>Asset</th>
                    					<th>Refference</th>
                    					<th><center>Status</center></th>
                    					<th><center>Date Request</center></th>
                					</tr>
            					</thead>
            					<tbody id="table-data">
            					</tbody>
        					</table>
        					<div id="pagination" class="paginate_button">
        					</div>
    					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php

	}

	function Subs2(){
		global $connection, $client_data;
	?>
	<div id="dashboard">
		<div class="row">
			<div class="col-12">
				<div class="card rounded">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<h5 class="mb-0">Customer Details</h5>
							<form class="ms-auto position-relative">
                         		<div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                         		<input class="form-control ps-5" type="text" placeholder="search">
                       		</form>
						</div>
						<div class="table-responsive mt-3">
							<table class="table align-middle">
								<thead class="table-secondary">
                         			<tr>
                          				<th>#</th>
                          				<th>Name</th>
                          				<th>Position</th>
                          				<th>Actions</th>
                         			</tr>
                       			</thead>
                       			<tbody>
                       				<tr>
                          				<td>1</td>
                           				<td>
                             				<div class="d-flex align-items-center gap-3 cursor-pointer">
                                				<img src="assets/images/avatars/avatar-1.png" class="rounded-circle" width="44" height="44" alt="">
                                				<div class="">
                                  					<p class="mb-0">Thomas Hardy</p>
                                				</div>
                             				</div>
                           				</td>
                           				<td>89 Chicago UK</td>
                           				<td>Chicago</td>
                           				<td>8574201</td>
                           				<td>United Kingdom</td>
                          				<td>
                             				<div class="table-actions d-flex align-items-center gap-3 fs-6">
                               					<a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                               					<a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                               					<a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                             				</div>
                           				</td>
                         			</tr>
                         			<tr>
                          				<td>2</td>
                           				<td>
                             				<div class="d-flex align-items-center gap-3 cursor-pointer">
                                				<img src="assets/images/avatars/avatar-2.png" class="rounded-circle" width="44" height="44" alt="">
                                				<div class="">
                                  					<p class="mb-0">Victoria Hardy</p>
                                				</div>
                             				</div>
                           				</td>
                           				<td>77 New York UK</td>
                           				<td>New York</td>
                           				<td>8956370</td>
                           				<td>United Kingdom</td>
                           				<td>
                            				<div class="table-actions d-flex align-items-center gap-3 fs-6">
                              					<a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                              					<a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                              					<a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                            				</div>
                          				</td>
                         			</tr>
                         			<tr>
                          				<td>3</td>
                           				<td>
                             				<div class="d-flex align-items-center gap-3 cursor-pointer">
                                				<img src="assets/images/avatars/avatar-3.png" class="rounded-circle" width="44" height="44" alt="">
                                				<div class="">
                                  					<p class="mb-0">Maria Anders</p>
                                				</div>
                             				</div>
                           				</td>
                           				<td>56 Poland UK</td>
                           				<td>Poland</td>
                           				<td>3265840</td>
                           				<td>United Kingdom</td>
                           				<td>
                            				<div class="table-actions d-flex align-items-center gap-3 fs-6">
                              					<a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                              					<a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                              					<a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                            				</div>
                          				</td>
                         			</tr>
                         			<tr>
                          				<td>4</td>
                           				<td>
                             				<div class="d-flex align-items-center gap-3 cursor-pointer">
                                				<img src="assets/images/avatars/avatar-4.png" class="rounded-circle" width="44" height="44" alt="">
                                				<div class="">
                                  					<p class="mb-0">Maria Anders</p>
                                				</div>
                             				</div>
                           				</td>
                           				<td>47-A Delhi India</td>
                           				<td>Delhi</td>
                           				<td>6535420</td>
                           				<td>India</td>
                           				<td>
                            				<div class="table-actions d-flex align-items-center gap-3 fs-6">
                              					<a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                              					<a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                              					<a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                            				</div>
                          				</td>
                         			</tr>
                         			<tr>
                          				<td>5</td>
                           				<td>
                             				<div class="d-flex align-items-center gap-3 cursor-pointer">
                                				<img src="assets/images/avatars/avatar-5.png" class="rounded-circle" width="44" height="44" alt="">
                                				<div class="">
                                  					<p class="mb-0">Martin Loother</p>
                                				</div>
                             				</div>
                           				</td>
                           				<td>37 B Columbo Shri Lanka</td>
                           				<td>Columbo</td>
                           				<td>9645230</td>
                           				<td>Shri Lanka</td>
                           				<td>
                            				<div class="table-actions d-flex align-items-center gap-3 fs-6">
                              					<a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                              					<a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                              					<a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                            				</div>
                          				</td>
                         			</tr>
                         			<tr>
                          				<td>6</td>
                           				<td>
                             				<div class="d-flex align-items-center gap-3 cursor-pointer">
                                				<img src="assets/images/avatars/avatar-6.png" class="rounded-circle" width="44" height="44" alt="">
                                				<div class="">
                                  					<p class="mb-0">Martin Loother</p>
                                				</div>
                             				</div>
                           				</td>
                           				<td>68 New York UK</td>
                           				<td>New York</td>
                           				<td>7854230</td>
                           				<td>United Kingdom</td>
                           				<td>
                            				<div class="table-actions d-flex align-items-center gap-3 fs-6">
                              					<a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                              					<a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                              					<a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                            				</div>
                          				</td>
                         			</tr>
                       			</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php

	}

	function Subs3(){
		global $connection, $client_data, $middle_name_converted;
	?>
	<style type="text/css">
		.gradient-text{
			font-size: 40px!important;
			background: linear-gradient(90deg, rgba(31, 17, 206, 1) 0%, rgba(229, 43, 43, 1) 47%);
			-webkit-background-clip: text;
  			-webkit-text-fill-color: transparent;
		}
	</style>
	<!-- Dashboard Container -->
	<div id="dashboard">
		<!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Dashboard</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                  	<ol class="breadcrumb mb-0 p-0">
                    	<li class="breadcrumb-item">
                    		<a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    	</li>
                    	<li class="breadcrumb-item active" aria-current="page">Status</li> 
                  	</ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                  	<button type="button" class="btn btn-primary">Settings</button>
                  	<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	
                  		<span class="visually-hidden">Toggle Dropdown</span>
                  	</button>
                  	<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                    	<a class="dropdown-item" href="javascript:;">Another action</a>
                    	<a class="dropdown-item" href="javascript:;">Something else here</a>
                    	<div class="dropdown-divider"></div>	
                    	<a class="dropdown-item" href="javascript:;">Separated link</a>
                  	</div>
                </div>
            </div>
        </div>
		<div class="card rounded">
			<div class="card-header py-3">
				<div class="row g-3 align-items-center">
					<div class="col-12 col-lg-4 col-md-6 me-auto">
                      	<h5 class="mb-1" id="date-time-label"></h5>
                      	<script type="text/javascript">
                      		// Create a new Date object
							
							setInterval(() => {

								const output = document.getElementById('date-time-label');
								// create a new Date object
								let today = new Date();

								// extract the time information
								let hours = today.getHours();
								let minutes = today.getMinutes();
								let amOrPm = hours >= 12 ? 'PM' : 'AM';

								// convert to 12-hour format
								hours = hours % 12;
								hours = hours ? hours : 12;
								minutes = minutes < 10 ? '0' + minutes : minutes;

								// extract the date information
								let formatDate = today.toLocaleDateString();
								let options = { year: 'numeric', month: 'long', day: 'numeric'};
								formatDate = today.toLocaleDateString(undefined, options);

								// combine the time and date information
								let timeAndDate = hours + ':' + minutes + ' ' + amOrPm + ' .' + formatDate;

								output.innerHTML = timeAndDate;

							}, 1000);
                      	</script>
                    </div>
				</div>
			</div>
			<div class="card-body">
				<h5 class="mb-0 gradient-text">Hello ! <?php echo $client_data['first_name']; ?></h5>
				<div class="row row-cols-1 row-cols-xl-2 row-cols-xxl-3">
					<div class="col">
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Chat Support Container -->
	<div id="ChatSupport3">
		<div class="card rounded">
			<div class="card-body">
				<h5 class="mb-0">Chat Support</h5>
			</div>
		</div>
	</div>
	<!-- Request Graphics Container -->
	<div id="RequestGraphics3">
		<div class="card rounded">
			<div class="card-body">
				<h5 class="mb-0">Request Graphics</h5>
			</div>
		</div>
	</div>
	<!-- Request Video Graphics Container -->
	<div id="RequestVideoGraphs3">
		<div class="card rounded">
			<div class="card-body">
				<h5 class="mb-0">Request Video Graphics</h5>
			</div>
		</div>
	</div>
	<!-- Mixed Video Graphics Container -->
	<div id="MixedVideoGraphicsRequest3">
		<div class="card rounded">
			<div class="card-body">
				<h5 class="mb-0">Mixed Video Graphics</h5>
			</div>
		</div>
	</div>
	<!-- RequestedList Container -->
	<div id="RequestedList3">
		<div class="card rounded">
			<div class="card-body">
				<h5 class="mb-0">Requested List</h5>
			</div>
		</div>
	</div>
	<?php

	}

	?>
</main>