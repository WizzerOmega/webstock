@extends("layout")
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Mon compte</div>
        <div class="panel-body">
            {!! Form::model($user, ['class' => 'form-horizontal', 'files' => true]) !!}

            <div class="form-group">
                <label class="col-md-4 control-label">Pseudo</label>
                <div class="col-md-6">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Email</label>
                <div class="col-md-6">
                    {!! Form::email('email', null, ['class' => 'form-control', 'disabled']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Prénom</label>
                <div class="col-md-6">
                    {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Nom</label>
                <div class="col-md-6">
                    {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Modifier
                    </button>
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection