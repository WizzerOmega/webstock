@extends("layout")
@section("content")
	<h1>Ajout d'un produit</h1>
		{!! Form::open(array('route' => 'produit.store', 'class' => 'form-horizontal')) !!}
		{!! csrf_field() !!}
		<div class="form-group">
			{!! Form::label('matiere', 'Matière') !!}
			<select id ="matiere" name="matiere" class ="form-control">
				@foreach($matieres as $matiere)
					<option value="{{ $matiere->ID_MAT }}">{!! $matiere->LIB_MAT !!}</option>
				@endforeach
			</select>
		</div>
		{!! Form::textField('text', 'libelle', $errors, 'Libellé', null, array('required'),'') !!}
		<div class="form-group">
			{!! Form::label('type', 'Type') !!}
			{!! Form::select('type', array('Choisir un type', 'Cuir' => 'Cuir', 'Fer' => 'Fer', 'Plastique' => 'Plastique', 'Circuit Imprimé' => 'Circuit imprimé', 'Fil' => 'Fil'), Input::old('type'),['class' => 'form-control']) !!}
		</div>
		{!! Html::button_back() !!}
		{!! Form::button_submit('Envoyer') !!}
		{!! Form::close() !!}
@stop