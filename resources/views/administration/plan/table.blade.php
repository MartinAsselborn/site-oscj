@extends('administration.menu')
@section('contenido')

<div class="text-right">  <a title="Ver" href="/createPlan" class="btn btn-outline btn-success">
                         <i class="fa fa-plus fa-1x"></i>
                    </a>
</div>


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
      <th scope="row">{{$dato->plan}}</th>
     
      <td>
                    <a title="Ver" href="/plan/{{$dato->id}}" class="btn btn-outline btn-primary">
                         <i class="fa fa-eye fa-1x"></i>
                    </a>
                    <a href="/editPlan/{{$dato->id}}" class="btn btn-outline btn-primary">
                        <i class="fa fa-pencil fa-1x"></i>
                    </a>
                    <form method="POST" action="/deletePlan" style="display:inline-block"> 
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