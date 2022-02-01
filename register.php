<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Fuelocity - On-Demand Fuel Delivery Service</title>
	<link rel="icon" href="assets/img/favicon.png" type="image/jpg" />
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/fontawesome.min.css" rel="stylesheet">
	<link href="assets/css/magnific-popup.min.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/barfiller.css" rel="stylesheet">
	<link href="assets/css/owl.carousel.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

	<style>
	* {
		box-sizing: border-box;
	}
	
	body {
		background-color: #f1f1f1;
	}
	
	#regForm {
		background-color: #ffffff;
		margin: 100px auto;
		font-family: 'Source Sans Pro', sans-serif;
		/* padding: 40px; */
		width: 70%;
		min-width: 300px;
	}
	
	h1 {
		text-align: center;
	}
	
	input {
		padding: 10px;
		width: 100%;
		font-size: 17px;
		font-family: 'Source Sans Pro', sans-serif;
		border: 1px solid #aaaaaa;
	}
	/* Mark input boxes that gets an error on validation: */
	
	input.invalid {
		background-color: #ffdddd;
	}
	/* Hide all steps by default: */
	
	.tab {
		display: none;
    margin-top: -28px;
    padding: 10px;
	}
	
	button {
		background-color: #BA0000;
		color: #ffffff;
		border: none;
		padding: 10px 20px;
		font-size: 17px;
		font-family: 'Source Sans Pro', sans-serif;
    text-align:center;
		cursor: pointer;
	}
	
	button:hover {
		opacity: 0.8;
	}
	
	#prevBtn {
		background-color: #bbbbbb;
	}
	/* Make circles that indicate the steps of the form: */
	
	.step {
		height: 15px;
		width: 15px;
		margin: 0 2px;
		background-color: #bbbbbb;
		border: none;
		border-radius: 50%;
		display: inline-block;
		opacity: 0.5;
	}
	
	.step.active {
		opacity: 1;
	}
	/* Mark the steps that are finished and valid: */
	
	.step.finish {
		background-color: #BA0000;
	}
	</style>
</head>

<body>
	<!-- <div id="preloader">
		<div class="loader">
			<div class="loader-rect"></div>
			<div class="loader-rect"></div>
			<div class="loader-rect"></div>
			<div class="loader-rect"></div>
		</div>
	</div> -->
	<?php include("header.php");?>
		<!-- <div class="breadcroumb-area bread-bg" style="background-image: url(assets/img/bread-bg.jpg);">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcroumb-title">
