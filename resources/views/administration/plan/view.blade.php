@extends('administration.menu')
@section('contenido')
<h1>Plan</h1>
<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
              <div class="form-group col-md-5">
                  <label for="pdf">Nombre/Alias Plan</label>
                  <input type="text" class="form-control-file" value="{{$plan->plan}}" readonly>
                </div>
              <div class="form-group">
                <label for="pdf">PDF</label>
                <embed src="{{$plan->getArchivo()}}?{{rand(1231,40000);}}#toolbar=1&navpanes=1&scrollbar=1" type="application/pdf" width="100%" height="600px" />
              </div>
              
            
              <a class="btn btn-primary my-3" href="javascript:history.go(-1)">Volver</a>  
      </div>
    </div>
</div>
@stop