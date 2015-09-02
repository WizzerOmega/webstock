@extends("layout")
@section("content")

	<table id="tabListeClient" class="table text-center">
		<thead>
			<tr>
				<th>Code</th>
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
			@foreach($clients as $client)
				<tr>
					<td>{{ $client->CODE_CLI }}</td>
					<td>{{ $client->RS_CLI }}</td>
					<td>{{ $client->ADR1_CLI }}</td>
					<td>{{ $client->ADR2_CLI }}</td>
					<td>{{ $client->ADR3_CLI }}</td>
					<td>{{ $client->CP_CLI }}</td>
					<td>{{ $client->VILLE_CLI }}</td>
					<td>{{ $client->MAIL_CLI }}</td>
					<td>{{ $client->TEL_CLI }}</td>
					<td>{{ $client->FAX_CLI }}</td>
					<td>
						<a href="{!! URL::route('client.show', $client->ID_CLI) !!}">
							<button type="button" class="btn btn-default btn-mini">
  								<span class="glyphicon glyphicon-search"></span>
							</button>
						</a>
					</td>
					<td>
						<a href="{!! URL::route('client.edit', $client->ID_CLI) !!}">
							<button type="button" class="btn btn-default btn-mini">
  								<span class="glyphicon glyphicon-pencil"></span>
							</button>
						</a>
					</td>
					<td>
						{!! Form::open(array('url' => 'client/' . $client->ID_CLI)) !!}
						{!! csrf_field() !!}
						{!! Form::hidden('_method', 'DELETE') !!}
						{!! Form::button('<span class="glyphicon glyphicon-trash"></span>', array('type' => 'submit', 'class' => 'btn btn-default btn-mini')) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			 @endforeach
		</tbody>
	</table>
@stop