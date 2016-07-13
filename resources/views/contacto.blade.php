@extends('index')
@section('contenido')
    <br><br><br>


    <div class="container altura">
        <h4 class=" gris fonte">•  Contato</h4>
        <br>

        <form class="form-horizontal" role="form" method="post" action="/">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome & SobreNome" value="" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@domínio.com" value="" required>
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Mensagem</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="4" name="message" required></textarea>
                </div>
            </div>
            {{--<div class="form-group">--}}
                {{--<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>--}}
                {{--<div class="col-sm-10">--}}
                    {{--<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <input id="submit" name="submit" type="submit" value="Enviar" class="btn btn-primary">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <! Will be used to display an alert to the user>
                </div>
            </div>
        </form>


    </div>


    @stop