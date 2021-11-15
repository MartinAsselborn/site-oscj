@extends('administration.menu')
@section('contenido')
<h1>Editar Plan</h1>
<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
          <form action="/editWebText" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="{{$webtext->id}}">
              @csrf
              <div class="form-group col-md-10">
                  <label >TEXTO</label>
                  <textarea class="form-control" value="{{$webtext->textweb}}" name="textweb" rows="3">
                        {{$webtext->textweb}}
                  </textarea> 
                </div>
                  <div class="col-sm-10">
                    <center><button type="submit" class="btn btn-primary px-4 ">editar</button></center>
                  </div>
              </div>
          </form>
      </div>
    </div>
</div>
@stop