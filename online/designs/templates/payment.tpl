<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Payment Form</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tabs Payment Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
{literal}
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="payment/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="payment/css/creditly.css" type="text/css" media="all" />
<link rel="stylesheet" href="payment/css/easy-responsive-tabs.css">
<script src="payment/js/jquery.min.js"></script>
<!-- font-awesome-icons -->
<link href="payment/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Mirza:400,500,600,700&amp;subset=arabic,latin-ext" rel="stylesheet">
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>
</head>
{/literal}

<body>
	<div class="main">	
		<h1>Tabs Payment Form</h1>
		<div class="w3_agile_main_grids">
			<div class="w3layouts_main_grid_left">
	<div class="agileinfo_main_grid_left_grid">
					<h3>Payment Summary</h3>
					<ul>
						<li>SEMESTER</li>
						<li>{$asem}</li>
					</ul>
					<br>
					<h3>Accepted Cards</h3>
					<div>
						<br>
					<img width="173px"src="payment/images/1.jpg" alt="VISA" /> 
					<br><br>
					<img width="173px" src="payment/images/2.jpg" alt="Master Card" />
					<br> <br> 
					<img src="images/payment_icons.png" alt="UPI" />
				
					</div>
				</div>
				
				
				{foreach from=$view1 item="j"}
				<div class="agile_amount">

					<h3>Total Price</h3>
					<h4>₹{$j.fee}</h4>
					<p>Price includes all taxes</p>
					<button onclick="goback()" class="button button2"> Back</button>

				{/foreach}
			
					
				</div>
			</div>
			<div class="agileits_main_grid_right">
				<div class="wthree_payment_grid">
					<h2>Payment Method</h2>
					<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li><img src="payment/images/1.jpg" alt=" " /></li>
							<li><img src="payment/images/2.jpg" alt=" " /></li>
						</ul>
						<div class="resp-tabs-container">
							<div class="agileits_w3layouts_tab1">
								<form action="" method="post" >
									<input type="hidden" name="hidden" value="h">
									{foreach from=$view1 item="j"}
									<input type="hidden" name="fee" value="{$j.fee}">
									{/foreach}
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="credit-card-wrapper">
											<div class="first-row form-group">
												<div class="controls">
													<label class="control-label">Name on Card</label>
													<input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
												</div>
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div class="controls">
															<label class="control-label">Card Number</label>
															<input class="number credit-card-number form-control" type="text" name="cardno"
																		  inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"
																		  placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
														</div>
													</div>
													<div class="w3_agileits_card_number_grid_right">
														<div class="controls">
															<label class="control-label">CVV</label>
															<input class="security-code form-control"Â·
																		  inputmode="numeric"
																		  type="text" name="cvv"
																		  placeholder="&#149;&#149;&#149;">
														</div>
													</div>
													<div class="clear"> </div>
												</div>
												<div class="controls">
													<label class="control-label">Expiration Date</label>
													<input class="expiration-month-and-year form-control" type="text" name="expirydate" placeholder="MM / YY">
												</div>
											</div>
											
						<!-- <button class="submit" type="submit" > -->
							<input type="submit" value="submit" class="button button3">

								<!-- <span>Make a payment <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span> -->


						<!-- </button> -->


											
											
										</div>

									</section>
								</form>

							</div>
							<div class="agileits_w3layouts_tab2">
								<h3>Already have a paypal Account <a href="#">Login here</a></h3>
								<!-- <form action="#" method="post">
									<input type="email" name="Email" placeholder="Email" required="">
									<input type="password" name="Password" placeholder="Password" required="">
									<input type="submit" value="Login">
								</form> -->
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"> </div>
		</div>
		<div class="agileits_copyright">
			<p>© 2023 Digital Edu. All rights reserved</p>
		</div>
	</div>
	{literal}
	<!-- credit-card -->
		<script type="text/javascript" src="payment/js/creditly.js"></script>
		<script type="text/javascript">
			$(function() {
			  var creditly = Creditly.initialize(
				  '.creditly-wrapper .expiration-month-and-year',
				  '.creditly-wrapper .credit-card-number',
				  '.creditly-wrapper .security-code',
				  '.creditly-wrapper .card-type');

			  $(".creditly-card-form .submit").click(function(e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
				  // Your validated credit card output
				  console.log(output);
				}
			  });
			});
		</script>
	<!-- //credit-card -->
	<!-- tabs -->
	<script src="payment/js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true,   // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function(event) { // Callback function if tab is switched
				var $tab = $(this);
				var $info = $('#tabInfo');
				var $name = $('span', $info);
				$name.text($tab.text());
				$info.show();
				}
			});
		});
	</script>
	<script>
  function goback(){
    window.history.back();
  }
  </script>
	<!-- //tabs -->
{/literal}
</body>
</html>
