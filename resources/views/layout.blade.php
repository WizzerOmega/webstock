<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<!-- Latest compiled and minified CSS -->
		{!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}

		<!-- Optional theme -->
		{!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css') !!}

		<!-- Latest compiled and minified JavaScript -->
		{!! Html::script('https://code.jquery.com/jquery-1.11.3.min.js') !!}
		{!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') !!}

		<title></title>
	</head>
	<body>
		<nav class="nav-collapse" role="navigation">
			<ul class="nav nav-tabs">
				<li class="dropdown" role="presentation">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Client<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li><a href="{{ URL::route('client.index') }}">Liste des clients</a></li>
						<li><a href="{{ URL::route('client.create') }}">Nouveau client</a></li>
					</ul>
				</li>
				<li class="dropdown" role="presentation">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Fournisseur<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li><a href="{{ URL::route('fournisseur.index') }}">Liste des fournisseurs</a></li>
						<li><a href="{{ URL::route('fournisseur.create') }}">Nouveau fournisseur</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<div class="content">
			<div class="container">
				@include('flash')
				@yield('content')
			</div>
		</div>
	</body>
</html>