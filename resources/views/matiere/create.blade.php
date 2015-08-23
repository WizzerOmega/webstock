@extends("layout")
@section("content")
	<h1>Ajout d'une matière première</h1>
		{!! Form::open(array('route' => 'matiere.store', 'class' => 'form-horizontal')) !!}
		{!! csrf_field() !!}
		<div class="form-group">
			{!! Form::label('fournisseur', 'Fournisseur') !!}
			<select id ="fournisseur" name="fournisseur" class ="form-control">
				@foreach($fournisseurs as $fournisseur)
					<option value="{{ $fournisseur->ID_FOU }}">{!! $fournisseur->RS_FOU !!}</option>
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