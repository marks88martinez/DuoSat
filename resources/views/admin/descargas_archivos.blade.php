@extends("admin.index")
@section('contenido')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Sección Archivos de Descargas</h3>
        </div><!-- /.box-header -->

        {!!Form::open(['route'=>['adm_descargas.archivos.store', $descargaId], 'method'=>'POST', 'files' => true])!!}
        <div class="box-body">
            {!! Form::hidden('codigo_descarga', $descargaId) !!}
            <div class="form-group">
                <label for="input_titulo">Titulo</label>
                {!!Form::text('titulo',null,['class'=>'form-control','id'=>'input_titulo', 'placeholder'=>'Ej: Actualización 2016'])  !!}
            </div>
            <div class="form-group">
                <label for="input_descripcion">Descripción</label>
                {!! Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Breve Descripción', 'id' => 'input_descripcion']) !!}
            </div>
            <div class="form-group">
                <label for="input_version">Versión</label>
                {!! Form::text('version', null, ['class'=>'form-control', 'placeholder'=>'Versión del archivo', 'id' => 'input_version']) !!}
            </div>
            <div class="form-group">
                <label for="input_link">Archivo</label>
                {!! Form::file('link', null, ['id' => 'input_link']) !!}
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
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th>Versión</th>
                    <th>Tamaño</th>
                    <th>Archivo</th>
                    <th>Activo</th>
                    <th>Actualizar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($archivos as $archivo)
                    <tr>
                        {!! Form::open(['route' => ['adm_descargas.archivos.update', $descargaId, $archivo->codigo_archivo_descarga], 'method' => 'PUT', 'files' => true]) !!}
                        <td>{{ $archivo->codigo_archivo_descarga }}</td>
                        <td>{!! Form::text('titulo', $archivo->titulo, ['class'=>'form-control', 'placeholder'=>'Ej: Manuales Trend HD, Firmwares Play']) !!}</td>
                        <td>{!! Form::text('descripcion', $archivo->descripcion, ['class'=>'form-control', 'placeholder'=>'Breve Descripción']) !!}</td>
                        <td>{!! Form::text('version', $archivo->version, ['class'=>'form-control', 'placeholder'=>'Versión del archivo']) !!}</td>
                        <td>{{ $archivo->size }} bytes</td>
                        <td>
                            {{ $archivo->link == "" ? 'Sin archivo' : $archivo->link }}
                            {!! Form::file('link') !!}
                        </td>
                        <td>
                            <div class="checkbox">
                                <label for="activo_{{ $archivo->codigo_archivo_descarga }}">
                                    {!! Form::checkbox('estado', 1, $archivo->estado == 1, ['id' => 'activo_'.$archivo->codigo_archivo_descarga]) !!}
                                    {{ $archivo->estado == 1 ? 'Desactivar' : 'Activar' }}
                                </label>
                            </div>
                        </td>
                        <td>
                            {!! Form::submit('Actualizar', ['class' => 'btn btn-warning']) !!}
                        </td>
                        {!! Form::close() !!}
                    </tr>
                @endforeach
                </tbody></table>
        </div><!-- /.box-body -->
        <div class="box-footer clearfix">

        </div>
    </div>
@stop