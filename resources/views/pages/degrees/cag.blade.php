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
					<h2 class="sub-header">College of Agriculture</h2>
					<br />
					<h3 class="sub-header">Undergraduate</h3>
					<div class="row">
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/bsag.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>BS Agriculture</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/bsag.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>BS Agribusiness</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/bsentrep.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>BS Entrepreneurship</span>
								</div>
							</div>
						</div>
					</div>
					<h3 class="sub-header">Graduate</h3>
					<div class="row degree">
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/ms-agri-econ.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>MS Agricultural Economics</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/ms-ansci.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>MS Animal Science</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/ms-crop-pro.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>MS Crop Protection</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row degree">
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/ms-cropsci.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>MS Crop Science</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/rural-dev.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>MS Rural Development</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/ms-soilsci.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>MS Soil Science</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row degree">
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/ms-entho.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>PhD Agricultural Entomolgy</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/ms-ansci.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>PhD Animal Science</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/ms-cropsci.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>PhD Crop Science</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row degree">
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/ms-soilsci.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>PhD Plant Breeding</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/rural-dev.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>PhD Rural Development</span>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="cover">
								<div class="col-xs-5">
									<img src="{{ URL::asset('assets/img/ms-soilsci.png') }}" height="70" width="auto" />
								</div>
								<div class="col-xs-7 deg-name">
									<span>PhD Soil Science</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop