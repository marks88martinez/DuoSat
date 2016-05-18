@extends('admin.index')
@section('contenido')

    <script !src="">
        function push_attr(id){
            var html = '';


            html+= '<div class="remover" id="remove_'+id+'">';
            html+= '<hr>';
            html+= '<div class="form-group">';
            html+= ' <h3 class="exampleInputEmail1">Check</h3>';
            html+= '  <input name="chec[]" value="'+id+'" type="checkbox" id="check_'+id+'" class="checker"/>';
            html+= ' <h3 class="exampleInputEmail1">'+ $('#nombre_'+id).html()+ '</h3>';
            html+= '</div>';


            html+= '<div class="form-group">';
            html+= '<textarea name="descripcion[]" class= "form-control" id="text_'+id+'" > </textarea>';
            {{--html+= '{!!Form::textarea('descrip_atributos[]',null,['class'=>'form-control','id'=>'exampleInputEmail1','rows'=>'3', 'placeholder'=>'Ingrese su nombre']) !!}';--}}
            html+= '</div>';
            html+= '</div>';
            $('.nuevo_attr').append(html);
        }

        function remove_attr(id){
            $('#remove_'+id).remove();
        }





    </script>


    <script !src="">
        $(document).ready(function(){

            $('.checker').on('change', function(){

                var id = $(this).attr('id').replace('check_', '');
                $(this).is(':checked')?   push_attr(id) : remove_attr(id);




                  ;


            });
        });
    </script>




    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Nueva Producto</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        {{--<form role="form">--}}
        {!!Form::open(['route'=>'producto_campos.store', 'method'=>'POST','files' => true])!!}



        <div class="box-body">



            <div class="form-group">
                <label for="exampleInputEmail1">Productos</label>

                {!! Form::select('producto',$prod,null,['class'=>'form-control','id'=>'exampleInputEmail1']) !!}
            </div>






            {{--<div class="form-group">--}}
                {{--<label for="exampleInputEmail1">Campo <button onclick="push_attr()" type="button" class="btn btn-defauld"><i class="fa  fa-plus"></i></button>  <button onclick="remove_attr()" type="button" class="btn btn-defauld"><i class="fa fa-minus"></i></button></label>--}}
                {{--{!! Form::select('campo[]',$list,null,['class'=>'form-control','id'=>'exampleInputEmail1']) !!}--}}

            {{--</div>--}}




            <div class="form-group">
                <label for="exampleInputEmail1">Campos</label>
                <br>





                <fieldset>
                    @foreach($campo as $cam)
                        <label id="nombre_{{$cam->codigo_campo}}" >{{$cam->nombre}} </label>

                        <input name="checker[]" value="{{$cam->codigo_campo}}" type="checkbox" id="check_{{$cam->codigo_campo}}" class="checker"/>
                        {{--{!! Form::checkbox('Check',null, ['class','che']) !!}--}}
                    @endforeach

                </fieldset>

            </div>

            <div class="nuevo_attr">

            </div>





            <div class="form-group">

                {{--<label for="exampleInputEmail1">   Descripcion  del Campo</label>--}}


                {{--{!!Form::textarea('descripcion[]',null,['class'=>'form-control','id'=>'exampleInputEmail1','rows'=>'3', 'placeholder'=>'Ingrese su nombre'])  !!}--}}
            {{--</div>--}}


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

                    <th>Producto</th>
                    <th>Campo</th>
                    <th>Descripcion</th>
                    <th>cheked</th>

                    <th></th>
                    <th></th>
                </tr>
                @foreach($campos as $sub_cats)
                    <tr>
                        <td>{{$sub_cats->codigo_prod_campo}}</td>
                        <td>{{$sub_cats->producto_campo->nombre_producto}}</td>


                        <td>{{$sub_cats->campo->nombre}}</td>
                        <td>{{$sub_cats->descripcion}}</td>
                        <td>{!!$sub_cats->cheked?'<i class="fa fa-fw fa-check"></i>':' '!!}</td>


                        {{--<td align="center"> {!! link_to_route('producto_campos.edit', $title = 'Editar', $parameters = $sub_cats->codigo_prod_campo, $attributes = ['class'=>'fa fa-pencil btn btn-warning btn-xs']) !!}</td>--}}
                        <td>
                            {!!Form::open(['route'=>['producto_campos.destroy',$sub_cats->codigo_prod_campo], 'method'=>'DELETE'])!!}

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