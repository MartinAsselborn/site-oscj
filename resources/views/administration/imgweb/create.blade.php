@extends('administration.menu')
@section('contenido')
<h1>Alta Legajo</h1>
<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
          <form action="/createLegajo" method="POST">
              @csrf
              <div class="form-group row">
              @foreach($campos1 as $key=>$campo)
                
              
                    <div class="col-sm-5">
                      @if($campos1[$key]['type']=='select')
                        <label for="{{$campos1[$key]['name']}}">{{$campos1[$key]['titulo']}}</label>
                        <select class="form-control" name="{{$campos1[$key]['name']}}" id="{{$campos1[$key]['name']}}">
                          @foreach($campos1[$key]['datos'] as $dato)
                            <option value="{{$dato['id']}}" selected> {{$dato['plan']}} </option>
                          @endforeach  
                        </select>
                       @else
                      <label for="{{$campos1[$key]['name']}}">{{$campos1[$key]['titulo']}}</label>
                      <input type="{{$campos1[$key]['type']}}" class="form-control" id="{{$campos1[$key]['name']}}" name="{{$campos1[$key]['name']}}" aria-describedby="emailHelp" placeholder="{{$campos1[$key]['name']}}">
                      @endif  
                    </div>   
        
               
              @endforeach  
              @foreach($campos2 as $key=>$campo2)
                
                
                    <div class="col-sm-5">
                      @if($campos2[$key]['type']=='select')
                        <label for="{{$campos2[$key]['name']}}">{{$campos2[$key]['titulo']}}</label>
                        <select class="form-control" name="{{$campos2[$key]['name']}}" id="{{$campos2[$key]['name']}}">
                          @foreach($campos2[$key]['datos'] as $dato)
                            <option value="{{$dato['id']}}" selected> {{$dato['plan']}} </option>
                          @endforeach  
                        </select>
                       @else
                      <label for="{{$campos2[$key]['name']}}">{{$campos2[$key]['titulo']}}</label>
                      <input type="{{$campos2[$key]['type']}}" class="form-control" id="{{$campos2[$key]['name']}}" name="{{$campos2[$key]['name']}}" aria-describedby="emailHelp" placeholder="{{$campos2[$key]['name']}}">
                      @endif  
                    </div>   
        
               
               
              @endforeach  

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