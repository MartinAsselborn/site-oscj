@extends('administration.menu')
@section('contenido')
<h1>Editar Plan</h1>
<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
          <form action="/editPlan" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="{{$plan->id}}">
              @csrf
              <div class="form-group col-md-5">
                  <label for="pdf">Nombre/Alias Plan</label>
                  <input type="text" class="form-control-file" id="plan" name="plan" value="{{$plan->plan}}" required>
                </div>
              <div class="form-group">
                <label for="pdf">PDF</label>
                <input type="file" class="form-control-file" id="pdf" name="pdf" required>
                <embed src="{{$plan->getArchivo()}}#toolbar=1&navpanes=1&scrollbar=1" type="application/pdf" width="100%" height="600px" />
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