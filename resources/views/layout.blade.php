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
		<nav class="nav">
			<div class="navbar-header">
				<a href="#">
				{!! HTML::image('/img/webstock.png', 'alt', array( 'width' => 250, 'height' => 75 )) !!}
				</a>
			</div>
			<ul class="nav nav-tabs navbar-nav navbar-right navbar-collapse">
				@if (Auth::check())
					<li class="dropdown" role="presentation">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}<strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li><a href="{{ URL::route('logout') }}">Déconnexion</a></li>
						</ul>
					</li>
				@endif
			</ul>
		</nav>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 col-md-2" style="padding: 20px;">
					<ul class="nav nav-sidebar">
						<li><a href="{{ URL::route('fournisseur.index') }}">Liste des fournisseurs</a></li>
						<li><a href="{{ URL::route('fournisseur.create') }}">Nouveau fournisseur</a></li>
						<li><a href="{{ URL::route('client.index') }}">Liste des clients</a></li>
						<li><a href="{{ URL::route('client.create') }}">Nouveau client</a></li>
						<li><a href="{{ URL::route('produit.index') }}">Liste des produits</a></li>
						<li><a href="{{ URL::route('produit.create') }}">Nouveau produit</a></li>
						<li><a href="{{ URL::route('matiere.index') }}">Liste des matières</a></li>
						<li><a href="{{ URL::route('matiere.create') }}">Nouvelle matière</a></li>
						<li><a href="{{ URL::route('commande.index') }}">Commandes clients</a></li>
						<li><a href="{{ URL::route('commande.create') }}">Nouvelle commande</a></li>
					</ul>
				</div>
				<div class="col-sm-9 col-md-10" style="padding: 20px;">
					@include('flash')
					@yield('content')
				</div>
			</div>
		</div>
	</body>
</html>