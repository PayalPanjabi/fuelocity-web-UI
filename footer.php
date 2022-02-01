<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Fuelocity - Petrol Pump and Gas Station  HTML5 Template</title>
<link rel="icon" href="assets/img/favicon.png" type="image/jpg" />
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/fontawesome.min.css" rel="stylesheet">
<link href="assets/css/magnific-popup.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/barfiller.css" rel="stylesheet">
<link href="assets/css/owl.carousel.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6177c05586aee40a5738607b/1fitsek2e';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<style>
	#myBtn {
  display: block;
  position: fixed;
  top: 20px;
  right: 30px;
  z-index: 99;
  font-size: 0;
  border: none;
  outline: none;
  color: white;
  cursor: pointer;
  border-radius: 4px;
}

#myBtn:hover {
  /* background-color: #555; */
}
#draggable {
  position: relative;
  margin: 10px auto;
  width: 50px;
  height: 50px;
  z-index: 1;
  right:120px;
}

#dashboard {
  -webkit-perspective: 1000;
  perspective: 1000;
}

#dashboard {
  width: 100%;
  height: 100%;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;  
  -webkit-transition: all 1.0s linear;
  transition: all 1.0s linear;
}

.loadable {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

#a{
  -webkit-transform: rotateY(-180deg);
  transform: rotateY(-180deg);
  -webkit-animation: mymoveback 10s infinite;  
  animation: mymoveback 10s infinite;  
  border:1px solid #000;
  background-color:#072F5F;
  color:#fff;
  padding: 33px 65px;
  border-radius: 6px;
  right: -149px;
  top: 95px;
  text-align: center;
}
#b {
  display: block;
  box-sizing: border-box;
  color: #fff!important;
  background-color: #fff;
  -webkit-animation: mymove 10s infinite;
  animation: mymove 10s infinite;
  border:1px solid #000;
  background-color:#072F5F;
  padding: 33px 65px;
  border-radius: 6px;
  right: -149px;
    top: 95px;
  text-align: center;
  font-size:30px;
  font-weight:700;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
  40% {
    -webkit-transform: rotateY(0deg);
  }
  50% {
    -webkit-transform: rotateY(180deg);
  }
  90% {
    -webkit-transform: rotateY(180deg);
  }
  100% {
    -webkit-transform: rotateY(0deg);
  }
}
@-webkit-keyframes mymoveback {
  40% {
    -webkit-transform: rotateY(-180deg);
  }
  50% {
    -webkit-transform: rotateY(0deg);
  }
  90% {
    -webkit-transform: rotateY(0deg);
  }
  100% {
    -webkit-transform: rotateY(-180deg);
  }
}

@keyframes mymove {
  40% {
    transform: rotateY(0deg);
  }
  50% {
    transform: rotateY(180deg);
  }
  90% {
    transform: rotateY(180deg);
  }
  100% {
    transform: rotateY(0deg);
  }
}
@keyframes mymoveback {
  40% {
    transform: rotateY(-180deg);
  }
  50% {
    transform: rotateY(0deg);
  }
  90% {
    transform: rotateY(0deg);
  }
  100% {
    transform: rotateY(-180deg);
  }
}
#value {
  font: 800 40px system-ui;
}
.count{
	margin-top: -42px;
    margin-left: -74px;
    padding: 17px;
}
</style>
</head>
<body>
<footer class="footer-area wow fadeIn" data-wow-delay=".2s">
			<div class="container">
				<div class="footer-up">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="logo"> 
								<!-- <h2 style="color: #072F5F;font-family: 'Source Sans Pro';font-weight: 600;font-size: 32px;">FUELOCITY</h2> -->
								<img src="assets/img/logo.png" alt="fossil-logo"> 
							</div>
							<p style="text-align:justify;">Fuelocity is an online platform that delivers fuel to your door in a secure, dependable, and efficient manner. </p>
							<div class="social-area"> <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-linkedin"></i></a> </div>
						</div>
						<div class="col-lg-2 offset-lg-1 col-md-6 com-sm-12">
							<h5>Pages</h5>
							<ul>
								<li>
									<a href="about.php"><i class="fal fa-minus"></i> About Us</a>
									<a href="services.php"><i class="fal fa-minus"></i> Services</a>
									<a href="#"><i class="fal fa-minus"></i> Team</a>
									<a href="careers.php"><i class="fal fa-minus"></i> Careers</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-12">
							<h5>Quick Browse</h5>
							<ul>
								<li> 
									<!-- <a href="login.php"><i class="fal fa-minus"></i> Login </a> -->
								
									<a href="contact.php"><i class="fal fa-minus"></i>Contact Us</a> 
								
									<a href="assets/FuelocityPrivacyPolicy.pdf" target="_blank"><i class="fal fa-minus"></i>Privacy Policy</a> 
								
								</li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="subscribe-form">
								<h5>Contact</h5>
								<p style="text-align:justify;"><b style="color:#072F5F;">Address :</b>  250/B/4 FR-4, Vasant Nivara Apartment, Near Mahaveer College, Nagala Park, Kolhapur. 416003</p>
								<p style="text-align:justify;"><b style="color:#072F5F;">Contact :</b> 7774000000</p>
								<!-- <form action="#">
									<input type="email" placeholder="Your email">
									<button class="main-btn">Subscribe</button>
								</form> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row justify-content-center align-items-center">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<p style="text-align:left;" class="copyright-line">© 2021 Fuelocity All rights reserved.</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<!-- <p class="privacy"><a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a></p> -->
					</div>
				</div>
			</div>
		</div> 

		<div id="myBtn">
			<div id="draggable">
				<div  class="shadow">
					<div class="widget-inner loadable" id="a">
						<div class="count" style="text-align:center;">
							<!-- <h2 id="value" style="color:white;font-size: 20px;text-align:center;"></h2>.ltr -->
							<h2 style="color:white;font-size: 25px;text-align:center;"><b>136533.ltr</b></h2>
							<h6 style="color:white;font-size: 20px;text-align:center;    margin-left: 30px;">Petrol</h6> 
						</div>
					</div>
					<div class="widget-inner loadable" id="b">
						<!-- <div id="value"></div> -->
						<div class="count" style="text-align:center;">
							<h2 style="color:white;font-size: 25px;text-align:center;"><b>136533.ltr</b></h2>
							<h6 style="color:white;font-size: 20px;text-align:center;margin-left: 30px;">Diesel</h6>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script>
			function animateValue(obj, start, end, duration) {
			let startTimestamp = null;
			const step = (timestamp) => {
				if (!startTimestamp) startTimestamp = timestamp;
				const progress = Math.min((timestamp - startTimestamp) / duration, 1);
				obj.innerHTML = Math.floor(progress * (start - end) + end);
				if (progress < 1) {
				window.requestAnimationFrame(step);
				}
			};
			window.requestAnimationFrame(step);
			}

			const obj = document.getElementById("value");
			animateValue(obj, 136533, 0, 5000);
		</script>

        </body>
</html>