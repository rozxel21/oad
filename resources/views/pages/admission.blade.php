@extends('main')

@section('content')
	<div class="wrap-admission">
		<div class="container">
			<div class="row" style="margin-bottom: 25px">
				<h1 class="page-header">Admission</h1>
				<div class="col-md-3 left-navigation">
					<ul>
						<li><a href="/admission/freshmen">Freshmen</a></li>
						<li><a href="/admission/transfer">Transfer Student</a></li>
						<li><a href="/admission/graduate">Graduate Student</a></li>
						<li><a href="/admission/foreign">Foreign Student</a></li>
					</ul>
				</div>
				<div class="col-md-9">
					@if( $admission == 'freshmen' )
						<h2 class="sub-header">Freshmen</h2> <br />
						<dl>
							<dt>Application Deadlines</dt>
							<dd>TBA</dd>
						</dl>
						<dl>
							<dt>Application Requirments</dt>
							<dd>Must qualify in the university admission test </dd>
							<dd>Must pass the medical examination conducted by the university physician</dd>
							<dd>Must present a duly accomplished application form</dd>
							<dd>Others as prescribed by the concerned college</dd>
							<dd>F-138 or 4th year high school report card or equivalent</dd>
							<dd>Copy of birth certificate</dd>
							<dd>Two 2x2” colored ID pictures</dd>
						</dl>
					@elseIf( $admission == 'transfer' )
						<h2 class="sub-header">Transfer Student</h2> <br />
						<dl>
							<dt>Application Requirments</dt>
							<dd>Must take and pass the university admission test if s/he has not completed at least 36 credit units of college courses </dd>
							<dd>Must pass the medical examination conducted by the university physician</dd>
							<dd>Must present a duly accomplished application form</dd>
							<dd>Others as prescribed by the concerned college</dd>
							<dd>Copy of birth certificate</dd>
							<dd>Two 2x2” colored ID pictures</dd>
							<dd>Certificate of honorable dismissal or  transfer credential</dd>
							<dd>Copy of grades signed by the registrar of the school of origin or official transcript of records</dd>
						</dl>
					@elseIf( $admission == 'foreign' )
						<h2 class="sub-header">Foreign Student</h2> <br />
						<dl>
							<dt>Application Requirments</dt>
							<dd>Must qualify in the university and college admission test</dd>
							<dd>Must pay a non-refundable application fee</dd>
							<dd>Must qualify in the medical examination conducted by the university physician</dd>
							<dd>Must submit the approved application for admission</dd>
							<dd>Others as prescribed by the concerned college</dd>
							<dd>Copy of birth certificate</dd>
							<dd>Two 2"x2” colored ID pictures</dd>
							<dd>Certificate of completion of a secondary curriculum</dd>
							<dd>Original transcript of records</dd>
							<dd>Personal history statement</dd>
							<dd>Affidavit of support</dd>
							<dd>Alien certificate of registration </dd>
							<dd>Student visa </dd> <br />
							<dd>Certificate of proficiency in English issued by the CLSU Department of English and Humanities for students who come from countries where English is not the medium of instruction in the absence of TOEFL results.</dd> <br />
							<dd>Security clearance from his/her embassy</dd>
						</dl>
					@else
						<h1>404 Error</h1>
					@endIf
				</div>
			</div>
		</div>
	</div>
@stop