@extends('layouts.app')

@section('content')
<div class="container">

<!-- Alert de empleado modificado correctamente -->
@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  <strong>
    {{ Session::get('mensaje')}}
  </strong>
</div>
<script>
  var alertList = document.querySelectorAll('.alert');
  alertList.forEach(function (alert) {
    new bootstrap.Alert(alert)
  })
</script>
@endif
<!-- Fin del Alert -->

<a href="{{ url('empleado/create') }}" class="btn btn-success"> Registrar nuevo empleado </a>
<br>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
        </thead>

        <tbody>
            @foreach($empleados as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                <td>
                    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">
                </td>
                <td>{{ $empleado->Nombre }}</td>
                <td>{{ $empleado->ApellidoPaterno }}</td>
                <td>{{ $empleado->ApellidoMaterno }}</td>
                <td>{{ $empleado->Correo }}</td>
                <td>
                
                <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-primary">
                    Editar
                </a>
                | 

                    <form action="{{ url('/empleado/'.$empleado->id ) }}" class="d-inline" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input class="btn btn-danger" type="submit" onclick="return confirm('¿Desea borrar?')" 
                        value="Borrar">

                    </form>
                
                </td>
            </tr>
            @endforeach

        </tbody>

</table>

<!-- Paginacion -->
{!! $empleados->links() !!}

</div>
@endsection