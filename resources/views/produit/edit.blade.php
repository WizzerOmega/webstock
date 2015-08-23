
        @if ($msg != '')
            <p>{!! $msg !!}</p>
        @else
             @foreach($detailP as $commande)
                <p>{!! $commande->LIB_MAT !!}</p>
            @endforeach
        @endif
