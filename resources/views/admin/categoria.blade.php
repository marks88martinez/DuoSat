@extends('admin.index')
@section('contenido')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Nueva Categoria</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        {{--<form role="form">--}}
        {!!Form::open(['route'=>'categoria.store', 'method'=>'POST','files' => true])!!}
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                {!!Form::text('nombre',null,['class'=>'form-control','id'=>'exampleInputEmail1', 'placeholder'=>'Ingrese su nombre'])  !!}


            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Descripcion</label>


                {!!Form::textarea('descripcion',null,['class'=>'form-control','id'=>'exampleInputEmail1','rows'=>'3', 'placeholder'=>'Ingrese su nombre'])  !!}
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
                    <th>Descripcion</th>
                    <th></th>
                    <th style="width: 40px">Label</th>
                </tr>
                @foreach($categoria as $cat)
                <tr>
                    <td>{{$cat->codigo_categoria}}</td>
                    <td>{{$cat->nombre}}</td>
                    <td>{{$cat->descripcion}}</td>
                    <td><img class="imagen_icon" src="{{$cat->url_icon}}" alt=""></td>

                    <td align="center"> {!! link_to_route('categoria.edit', $title = 'Editar', $parameters = $cat->codigo_categoria, $attributes = ['class'=>'fa fa-pencil btn btn-warning btn-xs']) !!}</td>
                    <td>
                        {!!Form::open(['route'=>['categoria.destroy',$cat->codigo_categoria], 'method'=>'DELETE'])!!}

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