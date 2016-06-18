
<!DOCTYPE html>
<html>
	<head>
		<title>FLIGHTS BOOKING</title>
		<link href="css/flight_css/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/flight_css/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<!-- web-font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<!-- web-font -->
		<!-- js -->
		<script src="css/flight_css/js/jquery.min.js"></script>
		<script src="css/flight_css/js/modernizr.custom.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- js -->
		<script src="css/flight_css/js/modernizr.custom.js"></script>
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="css/flight_css/js/move-top.js"></script>
		<script type="text/javascript" src="css/flight_css/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- start-smoth-scrolling -->
	</head>
	<body>
		<div class="head-bg green">
			<!-- container -->
			<div class="container">
				<div class="head-logo">
					<a href="index.html"><img src="css/flight_css/images/logo1.png" alt="" /></a>
				</div>
				<div class="top-nav">
						<span class="menu"><img src="css/flight_css/images/menu.png" alt=""></span>
							<ul class="cl-effect-1">
							 <li><a href="{{url('/')}}">HOME</a></li>
									<!--<li><a href="about.html">ABOUT</a></li>
								<li><a href="booking.html">BOOKING</a></li>
								<li><a href="news.html">NEWS</a></li>
								<li><a href="mail.html">MAIL US</a></li>   -->
							</ul>
							<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.cl-effect-1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
						<!-- /script-for-menu -->
					</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //container -->
		</div>
		<!-- booking -->
		<div class="booking">
			<!-- container -->
			<div class="container">
				<div class="booking-info">
					<h3>booking</h3>
				</div>
				<div class="booking-form">
					<!---strat-date-piker---->
					<link rel="stylesheet" href="css/flight_css/jquery-ui.css" />
					<script src="css/flight_css/js/jquery-ui.js"></script>
							  <script>
									  $(function() {
										$( "#datepicker,#datepicker1" ).datepicker();
									  });
							  </script>
					<!---/End-date-piker---->
					<link type="text/css" rel="stylesheet" href="css/flight_css/JFGrid.css" />
					<link type="text/css" rel="stylesheet" href="css/flight_css/JFFormStyle-1.css" />
					<script type="text/javascript" src="css/flight_css/js/JFCore.js"></script>
					<script type="text/javascript" src="css/flight_css/js/JFForms.js"></script>
					<!-- Set here the key for your domain in order to hide the watermark on the web server -->
					<script type="text/javascript">
						(function() {
							JC.init({
								domainKey: ''
							});
						})();
					</script>
					<div class="online_reservation">
							<div class="b_room">
								<div class="ing_room">
									<div class="reservation">
										<ul>
											<li  class="span1_of_1 left">
												 <h5>From</h5>
												 <div class="book_date">
													 <form>
														<input type="text" placeholder="Type Depature City" required="">
														<!-- <h5>To</h5><input type="text" placeholder="Type Destination City" required=""> -->
													 </form>
												 </div>
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>To</h5>
												 <div class="book_date">
												 <form>
													<input type="text" placeholder="Type Destination City" required="">
												 </form>
												 </div>
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>Arrival</h5>
												 <div class="book_date">
													 <form>
													 <input class="date" id="datepicker" type="text" value="2/08/2013" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2/08/2013';}" required=>
													 </form>
												 </div>
											 </li>
											 <li  class="span1_of_1 left">
												 <h5>Depature</h5>
												 <div class="book_date">
												 <form>
													<input class="date" id="datepicker1" type="text" value="22/08/2013" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '22/08/2013';}" required=>
												 </form>
												 </div>
											 </li>
											 <li class="span1_of_1">
												 <h5>Class</h5>
												 <!--start section_room----------->
												 <div class="section_room">
													  <select id="country" onchange="change_country(this.value)" class="frm-field required">
															<option value="null">Economy</option>
															<option value="null">Business</option>
															<option value="AX">First Class</option>
															<option value="AX">Premium Economy</option>
													  </select>
												 </div>
											 </li>
											 <li class="span1_of_3">
													<div class="date_btn">
														<form>
															<input type="submit" value="Find Flight" />
														</form>
													</div>
											 </li>
											 <div class="clearfix"></div>
										</ul>
									 </div>
								</div>
								<div class="clearfix"></div>
							</div>
					</div>
					<!---->
				</div>
				<!-- <div class="clearfix"></div>
				<div class="booking-grids">
					<h3>WE PROVIDE</h3>
					<div class="col-md-7 booking-grid-left">
						<h4>Travel with a discount. From weekend breaks to an international getaway, count on eDreams to provide the best deals on flight and hotel. The next great travel offer is just a few clicks away!.</h4>
						<p>Ease in Booking.With our fast and powerful search engines, booking your next vacation is a breeze. Take your pick, choose your ideal destination and book your flight + hotel at the same time. Now that is easy!.</p>
						<p>All passengers, both Economy and Business, can bring 1 piece of hand baggage with maximum dimensions of 55 x 38 x 20cm and a maximum weight of 10kg. In addition, passengers are also allowed a personal item like a women's handbag, camera, or laptop.</p>
						<div class="read-more red">
						</div>
					</div>
					<div class="col-md-5 booking-grid-right">
						<img src="css/flight_css/images/11.jpg" alt="">
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>

			<div class="how-to"> -->
				<!-- container -->
				<!-- <div class="container">
					<div class="how-to-info">
						<h1>WHY BOOK</h1>
						<h3>Book quicker Organize your all inclusive holidays in one quick search and get the trip of your dreams in just few clicks. Travelling has never been so easy!
					</h3>
						<p>There is an all long haul flight entertainment, from the moment you board Kenya Airways right through the journey until your arrival.
							 There are over 1000 hours of audio-visual entertainment, block buster movies that are more than 100 in different languages, up to  40 hours of TV series and documentaries, more than 300 music albums and 25 exclusive radio stations.
							  If you love video games, you are in for a ride with more than 20 video games to select.
								The cabin crews are exceptional in taking care of passengers and their needs on transit. </p>
					</div>
					<div class="how-grids">
						<div class="col-md-4 how-grid">
							<span>1</span>
							<a href="#">FLEXIBILITY</a>
							<p>Get the freedom to build your ideal trip in your own way. Tell us your specific preferences and we will show you the best combination. Travel your way!.</p>
						</div>
						<div class="col-md-4 how-grid">
							<span>2</span>
							<a href="#">SAVINGS</a>
							<p>Save up to 20% on your trip by booking your flight and hotel in the same process. Get a higher discount and save time. It is a fact!.</p>
						</div>
						<div class="col-md-4 how-grid">
							<span>3</span>
							<a href="#">CONVINIENCE</a>
							<p>You can rely on The search for the cheapest flights and best hotel offers are long gone. With eDreams, you have access to the best travel deals, all on one site.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div> -->
				<!-- //container -->
			</div>
			<div class="visiting">
				<!-- container -->
				<div class="container">
					<!-- table code -->
					<table class="table table-striped, table-bordered">
						<thead>
							<tr>
								<td>Flight Code</td>
								<td>Airline</td>
								<td>Departure</td>
								<td>Destination</td>
								<td>Fees</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
							@foreach($flights as $flight)
							<tr>
								<td>{{$flight->id}}</td>
								<td>{{$flight->airline}}</td>
								<td>{{$flight->From}}</td>
								<td>{{$flight->Destination}}</td>
								<td>{{$flight->amount}}</td>
								<td></td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<!-- end table code -->
				</div>
				<!-- //container -->
			</div>
		</div>
		<!-- booking -->
		<!-- footer -->
		<div class="footer">
			<!-- container -->
			<div class="container">
				<div class="footer-left">
					<!-- <p>Design by <a href="http://w3layouts.com/">W3layouts</a></p> -->
				</div>
				<div class="footer-right">
					<div class="footer-nav">
						<ul>
							<!-- <li><a href="index.html">HOME</a></li>
							<li><a href="about.html">ABOUT</a></li>
							<li><a href="booking.html">BOOKING</a></li>
							<li><a href="news.html">NEWS</a></li>
							<li><a href="mail.html">MAIL US</a></li> -->
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //container -->
		</div>
		<!-- //footer -->
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear'
								 		};
										*/

										$().UItoTop({ easingType: 'easeOutQuart' });

									});
								</script>
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->
	</body>
</html>
