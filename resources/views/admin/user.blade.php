@extends("admin.index")
@section('contenido')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Nuevo Usuario</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        {{--<form role="form">--}}
            {!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    {!!Form::text('name',null,['class'=>'form-control','id'=>'exampleInputEmail1', 'placeholder'=>'Ingrese su nombre'])  !!}

                    {{--<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre">--}}
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    {!! Form::email('email',null,['class'=>'form-control', 'id'=>'exampleInputEmail1','placeholder'=>'Email']) !!}



                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    {!! Form::password('password',['class'=>'form-control','id'=>'exampleInputPassword1', 'placeholder'=>'password']) !!}

                </div>

                <div class="checkbox">

                </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
                {!! Form::submit('Iniciar',['class'=>'btn btn-primary ']) !!}

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
                    <th>Nombre</th>
                    <th>Email</th>
                    <th style="width: 40px">Label</th>
                </tr>
                @foreach($user as $users)
                <tr>
                    <td>{{ $users->id }}</td>
                    <td>{{ $users->name }}</td>
                    <td>{{$users->email}}</td>

                    <td><span class="badge bg-red">55%</span></td>
                </tr>
               @endforeach

                </tbody></table>
        </div><!-- /.box-body -->
        <div class="box-footer clearfix">

        </div>
    </div>
@stop