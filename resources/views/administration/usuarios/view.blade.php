@extends('administration.menu')
@section('contenido')
<form >
    @csrf
  <input type="hidden" name="id" value="{{$user->id}}">  
  <div class="form-group">
    <label for="nombreyapellido">Nombre y Apellido</label>
    <input value="{{$user->name}}"type="text" class="form-control" id="nombreyapellido" name="nombreyapellido" aria-describedby="emailHelp" placeholder="Enter Name" disabled>
  </div>
  
  <div class="form-group">
    <label for="email">Usuario</label>
    <input value="{{$user->email}}" type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" disabled>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Rol</label>
    <select class="form-control" id="exampleFormControlSelect1" disabled>
  @foreach($rols as $rol)
        @if($rol->id==$user->rol_id)
        <option value="{{$rol->id}}" selected> {{$rol->rol}} </option>
        @else
        <option value="{{$rol->id}}" > {{$rol->rol}} </option>
        @endif
  @endforeach  
    </select>
  </div>


</form>
@stop