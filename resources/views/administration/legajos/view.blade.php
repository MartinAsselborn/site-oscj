@extends('administration.menu')
@section('contenido')
<h1>Legajo {{$legajo->legajo}}</h1>
<form >
    @csrf
  <input type="hidden" name="id" value="{{$legajo->id}}">  
  <div class="form-group row">
                                  
                    <div class="col-sm-5">
                                            <label for="name">Nombre</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{$legajo->name}}" placeholder="Nombre">
                        
                    </div>   
             
                                  
                    <div class="col-sm-5">
                                            <label for="lastname">Apellido</label>
                      <input type="text" class="form-control" id="lastname" name="lastname" value="{{$legajo->lastname}}" placeholder="Apellido">
                        
                    </div>   
             
                                  
                    <div class="col-sm-5">
                                            <label for="dni">DNI</label>
                      <input type="text" class="form-control" id="dni" name="dni" value="{{$legajo->dni}}" placeholder="DNI">
                        
                    </div>   
             
                                  
                    <div class="col-sm-5">
                                            <label for="legajo">Legajo</label>
                      <input type="text" class="form-control" id="legajo" name="legajo" value="{{$legajo->legajo}}" placeholder="Legajo">
                        
                    </div>   
             
                                  
                    <div class="col-sm-5">
                                            <label for="parent_legajo">Legajo Tutor</label>
                      <input type="text" class="form-control" id="parent_legajo" name="parent_legajo" value="{{$legajo->parent_legajo}}" placeholder="Legajo Tutor">
                        
                    </div>   
             
                                  
                    <div class="col-sm-5">
                                              <label for="plan">Plan</label>
                        <select class="form-control" name="plan" id="plan">
                        @foreach($campos1[5]['datos'] as $planes) 
                            @if($legajo->plan_id==$planes['id'])     
                              <option value="{{$planes['id']}}" selected> {{$planes['plan']}} </option>
                            @else
                              <option value="{{$planes['id']}}" > {{$planes['plan']}} </option>
                            @endif 
                         @endforeach       
                                                          
                        </select>
                         
                    </div>   
             
                                  
                    <div class="col-sm-5">
                                            <label for="cuil_real">CUIL Real</label>
                      <input type="text" class="form-control" id="cuil_real" name="cuil_real" value="{{$legajo->cuil_real}}" placeholder="CUIL Real">
                        
                    </div>   
             
                                  
                    <div class="col-sm-5">
                                            <label for="credencial">Credencial</label>
                      <input type="text" class="form-control" id="credencial" name="credencial" value="{{$legajo->credencial}}" placeholder="Credencial">
                        
                    </div>   
             
                                  
                    <div class="col-sm-5">
                                            <label for="parentesco">Parentesco</label>
                      <input type="text" class="form-control" id="parentesco" name="parentesco" value="{{$legajo->parentesco}}" placeholder="Parentesco">
                        
                    </div>   
             
                
                              
                    <div class="col-sm-5">
                                            <label for="fecha_nac">Fecha Nacimiento</label>
                      <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" value="{{$legajo->fecha_nac}}" placeholder="Fecha Nacimiento">
                        
                    </div>   
        
                              
                    <div class="col-sm-5">
                                            <label for="edad">Edad</label>
                      <input type="text" class="form-control" id="edad" name="edad" value="{{$legajo->edad}}" placeholder="Edad">
                        
                    </div>   
        
                              
                    <div class="col-sm-5">
                                              <label for="obra_social">Obra Social</label>
                        <select class="form-control" name="obra_social" id="obra_social">
                        @foreach($campos2[2]['datos'] as $obra) 
                            @if($legajo->obra_social==$obra['id'])     
                              <option value="{{$obra['id']}}" selected> {{$obra['obra_social']}} </option>
                            @else
                              <option value="{{$obra['id']}}" > {{$obra['obra_social']}} </option>
                            @endif 
                         @endforeach  
                        </select>
                         
                    </div>   
        
                              
                    <div class="col-sm-5">
                                            <label for="fecha_alta">Fecha Alta</label>
                      <input type="date" class="form-control" id="fecha_alta" name="fecha_alta" value="{{$legajo->fecha_alta}}" placeholder="Fecha Alta">
                        
                    </div>   
        
                              
                    <div class="col-sm-5">
                                            <label for="baja_scj">Fecha Baja</label>
                      <input type="date" class="form-control" id="baja_scj" name="baja_scj" value="{{$legajo->baja_scj}}" placeholder="Fecha Baja">
                        
                    </div>   
        
                              
                    <div class="col-sm-5">
                                            <label for="baja_obra_social">Fecha Baja Obra Social</label>
                      <input type="date" class="form-control" id="baja_obra_social" name="baja_obra_social" value="{{$legajo->baja_obra_social}}" placeholder="Fecha Baja Obra Social">
                        
                    </div>   
        
                              
                    <div class="col-sm-5">
                                            <label for="cuit">Cuit</label>
                      <input type="text" class="form-control" id="cuit" name="cuit" value="{{$legajo->cuit}}" placeholder="Cuit">
                        
                    </div>   
        
                              
                    <div class="col-sm-5">
                                            <label for="contacts">Contacto</label>
                      <input type="text" class="form-control" id="contacts" name="contacts" value="{{$legajo->contacts}}" placeholder="Contacto">
                        
                    </div>   
        
                              
                    <div class="col-sm-5">
                                            <label for="email">Email</label>
                      <input type="text" class="form-control" id="email" name="email" value="{{$legajo->email}}" placeholder="Email">
                        
                    </div>   
        
                

              </div>
  
  <a class="btn btn-primary my-3" href="javascript:history.go(-1)">Volver</a>
  
  <div class="text-right ">  <!--a title="Ver" href="/createLegajo" class="btn btn-outline btn-success">
                         <i class="fa fa-plus fa-1x"></i>
                    </a-->
</div>
@if(count($sons))
<table class="table table-dark">
  <thead>
    <tr>
    @foreach($titulos as $titulo)
         <th scope="col">{{$titulo}}</th>
    @endforeach  
    </tr>
  </thead>
  <tbody>
 
    @foreach($sons as $son)
      <tr>
        <th scope="row">{{$son->name}}</th>
        <td>{{$son->legajo}}</td>
        <td>{{$son->email}}</td>
        <td>
                      <a title="Ver" href="/legajo/{{$son->id}}" class="btn btn-outline btn-primary">
                          <i class="fa fa-eye fa-1x"></i>
                      </a>
        </td>
    
      </tr>
    @endforeach  
  @endif  
  </tbody>
</table>


</form>
@stop