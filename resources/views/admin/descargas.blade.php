@extends("admin.index")
@section('contenido')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Sección Descargas</h3>
        </div><!-- /.box-header -->

        {!!Form::open(['route'=>'adm_descargas.store', 'method'=>'POST'])!!}
        <div class="box-body">
            <div class="form-group">
                <label for="input_titulo">Titulo</label>
                {!!Form::text('titulo',null,['class'=>'form-control','id'=>'input_titulo', 'placeholder'=>'Ej: Manuales Trend HD, Firmwares Play'])  !!}
            </div>

            <div class="form-group">
                <label for="productos">Productos compatibles</label>
                @foreach($productos as $producto)
                    <div class="checkbox">
                        <label for="producto_{{ $producto->codigo_producto }}">
                            {!! Form::checkbox('codigos_productos[]', $producto->codigo_producto, false, ['id' => 'producto_'.$producto->codigo_producto]) !!}
                            {{ $producto->nombre_producto }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
            {!! Form::submit('Guardar',['class'=>'btn btn-primary ']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Descargas</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Nombre</th>
                    <th>Productos</th>
                    <th>Activo</th>
                    <th>Actualizar</th>
                    <th>Archivos</th>
                </tr>
                </thead>
                <tbody>
                @foreach($descargas as $descarga)
                    <tr>
                        {!! Form::open(['route' => ['adm_descargas.update', $descarga->codigo_descarga], 'method' => 'PUT']) !!}
                            <td>{{ $descarga->codigo_descarga }}</td>
                            <td>{!! Form::text('titulo', $descarga->titulo, ['class'=>'form-control', 'placeholder'=>'Ej: Manuales Trend HD, Firmwares Play']) !!}</td>
                            <td>
                                @foreach($productos as $producto)
                                    <div class="checkbox">
                                        <label for="update_producto_{{ $producto->codigo_producto }}">
                                            {!! Form::checkbox('codigos_productos[]', $producto->codigo_producto, in_array(
                                                $producto->codigo_producto, $descarga->productos->map(function($item, $key) {
                                                    return $item->codigo_producto;
                                                })->toArray()
                                            ), ['id' => 'update_producto_'.$producto->codigo_producto]) !!}
                                            {{ $producto->nombre_producto }}
                                        </label>
                                    </div>
                                @endforeach
                            </td>
                        <td>
                            <div class="checkbox">
                                <label for="activo_{{ $descarga->codigo_descarga }}">
                                    {!! Form::checkbox('estado', 1, $descarga->estado == 1, ['id' => 'activo_'.$descarga->codigo_descarga]) !!}
                                    {{ $descarga->estado == 1 ? 'Desactivar' : 'Activar' }}
                                </label>
                            </div>
                        </td>
                        <td>
                            {!! Form::submit('Actualizar', ['class' => 'btn btn-warning']) !!}
                        </td>
                        {!! Form::close() !!}
                        <td>
                            {!! link_to_route('adm_descargas.archivos.index', 'Gerenciar Archivos', [$descarga->codigo_descarga], ['target' => '_blank', 'class' => 'btn btn-info']) !!}
                        </td>
                    </tr>
                @endforeach
                </tbody></table>
        </div><!-- /.box-body -->
        <div class="box-footer clearfix">

        </div>
    </div>
@stop