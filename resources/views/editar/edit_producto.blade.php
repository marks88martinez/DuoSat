@extends('admin.index')
@section('contenido')

    <script !src="">
       function push_attr(){
           var html = '';


           html+= '<div class="remover">';
           html+= '<hr>';
           html+= '<div class="form-group">';
           html+= '{!! Form::select('codigo_atributo[]',$attr,null,['class'=>'form-control','id'=>'exampleInputEmail1']) !!}';
           html+= '</div>';

           html+= '<div class="form-group">';
           html+= '{!!Form::textarea('descrip_atributos[]',null,['class'=>'form-control','id'=>'exampleInputEmail1','rows'=>'3', 'placeholder'=>'Ingrese su nombre']) !!}';
           html+= '</div>';
           html+= '</div>';
           $('.nuevo_attr').append(html);
       }

        function remove_attr(){
            $('.remover:last').remove();
        }





    </script>

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Nueva Producto</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        {{--<form role="form">--}}
        {!!Form::model($producto,['route'=>['producto.update',$producto->codigo_producto], 'method'=>'PUT'])!!}
        {{--{!!Form::model($producto->codigo_categoria,['route'=>['atributo.update',$atributo->codigo_atributo], 'method'=>'PUT'])!!}--}}



        <div class="box-body">






            <div class="form-group">
                <label for="exampleInputEmail1">Categorias</label>

                {!! Form::select('codigo_categoria',$categoria,$producto->codigo_categoria,['class'=>'form-control','id'=>'exampleInputEmail1']) !!}
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Titulo del Producto</label>
                {!!Form::text('nombre_producto',$producto->nombre_producto,['class'=>'form-control','id'=>'exampleInputEmail1', 'placeholder'=>'Ingrese su nombre'])  !!}


            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Descripcion  del Producto</label>
                {!!Form::textarea('descripcion',$producto->descripcion,['class'=>'form-control','id'=>'exampleInputEmail1','rows'=>'3', 'placeholder'=>'Ingrese su nombre'])  !!}
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Atributos <button onclick="push_attr()" type="button" class="btn btn-defauld"><i class="fa  fa-plus"></i></button>  <button onclick="remove_attr()" type="button" class="btn btn-defauld"><i class="fa fa-minus"></i></button></label>
                {{--{!! Form::select('codigo_atributo[]',$attr,null,['class'=>'form-control','id'=>'exampleInputEmail1']) !!}--}}

            </div>
            {{--<div class="form-group">--}}
                {{--<label for="exampleInputEmail1">Descripcion  del Atributo</label>--}}


                {{--{!!Form::textarea('descrip_atributos[]',null,['class'=>'form-control','id'=>'exampleInputEmail1','rows'=>'3', 'placeholder'=>'Ingrese su nombre'])  !!}--}}
            {{--</div>--}}

            <div class="nuevo_attr">

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Imagenes</label>


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
                    <th>Atributos</th>
                    <th>Descripcion del Atributo</th>

                    <th></th>

                    <th style="width: 40px">Label</th>
                </tr>

                @foreach($producto->producto_atributos as $sub_cats)
                <tr>
                    <td>{{$sub_cats->prodattr_attr->codigo_atributo}} </td>
                    <td> {{$sub_cats->prodattr_attr->nombre_atributo}} </td>


                    <td>{!!Form::textarea('descrip_atributos',$sub_cats->descripcion,['class'=>'form-control','id'=>'exampleInputEmail1', 'placeholder'=>'Ingrese su nombre'])  !!}</td>
                    <td></td>
                    <td>
                        {!!Form::open(['route'=>['producto.destroy_attr',$sub_cats->prodattr_attr->codigo_atributo]])!!}

                        {!! Form::submit('Eliminar ',['class'=>'fa fa-trash-o btn btn-danger btn-xs']) !!}
                        {!!Form::close()!!}
                    </td>

                @endforeach


                </tbody></table>
        </div><!-- /.box-body -->
        <div class="box-footer clearfix">
            {{--<ul class="pagination pagination-sm no-margin pull-right">--}}
                {{--<li><a href="#"><<</a></li>--}}
                {{--<li><a href="#">1</a></li>--}}
                {{--<li><a href="#">2</a></li>--}}
                {{--<li><a href="#">3</a></li>--}}
                {{--<li><a href="#">>></a></li>--}}
            {{--</ul>--}}
        </div>
    </div>

@stop