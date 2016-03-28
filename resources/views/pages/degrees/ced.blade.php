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
					<h2 class="sub-header">College of Education</h2>
					<br />
					<h3 class="sub-header">Undergraduate</h3>
					<div class="row">
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/beed.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>Bachelor in Elementary Education</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/bsaexed.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>BS Agricultural Extension Education</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/bsed.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>Bachelor in Secondary Education</span>
								</div>
							</div>
						</div>
					</div>
					<h3 class="sub-header">Graduate</h3>
					<div class="row degree">
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/bsbio.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>MS Biology Education</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/bschem.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>MS Chemistry Education</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/bsed.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>MS Education</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row degree">
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/ms-gac.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>MS Guidance and Counceling</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/bsed.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>PhD Dev't Education</span>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
@stop