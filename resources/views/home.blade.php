@extends('app')

@section('content')
	<div class="container">
		<div class="row info" style="text-align:center;">
		</div>

		<div class="resume">
			<header class="page-header">
				<h1 class="page-title">Your Profile</h1>
			</header>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
					<div class="panel panel-default">
						<div class="panel-heading resume-heading">
							<div class="row">
								<div class="col-lg-12">
									<div class="col-xs-12 col-sm-4">
										<figure>
											<img class="img-circle img-responsive" alt="" src="img/happy.jpg">
										</figure>

										<div class="row">
											<div class="col-xs-12 social-btns">

												<div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
													<a href="#" class="btn btn-social btn-block btn-facebook">
														<i class="fa fa-facebook"></i> </a>
												</div>

											</div>
										</div>

									</div>

									<div class="col-xs-12 col-sm-8">
										<ul class="list-group">
											<li class="list-group-item">Insert name</li>
											<li class="list-group-item">Insert Level</li>
											<li class="list-group-item"><i class="fa fa-phone"></i> 000-000-0000 </li>
											<li class="list-group-item"><i class="fa fa-envelope"></i> john@example.com</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="bs-callout bs-callout-danger">
							<h4>Summary</h4>
							<p>
								Here the user can enter a summary of themselves. Needs a text box.
							</p>
						</div>
						<div class="bs-callout bs-callout-danger">
							<h4>Songs created</h4>
							<ul class="list-group">
								<li class="list-group-item"> Add Links for each completed song. </li>
							</ul>
						</div>
						<div class="bs-callout bs-callout-danger">
							<h4>Achievements (if we have time)</h4>
							<ul class="list-group">
								<a class="list-group-item inactive-link" href="#">


									<div class="progress">
										<div data-placement="top" style="width: 80%;"
											 aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-success">
											<span class="sr-only">80%</span>
											<span class="progress-type"> Songs written </span>
										</div>
									</div>
									<div class="progress">
										<div data-placement="top" style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-success">
											<span class="sr-only">70%</span>
											<span class="progress-type"> Number of songs Liked</span>
										</div>
									</div>
									<div class="progress">
										<div data-placement="top" style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-success">
											<span class="sr-only">70%</span>
											<span class="progress-type">Number of subscribers </span>
										</div>
									</div>
								</a>

							</ul>
						</div>
				</div>
			</div>

		</div>
@endsection
