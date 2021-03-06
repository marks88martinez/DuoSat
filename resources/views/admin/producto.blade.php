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
        {!!Form::open(['route'=>'producto.store', 'method'=>'POST','files' => true])!!}



        <div class="box-body">



            <div class="form-group">
                <label for="exampleInputEmail1">Categorias</label>

                {!! Form::select('codigo_categoria',$cat,null,['class'=>'form-control','id'=>'exampleInputEmail1']) !!}
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Link del Producto</label>
                {!!Form::text('link_producto',null,['class'=>'form-control','id'=>'exampleInputEmail1', 'placeholder'=>'Ingrese el link'])  !!}


            </div>



            <div class="form-group">
                <label for="exampleInputEmail1">Titulo del Producto</label>
                {!!Form::text('nombre_producto',null,['class'=>'form-control','id'=>'exampleInputEmail1', 'placeholder'=>'Ingrese su nombre'])  !!}


            </div>


            {{--********************************************--}}
            {{--<section class="content">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<div class="box box-info">--}}
                            {{--<div class="box-header">--}}
                                {{--<h3 class="box-title">CK Editor <small>Advanced and full of features</small></h3>--}}
                                {{--<!-- tools box -->--}}
                                {{--<div class="pull-right box-tools">--}}
                                    {{--<button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>--}}
                                    {{--<button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>--}}
                                {{--</div><!-- /. tools -->--}}
                            {{--</div><!-- /.box-header -->--}}
                            {{--<div class="box-body pad">--}}
                                {{--<form>--}}
                    {{--<textarea  id="editor1" name="descripcion" rows="10" cols="80">--}}

                    {{--</textarea>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</div><!-- /.box -->--}}


                    {{--</div><!-- /.col-->--}}
                {{--</div><!-- ./row -->--}}
            {{--</section><!-- /.content -->--}}
            {{--********************************************--}}

            <div class="form-group">
                <label for="exampleInputEmail1">Descripcion  del Producto</label>
                {!!Form::textarea('descripcion',null,['class'=>'form-control','id'=>'exampleInputEmail1','rows'=>'3', 'placeholder'=>'Ingrese su nombre'])  !!}
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Atributos <button onclick="push_attr()" type="button" class="btn btn-defauld"><i class="fa  fa-plus"></i></button>  <button onclick="remove_attr()" type="button" class="btn btn-defauld"><i class="fa fa-minus"></i></button></label>
                {!! Form::select('codigo_atributo[]',$attr,null,['class'=>'form-control','id'=>'exampleInputEmail1']) !!}

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Descripcion  del Atributo</label>


                {!!Form::textarea('descrip_atributos[]',null,['class'=>'form-control','id'=>'exampleInputEmail1','rows'=>'3', 'placeholder'=>'Ingrese su nombre'])  !!}
            </div>

            <div class="nuevo_attr">

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Imagenes</label>


                {!! Form::file('url_imagen') !!}
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Descontinuado  </label>
                {!! Form::checkbox('descontinuado',1,true,['class'=>'', ]) !!}
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
                    <th>Subcategorias</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Atributos</th>
                    <th>Descripcion del atributos</th>
                    <th>Imagen</th>
                    <th></th>

                    <th style="width: 40px">Label</th>
                </tr>
                @foreach($producto as $sub_cats)
                <tr>
                    <td>{{$sub_cats->codigo_producto}}</td>
                    <td>{{$sub_cats->nombre_producto}}</td>


                    <td>{{$sub_cats->nombre_producto}}</td>
                    <td>{{$sub_cats->descripcion}}</td>
                    <td><ul>
                        @foreach($sub_cats->producto_atributos as $attr)

                                <li>{{$attr->prodattr_attr->nombre_atributo}}</li>

                    @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                            @foreach($sub_cats->producto_atributos as $attr)

                                <li>{{$attr->descripcion}}</li>

                            @endforeach
                        </ul>
                    </td>

                    <td><img class="imagen_icon" src="{{$sub_cats->imagenes  !=null ? $sub_cats->imagenes->url_imagenes: ''}}" alt=""></td>

                    <td align="center"> {!! link_to_route('producto.edit', $title = 'Editar', $parameters = $sub_cats->codigo_producto, $attributes = ['class'=>'fa fa-pencil btn btn-warning btn-xs']) !!}</td>

                    <td>
                        {!!Form::open(['route'=>['producto.destroy',$sub_cats->codigo_producto], 'method'=>'DELETE'])!!}

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











    {{--**************************************--}}


    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
            //bootstrap WYSIHTML5 - text editor
            $(".textarea").wysihtml5();
        });
    </script>

@stop