@extends('admin.index')
@section('contenido')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Nueva Atributos</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        {{--<form role="form">--}}
        {!!Form::model($atributo,['route'=>['atributo.update',$atributo->codigo_atributo], 'method'=>'PUT'])!!}



        <div class="box-body">


            <div class="form-group">

            <div class="form-group">
                <label for="exampleInputEmail1">Nombre del Atributo</label>
                {!!Form::text('nombre_atributo',$atributo->nombre_atributo,['class'=>'form-control','id'=>'exampleInputEmail1', 'placeholder'=>'Ingrese su nombre'])  !!}

            </div>
            {{--<div class="form-group">--}}
                {{--<label for="exampleInputEmail1">Descripcion</label>--}}


                {{--{!!Form::textarea('descripcion',null,['class'=>'form-control','id'=>'exampleInputEmail1','rows'=>'3', 'placeholder'=>'Ingrese su nombre'])  !!}--}}
            {{--</div>--}}

            <div class="checkbox">

            </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

        </div>
        {!! Form::close() !!}
        {{--</form>--}}
    </div>


    {{--******************************************--}}




@stop