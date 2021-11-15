@extends('administration.menu')
@section('contenido')
<h1>Noticia</h1>

<form action="/editNoticia" method="POST" enctype="multipart/form-data">
  @csrf
  <input name='id' value='{{$noticias->id}}' type='hidden'></input>
  <div class="container py-5">
      <div class="row">
          <div class="col-md-10 mx-auto">
                  <div class="form-group col-md-10">
                    <label >Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{$noticias->titulo}}" placeholder="Nombre">
                        
                  </div> <div class="form-group col-md-10">
                    <label >Subtitulo</label>
                    <input type="text" class="form-control" id="subtitulo" name="subtitulo" value="{{$noticias->subtitulo}}" placeholder="Nombre">
                        
                  </div>
                  <div class="form-group col-md-10">
                    <label >TEXTO de NOTICIA</label>
                    <textarea class="form-control" value=""  name='noticia' rows="3" >
                      {{$noticias->noticia}}
                    </textarea> 
                  </div>
                  <div class="form-group col-md-10">
                    <label >Imagen</label>
                    <img src="{{$noticias->getArchivo()}}"><img>
                    <input type="file" class="form-control-file" id="imagen" name="imagen" required>
                  </div>

                  <div class="form-group col-md-10">
                    <label >Leer mas...</label>
                    <textarea class="form-control" value=""   name='leermas' rows="3" >
                       {{$noticias->leermas}}
                    </textarea> 
                  </div>
                
                
                <div class="form-group row">
                    <div class="col-sm-10">
                      <center><button type="submit" class="btn btn-primary px-4 ">Modificar</button></center>
                    </div>
                </div>
        </div>
      </div>
  </div>
</form>
@stop