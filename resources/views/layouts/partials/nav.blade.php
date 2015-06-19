<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"> Prht </a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ $username = Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/') }}">
										<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
										Dashboard
									</a>
								</li>
								<li><a href="{{ url('/' . $username . "/places" ) }}">
										<span class="glyphicon glyphicon-list" aria-hidden="true"></span>
										Created Courses
									</a>
								</li>
								<li><a href="{{ url('/' . $username . "/edit" ) }}">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
										Edit Profile
									</a>
								</li>
								<li><a href="{{ url('places/create') }}">
										<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
										Create Places
									</a>
								</li>
								<li><a href="{{ url('/auth/logout') }}">
										<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
										Logout
									</a>
								</li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>

</nav>