<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Ingresar información de la tarea</div>
                @if($errors->has())
                    <div class='alert alert-danger'>
                        @foreach ($errors->all('<p>:message</p>') as $message)
                            {!! $message !!}
                        @endforeach
                    </div>
                @endif

                @if (Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif
                <div class="panel-body">
                    {!! Form::open(['route' => 'tarea.almacenar']) !!}
                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripción') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
              {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
            </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
