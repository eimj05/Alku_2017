 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <h1>Usuarios</h1>
 <body>
 
 <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Nombre </th><th> Direccion </th><th> Telefono </th><th> Email </th><th>Admin</th><th>Empresa</th><th>Usuario</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($cliente as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->direccion }}</td>
                    <td>{{ $item->telefono }}</td>
                    <td>{{ $item->email }}</td>
                    <td><input type="checkbox" {{$item->hasRole('Admin') ? 'checked' : ''}} name="role_admin"></td>
                    <td><input type="checkbox" {{$item->hasRole('Empresa') ? 'checked' : ''}} name="role_empresa"></td>
                    <td><input type="checkbox" {{$item->hasRole('RegUser') ? 'checked' : ''}} name="role_reguser"></td>

                
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $cliente->render() !!} </div>
    </div>

 </body>
 </html>
