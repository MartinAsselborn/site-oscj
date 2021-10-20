@extends('administration.menu')
@section('contenido')
<form action="/editUser" method="POST">
    @csrf
  <input type="hidden" name="id" value="{{$user->id}}">  
  <div class="form-group">
    <label for="nombreyapellido">Nombre y Apellido</label>
    <input value="{{$user->name}}"type="text" class="form-control" id="nombreyapellido" name="nombreyapellido" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>
  
  <div class="form-group">
    <label for="email">Usuario</label>
    <input value="{{$user->email}}" type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="rol">Rol</label>
    <select class="form-control" id="rol" name="rol">
  @foreach($rols as $rol)
        @if($rol->id==$user->rol_id)
        <option value="{{$rol->id}}" selected> {{$rol->rol}} </option>
        @else
        <option value="{{$rol->id}}" > {{$rol->rol}} </option>
        @endif
  @endforeach  
    </select>
  </div>

  
  <button type="submit" class="btn btn-primary">Modificar</button>
  <a href="#" class="btn btn-primary" onclick="renovacionContraseña('{{$user->id}}')">Renovar Contraseña</a>

</form>
<script>
    function renovacionContraseña(userid){
          $.ajax({
            url: "https://www.oscj.com.ar/renovarPass/"+userid,
            type: 'GET',
            contentType:"*"
         }).done(function(data){
           alert("la nueva password del usuario es " + data);
         });    
    }
</script>  

@stop