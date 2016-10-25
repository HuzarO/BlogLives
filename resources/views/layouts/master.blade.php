<!DOCTYPE html>
<html lang="en" ng-app="app">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>BlogLives - Version 0.0.1</title>

		<link href="{{ asset('/css/app.css') }}" rel="stylesheet" />

		@section('styles')

		@show

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('/js/app.js') }}"></script>

        @if ( Config::get('app.debug') )
            <script type="text/javascript">
                document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
            </script>
        @endif
	</head>
	<body>
		@yield('title')
		<header>
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="row row-centered">
						<div class="col-lg-10 col-md-10 col-sm-10 col-centered">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
										data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="{{ url('/') }}">BlogLives</a>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<div class="nav navbar-nav navbar-right">
									<div class="btn-group">
										<button type="button" class="btn btn-default navbar-btn" id="dropdown-search"
												data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="glyphicon glyphicon-search"></span>
										</button>
										<div class="dropdown-menu">
											<form class="nav navbar-nav navbar-form" role="search">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Search">
												</div>
												<button type="submit" class="btn btn-default">Submit</button>
											</form>
										</div>
									</div>
									<div class="btn-group">
										<button type="button" class="btn btn-default navbar-btn" id="dropdown-follow"
												data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Śledź Nas
										</button>
										<div class="dropdown-menu follow-social">
											<ul>
												<li class="facebook">
													<a href="#">
														<span class="fa fa-facebook"></span>
														Facebook
													</a>
												</li>
												<li class="twitter">
													<a href="#">
														<span class="fa fa-twitter"></span>
														Twitter
													</a>
												</li>
												<li class="vimeo">
													<a href="#">
														<span class="fa fa-vimeo"></span>
														Vimeo
													</a>
												</li>
												<li class="youtube">
													<a href="#">
														<span class="fa fa-youtube-play"></span>
														YouTube
													</a>
												</li>
												<li class="google-plus">
													<a href="#">
														<span class="fa fa-google-plus"></span>
														Google+
													</a>
												</li>
												<li class="instagram">
													<a href="#">
														<span class="fa fa-instagram"></span>
														Instagram
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<ul class="nav navbar-nav navbar-right">
									<li><a href="#">Strona Główna</a></li>
									<li><a href="#">Szukaj</a></li>
									<li><a href="#">Ankiety</a></li>
									<li><a href="#">Quizy</a></li>
									<li><a href="#">Kontakt</a></li>
									@if(Auth::check())
										<li class="dropdown profile-menu">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
											   aria-haspopup="true"
											   aria-expanded="false">{{ Auth::user()->name }} {{ Auth::user()->surname }}
												<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="{{ url('/profile/'. Auth::user()->profile_id) }}"><span
																class="fa fa-user"></span> Mój Profil</a></li>
												<li role="separator" class="divider"></li>
												<li><a href="{{ url('/logout') }}"><span class="fa fa-sign-out"></span>
														Wyloguj</a></li>
											</ul>
										</li>
									@endif
								</ul>
							</div><!-- /.navbar-collapse -->
						</div>
					</div>
				</div><!-- /.container-fluid -->
			</nav>
		</header>

		<div ui-view="content-pane"></div>

		<footer>
			<div class="container">
				<div class="row row-centered">
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
						Copyright &copy; 2016 BlogLives | Designed by <a href="#">HuzarO</a> | Developed by <a href="#">HuzarO</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<ul class="social-ul">
							<li>
								<a href="#">
									<span class="fa fa-facebook"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-twitter"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-google-plus"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-linkedin"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-youtube-play"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-vimeo"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-instagram"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>