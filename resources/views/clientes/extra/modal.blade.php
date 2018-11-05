<div class="modal fade" id="modal-form2" tabindex="-1" role="dialog" aria-labelledby="modal-form" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-white pb-5">
                <h3 class="text-center"><strong>Actualizando Paciente</strong></h3>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                
                {!!Form::open(['action'=> ['ClientesController@store',$cliente->id],'method'=> 'POST']) !!}

                          <strong>{{Form::label('nombre','Nombre')}}</strong>
                          {{Form::text('nombre',$cliente->nombre,(['class'=>'form-control form-control-alternative','placeholder'=>'Introdusca el Nombre'])) }}
                        
                      
                      
                          <strong>{{Form::label('apellido','Apellido')}}</strong>
                          {{Form::text('apellido',$cliente->apellido,(['class'=>'form-control form-control-alternative','placeholder'=>'Introdusca el Apellido'])) }}
                        

                      
                          <strong>{{Form::label('celular','Celular')}}</strong>
                          {{Form::text('celular',$cliente->celular,(['class'=>'form-control form-control-alternative','placeholder'=>'Introdusca el Celular'])) }}
                        

                      
                          <strong>{{Form::label('peso_llegada','Peso Actual')}}</strong>
                          {{Form::text('peso_llegada',$cliente->peso_llegada,(['class'=>'form-control form-control-alternative']))}}
                        

                      
                          <strong>{{Form::label('altura','Altura')}}</strong>
                          {{Form::text('altura',$cliente->altura,(['class'=>'form-control form-control-alternative'])) }}
                        
                    <br>
                    <div class="text-center">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-success text-white">Actualizar</button>
                      </div>
                    </div>
                  </div>
                </div>
                
              
                    </div>
                </div>
                </div>
              {!!Form::close() !!}
                  
              </div>