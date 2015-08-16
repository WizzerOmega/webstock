@extends("layout")
@section("content")
<div>
	<table id="tabListeFournisseur" class="table text-center">
		<thead>
			<tr>
				<th>Numéro</th>
				<th>Libellé</th>
				<th>Prix</th>
				<th>Quantité</th>
				<th>Limite stock</th>
				<th>Détails</th>
			</tr>
		</thead>
		<tbody>
			@foreach($produits as $produit)
				<tr>
					<td>{!! $produit->NUM_PROD !!}</td>
					<td>{!! $produit->LIB_PROD !!}</td>
					<td>{!! $produit->PRIX_PROD !!}</td>
					<td>{!! $produit->QTE_PROD !!}</td><td>
						<a href="{!! URL::route('produit.show', $produit->ID_PROD) !!}" data-toggle="modal" data-target="#detailProduit">
							<button type="button" class="btn btn-default btn-mini">
  								<span class="glyphicon glyphicon-search"></span>
							</button>
						</a>
					</td>
					<td><img src="{!! $produit->IMG_PROD !!}"/></td>
<!--type-->
				</tr>
			 @endforeach
		 </tbody>
	</table>
 </div>
@stop
<div id="detailProduit" class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content"></div>
    </div> <!-- /.modal-dialog -->
</div>