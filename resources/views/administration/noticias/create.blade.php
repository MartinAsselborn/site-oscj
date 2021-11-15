@extends('administration.menu')
@section('contenido')
<h1>Noticia</h1>
<form action="/createNoticia" method="POST" enctype="multipart/form-data">
@csrf
<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
                <div class="form-group col-md-10">
                  <label >Titulo</label>
                  <input type="text" class="form-control" id="titulo" name="titulo" value="" placeholder="Nombre">
                      
                </div> <div class="form-group col-md-10">
                  <label >Subtitulo</label>
                  <input type="text" class="form-control" id="subtitulo" name="subtitulo" value="" placeholder="Nombre">
                      
                </div>
                <div class="form-group col-md-10">
                  <label >TEXTO de NOTICIA</label>
                  <textarea class="form-control" name='noticia' value="" rows="10" >
                      
                  </textarea> 
                </div>
                <div class="form-group col-md-10">
                  <label for="pdf">Imagen</label>
                    <input type="file" class="form-control-file" id="imagen" name="imagen" required>
                </div>

                <div class="form-group col-md-10">
                  <label >Leer mas...</label>
                  <textarea class="form-control" value="" name="leermas" rows="3" >
                      
                  </textarea> 
                </div>
               
                <div class="form-group row">
                    <div class="col-sm-10">
                      <center><button type="submit" class="btn btn-primary px-4 ">Crear</button></center>
                    </div>
                </div>
      </div>
    </div>
</div>
</form>
@stop