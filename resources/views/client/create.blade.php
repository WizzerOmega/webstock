@extends("layout")
@section("content")
	<h1>Ajout d'un client</h1>

	<form method="POST" action="{{ URL::route('client.store') }}" class="form-horizontal">
		{!! csrf_field() !!}
		<div class="form-group {{ $errors->has('rsociale') ? 'has-error' : '' }}">
			<label for ="rsociale" class="control-label col-md-2">Raison sociale</label>
			<div class="col-md-10">
				<input type="text" class="form-control" label="rsociale" name="rsociale" value="{{ old('rsociale') }}" required>
			</div>
		</div>
		<div class="form-group {{ $errors->has('ad1') ? 'has-error' : '' }}">
			<label for ="ad1" class="control-label col-md-2">Adresse 1</label>
			<div class="col-md-10">
				<input type="text" class="form-control" label="ad1" ="ad1" value="{{ old('ad1') }}" required>
			</div>
		</div>
		<div class="form-group {{ $errors->has('ad2') ? 'has-error' : '' }}">
			<label for ="ad2" class="control-label col-md-2">Adresse 2</label>
			<div class="col-md-10">
				<input type="text" class="form-control" label="ad2" name="ad2" value="{{ old('ad2') }}">
			</div>
		</div>
		<div class="form-group {{ $errors->has('ad3') ? 'has-error' : '' }}">
			<label for ="ad3" class="control-label col-md-2">Adresse 3</label>
			<div class="col-md-10">
				<input type="text" class="form-control" label="ad3" name="ad3" value="{{ old('ad3') }}">
			</div>
		</div>
		<div class="form-group {{ $errors->has('codep') ? 'has-error' : '' }}">
			<label for ="codep" class="control-label col-md-2">Code postal</label>
			<div class="col-md-2">
				<input type="text" class="form-control" label="codep" name="codep" maxlength="5" value="{{ old('codep') }}" required>
			</div>
		</div>
		<div class="form-group {{ $errors->has('ville') ? 'has-error' : '' }}">
			<label for ="ville" class="control-label col-md-2">Ville</label>
			<div class="col-md-10">
				<input type="text" class="form-control" label="ville" name="ville" value="{{ old('ville') }}" required>
			</div>
		</div>



	    <div>
	        Password
	        <input type="password" name="password" id="password">
	    </div>

	    <div>
	        <input type="checkbox" name="remember"> Remember Me
	    </div>

	    <div>
	        <button type="submit" class="btn btn-default">Login</button>
	    </div>
	</form>
@stop