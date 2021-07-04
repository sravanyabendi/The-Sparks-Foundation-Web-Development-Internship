<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TSF BANKING SYSTEM</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Lobster&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/homepage.css" >
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
</head>
<body onload="slider()">
	<div class="banner">
		<div class="slider">
			<img src="images/bank4.jpg" id="slideimg">
		</div>
		<div class="overlay">
			
			<div class="navbar"> 
				<h1><a href="homepage.html">TSF Bank</a></h1>
				<nav>
				<ul>
			
					<li class="home">
						<a href="homepage.php">Home</a>
					</li>
					
					<li class="viewcustomers">
						<a href="customerdetails.php">View Customers</a>
					</li>
					<li class="loan">
						<a href="#loans">Loans</a>
					</li>
					<li>
						<a href="#features">Features</a>
					</li>
					<li class="about">
						<a href="#about">Aboutus</a>
					</li>
					<li class="transact">
						<a href="transaction_hist.php">Transaction History</a>
					</li>
				</ul>
				</nav>
			</div>
			
			<h2>DRIVE IN BANKING</h2>
			<p>It's not just a banking,it's a lifestyle</p>
			<a href="moneytransfer1.php" class="tn">TRANSFER NOW!</a>
		</div>
	</div>
	<div class="container">

		<h3 id="features">FEATURES</h3>
		<div class="features">
			<div class="row1" data-aos="fade-down">
			<img src="images/Export, import and foreign exchange facilities..jpg">
			<div class="text-block">
				<p>Business Investment</p>
			  </div>
			<img src="images/remitances.jpg">
			<div class="text-block1">
				<p>Remitances and Payment</p>
			  </div>
			<img src="images/safe.jpg">
			<div class="text-block2">
				<p>Security</p>
			  </div>
		</div>
		<div class="row1" data-aos="fade-up">
			<img src="images/bank3.jpg">
			<div class="text-block">
				<p>Credit card facility</p>
			  </div>
			<img src="images/bank13.jpeg">
			<div class="text-block1">
				<p>Online Banking</p>
			  </div>
			<img src="images/bank7.jpg">
			<div class="text-block2">
				<p>Loan facility</p>
			  </div>
		</div>
		</div>
	<div class="parallax2">
		
		<h3 id="loans">LOANS</h3>
		<div class="loans">
			<div class="row1" data-aos="fade-down">
			<img src="images/home.jpg">
			<div class="text-block">
				<p>Home Loan</p>
			  </div>
			<img src="images/personalloan.jpg">
			<div class="text-block1">
				<p>Personal Loan</p>
			  </div>
			<img src="images/business.jpg">
			<div class="text-block2">
				<p>Business Loan</p>
			  </div>
		</div>
		<div class="row1" data-aos="fade-up">
			<img src="images/creditcard.jpg">
			<div class="text-block">
				<p>Credit Card Loan</p>
			  </div>
			<img src="images/car.jpg">
			<div class="text-block1">
				<p>Vehicle Loan</p>
			  </div>
			<img src="images/education.jpg">
			<div class="text-block2">
				<p>Education Loan</p>
			  </div>
		</div>
		</div>
	</div>

	<div class="aboutus">
			<h2 id="about">ABOUT US</h2>
			<main class="container1">
				<section class="card">
				<div data-aos="fade-right">
					<h3>TSF Group Companies</h3>
					<p>TSF Bank offers a wide range of banking products and financial services to corporate and retail customers through a variety of delivery channels and through its group companies.</p>
			
				</div>
				<div data-aos="fade-left">
					<h3>Board of Directors</h3>
					<p>TSF Bank's Board members include eminent individuals with a wealth of experience in international business, management consulting, banking and financial services.</p>
				</div>
				<div data-aos="fade-right">
					<h3>Career Opportunities</h3>
					<p>Explore diverse openings with TSF Bank</p>
				</div>
				<div data-aos="fade-left">
					<h3>Awards</h3>
					<p>Time and again our innovative banking services has been recognized and rewarded world over.</p>
				</div>
				<div data-aos="fade-right">
					<h3>Corporate Social Responsibility</h3>
					<p>TSF Bank is deeply engaged in human and economic development at the national level. The Bank works closely with TSF Foundation across diverse sectors and programs</p>
				</div>
				</section>
			</main>
			</div>
		</div>
	<div class="footer">
		<ul>
			<li>
          <h1>Contact us:</h1>
		  <p><i class="fa fa-phone-square" aria-hidden="true"></i>7896542397</p>
		  <p><i class="fa fa-envelope-o" aria-hidden="true"></i>tsfbank@gmail.com</p>
		  <p><i class="fa fa-map-marker" aria-hidden="true"></i>Andhrapradesh</p></li>
		  <li class="separate">
          <h1>Popular Products</h1>
		  <p>Fixed Deposit</p>
		  <p>Savings Account</p>
		  <p>Senior Citizen Accounts</p>
		  <p>Life Insurance</p></li>
		  <li>
		  <h1>Get in touch</h1>
		  <p><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</p>
		  <p><i class="fa fa-facebook-official" aria-hidden="true"></i>Facebook</p>
		  <p><i class="fa fa-linkedin-square" aria-hidden="true"></i>LinkedIn</p></li>
	</div>
         
	<div class="lastbar">
		<ul>
			<li>Copyright<i class="fa fa-copyright" aria-hidden="true"></i>All rights reserved</li>
			<li>Disclaimer</li>
			<li>Privacy Policy</li>
			<li>Responsible Disclosure Policy</li>
		</ul>
	</div>
	<script>
		var slideimg=document.getElementById("slideimg");
		var images=new Array(
			"images/fullbank5.jpg",
			"images/fullbank7.jpg",
			"images/fullbank8.jpg",
			"images/fullbank6.jpg",
			"images/fullbank9.jpeg"
			);
		var len=images.length;
		var i=0;
		
		function slider(){
			if(i>len-1){
				i=0;
			}
			slideimg.src=images[i];
			i++;
			setTimeout('slider()',3000);
		}
	</script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
	</script>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script>
		$(window).scroll(function(){
			if($(window).scrollTop()){
				$("nav").addClass("black");
			}
			else{
				$("nav").removeClass("black");
			}
		})
		</script>
</body>
</html>
   