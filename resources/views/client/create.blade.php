@extends("layout")
@section("content")
	<h1>Ajout d'un client</h1>
		{!! Form::open(array('route' => 'client.store', 'class' => 'form-horizontal')) !!}
		{!! csrf_field() !!}
		<div class="form-group">
			{!! Form::label('raison_sociale', 'Raison sociale') !!}
			{!! Form::text('raison_sociale', Input::old('raison_sociale'), ['class' => 'form-control']) !!}
			{!! $errors->first('raison_sociale', '<p class="help-block">:message</p>') !!}
		</div>
		<div class="form-group">
			{!! Form::label('adr1', 'Adresse 1') !!}
			{!! Form::text('adr1', Input::old('adr1'),['class' => 'form-control']) !!}
			{!! $errors->first('adr1', '<p class="help-block">:message</p>') !!}
		</div>
		<div class="form-group">
			{!! Form::label('adr2', 'Adresse 2') !!}
			{!! Form::text('adr2', Input::old('adr2'), ['class' => 'form-control', 'required']) !!}
			{!! $errors->first('adr2', '<p class="help-block">:message</p>') !!}
		</div>
		<div class="form-group">
			{!! Form::label('adr3', 'Adresse 3') !!}
			{!! Form::text('adr3', Input::old('adr3'), ['class' => 'form-control']) !!}
			{!! $errors->first('adr3', '<p class="help-block">:message</p>') !!}
		</div>
		<div class="form-group">
			{!! Form::label('codep', 'Code postal') !!}
			{!! Form::text('codep', Input::old('codep'), ['class' => 'form-control']) !!}
			{!! $errors->first('codep', '<p class="help-block">:message</p>') !!}
		</div>
		<div class="form-group">
			{!! Form::label('ville', 'Ville') !!}
			{!! Form::text('ville', Input::old('ville'), ['class' => 'form-control']) !!}
			{!! $errors->first('ville', '<p class="help-block">:message</p>') !!}
		</div>
		<div class="form-group">
			{!! Form::label('email', 'E-mail') !!}
			{!! Form::email('email', Input::old('email'), ['class' => 'form-control']) !!}
			{!! $errors->first('email', '<p class="help-block">:message</p>') !!}
		</div>
		<div class="form-group">
			{!! Form::label('tel', 'Téléphone') !!}
			{!! Form::text('tel', Input::old('tel'), ['class' => 'form-control']) !!}
			{!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
		</div>
		{!! Form::textField('ville', $errors, 'Ville', array(), array('maxlength' => '60', 'required' => 'required'), null) !!}
		{!! Form::textField('fax', $errors, 'Fax', array('class' => 'col-md-2'), array('maxlength' => '10', 'required' => 'required'),'col-md-2') !!}
		<div class="form-group">
			{!! Form::label('fax', 'Fax') !!}
			{!! Form::text('fax', Input::old('fax'), ['class' => 'form-control']) !!}
			{!! $errors->first('fax', '<p class="help-block">:message</p>') !!}
		</div>
		<div class="text-left">
			{!! Html::button_back() !!}
			{!! Form::button_submit('Envoyer !') !!}
		</div>
		{!! Form::close() !!}
@stop


