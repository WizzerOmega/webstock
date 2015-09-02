@extends("layout")
@section("content")
	<h1>Dernière(s) commande(s) du client {!! $client->RS_CLI !!}</h1>
		<table id="tabDetailCmdClient" class="table text-center">
			<thead>
				<tr>
					<th>Numéro commande</th>
					<th>Raison sociale</th>
					<th>Adresse 1</th>
					<th>Adresse 2</th>
					<th>Adresse 3</th>
					<th>Code postal</th>
					<th>Ville</th>
					<th>Email</th>
					<th>Téléphone</th>
					<th>Fax</th>
					<th>Modifier</th>
					<th>Supprimer</th>
				</tr>
			</thead>
			<tbody>
				@foreach($commandes as $commande)
					<tr>
						<td>{{ $commande->ID_COM }}</td>
						<td>{{ $commande->NUM_COM }}</td>
						<td>{{ $commande->DATE_COM }}</td>
						<td>{{ $commande->DATE_LIVRAISON_COM }}</td>
						<td>{{ $commande->LIB_STA }}</td>
					</tr>
				@endforeach
			</tbody>
		</table> 
	</div>
@stop



