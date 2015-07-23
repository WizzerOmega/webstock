@extends("layout")
@section("content")
	<h1>Modification d'un client</h1>
		{!! Form::model($client, array('route' => array('client.update', $client->ID_CLI), 'method' => 'PUT')) !!}	
		<div class="form-group {!! $errors->has('rsociale') ? 'has-error' : '' !!}">
			{!! Form::label('rsociale', 'Raison sociale') !!}
			{!! Form::text('rsociale', $client->RS_CLI, ['class' => 'form-control']) !!}
			{!! $errors->first('rsociale', '<p class="help-block">:message</p>') !!}
		</div>
		<div class="form-group {!! $errors->has('adr1') ? 'has-error' : '' !!}">
			{!! Form::label('adr1', 'Adresse 1') !!}
			{!! Form::text('adr1', $client['ADR1_CLI'],['class' => 'form-control']) !!}
			{!! $errors->first('adr1', '<p class="help-block">:message</p>') !!}
		</div>
		<div class="form-group {!! $errors->has('adr1') ? 'has-error' : '' !!}">
			{!! Form::label('adr2', 'Adresse 2') !!}
			{!! Form::text('adr2', $client['ADR2_CLI'],['class' => 'form-control']) !!}
			{!! $errors->first('adr2', '<p class="help-block">:message</p>') !!}
		</div>
		<div class="form-group {!! $errors->has('adr1') ? 'has-error' : '' !!}">
			{!! Form::label('adr3', 'Adresse 3') !!}
			{!! Form::text('adr3', $client['ADR3_CLI'],['class' => 'form-control']) !!}
			{!! $errors->first('adr3', '<p class="help-block">:message</p>') !!}
		</div>
		<div class="form-group {!! $errors->has('codep') ? 'has-error' : '' !!}">
			{!! Form::label('codep', 'Code postal') !!}
			{!! Form::text('codep',  $client['CP_CLI'], ['class' => 'form-control']) !!}
			{!! $errors->first('codep', '<p class="help-block">:message</p>') !!}
		</div>
		<div class="form-group {!! $errors->has('ville') ? 'has-error' : '' !!}">
			{!! Form::label('ville', 'Ville') !!}
			{!! Form::text('ville',  $client['VILLE_CLI'], ['class' => 'form-control']) !!}
			{!! $errors->first('ville', '<p class="help-block">:message</p>') !!}
		</div>
		<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
			{!! Form::label('email', 'E-mail') !!}
			{!! Form::email('email',  $client['MAIL_CLI'], ['class' => 'form-control']) !!}
			{!! $errors->first('email', '<p class="help-block">:message</p>') !!}
		</div>
		<div class="form-group {!! $errors->has('tel') ? 'has-error' : '' !!}">
			{!! Form::label('tel', 'Téléphone') !!}
			{!! Form::text('tel',  $client['TEL_CLI'], ['class' => 'form-control']) !!}
			{!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
		</div>
		<div class="form-group {!! $errors->has('fax') ? 'has-error' : '' !!}">
			{!! Form::label('fax', 'Fax') !!}
			{!! Form::text('fax',  $client['FAX_CLI'], ['class' => 'form-control']) !!}
			{!! $errors->first('fax', '<p class="help-block">:message</p>') !!}
		</div>
		<div class="text-left">
				<a href="javascript:history.back()" class="btn btn-info">
					<span class="glyphicon glyphicon-arrow-left"></span> Retour
				</a>

			{!! Form::submit('Envoyer', ['class' => 'btn btn-info']) !!}
		</div>
	{!! Form::close() !!}
@stop