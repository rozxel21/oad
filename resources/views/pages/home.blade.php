@extends('main')

@section('content')
	<div class="wrap-body">
		<div class="container">
			<div class="text-center">
				<img class="img-responsive" id='banner' height="200" src="{{ URL::asset('assets/img/banner1.jpg') }}" />
			</div>
		</div>
	</div>
	
	<div class="wrap-news">
		<div class="container">
			<div class="row">
				<h2>What's New</h2>
				<div class="col-md-3">
					<img class="img-responsive" src="{{ URL::asset('assets/img/img1.jpg') }}">
					<h4><a href="">CLSU K-12</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud </p>
				</div>
				<div class="col-md-3">
					<img class="img-responsive" src="{{ URL::asset('assets/img/img2.jpg') }}">
					<h4><a href="">Abella is new CLSU President</a></h4>
					<p>The search is over, Central Luzon State University Board of Regents (BOR) finally named Dr. Tereso Angeles Abella as the new CLSU President during their meeting held on December 18, 2015</p>
				</div>
				<div class="col-md-3">
					<img class="img-responsive" src="{{ URL::asset('assets/img/img3.jpg') }}">
					<h4><a href="">CLSU Main Gate 3D Virtual Tour</a></h4>
					<p>A 3d virtual tour walk through of the Main Gate of Central Luzon State University (version 1)</p>
				</div>
				<div class="col-md-3">
					<span id='more-news'>More Headlines</span>
					<ul>
						<li><a href="">CLSU Alumnus donates incentive for fisheries exam top-notchers</a></li>
						<li><a href="">CLSU Submits 6 Programs for AACCUP Evaluation</a></li>
						<li><a href="">PCAARRD, CLSU conduct training-workshop for animal health research personnel</a></li>
						<li><a href="">Google Student Leaders</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="wrap-event-social">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h2>Download</h2>
					<ul id="download">
						<li><a href="">Academic Rules and Regulation</a></li>
						<li><a href="">Academic Calendar</a></li>
						<li><a href="">Changing-Adding Form</a></li>
						<li><a href="">Dropping Form</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<h2>Admission Calendar</h2>
					<div class="row event">
						<div class="col-md-2 text-center" style="padding-right: 0">
							<span class="event-month">Mar</span>
							<span class="event-day">23</span>
						</div>
						<div class="col-md-10">
							<span style="font-size: 24px">Holy Week</span>
						</div>
					</div>
					<div class="row event">
						<div class="col-md-2 text-center" style="padding-right: 0">
							<span class="event-month">Mar</span>
							<span class="event-day">24</span>
						</div>
						<div class="col-md-10">
							<span style="font-size: 24px">Holy Week</span>
						</div>
					</div>
					<div class="row event">
						<div class="col-md-2 text-center" style="padding-right: 0">
							<span class="event-month">Mar</span>
							<span class="event-day">25</span>
						</div>
						<div class="col-md-10">
							<span style="font-size: 24px">Holy Week</span>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<h2>Connect With Us</h2>
					<div class="row event">
						<div class="col-md-2 text-center" style="padding-right: 0">
							<img class="img-responsive" src="{{ URL::asset('assets/img/fb.png') }}">
						</div>
						<div class="col-md-10">
							<span style="font-size: 22px">Central Luzon State University</span>
						</div>
					</div>
					<div class="row event">
						<div class="col-md-2 text-center" style="padding-right: 0">
							<img class="img-responsive" src="{{ URL::asset('assets/img/twitter.png') }}">
						</div>
						<div class="col-md-10">
							<span style="font-size: 22px">@clsu_official</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop