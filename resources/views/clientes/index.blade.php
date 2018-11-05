@extends('main')

@section('contenido')

	<h1 class="text-center">Todos Los Pacientes</h1>
	<a onClick="mostrar('nuevo')" class="btn btn-primary text-white fas fa-plus-circle"></a>
  
  {{-- Aqui empieza el Create --}}
	<div id="nuevo" style="display:none;">
		<div class="py-5 bg-secondary">
    	<div class="container">
        <div class="mb-3 text-center">
	        <small class="text-uppercase font-weight-bold">Agregando Nuevo Paciente</small>
	      </div>
	
		{!!Form::open(['action'=> 'ClientesController@store','method'=> 'POST']) !!}
    
          <div class="text-center">
            <div class="col-md-12">
              <div class="row ">
          			<div class="col-md-4 pr-md-1">
          				<div class="form-gorup">
          					<strong>{{Form::label('nombre','Nombre')}}</strong>
          					{{Form::text('nombre','',(['class'=>'form-control form-control-alternative','placeholder'=>'Introdusca el Nombre'])) }}
          				</div>
          			</div>
          			
          			<div class="col-md-4 pr-md-1">
          				<div class="form-gorup ">
          					<strong>{{Form::label('apellido','Apellido')}}</strong>
          					{{Form::text('apellido','',(['class'=>'form-control form-control-alternative','placeholder'=>'Introdusca el Apellido'])) }}
          				</div>
          			</div>

          			<div class="col-md-4 pr-md-1">
          				<div class="form-gorup ">
          					<strong>{{Form::label('celular','Celular')}}</strong>
          					{{Form::text('celular','',(['class'=>'form-control form-control-alternative','placeholder'=>'Introdusca el Celular'])) }}
          				</div>
          			</div>

                <div class="col-md-4 pr-md-1">
                  <div class="form-gorup ">
                    <strong>{{Form::label('fecha_nacimiento','Fecha Nacimiento')}}</strong>
                    {{Form::date('fecha_nacimiento','',(['class'=>'form-control form-control-alternative']))}}
                  </div>
                </div>

                <div class="col-md-4 pr-md-1">
                  <div class="form-gorup ">
                    <strong>{{Form::label('fecha_llegada','Fecha Actual')}}</strong>
                    {{Form::date('fecha_llegada','',(['class'=>'form-control form-control-alternative']))}}
                  </div>
                </div>

                <div class="col-md-2 pr-md-1">
                  <div class="form-gorup">
                    <strong>{{Form::label('peso_llegada','Peso Actual')}}</strong>
                    {{Form::text('peso_llegada','',(['class'=>'form-control form-control-alternative']))}}
                  </div>
                </div>

                <div class="col-md-2 pr-md-1">
                  <div class="form-group">
                    <strong>{{Form::label('altura','Altura')}}</strong>
                    {{Form::text('altura','',(['class'=>'form-control form-control-alternative'])) }}
                  </div>
                </div>
		          </div>
              <br>
              <div class="text-center">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-info text-white">Guardar</button>
                </div>
              </div>
            </div>
          </div>
          
        
      </div>
	</div>
</div>
      {!!Form::close() !!}
    
    {{-- Aqui Termina el Create --}}

    

	<table class="table" id="">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Celular</th>
        <th></th>
			</tr>
		</thead>
		<tbody>
				@foreach($clientes as $cliente)
      <tr>
				<td>{{$cliente->nombre}}</td>
				<td>{{$cliente->apellido}}</td>
				<td>{{$cliente->celular}}</td>
        <td>
          <a href="{{route('clientes.show',$cliente->id)}}" class="btn btn-default fas fa-eye" data-toggle="modal" data-target="#modal-form" onclick="traerCliente({{$cliente->id}})"></a>
          <a href="{{route('clientes.show',$cliente->id)}}" class="btn btn-success fas fa-pencil-alt" data-toggle="modal" data-target="#modal-edit" onclick="editarCliente({{$cliente->id}})"></a>
          
          <a href="" class="btn btn-danger fas fa-trash-alt"></a>
        </td>
      </tr>
				@endforeach
		</tbody>
	</table>

{{-- Aqui Empieza el Show --}}

  <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-default" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title mx-auto" id="modal-title-default">Datos del Paciente</h3>
        </div>
        <div class="modal-body mx-auto" id="paciente">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    {{-- Aqui Termina el Show --}}

    {{-- editar --}}
    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-default" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title mx-auto" id="modal-title-default">Actualizar Paciente</h3>
        </div>
        <div class="py-3 bg-secondary">
          {!!Form::open(['action'=> ['ClientesController@update',$cliente->id],'method'=> 'POST']) !!}
          <div class="modal-body mx-auto" id="actualizar">
              
          </div>
        <div class="modal-footer">
          {{Form::hidden('_method','PUT')}}
          <button type="submit" class="btn btn-success text-white">Actualizar</button>
          <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
        </div>
          {!!Form::close() !!}</div>
      </div>
    </div>
  </div>
    {{-- Fin editar --}}

  {{$clientes->render()}}
	
<script>

function mostrar(id)
{
  if (document.getElementById)
  {
    var el = document.getElementById(id);
    el.style.display = (el.style.display == 'none') ? 'block' : 'none';
  }
}


function traerCliente(id) {
 
  var res='';
  var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("paciente").innerHTML = this.responseText;
                res= this.responseText;
                var cliente = JSON.parse(res);
                var paciente = document.getElementById('paciente');
                paciente.innerHTML = '<h6><b>Nombre: </b>'+cliente.nombre+'</h6><h6><b>Apellido: </b>'+cliente.apellido+'</h6><h6><b>Celular: </b>'+cliente.celular+'</h6><h6><b>Fecha de Nacimiento: </b>'+cliente.fecha_nacimiento+'</h6><h6><b>Fecha de Ingreso: </b>'+cliente.fecha_llegada+'</h6><h6><b>Peso Inicial: </b>'+cliente.peso_llegada+'</h6><h6><b>Altura: </b>'+cliente.altura+'</h6>';
            }
        };
        xmlhttp.open("GET", "/clientes/" + id, true);
        xmlhttp.send();
}

function editarCliente (id) {
  var res='';
  var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("actualizar").innerHTML = this.responseText;
                res= this.responseText;
                var cliente = JSON.parse(res);
                var actualizar = document.getElementById('actualizar');
                actualizar.innerHTML = '<div class="col-md-12"><b><label>Nombre</label></b><input type="text" class="form-control form-control-alternative" value="'+cliente.nombre+'"></div><div class="col-md-12"><b><label>Apellido</label></b><input type="text" class="form-control form-control-alternative" value="'+cliente.apellido+'"></div><div class="col-md-12"><b><label>Celualr</label></b><input type="text" class="form-control form-control-alternative" value="'+cliente.celular+'"></div><div class="col-md-12"><b><label>Peso Inicial</label></b><input type="text" class="form-control form-control-alternative" value="'+cliente.peso_llegada+'"></div><div class="col-md-12"><b><label>Altura</label></b><input type="text" class="form-control form-control-alternative" value="'+cliente.altura+'"></div>';
            }
        };
        xmlhttp.open("GET", "/clientes/" + id, true);
        xmlhttp.send();
}
</script>
{{-- {{Form::submit('Actualizar',(['class'=>'btn btn-info']))}} --}}
@endsection