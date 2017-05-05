<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($tareas as $tarea)
                            <tr>
                                <td>{!! $tarea->nombre !!}</td>
                                <td>{!! $tarea->descripcion !!}</td>

                                  <td><a href="{{ route('tarea.editar', $tarea->id) }}" class="waves-effect waves-light btn">Editar</a></td>
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <a class="btn btn-primary" href="{!! URL::to('tarea/crear') !!}">Ingresar Tarea</a>
        </div>
    </div>
</div>
