<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title" id="gridSystemModalLabel">Détail du produit</h4>
</div>
<div class="modal-body">
    <div class="container-fluid">
        @if ($msg != '')
            <p>{!! $msg !!}</p>
        @else
             @foreach($detailP as $commande)
                <p>{!! $commande->LIB_MAT !!}</p>
            @endforeach
        @endif
    </div>
</div>