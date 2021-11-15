@extends('administration.menu')
@section('contenido')



<table id="table" class="table table-dark" style="border-radius:20px 0 20px 20px;">
  <thead>
    <tr>
    @foreach($titulos as $titulo)
         <th scope="col" style="border-top:0;">{{$titulo}}</th>
    @endforeach  
    <th scope="col" style="border-top:0;">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($datos as $dato)
    <tr>
      <th scope="row">{{$dato->id}}</th>
      <td>{{$dato->textweb}}</td>
      <td>{{$vistas[$dato->vista]}}</td>
      <td>
                    <a title="Ver" href="/webtext/{{$dato->id}}" class="btn btn-outline btn-primary">
                         <i class="fa fa-eye fa-1x"></i>
                    </a>
                    <a href="/editWebText/{{$dato->id}}" class="btn btn-outline btn-primary">
                        <i class="fa fa-pencil fa-1x"></i>
                    </a>
                    <form method="POST" action="/deleteWebtext" style="display:inline-block"> 
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="id" value="{{$dato->id}}">
                      <button type="submit" class="btn btn-outline btn-danger">
                          <i class="fa fa-times fa-1x"></i>
                      </button>
                    </form>
       </td>
  
    </tr>
  @endforeach  
  </tbody>
</table>

@stop