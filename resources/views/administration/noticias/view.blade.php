@extends('administration.menu')
@section('contenido')
<h1>Noticia</h1>
<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
                <div class="form-group col-md-10">
                  <label >Titulo</label>
                  <input type="text" class="form-control" id="titulo" name="titulo" value="{{$noticias->titulo}}" placeholder="Nombre" readonly>
                      
                </div> <div class="form-group col-md-10">
                  <label >Subtitulo</label>
                  <input type="text" class="form-control" id="subtitulo" name="subtitulo" value="{{$noticias->subtitulo}}" placeholder="Nombre" readonly>
                      
                </div>
                <div class="form-group col-md-10">
                  <label >TEXTO de NOTICIA</label>
                  <textarea class="form-control" value="" rows="3" readonly>
                    {{$noticias->noticia}}
                  </textarea> 
                </div>
                <div class="form-group col-md-10">
                  <label >Imagen</label>
                  <img src="{{$noticias->getArchivo()}}"><img>
                
                </div>

                <div class="form-group col-md-10">
                  <label >Leer mas...</label>
                  <textarea class="form-control" value="" rows="3" readonly>
                   {{$noticias->leermas}}
                  </textarea> 
                </div>
               
              <a class="btn btn-primary my-3" href="javascript:history.go(-1)">Volver</a>  
      </div>
    </div>
</div>
@stop