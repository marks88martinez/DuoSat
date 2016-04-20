@extends('admin.index')
@section('contenido')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Nueva Banner</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        {{--<form role="form">--}}
        {!!Form::model($banner,['route'=>['imagenes_banner.update',$banner->codigo_imagen], 'method'=>'PUT','files' => true])!!}
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre Banner </label>
                {!!Form::text('nombre_banner',$banner->nombre_banner,['class'=>'form-control','id'=>'exampleInputEmail1'])  !!}


            </div>
            <div class="form-group">
                {{--<label for="exampleInputEmail1">Link</label>--}}


                {{--{!!Form::text('url_banner',null,['class'=>'form-control','id'=>'exampleInputEmail1', 'placeholder'=>'Ingrese su nombre'])  !!}--}}
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Icono</label>

            {!! Form::file('url_banner') !!}

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Link Banner</label>
                {!!Form::text('link',$banner->link,['class'=>'form-control','id'=>'exampleInputEmail1', 'placeholder'=>'Ingrese el link'])  !!}


            </div>



            <div class="checkbox">

            </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
            {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}

        </div>
        {!! Form::close() !!}
        {{--</form>--}}
    </div>


    {{--******************************************--}}


@stop