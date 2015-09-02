@extends('app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Register</div>
        <div class="panel-body">

            {!! Form::open(['class' => 'form-horizontal' ]) !!}

            <div class="form-group">
                <label class="col-md-4 control-label">Nom d'utilisateur</label>
                <div class="col-md-6">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail</label>

                <div class="col-md-6">
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Mot de passe</label>

                <div class="col-md-6">
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Confirmer le mot de passe</label>

                <div class="col-md-6">
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        S'inscrire
                    </button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
