@extends('layouts.app')


@section('main-content')
	<div class="container">

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
			<img src="/uploads/avatars/{{$user->avatar}}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
			<h2>Foto del perfil de {{ $user->name}} </h2>
			<form enctype="multipart/form-data" action="/profile" method="POST">
				<label> Actualizar Imagen</label>
				<input type="file" name="avatar">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" value="Actualizar" class="pull-right btn btn-sm btn-primary">
			</form>


				</div>
			</div>
                
	</div>
@endsection
