@extends('admin.index')
@section('contenido')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Nueva Campo</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        {{--<form role="form">--}}
        {!!Form::model($campos,['route'=>['campos.store',$campos->codigo_campo], 'method'=>'POST'])!!}



        <div class="box-body">






            <div class="form-group">

            <div class="form-group">
                <label for="exampleInputEmail1">Nombre del Campo</label>
                {!!Form::text('nombre',$campos->nombre,['class'=>'form-control','id'=>'exampleInputEmail1', 'placeholder'=>'Ingrese su nombre'])  !!}

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