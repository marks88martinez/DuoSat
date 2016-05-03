@extends('admin.index')
@section('contenido')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Nueva Banner_chico</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        {{--<form role="form">--}}
        {!!Form::model($b_chico,['route'=>['banner_chico.update',$b_chico->codigo], 'method'=>'PUT','files' => true])!!}
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre Banner</label>
                {!!Form::text('nombre',$b_chico->nombre,['class'=>'form-control','id'=>'exampleInputEmail1', 'placeholder'=>'Ingrese su nombre'])  !!}


            </div>
            <div class="form-group">
                <label for="input_texto">Texto</label>
                {!!Form::text('texto',$b_chico->texto,['class'=>'form-control','id'=>'input_texto', 'placeholder'=>'Ingrese su nombre'])  !!}
            </div>

            <div class="form-group">
                <label for="input_style_font_size">Tamaño de fuente</label>
                {!!Form::text('style_font_size',$b_chico->style_font_size,['class'=>'form-control','id'=>'input_style_font_size', 'placeholder'=>'Ingrese tamaño del texto'])  !!}
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Icono</label>

            {!! Form::file('url_imagen') !!}

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">link Banner</label>
                {!!Form::text('link',$b_chico->link,['class'=>'form-control','id'=>'exampleInputEmail1', 'placeholder'=>'Ingrese su nombre'])  !!}


            </div>



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
    <style>
       .imagen_icon{
            width: 100px;
            height: auto;
        }
    </style>





@stop