<h1>Register</h1>
<h6><a href="index.php">Home</a> <i class="far fa-dot-circle"></i> Register</h6>
</div>
</div>
</div>
</div>
</div> -->
		<div class="auth-area section-padding">
			<div class="container">
				<div class="col-lg-5 mx-auto">
					<div class="auth-form" style="margin-top: 16px;">
						<div class="auth-header" style="text-align:center;">
							
							<div class="logo">
								<a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt=""></a>
							</div>
							
						</div>
					  <form id="regForm" action="">
						
							<div class="tab form-group"> 
                <div class="alert alert-danger"> <strong><i class="fa fa-info-circle"></i></strong> Enter your Mobile Number for Varification! </div>  
                <br>
                <p style="font-size: 20px;color: initial;">Enter Mobile Number</p>
							
								<p>
									<input type="tel" class="form-control" placeholder="Mobile Number" id="mobile">
								</p>
							
                <div style="text-align:center;">
                  <button type="button" id="nextBtn" class="auth-btn" onclick="nextPrev(1)">Varify Mobile Number</button>
                </div>
							</div>

							<div class="tab"><p style="font-size: 20px;color: initial;"> Enter OTP<p>
								<p>
									<input type="number" placeholder="OTP" class="form-control" id="number">
								</p>
                <div style="text-align:center;">
                  <button type="button" id="nextBtn" onclick="nextPrev(1)">Verify OTP</button>
                </div>
							</div>
              
							<div class="tab"><p style="font-size: 20px;color: initial;">Sign-Up Form</p>
								<p>
                  <!-- <label for="name">Name</label> -->
									<input type="text" placeholder="Name" class="form-control" name="name" id="name">
								</p>
								<p>
									<input type="text" placeholder="Email" class="form-control" id="email">
								</p>
								<p>
									<input type="password" placeholder="Password" class="form-control" id="password">
								</p>
								<p>
									<select type="select" onchange="yesnoCheck(this);" name="support" id="support" class="fadeIn third">
										<option value="selected">Select Industry Name</option>
										<option value="Individual">Individual</option>
										<option value="Corporate">Corporate</option>
									</select>
								</p>
								<p>
									<div class="form-group" id="adc" style="display: none;">
										<input type="hidden" id="Individual" name="supportname" placeholder="Individual *" value="Individual"> </div>
								</p>
								<p>
									<div class="form-group" id="pc" style="display: none;">
										<input type="text" id="Corporate" name="supportname" placeholder="Corporate Name" value="<?php if(isset($_POST['supportname'])){echo $_POST['supportname'];} ?>" /> <span class="error text-center"><?php if(isset($errors['supportname'])){echo "<span>" .$errors['supportname']. "</span>"; } ?> </span>
									</div>
								</p>
								<p>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="agree">
										<label class="custom-control-label" for="agree">I agree with the <a href="assets/FuelocityPrivacyPolicy.pdf" target="_blank">Terrms & Conditions</a></label>
									</div>
								</p>
                <div style="text-align:center;">
                  <button type="button" id="nextBtn" onclick="nextPrev(1)">Submit</button>
                  <div class="auth-footer">
                    <p class="mb-0">Already have an account? <a href="login.php">Login</a>.</p>
                  </div>
                </div>
							</div>
              <!-- <div style="overflow:auto;">
                <div >
                  <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                  <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
              
                </div>
              </div> -->
							<!-- Circles which indicates the steps of the form: -->
							<div style="text-align:center;margin-top:40px;"> 
                <span class="step"></span> 
                <span class="step"></span> 
                <!-- <span class="step"></span> -->
								<!-- <span class="step"></span> -->
              </div>
						</form>
            <!-- <script>
              $('#regForm').validate({
                rules:{
                name:"required",
                email:{
                required:true,
                email:true
                },
                mobile:{
                    required:true,
                minlength:10,
                maxlength:10,
                number: true
                }
                }
              });
            </script> -->
						<script>
						var currentTab = 0; // Current tab is set to be the first tab (0)
						showTab(currentTab); // Display the current tab
						function showTab(n) {
							// This function will display the specified tab of the form...
							var x = document.getElementsByClassName("tab");
							x[n].style.display = "block";
							//... and fix the Previous/Next buttons:
							// if(n == 0) {
							// 	document.getElementById("prevBtn").style.display = "none";
							// } else {
							// 	document.getElementById("prevBtn").style.display = "inline";
							// }
							if(n == (x.length - 1)) {
								document.getElementById("nextBtn").innerHTML = "Submit";
							} else {
								document.getElementById("nextBtn").innerHTML = "Next";
							}
							//... and run a function that will display the correct step indicator:
							fixStepIndicator(n)
						}

						function nextPrev(n) {
							// This function will figure out which tab to display
							var x = document.getElementsByClassName("tab");
							// Exit the function if any field in the current tab is invalid:
							if(n == 1 && !validateForm()) return false;
							// Hide the current tab:
							x[currentTab].style.display = "none";
							// Increase or decrease the current tab by 1:
							currentTab = currentTab + n;
							// if you have reached the end of the form...
							if(currentTab >= x.length) {
								// ... the form gets submitted:
								document.getElementById("regForm").submit();
								return false;
							}
							// Otherwise, display the correct tab:
							showTab(currentTab);
						}

						function validateForm() {
							// This function deals with validation of the form fields
							var x, y, i, valid = true;
							x = document.getElementsByClassName("tab");
							y = x[currentTab].getElementsByTagName("input");
							// A loop that checks every input field in the current tab:
							for(i = 0; i < y.length; i++) {
								// If a field is empty...
								if(y[i].value == "") {
									// add an "invalid" class to the field:
									y[i].className += " invalid";
									// and set the current valid status to false
									valid = false;
								}
							}
							// If the valid status is true, mark the step as finished and valid:
							if(valid) {
								document.getElementsByClassName("step")[currentTab].className += " finish";
							}
							return valid; // return the valid status
						}

						function fixStepIndicator(n) {
							// This function removes the "active" class of all steps...
							var i, x = document.getElementsByClassName("step");
							for(i = 0; i < x.length; i++) {
								x[i].className = x[i].className.replace(" active", "");
							}
							//... and adds the "active" class on the current step:
							x[n].className += " active";
						}
						</script>
						<!--  -->
				
					</div>
				</div>
			</div>
		</div>
		<!-- <script>
    function varifyMobileNo(that){
        if(that.value == "number") {
            console.log("--",that.value)
			document.getElementById("otpvarify").style.display = "block";
		} else {
			document.getElementById("otpvarify").style.display = "none";
		}
    }
</script> -->
		<!-- footer -->
		<?php include("footer.php");?>
			<script>
			function yesnoCheck(that) {
				if(that.value == "Individual") {
					document.getElementById("adc").style.display = "block";
				} else {
					document.getElementById("adc").style.display = "none";
				}
				if(that.value == "Corporate") {
					document.getElementById("pc").style.display = "block";
				} else {
					document.getElementById("pc").style.display = "none";
				}
			}
			</script>
			<!-- 
            <script>
   $(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $(".form-card").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});
</script> --><a href="#top" class="go-top"><i class="far fa-level-up"></i></a>
			<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
			<script src="assets/js/jquery-3.6.0.min.js"></script>
			<script src="assets/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/wow.min.js"></script>
			<script src="assets/js/jquery.waypoints.min.js"></script>
			<script src="assets/js/jquery.counterup.min.js"></script>
			<script src="assets/js/owl.carousel.min.js"></script>
			<script src="assets/js/magnific-popup.min.js"></script>
			<script src="assets/js/jquery.sticky.js"></script>
			<script src="assets/js/jquery.barfiller.js"></script>
			<!-- <script src="assets/js/contact-form.js"></script> -->
			<script src="assets/js/main.js"></script>
</body>

</html>