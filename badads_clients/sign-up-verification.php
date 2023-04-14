<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
  	<!-- Bootstrap CSS -->
  	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  	<link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
 	<link href="assets/css/style.css" rel="stylesheet" />
  	<link href="assets/css/icons.css" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
  	<title>Bad Advertisement</title>
</head>
<body class="bg-register">
	<!--start wrapper-->
  	<div class="wrapper">
       	<!--start content-->
       	<main class="authentication-content mt-5">
       		<br><br><br><br><br><br><br><br>
        	<div class="container-fluid">
          		<div class="row">
            		<div class="col-12 col-lg-4 mx-auto">
            			<div class="card shadow rounded-5 overflow-hidden">
                  			<div class="card-body p-4 p-sm-5">
                  				<form action="" method="POST" class="form-body" id="verify-checkpoint">
                      				<div class="d-grid">
                      				</div>
                      				<hr>
                        			<div class="row g-3">
                        				<div id="result"></div>
                          				<div class="col-12 ">
                            				<h3 for="inputName" class="form-label text-center">Verification Code</h3>
                            				<br>
                            				<div class="ms-auto position-relative">
                            					<center><input type="text" class="form-control" name="code6" id="inputCode" placeholder="Enter Code" style="text-align: center; width: 300px;border: none;"></center>                            				
                            				</div>
                            				<br>
                          				</div>
                          				<br>
                          				<div class="col-12">
                            				<div class="d-grid">
                              					<button type="submit" id="verify-btncode" class="btn btn-warning radius-30">Verify</button>
                            				</div>
                          				</div>
                          				<div class="col-12">
                            				<!--<p class="mb-0">Already have an account? <a href="authentication-signin.html">Sign up here</a></p>-->
                          				</div>
                        			</div>
                    			</form>
                    		<!--<center><h5 class="card-title">Sign Up</h5><p class="card-text mb-5">See your growth and get consulting support!</p></center>
                    			<form class="form-body" id="before-verify">
                      				<div class="d-grid">
                      				</div>
                      				<hr>
                        			<div class="row g-3">
                          				<div class="col-12 ">
                          					<input type="hidden" id="subscription_code" value="">
                            				<label for="inputName" class="form-label">Last Name</label>
                            				<div class="ms-auto position-relative">
                              					<div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                              					<input type="text" class="form-control radius-30 ps-5" id="inputName" placeholder="Enter Last Name">
                            				</div>
                          				</div>
                          				<div class="col-12 ">
                            				<label for="inputName" class="form-label">First Name</label>
                            				<div class="ms-auto position-relative">
                              					<div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                              					<input type="text" class="form-control radius-30 ps-5" id="inputName" placeholder="Enter First Name">
                            				</div>
                          				</div>
                          				<div class="col-12 ">
                            				<label for="inputName" class="form-label">Middle Name(Full!)</label>
                            				<div class="ms-auto position-relative">
                              					<div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                              					<input type="text" class="form-control radius-30 ps-5" id="inputName" placeholder="Enter Middle Name : Example : Tresmonte">
                            				</div>
                          				</div>
                          				<div class="col-12">
                            				<label for="inputEmailAddress" class="form-label">Email Address</label>
                            				<div class="ms-auto position-relative">
                              					<div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                              					<input type="email" class="form-control radius-30 ps-5" id="inputEmailAddress" placeholder="Email Address">
                            				</div>
                          				</div>
                          				<div class="col-12">
                            				<label for="inputChoosePassword" class="form-label">Enter Password</label>
                            				<div class="ms-auto position-relative">
                              					<div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                              					<input type="password" class="form-control radius-30 ps-5" id="inputChoosePassword" placeholder="Enter Password">
                            				</div>
                          				</div>
                          				<div class="col-12">
                            				<div class="d-grid">
                              					<button type="submit" class="btn btn-warning radius-30">Sign Up</button>
                            				</div>
                          				</div>
                          				<div class="col-12">-->
                            				<!--<p class="mb-0">Already have an account? <a href="authentication-signin.html">Sign up here</a></p>-->
                          			<!--</div>
                        			</div>
                    			</form>-->
                 			</div>
            			</div>
          			</div>
          		</div>
        	</div>
       	</main>
        
       <!--end page main-->

  	</div>
  	<!--end wrapper-->
	<!--plugins-->
  	<script src="assets/js/jquery.min.js"></script>
  	<script src="assets/js/pace.min.js"></script>
  	<script type="text/javascript">
  		const numberInput = document.getElementById('inputCode');
  		numberInput.addEventListener("input", function() {
  			// current value of the input field
  			const currentValue = this.value;

  			//Remove any non-numeric characters from the input 
  			const newValue = currentValue.replace(/[^0-9]/g, "");

  			//Limit the input to 6 digits
  			const limitValue = newValue.slice(0, 6);

  			 // Update the input field with the cleaned up and limited value
  			this.value = limitValue;
  		});

  		$(document).ready( function(){
  			VerifyCode();
  		});

  		function VerifyCode(){
  			$('#verify-btncode').on("click", function(event){
  				event.preventDefault();

  				var codeVerification = $('#inputCode').val();
  				var data = {code6: codeVerification};
  				// AJAX Method
  				$.ajax({
  					url: "ver_function.php",
  					method: "POST",
  					data: data,
  					success: function(result){
  						if(result === "Code Verified!"){
  							$('#result').html(result);
  						}
  						else if(result === "Code Not Match"){
  							$('#result').html(result);
  						}
  					}
  				});
  			});
  		}
  	</script>
</body>
</html>