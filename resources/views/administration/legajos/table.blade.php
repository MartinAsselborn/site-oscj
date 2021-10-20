@extends('administration.menu')
@section('contenido')


<table width="100%" style="background-color : transparent;">
<tr style="background-color : transparent;">
    <td class="text-Left" style="background-color : transparent !important;"> 
     <a title="ImportarExcel" class="btn btn-outline btn-success" data-toggle="modal" data-target="#exampleModal">
            <span class="text-light">Importar Excel</span>
     </a>
     <a title="ImportarExcel" class="btn btn-outline btn-success" href="/exportarLegajos" target="_blank">
            <span class="text-light">Exportar Excel</span>
     </a>
</td>
<td class="text-right" style="background-color : transparent">  <a title="Crear" href="/createLegajo" class="btn btn-outline btn-success">
                         <i class="fa fa-plus fa-1x"></i>
                    </a>
</td></tr>
</table>

<table id="table" class="display table table-dark" style="width:100%">
        <thead>
            <tr scope="row">
            @foreach($titulos as $titulo)
                <th scope="col" style="border-top:0;">{{$titulo}}</th>
            @endforeach  
                <th scope="col" style="border-top:0;">Acciones</th>
                <th scope="col"  style="display:none;">Dni</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach($datos as $key=>$dato)
                <tr>
                  <td scope="row">{{$dato->name}}</th>
                  <td>{{$dato->legajo}}</td>
                  <td>{{$dato->email}}</td>
                  <td>
                                <a title="Ver" href="/legajo/{{$dato->id}}" class="btn btn-outline btn-primary">
                                    <i class="fa fa-eye fa-1x"></i>
                                </a>
                                <a href="/editLegajo/{{$dato->id}}" class="btn btn-outline btn-primary">
                                    <i class="fa fa-pencil fa-1x"></i>
                                </a>
                                <form method="POST" action="/deleteLegajo" style="display:inline-block"> 
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <input type="hidden" name="id" value="{{$dato->id}}">
                                  <button type="submit" class="btn btn-outline btn-danger">
                                      <i class="fa fa-times fa-1x"></i>
                                  </button>
                                </form>
                  </td>
                  <td style="display:none">{{$dato->dni}}</td>
                </tr>
        @endforeach  
        </tbody>
</table> 

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Importar Legajos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form method="POST" action="/importarLegajos" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="legjos_excel">Excel de Legajos</label>
              <input type="file" class="form-control-file" id="legajos_excel" name="legajos_excel">
            </div>
            <button type="submit" class="btn btn-outline btn-primary">
                                      Save
            </button>
            </form>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


@stop