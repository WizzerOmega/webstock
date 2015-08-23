@extends("layout")
@section("content")
	<div class="row clearfix">
		{{ Form::open(array('route' => 'matiere.association', 'class' => 'form-horizontal well')) }}
			<h1 class="pad_bot_20">Association d'une matière première à un fournisseur</h1>
			<div class="col-md-6 column">
				<div class="form-group {{ $errors->has('matiere') ? 'has-error' : '' }}">
					{{ Form::label('matiere', 'Matière') }}
					<select id ="matiere" name="matiere" class ="form-control">
						@foreach($matieres as $matiere)
									<option value="{{ $matiere->ID_MAT }}">{{ $matiere->LIB_MAT }}</option>
						@endforeach	
					</select>				
				</div>
			</div>
			<div class="col-md-6 column">
				<div class="form-group {{ $errors->has('fournisseur') ? 'has-error' : '' }}">
					{{ Form::label('fournisseur', 'Founisseur') }}
					<select id ="fournisseur" name="fournisseur" class ="form-control">
						@foreach($fournisseurs as $fournisseur)
									<option value="{{ $fournisseur->ID_FOU }}">{{ $fournisseur->RS_FOU }}</option>
						@endforeach	
					</select>				
				</div>		
			</div>
			<div class="row">
				<div class="input-group col-md-2 pad_top_10 pad_bot_10">
					<span class="input-group-addon "><strong>&euro;</strong></span>
					{{ Form::text('prix', Input::old('prix'), ['class' => 'form-control', 'placeholder' => 'Prix']) }}
				</div>
			</div>
			{{ Form::submit('Envoyer', ['class' => 'btn btn-primary']) }}
		{{ Form::close() }}
	</div>
@stop