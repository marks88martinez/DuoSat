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
                <label for="input_texto">Texto del caption</label>
                {!!Form::textarea('texto',$banner->texto,['class'=>'form-control','id'=>'input_texto', 'placeholder'=>'Ingrese Texto para banner'])  !!}
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Icono</label>

            {!! Form::file('url_banner') !!}

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Link Banner</label>
                {!!Form::text('link',$banner->link,['class'=>'form-control','id'=>'exampleInputEmail1', 'placeholder'=>'Ingrese el link'])  !!}
            </div>
            <h3>Estilos</h3>
            <div class="form-group">
                <label for="input_style_font_size">Font Size</label>
                {!!Form::text('style_font_size', $banner->style_font_size,['class'=>'form-control','id'=>'input_style_font_size', 'placeholder'=>'Font size para caption del banner'])  !!}
            </div>
            <div class="form-group">
                <label for="input_style_padding_bottom">Padding Bottom</label>
                {!!Form::text('style_padding_bottom', $banner->style_padding_bottom,['class'=>'form-control','id'=>'input_style_padding_bottom', 'placeholder'=>'Padding-bottom para caption del banner'])  !!}
            </div>
            <div class="form-group">
                <label for="input_style_left">Left</label>
                {!!Form::text('style_left',$banner->style_left,['class'=>'form-control','id'=>'input_style_left', 'placeholder'=>'Left para caption del banner'])  !!}
            </div>
            <div class="form-group">
                <label for="input_style_right">Right</label>
                {!!Form::text('style_right',$banner->style_right,['class'=>'form-control','id'=>'input_style_right', 'placeholder'=>'Right para caption del banner'])  !!}
            </div>
            <div class="form-group">
                <label for="input_style_color">Color</label>
                {!!Form::text('style_color',$banner->style_color,['class'=>'form-control','id'=>'input_style_color', 'placeholder'=>'Color para caption del banner'])  !!}
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