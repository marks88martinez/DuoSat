@extends('admin.index')
@section('contenido')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Nueva Categoria</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        {{--<form role="form">--}}
        {!!Form::model($categoria, ['route'=>['categoria.update',$categoria->codigo_categoria], 'method'=>'PUT','files' => true])!!}
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                {!!Form::text('nombre',$categoria->nombre,['class'=>'form-control','id'=>'exampleInputEmail1'])  !!}


            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Descripcion</label>


                {!!Form::textarea('descripcion',$categoria->descripcion,['class'=>'form-control','id'=>'exampleInputEmail1','rows'=>'3', 'placeholder'=>'Ingrese su nombre'])  !!}
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Icono</label>

            {!! Form::file('url_imagen') !!}

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


@stop