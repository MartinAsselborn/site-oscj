@extends('administration.menu')
@section('contenido')
<h1>Texto Web</h1>
<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
              <div class="form-group col-md-10">
                  <label >TEXTO</label>
                  <textarea class="form-control" value="{{$webtext->textweb}}" rows="3" readonly>
                        {{$webtext->textweb}}
                  </textarea> 
                </div>
              <a class="btn btn-primary my-3" href="javascript:history.go(-1)">Volver</a>  
      </div>
    </div>
</div>
@stop