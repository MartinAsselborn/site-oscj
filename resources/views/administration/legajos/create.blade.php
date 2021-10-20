@extends('administration.menu')
@section('contenido')
<h1>Alta Legajo</h1>
<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
          <form action="/createLegajo" method="POST">
              @csrf
              <div class="form-group row">
                                  
                                  <div class="col-sm-5">
                                                          <label for="name">Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name" value="" placeholder="Nombre">
                                      
                                  </div>   
                           
                                                
                                  <div class="col-sm-5">
                                                          <label for="lastname">Apellido</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" value="" placeholder="Apellido">
                                      
                                  </div>   
                           
                                                
                                  <div class="col-sm-5">
                                                          <label for="dni">DNI</label>
                                    <input type="text" class="form-control" id="dni" name="dni" value="" placeholder="DNI">
                                      
                                  </div>   
                           
                                                
                                  <div class="col-sm-5">
                                                          <label for="legajo">Legajo</label>
                                    <input type="text" class="form-control" id="legajo" name="legajo" value="" placeholder="Legajo">
                                      
                                  </div>   
                           
                                                
                                  <div class="col-sm-5">
                                                          <label for="parent_legajo">Legajo Tutor</label>
                                    <input type="text" class="form-control" id="parent_legajo" name="parent_legajo" value="" placeholder="Legajo Tutor">
                                      
                                  </div>   
                           
                                                
                                  <div class="col-sm-5">
                                                            <label for="plan">Plan</label>
                                      <select class="form-control" name="plan" id="plan">
                                      @foreach($campos1[5]['datos'] as $planes) 
                                           <option value="{{$planes['id']}}" > {{$planes['plan']}} </option>
                                      @endforeach       
                                                                        
                                      </select>
                                       
                                  </div>   
                           
                                                
                                  <div class="col-sm-5">
                                                          <label for="cuil_real">CUIL Real</label>
                                    <input type="text" class="form-control" id="cuil_real" name="cuil_real" value="" placeholder="CUIL Real">
                                      
                                  </div>   
                           
                                                
                                  <div class="col-sm-5">
                                                          <label for="credencial">Credencial</label>
                                    <input type="text" class="form-control" id="credencial" name="credencial" value="" placeholder="Credencial">
                                      
                                  </div>   
                           
                                                
                                  <div class="col-sm-5">
                                                          <label for="parentesco">Parentesco</label>
                                    <input type="text" class="form-control" id="parentesco" name="parentesco" value="" placeholder="Parentesco">
                                      
                                  </div>   
                           
                              
                                            
                                  <div class="col-sm-5">
                                                          <label for="fecha_nac">Fecha Nacimiento</label>
                                    <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" value="" placeholder="Fecha Nacimiento">
                                      
                                  </div>   
                      
                                            
                                  <div class="col-sm-5">
                                                          <label for="edad">Edad</label>
                                    <input type="text" class="form-control" id="edad" name="edad" value="" placeholder="Edad">
                                      
                                  </div>   
                      
                                            
                                  <div class="col-sm-5">
                                                            <label for="obra_social">Obra Social</label>
                                      <select class="form-control" name="obra_social" id="obra_social">
                                      @foreach($campos2[2]['datos'] as $obra) 
                                            <option value="{{$obra['id']}}" > {{$obra['obra_social']}} </option>
                                      @endforeach  
                                      </select>
                                       
                                  </div>   
                      
                                            
                                  <div class="col-sm-5">
                                                          <label for="fecha_alta">Fecha Alta</label>
                                    <input type="date" class="form-control" id="fecha_alta" name="fecha_alta" value="" placeholder="Fecha Alta">
                                      
                                  </div>   
                      
                                            
                                  <div class="col-sm-5">
                                                          <label for="baja_scj">Fecha Baja</label>
                                    <input type="date" class="form-control" id="baja_scj" name="baja_scj" value="" placeholder="Fecha Baja">
                                      
                                  </div>   
                      
                                            
                                  <div class="col-sm-5">
                                                          <label for="baja_obra_social">Fecha Baja Obra Social</label>
                                    <input type="date" class="form-control" id="baja_obra_social" name="baja_obra_social" value="" placeholder="Fecha Baja Obra Social">
                                      
                                  </div>   
                      
                                            
                                  <div class="col-sm-5">
                                                          <label for="cuit">Cuit</label>
                                    <input type="text" class="form-control" id="cuit" name="cuit" value="" placeholder="Cuit">
                                      
                                  </div>   
                      
                                            
                                  <div class="col-sm-5">
                                                          <label for="contacts">Contacto</label>
                                    <input type="text" class="form-control" id="contacts" name="contacts" value="" placeholder="Contacto">
                                      
                                  </div>   
                      
                                            
                                  <div class="col-sm-5">
                                                          <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="" placeholder="Email">
                                      
                                  </div>   
                      
                              
              
                            </div>
              <div class="form-group row">
                
                  <div class="col-sm-10">
                    <center><button type="submit" class="btn btn-primary px-4 ">Crear</button></center>
                  </div>
              </div>
          </form>
      </div>
    </div>
</div>
@stop