<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<h1>Convocatorias</h1>
<body>
<div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Nombre Convocatoria </th><th> Descripcion </th><th> Tipo Convocatoria </th><th> Dependencia </th><th> Fecha Cierre </th><th> Contacto </th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($convocatoria1 as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombreConvocatoria }}</td><td>{{ $item->descripcion }}</td><td>{{ $item->tipoConvocatoria }}</td><td>{{ $item->dependencia }}</td><td>{{ $item->fechaCierre }}</td><td>{{ $item->contacto }}</td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $convocatoria1->render() !!} </div>
    </div>
</body>
</html>