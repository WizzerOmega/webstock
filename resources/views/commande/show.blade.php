@extends("layout")
@section("content")
	<div class="mar_left_100 mar_right_100">
		<h2>{{ 'Commande n° '.$detailCom->NUM_COM_CLI }}</h2>
		<div class="row pad_bot_20">
			<div class="col-md-6 text-left">
				<h3>Expéditeur</h3>
				<ul class="list-unstyled">
					<li>PLastock SA</li>
					<li>1 Rue G. Marconi</li>
					<li>Parc de la Vatine</li>
					<li>76130 Mont St Aignan</li>
				</ul>
			</div>
			<div class="col-md-6 text-right mar_top_50">
				<h3>Destinataire</h3>
				<ul class="list-unstyled">
					<li>{{ $detailCli->CODE_CLI }}</li>
					<li>{{ $detailCli->RS_CLI }}</li>
					<li>{{ $detailCli->ADR1_CLI }}</li>
					<li>{{ $detailCli->ADR2_CLI }}</li>
					<li>{{ $detailCli->ADR3_CLI }}</li>
					<li>{{ $detailCli->CP_CLI . ' ' . $detailCli->VILLE_CLI }}
					<li>{{ $detailCli->MAIL_CLI }}</li>
					<li>{{ $detailCli->TEL_CLI }}</li>
					<li>{{ $detailCli->FAX_CLI }}</li>
				</ul>
			</div>
		</div><!-- .row -->
		<div class="row pad_bot_10">
			<div class="col-md-12 text-right">
				<h4>{{ 'Date : '.date("d/m/Y", strtotime($detailCom->DATE_COM_CLI)) }}</h4>
			</div>
		</div><!-- .row -->
		<div class="row pad_bot_10">
			<div class="col-md-12 text-left">
				<h4>{{ 'N° de commande : '.$detailCom->NUM_COM_CLI }}</h4>
			</div>
		</div><!-- .row -->
		<div class="row">
			<table id="tabCommandeClient" class="table text-center">
				<thead>
					<tr>
						<th>Produit</th>
						<th>Prix unitaire</th>
						<th>Quantité</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<?php $prixTotal = 0; ?>
					@foreach($cmdClis as $cmdCli)
						<?php $totalProduit = $cmdCli->qte_prod * $cmdCli->prix_prod; ?> 
						<tr>
							<td>{{ $cmdCli->lib_prod }}</td>
							<td>{{ number_format($cmdCli->prix_prod, 2, ',', ' ') . ' &euro;' }}</td>
							<td>{{ $cmdCli->qte_prod }}</td>
							<td>{{ number_format($totalProduit, 2, ',', ' ') . ' &euro;' }}</td>	
						</tr>
						<?php $prixTotal+=$totalProduit; ?>
					@endforeach	
				</tbody>	
			</table>
		</div><!-- .row -->
		<div class="row">
			<div class="col-md-12 text-right">
			<h3>{{ 'Total : ' . number_format($prixTotal, 2, ',', ' ') . ' &euro;' }}</h3>
				
			</div>
		</div><!-- .row -->




		
		
		<div class="text-left">
			<a href="{{ URL::route('commandecli.index') }} ">
				<button type="button" class="btn btn-default btn-mini">
						<span class="glyphicon glyphicon-arrow-left"></span>
				</button>
			</a>
		</div>
	</div>
@stop