@section("header")
 <div class="header">
  <div class="row clearfix">
    <div class="col-md-12 column">
      <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="{{ URL::route('home.index') }}">Webstock</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Client<strong class="caret"></strong></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="">Liste des clients</a>
                </li>
                <li>
                  <a href="">Nouveau client</a>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fournisseur<strong class="caret"></strong></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="">Liste des fournisseurs</a>
                </li>
                <li>
                  <a href="">Nouveau fournisseur</a>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produit<strong class="caret"></strong></a>
              <ul class="dropdown-menu">
                <li class="pad_left_10"><b>Matière première</b></li>                
                <li>
                  <a href="">Liste des matières premières</a>
                </li>
                <li>
                  <a href="">Ajouter une matière première</a>
                </li>
                <li>
                  <a href="">Association</a>
                </li>
                <li class="divider"></li>
                <li class="pad_left_10"><b>Nomenclature Produit</b></li>                
                  <li>
                    <a href="">Liste des produits</a>
                  </li>
                  <li>
                    <a href="">Créer un produit</a>
                  </li>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Comptabilité<strong class="caret"></strong></a>
              <ul class="dropdown-menu">
                <li class="pad_left_10"><b>Fournisseurs</b></li>
                <li>
                  <a href="">Commandes fournisseurs</a>
                </li>
                <li class="divider"></li>               
                <li class="pad_left_10"><b>Clients</b></li>
                <li>
                  <a href="">Commandes client</a>
                </li>
                <li>
                  <a href="" title="Nouvelle commande client">Nouvelle commande</a>
                </li>
              </ul>
            </li>
          </ul>
          @if (Auth::check())
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>{{ Auth::user()->name }}</strong><strong class="caret"></strong></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="{{ URL::to('logout') }}">Déconnexion</a>
                </li>
              </ul>
            </li>
          </ul>
          @endif
        </div>
      </nav>
    </div>
  </div>
</div>
@show