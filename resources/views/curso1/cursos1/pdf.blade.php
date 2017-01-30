<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
 <h1>Cursos</h1>
<body>
<div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Nombre </th><th> Descripcion </th><th> Fecha Inicio </th><th> Fecha Fin </th> <th> Hora Inicio </th><th> Hora Fin </th><th> Costo </th><th> Capacitador </th><th> Cupo </th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($cursos1 as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombreCurso }}</td><td>{{ $item->descripcion }}</td><td>{{ $item->fechaInicio }}</td><td>{{ $item->fechaFin }}</td><td>{{ $item->horaInicio }}</td><td>{{ $item->horaFin }}</td><td>{{ $item->costo }}</td><td>{{ $item->capacitador }}</td><td>{{ $item->cupoLimite }}</td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $cursos1->render() !!} </div>
    </div>
</body>
</html>