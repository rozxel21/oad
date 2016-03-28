@extends('main')

@section('content')
	<div class="wrap-degree">
		<div class="container">
			<div class="row" style="margin-bottom: 25px">
				<h1 class="page-header">Degree</h1>
				<div class="col-md-3 left-navigation">
					<ul>
						<li><a href="/degree">All Degree</a></li>
						<li><a href="/degree/cag">College of Agriculture</a></li>
						<li><a href="/degree/cas">College of Arts and Science</a></li>
						<li><a href="/degree/cbaa">College of Business and Accountancy</a></li>
						<li><a href="/degree/ced">College of Education</a></li>
						<li><a href="/degree/cen">College of Engineering</a></li>
						<li><a href="/degree/chsi">College of Home Science and Insdustry</a></li>
						<li><a href="/degree/cvsm">College of Veteninary Science and Medecine</a></li>
					</ul>
				</div>
				<div class="col-md-9">
					<h2 class="sub-header">College of Arts and Science</h2>
					<br />
					<h3 class="sub-header">Undergraduate</h3>
					<div class="row degree">
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/abdc.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>AB Development Communication</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/abll.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>AB Language and Literature</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/abpsych.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>AB Psychology</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row degree">
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/abss.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>AB Social Science</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/bsbio.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>BS Biology</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/bschem.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>BS Chemistry</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row degree">
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/abdc.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>BS Development Communication</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/bses.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>BS Environmental Science</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/bsmath.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>BS Mathematics</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row degree">
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/bsstat.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>BS Statistics</span>
								</div>
							</div>
						</div>
					</div>


					<h3 class="sub-header">Graduate</h3>
					<div class="row degree">
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/bschem.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>M Chemistry</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/abll.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>MA Language & Literature</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/bsbio.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>MS Biology</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row degree">
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/bschem.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>MS Chemistry</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/abdc.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>MS Development Communication</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/bses.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>MS Environmental Management</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row degree">
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/bses.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>PhD Environmental Management</span>
								</div>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
@stop