<!doctype html>
<html>
 <head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weather forecast</title>
	<link rel="shortcut icon" href="images/tornado.ico" type="image/x-icon">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
	<!-- Bootstrap  <link href="bootstrap.min.css" rel="stylesheet">
	-->
   <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	
	<style> 
	
		html, body {
			 height:100%;	
		}
		
		.container {
			background-image:url("background.jpg");
			background-size:cover;
			width:100%;
			height:100%;	
			background-position:center;
			padding-top:100px;
		}
		
		.center{
			text-align:center;
		}
		
		.white{
			color:white;
		}
		
		p {
			padding-top: 15px;
			padding-bottom:15px;
		}
		
		button {
			margin-top:20px;
		}
		
		.alert {
			margin-top:20px;
			display:none;
		}
		
	</style>
	
	
</head>
 
 <body>
 
	<div class="container">
	
		<div class="row">
		
			<div class="col-md-6 col-md-offset-3 center">
	
				<h1 class="center white">Check Your Local Weather</h1>
				
				<p class="lead center white">Enter your city below to receive the forecast.</p>
			
			<form>
			
				<div class="form-group">
					<input type="text" class="form-control" name="city" id="city" placeholder="Eg.Waterford, Buxton, Key West..."/>
				
				</div>
				
				<button id="findMyWeather" class="btn btn-success btn-lg">Find Weather</button>
			
			</form>
			<div id="success" class="alert alert-success">Weather!</div>
			<div id="fail" class="alert alert-danger">Could not find WX data for that city</div>
			<div id="noCity" class="alert alert-danger">Please enter a city</div>
		
			</div>
						
		</div>
		
			
	</div>
	



 
	<script>
		
		$("#findMyWeather").click(function(event) {
				
				event.preventDefault();
				
				$(".alert").hide();
				
				if ($("#city").val()!="") {
			
			$.get("scraper.php?city="+$("#city").val(), function( data ) {
				
				
				if (data==" ") {
				    
					
				$("#fail").fadeIn();
				
				} else {
				
				
				$("#success").html(data).fadeIn();
				
				}
			
			}); 
			
			} else {
			
				$("#noCity").fadeIn();
			}
		
		});
	
	</script>
	
	
 </body>
 </html>

