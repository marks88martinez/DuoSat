@extends('admin.index')
@section('contenido')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Nueva Subcategoria</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        {{--<form role="form">--}}
        {!!Form::open(['route'=>'subcategoria.store', 'method'=>'POST','files' => true])!!}



        <div class="box-body">






            <div class="form-group">
                <label for="exampleInputEmail1">Categorias</label>
                {!! Form::select('categoria',$cat,null,['class'=>'form-control','id'=>'exampleInputEmail1']) !!}

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre Subcategoria</label>
                {!!Form::text('nombre',null,['class'=>'form-control','id'=>'exampleInputEmail1', 'placeholder'=>'Ingrese su nombre'])  !!}


            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Descripcion</label>


                {!!Form::textarea('descripcion',null,['class'=>'form-control','id'=>'exampleInputEmail1','rows'=>'3', 'placeholder'=>'Ingrese su nombre'])  !!}
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




    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Usuarios</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>Categorias</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>

                    <th style="width: 40px">Label</th>
                </tr>
                @foreach($sub_cat as $sub_cats)
                <tr>
                    <td>{{$sub_cats->codigo_sub_categorias}}</td>
                    <td>{{$sub_cats->catnombre}}</td>
                    <td>{{$sub_cats->nombre}}</td>
                    <td>{{$sub_cats->descripcion}}</td>
                    <td></td>


                    <td><span class="badge bg-red">55%</span></td>
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