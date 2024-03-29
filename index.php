<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html class="cspio">
<head>
	<!---
	Welcome to our free coming soon page template by http://comingsoonpage.com Get your free download at https://www.seedprod.com/free-coming-soon-page/
	This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License
	http://creativecommons.org/licenses/by-nc-nd/4.0/
	To get started follow this checklist.
	1. Replace the *Page Title* on lines 23, 31 & 296
	2. Set the *Page Description* on lines 26, 32 & 298
	3. Set an optional *Logo* on lines 294 using the src attribute.
	4. Set your *Facebook Profile* URL on line 312 using the href attribute.
	5. Set your *Twitter Profile* URL on line 313 using the href attribute.
	6. Set your *Email* on line 314 using the href attribute.
	7. Set your background image on line 63, see file README.mb for additional background images.
	8. Set your MailChimp email post URL on line 300 See video: https://youtu.be/YUdP1qfMot8
	9. FTP to your Website. 
	-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Distinctive Voices LLC</title>

	<meta name="generator" content="comingsoonpage.com 1.0.0" />
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="https://static.comingsoonpage.com/cspio-assets/1.0.0/favicon.ico">
	<meta property="og:url" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="My Coming Soon Page" />
	<meta property="og:description" content="" />
	
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Bootstrap and default Style -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" href="https://static.comingsoonpage.com/cspio-assets/1.0.0/style.css">

	<!-- Google Fonts -->
	<link class="gf-headline" href='https://fonts.googleapis.com/css?family=Pacifico:400&subset=' rel='stylesheet' type='text/css'>
			
	<!-- Animate CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
	
	<!-- Calculated Styles -->
	<link rel="stylesheet" href="style.css">
	

	</style>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Modernizr -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	
	<!-- Google Analytics Code Goes Here-->
</head>
<body>

<?php echo $alert; ?>

	<div id="cspio-page">
		<div id="cspio-content">
			

			    				
			<h1 id="cspio-headline">Coming Soon</h1>			    				
			
			<div id="cspio-description">Get ready! Distinctive Voices LLC is coming!</div>			    				
			
			<form id="cspio-form" action="" method="post">
				<div id="cspio-field-wrapper">
					<div class="row">
						<div class="col-md-12 seperate"><div class="input-group">
							<input type="email" id="cspio-email" name="email" class="form-control input-lg form-el" placeholder="Email" required/>
					<span class="input-group-btn"><input type="submit" name="submit" id="cspio-subscribe-btn" class="btn btn-lg btn-primary form-el noglow" value="Notify Me"></span></div></div>
					</div>
				</div>
			</form>
			
			<span id="cspio-privacy-policy-txt">We promise to never spam you.</span>
			    						    			    								    			    			    				
			<div id="cspio-socialprofiles">
				<a href="https://www.facebook.com/okeyo.alex/" target="_blank"><i class="fa fa-facebook-official fa-2x"></i></a>			
				<a href="https://twitter.com/ItsMeAlekih" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>			
				<a href="mailto:alexokeyo15@gmail.com"><i class="fa fa-envelope fa-2x"></i></a>			
			</div>


									    									    			    			    							    			     			    		
		</div><!-- end of #cspio-content -->
	</div>

    <script type="text/javascript">
      if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
      }
    </script>
	<script>
		// Animate Delay
		setTimeout(function(){ jQuery("#cspio-content").show().addClass('animated fadeIn'); }, 250);

		// Reseize	
		function resize(){
				$('head').append("<style id='form-style' type='text/css'></style>");
				$('#form-style').html('.cspio .input-group-btn, .cspio .input-group{display:block;width:100%;}.cspio #cspio-subscribe-btn{margin-left:0;width:100%;display:block;}.cspio .input-group .form-control:first-child, .cspio .input-group-addon:first-child, .cspio .input-group-btn:first-child>.btn, .cspio .input-group-btn:first-child>.dropdown-toggle, .cspio .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {border-bottom-right-radius: 4px;border-top-right-radius: 4px;}.cspio .input-group .form-control:last-child, .cspio .input-group-addon:last-child, .cspio .input-group-btn:last-child>.btn, .cspio .input-group-btn:last-child>.dropdown-toggle, .cspio .input-group-btn:first-child>.btn:not(:first-child) {border-bottom-left-radius: 4px;border-top-left-radius: 4px;}');
		}
		
		$('#cspio-content').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', 
			function(){
				var width = $('#cspio-field-wrapper').width();
				if(width < 480 && width != 0){
					resize();
				}
			}
		);
	</script>

	</body>
</html>
