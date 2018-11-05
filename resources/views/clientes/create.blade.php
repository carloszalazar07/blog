@extends('main')

@section('contenido')

	{!!Form::open(['action' => 'ClientesController@store','method'=>'POST','class'=>'form']) !!}

	<h1 class="text-center">Crear el Nuevo Cliente</h1>
		<br>
		<div class="row ">
			<div class="col-md-4 pr-md-1">
				<div class="form-gorup">
					<strong>{{Form::label('nombre','Nombre')}}</strong>
					{{Form::text('nombre','',(['class'=>'form-control','placeholder'=>'Introdusca el Nombre'])) }}
				</div>
			</div>
			
			<div class="col-md-4 pr-md-1">
				<div class="form-gorup ">
					{{-- <strong>{{Form::label('apellido','Apellido')}}</strong> --}}
					<div class="mb-3">
			          <small class="text-uppercase font-weight-bold">Apellido</small>
			        </div>
					<div class="form-group">
		              <input type="text" placeholder="Regular" class="form-control">
		            </div>
				</div>
			</div>

			<div class="col-md-4 pr-md-1">
				<div class="form-gorup ">
					<strong>{{Form::label('celular','Celular')}}</strong>
					{{Form::text('celular','',(['class'=>'form-control','placeholder'=>'Introdusca el Celular'])) }}
				</div>
			</div>
		</div>

		<div class="col-md-4">
            <small class="d-block text-uppercase font-weight-bold mb-3">Single date</small>
            <div class="form-group focused">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                </div>
                <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2018">
              </div>
            </div>
          </div>

		<hr>

		

		<div class="form-gorup ">
			{{Form::label('fecha_nacimiento','Fecha Nacimiento')}}
			{{Form::text('fecha_nacimiento','',(['class'=>'form-control date'])) }}
		</div>

		<div class="form-gorup ">
			{{Form::label('fecha_llegada','Fecha Actual')}}
			{{Form::text('fecha_llegada','',(['class'=>'form-control'])) }}
		</div>

		<div class="form-gorup">
			{{Form::label('peso_llegada','Peso Actual')}}
			{{Form::text('peso_llegada','',(['class'=>'form-control'])) }}
		</div>

		<div class="form-group">
			{{Form::label('altura','Altura')}}
			{{Form::text('altura','',(['class'=>'form-control'])) }}
		</div>

		

	{!!Form::close() !!}

@endsection