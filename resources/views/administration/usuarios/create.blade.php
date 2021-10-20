@extends('administration.menu')
@section('contenido')

<form action="/createUser" method="POST">
    @csrf
  <div class="form-group">
    <label for="nombreyapellido">Nombre y Apellido</label>
    <input type="text" class="form-control" id="nombreyapellido" name="nombreyapellido" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>
  
  <div class="form-group">
    <label for="email">Usuario</label>
    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="password">Password  </label>
    <input type="password" class="form-control"  id="password" name="password"  placeholder="Password">
  </div>
  <div class="form-group">
    <label for="cpassword">Confirmar Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword"   placeholder="Password">
  </div>
  <div class="form-group">
    <label for="rol">Rol</label>
    <select class="form-control" name="rol" id="rol">
      @foreach($rols as $rol)
        <option value="{{$rol->id}}" selected> {{$rol->rol}} </option>
      @endforeach  
    </select>
  </div>
 <button type="submit" class="btn btn-primary">Crear</button>

</form>
@stop