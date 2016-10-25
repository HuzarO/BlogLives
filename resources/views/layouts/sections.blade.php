@section('right-pane')
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
		<div class="block-box-widget">
			<div class="block-box-title">
				<span class="fa fa-file-text"></span>
				Social Statistics
			</div>
			<div class="block-box-body">
				<div class="social-statistics follow-social">
					<ul>
						<li class="facebook">
							<a href="#">
								<span class="fa fa-facebook"></span>
								359 <span class="label">FANS</span>
							</a>
						</li>
						<li class="twitter">
							<a href="#">
								<span class="fa fa-twitter"></span>
								421 <span class="label">FOLLOWERS</span>
							</a>
						</li>
						<li class="vimeo">
							<a href="#">
								<span class="fa fa-vimeo"></span>
								35124 <span class="label">SUBSCRIBERS</span>
							</a>
						</li>
						<li class="youtube">
							<a href="#">
								<span class="fa fa-youtube-play"></span>
								2439 <span class="label">SUBSCRIBERS</span>
							</a>
						</li>
						<li class="google-plus">
							<a href="#">
								<span class="fa fa-google-plus"></span>
								42195 <span class="label">FOLLOWERS</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="block-box-widget profile-search">
			<div class="block-box-title">
				<span class="glyphicon glyphicon-search"></span>
				Szukaj
			</div>
			<div class="block-box-body">
				<form action="#" method="POST">
					<div class="form-group">
						<label class="sr-only" for="search-string">Szukaj</label>
						<input type="text" class="form-control" id="search-string" placeholder="Szukaj..."/>
					</div>

					<button type="submit" class="btn btn-default">Szukaj</button>
				</form>
			</div>
		</div>
		<div class="block-box-widget profile-categories">
			<div class="block-box-title">
				<span class="fa fa-folder-open"></span>
				Kategorie
			</div>
			<div class="block-box-body">
				<ul>
					<li><a href="#">Muzyka</a></li>
					<li><a href="#">Sztuka</a></li>
					<li><a href="#">Fotografia</a></li>
					<li><a href="#">Architektura</a></li>
					<li><a href="#">Programowanie</a></li>
					<li><a href="#">Kuchnia</a></li>
				</ul>
			</div>
		</div>
		<div class="block-box-widget profile-tags">
			<div class="block-box-title">
				<span class="fa fa-tags"></span>
				Tagi
			</div>
			<div class="block-box-body">
				<a href="#" class="tag-link">both</a>
				<a href="#" class="tag-link">left</a>
				<a href="#" class="tag-link">News</a>
				<a href="#" class="tag-link">music</a>
				<a href="#" class="tag-link">Angelika</a>
				<a href="#" class="tag-link">house</a>
				<a href="#" class="tag-link">Math</a>
			</div>
		</div>
	</div>
@endsection