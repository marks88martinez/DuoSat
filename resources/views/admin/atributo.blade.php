@extends('admin.index')
@section('contenido')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Nueva Atributos</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        {{--<form role="form">--}}
        {!!Form::open(['route'=>'atributo.store', 'method'=>'POST'])!!}



        <div class="box-body">






            <div class="form-group">

            <div class="form-group">
                <label for="exampleInputEmail1">Nombre del Atributo</label>
                {!!Form::text('nombre_atributo',null,['class'=>'form-control','id'=>'exampleInputEmail1', 'placeholder'=>'Ingrese su nombre'])  !!}

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




    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Atributos</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>Nombre</th>
                    <th></th>


                    <th style="width: 40px">Label</th>
                </tr>
                @foreach($attr as $sub_cats)
                <tr>
                    <td>{{$sub_cats->codigo_atributo}}</td>
                    <td>{{$sub_cats->nombre_atributo}}</td>
                    <td align="center"> {!! link_to_route('atributo.edit', $title = 'Editar', $parameters = $sub_cats->codigo_atributo, $attributes = ['class'=>'fa fa-pencil btn btn-warning btn-xs']) !!}</td>
                    <td>
                        {!!Form::open(['route'=>['atributo.destroy',$sub_cats->codigo_atributo], 'method'=>'DELETE'])!!}

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