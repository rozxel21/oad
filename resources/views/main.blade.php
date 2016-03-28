<!doctype HTML>

<html>
	<head>
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
		<title>Office of Admission</title>
		
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/reset.css') }}" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<link href='https://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css' />
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}" />
	</head>
	
	<body>
		<div class="wrap">
			
			<div class="wrap-banner">
				<div class="container">
					<a href="/">
						<img class="img-responsive" role='banner' src="{{ URL::asset('assets/img/CLSU.png') }}">
					</a>
				</div>
			</div>

			<div class="wrap-nav">
				<nav class="navbar navbar-default">
			      	<div class="container">
			        	<div class="navbar-header">
			          		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            		<span class="sr-only">Toggle navigation</span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</button>
			        	</div>
				        <div id="navbar" class="navbar-collapse collapse">
				          	<ul class="nav navbar-nav navbar-left">
				            	<li><a href="/about">About CLSU</a></li>
				            	<li><a href="/admission/freshmen">Admission</a></li>
				            	<li><a href="/degree">Degree</a></li>
				            	<li><a href="#contact">Scholarship</a></li>
				            	<li><a href="#contact">Student Life</a></li>
				            	<li><a href="#contact">Contact Us</a></li>
				          	</ul>
				          	<ul class="nav navbar-nav navbar-right">
				            	<li><a href="#">STUDENTS</a></li>
				            	<li><a href="#">FACULTY/STAFF</a></li>
				            	<li><a href="#">ALUMNI</a></li>
				         	</ul>
				        </div>
			     	</div>
			    </nav>
			</div>

			@yield('content')

			<div class="footer">
				<div class="container" style="color: #fff">
					Copyright 2016 Alright Reserve
				</div>
			</div>

		</div>

		<!-- Script -->
		<script type="text/javascript" src="{{ URL::asset('assets/js/jquery-2.2.1.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
	</body>
</html>