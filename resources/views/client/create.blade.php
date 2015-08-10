@extends("layout")
@section("content")
	<h1>Ajout d'un client</h1>
		{!! Form::open(array('route' => 'client.store', 'class' => 'form-horizontal')) !!}
		{!! csrf_field() !!}
		{!! Form::textField('text', 'raison_sociale', $errors, 'Raison sociale', null, array('required'),'') !!}
		{!! Form::textField('text', 'numero_siret', $errors, 'Numéro Siret', null, array('maxlength' => '14', 'required'),'') !!}
		{!! Form::textField('text', 'adresse_1', $errors, 'Adresse 1', null, array('required' => 'required'),'') !!}
		{!! Form::textField('text', 'adresse_2', $errors, 'Adresse 2', null, null,'') !!}
		{!! Form::textField('text', 'adresse_3', $errors, 'Adresse 3', null, null,'') !!}
		{!! Form::textField('text', 'code_postal', $errors, 'Code postal', array('class' => 'col-md-2'), array('maxlength' => '5', 'required'),'col-md-2') !!}
		{!! Form::textField('text', 'ville', $errors, 'Ville', null, array('required' => 'required'),'') !!}
		{!! Form::textField('text', 'tel', $errors, 'Téléphone', array('class' => 'col-md-2'), array('maxlength' => '10', 'required'),'col-md-2') !!}
		{!! Form::textField('text', 'fax', $errors, 'Fax', array('class' => 'col-md-2'), array('maxlength' => '10', 'required'),'col-md-2') !!}
		{!! Form::textField('email', 'email', $errors, 'E-mail', null, array('required' => 'required'),'') !!}
		{!! Html::button_back() !!}
		{!! Form::button_submit('Envoyer') !!}
		{!! Form::close() !!}
@stop


