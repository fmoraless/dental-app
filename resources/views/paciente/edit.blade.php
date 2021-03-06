@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg-8">
                <div class="card card-default">
                    <div class="card-header">Editando Paciente</div>
                    <div class="card-body">
                        {{ Form::open(['action' => route('paciente.update', $paciente->id), 'method' => 'PUT', 'url' => 'paciente/'.$paciente->id, 'class' => 'form-horizontal']) }}
                        <div class="form-group row">
                            {!! Form::label('rut', 'Rut', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::text('rut', $paciente->rut, ['class' => 'form-control
                                form-control-sm'.($errors->has('rut')
                                ? ' is-invalid' :
                                old('rut')), 'placeholder' =>
                                '00000000-X']) !!}
                                @if ($errors->has('rut'))
                                    <span class="invalid-feedback">
                                <strong>{{ $errors->first('rut') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('nombres', 'Nombres', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('nombres', $paciente->nombres, ['class' => 'form-control
                                form-control-sm'.($errors->has('nombres') ? '
                                is-invalid' : ''),
                                'placeholder' => 'Ingrese Nombres']) !!}
                                @if ($errors->has('nombres'))
                                    <span class="invalid-feedback">
                                <strong>{{ $errors->first('nombres') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('apellidos', 'Apellidos', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::text('apellido_paterno',$paciente->apellido_paterno, ['class' => 'form-control
                                form-control-sm'.($errors->has('apellido_paterno') ? '
                                is-invalid' : ''), 'placeholder' => 'Apellido Paterno']) !!}
                                @if ($errors->has('apellido_paterno'))
                                    <span class="invalid-feedback">
                                <strong>{{ $errors->first('apellido_paterno') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="col-sm-5">
                                {!! Form::text('apellido_materno',$paciente->apellido_materno, ['class' => 'form-control
                                form-control-sm'.($errors->has('apellido_materno') ? '
                                is-invalid' : ''), 'placeholder' => 'Apellido Materno']) !!}
                                @if ($errors->has('apellido_materno'))
                                    <span class="invalid-feedback">
                                <strong>{{ $errors->first('apellido_materno') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('fecha_nacimiento', 'Fecha Nac.', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::date('fecha_nacimiento',$paciente->fecha_nacimiento, ['class' => 'form-control
                                form-control-sm']) !!}
                            </div>
                            <div class="col-sm-5">
                                {!! Form::select('sexo', array('Femenino' => 'Femenino', 'Masculino' => 'Masculino', 'Otro' => 'Otro'), $paciente->sexo, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una opción...']) !!}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block']) }}
                            </div>
                            <div class="col">
                                <a href="{{ route('paciente.index') }}" style="text-decoration:none">
                                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
                                </a>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
