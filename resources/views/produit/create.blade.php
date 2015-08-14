@extends("layout")
@section("content")
	<h1>Ajout d'un fournisseur</h1>
		{!! Form::open(array('route' => 'client.store', 'class' => 'form-horizontal')) !!}
		{!! csrf_field() !!}
		{!! Form::textField('text', 'libelle', $errors, 'Raison sociale', null, array('required'),'') !!}
		<div class="form-group">
			{!! Form::label('type', 'Type') !!}
			{!! Form::select('type', array('Choisir un type', 'Cuir' => 'Cuir', 'Fer' => 'Fer', 'Plastique' => 'Plastique', 'Circuit Imprimé' => 'Circuit imprimé', 'Fil' => 'Fil'), Input::old('type'),['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('matiere', 'Matière') !!}
			<select id ="matiere" name="matiere" class ="form-control">
				@foreach($matieres as $matiere)
					<option value="{{ $matiere->ID_MAT }}">{!! $matiere->LIB_MAT !!}</option>
				@endforeach
			</select>
		</div>
		{!! Form::textField('text', 'prix', $errors, 'Adresse 2', null, null,'') !!}
		{!! Form::textField('text', 'adresse_3', $errors, 'Adresse 3', null, null,'') !!}
		{!! Html::button_back() !!}
		{!! Form::button_submit('Envoyer !') !!}
		{!! Form::close() !!}
@stop