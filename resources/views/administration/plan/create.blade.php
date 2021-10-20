@extends('administration.menu')
@section('contenido')
<h1>Alta Plan</h1>
<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
          <form action="/createPlan" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group col-md-5">
                  <label for="pdf">Nombre/Alias Plan</label>
                  <input type="text" class="form-control-file" id="plan" name="plan" required>
                </div>
              <div class="form-group">
                <label for="pdf">PDF</label>
                <input type="file" class="form-control-file" id="pdf" name="pdf" required>
              </div>
                
                  <div class="col-sm-10">
                    <center><button type="submit" class="btn btn-primary px-4 ">Crear</button></center>
                  </div>
              </div>
          </form>
      </div>
    </div>
</div>
@stop