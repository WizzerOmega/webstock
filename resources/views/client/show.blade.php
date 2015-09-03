@extends("layout")
@section("content")
	<h1>Dernière(s) commande(s) du client {!! $client->RS_CLI !!}</h1>
		<table id="tabDetailCmdClient" class="table text-center">
			<thead>
				<tr>
					<th>Numéro commande</th>
					<th>Date création</th>
					<th>Date livraison</th>
					<th>Statut</th>
				</tr>
			</thead>
			<tbody>
				@foreach($commandes as $commande)
					<tr>
						<td>{{ $commande->NUM_COM }}</td>
						<td>{{ date('j / m / Y', strtotime($commande->DATE_COM)) }}</td>
						<td>{{ date('j / m / Y', strtotime($commande->DATE_LIVRAISON_COM)) }}</td>
						<td>{{ $commande->LIB_STA }}</td>
					</tr>
				@endforeach
			</tbody>
		</table> 
	</div>
			<div class="text-left" style="padding-left: 20px;">
		<a href="javascript:history.back()" class="btn btn-info">
			<span class="glyphicon glyphicon-arrow-left"></span> Retour
		</a>
	</div>
@stop



