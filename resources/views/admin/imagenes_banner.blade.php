@extends('admin.index')
@section('contenido')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Nueva Banner</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        {{--<form role="form">--}}
        {!!Form::open(['route'=>'imagenes_banner.store', 'method'=>'POST','files' => true])!!}
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre Banner</label>
                {!!Form::text('nombre_banner',null,['class'=>'form-control','id'=>'exampleInputEmail1', 'placeholder'=>'Ingrese su nombre'])  !!}
            </div>
            <div class="form-group">
                <label for="input_texto">Texto del caption</label>
                {!!Form::textarea('texto',null,['class'=>'form-control','id'=>'input_texto', 'placeholder'=>'Ingrese Texto para banner'])  !!}
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Icono</label>
            {!! Form::file('url_banner') !!}
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Link Banner</label>
                {!!Form::text('link',null,['class'=>'form-control','id'=>'exampleInputEmail1', 'placeholder'=>'Ingrese el link'])  !!}
            </div>
            <h3>Estilos</h3>
            <div class="form-group">
                <label for="input_style_font_size">Padding Bottom</label>
                {!!Form::text('style_font_size', '40px',['class'=>'form-control','id'=>'input_style_font_size', 'placeholder'=>'Font size para caption del banner'])  !!}
            </div>
            <div class="form-group">
                <label for="input_style_padding_bottom">Padding Bottom</label>
                {!!Form::text('style_padding_bottom','30px',['class'=>'form-control','id'=>'input_style_padding_bottom', 'placeholder'=>'Padding-bottom para caption del banner'])  !!}
            </div>
            <div class="form-group">
                <label for="input_style_left">Left</label>
                {!!Form::text('style_left','20%',['class'=>'form-control','id'=>'input_style_left', 'placeholder'=>'Left para caption del banner'])  !!}
            </div>
            <div class="form-group">
                <label for="input_style_right">Right</label>
                {!!Form::text('style_right','20%',['class'=>'form-control','id'=>'input_style_right', 'placeholder'=>'Right para caption del banner'])  !!}
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



    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Usuarios</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th style="width: 40px"></th>

                    <th style="width: 40px"></th>
                </tr>


                @foreach($banner as $cat)
                <tr>
                    <td>{{$cat->codigo_imagen}}</td>
                    <td>{{$cat->nombre_banner}}</td>

                    <td><img class="imagen_icon" src="{{$cat->url_banner}}" alt=""></td>

                    <td align="center"> {!! link_to_route('imagenes_banner.edit', $title = 'Editar', $parameters = $cat->codigo_imagen, $attributes = ['class'=>'fa fa-pencil btn btn-warning btn-xs']) !!}</td>




                    <td>
                        {!!Form::open(['route'=>['imagenes_banner.destroy',$cat->codigo_imagen], 'method'=>'DELETE'])!!}

                        {!! Form::submit('Eliminar ',['class'=>'fa fa-trash-o btn btn-danger btn-xs']) !!}
                        {!!Form::close()!!}
                    </td>
                </tr>
                @endforeach

                </tbody></table>
        </div><!-- /.box-body -->
        <div class="box-footer clearfix">
            <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#"><<</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">>></a></li>
            </ul>
        </div>
    </div>

@stop