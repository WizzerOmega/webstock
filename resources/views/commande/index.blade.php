@extends("layout")
@section("content")
	<table id="tabListeCommandeCient" class="table text-center">
		<thead>
			<tr>
				<th>Numéro Commande</th>
				<th>Date de commande</th>
				<th>Date de livraison commande</th>
				<th>Statut commande</th>
				<th>Détail de la commande</th>
			</tr>
		</thead>
		<tbody>
			@foreach($commandes as $commande)
				<tr>
					<td>{{ $commande->NUM_COM }}</td>
					<td>{{ $commande->DATE_COM }}</td>
					<td>{{ $commande->DATE_LIVRAISON_COM }}</td>
					<td>{{ $commande->LIB_STA }}</td>
					<td>
						<a href="{!! URL::route('commande.show', $commande->ID_COM) !!}">
							<button type="button" class="btn btn-default btn-mini">
  								<span class="glyphicon glyphicon-search"></span>
							</button>
						</a>
					</td>
				</tr>
			 @endforeach
		</tbody>
	</table>
	<div class="text-left">
		<a href="javascript:history.back()" class="btn btn-info">
			<span class="glyphicon glyphicon-arrow-left"></span> Retour
		</a>
	</div>
@stop