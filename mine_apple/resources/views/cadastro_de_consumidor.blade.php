<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Cadastro de consumidor</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css')}}" rel="stylesheet"
          type='text/css'>
    <link rel="stylesheet" href="{{asset('css/formularios_style.css')}}">

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/icon-144.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/icon-114.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/icon-72.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/icon-16.png')}}">

</head>

<body>


<!-- Top content --->
<div class="top-content">
    <div class="logo_icon"><img src="{{asset('images/logoSite.png')}}" alt=""></div>
        @if(isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $erro):
                    <p>{{$erro}}</p>
                 @endforeach
            </div>
        @endif
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <div class="description">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 offset-lg-3 form-box">

                    <form role="form" action="{{route('cadastrarConsumidor')}}" method="post" class="registration-form">

                        <fieldset>

                            @csrf

                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Passo 1 / 3</h3>
                                    <p>Meus dados:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-user-plus"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <label class="sr-only" for="nome">Nome</label>
                                    <input type="text" name="nome"
                                           @if(isset($nome))
                                                value="{{$nome}}"
                                           @else
                                                value="{{old('nome')}}"
                                           @endif
                                           placeholder="Nome..."
                                           class="form-first-name form-control" id="nome">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="sobrenome">Sobrenome</label>
                                    <input type="text" name="sobrenome" placeholder="Sobrenome..."
                                           @if(isset($sobrenome))
                                               value = "{{$sobrenome}}"
                                           @else
                                                value="{{old('sobrenome')}}"
                                           @endif
                                           class="form-first-name form-control" id="sobrenome">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="cpf">CPF</label>
                                    <input type="text" name="cpf" placeholder="CPF..."
                                           class="form-last-name form-control" id="cpf" data-mask="000.000.000-00" value="{{old('cpf')}}">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="telefone">CPF</label>
                                    <input type="text" name="telefone" placeholder="Telefone..."
                                           class="form-last-name form-control" id="telefone" data-mask="(00) 00000-0000" value="{{old('telefone')}}">
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="sexo">Sexo</label>
                                    <select class="form-control" id="sexo" name="sexo" value="{{old('sexo')}}">
                                        <option disabled selected value=""> Sexo</option>
                                        <option value="f">Feminino</option>
                                        <option value="m">Masculino</option>
                                    </select>
                                </div>

                                <button type="button" class="btn btn-next">Próximo</button>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Passo 2 / 3</h3>
                                    <p>Endereço:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <label class="sr-only" for="CEP">CEP</label>
                                    <input type="text" name="cep" placeholder="CEP"
                                           class="form-first-name form-control" id="CEP" data-mask="00.000-000" value="{{old('cep')}}" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="Rua">Rua</label>
                                    <input type="text" name="rua" placeholder="Rua"
                                           class="form-first-name form-control" id="Rua" value="{{old('rua')}}" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="Número">Número</label>
                                    <input type="text" name="numero" placeholder="Número"
                                           class="form-first-name form-control" id="Número" value="{{old('numero')}}" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="Bairro">Bairro</label>
                                    <input type="text" name="bairro" placeholder="Bairro"
                                           class="form-first-name form-control" id="Bairro" value="{{old('bairro')}}" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="Complemento">Complemento</label>
                                    <input type="text" name="complemento" placeholder="Complemento"
                                           class="form-first-name form-control" id="Complemento" value="{{old('complemento')}}">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="estados">Estados</label>
                                    <select class="form-control" name="estado" id="estados">
                                        @foreach($estados as $estado)
                                            <option value="{{$estado->id}}">{{$estado->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="cidades">Cidades</label>
                                    <select class="form-control" id="cidades" name="cidade">
                                    </select>
                                </div>
                                <button type="button" class="btn btn-previous">Anterior</button>
                                <button type="button" class="btn btn-next">Próximo</button>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Passo 3 / 3</h3>
                                    <p>Cartão de crédito:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-credit-card"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="logoscartoes">
                                    <ul class="logos_list" style="display: inline-block">
                                        <li><a href="#"><img src="{{asset('images/logos_1.png')}}" alt=""></a></li>
                                    </ul>
                                    <ul class="logos_list" style="display: inline-block">
                                        <li><a href="#"><img src="{{asset('images/logos_2.png')}}" alt=""></a></li>
                                    </ul>
                                    <ul class="logos_list" style="display: inline-block">
                                        <li><a href="#"><img src="{{asset('images/logos_3.png')}}" alt=""></a></li>
                                    </ul>
                                    <ul class="logos_list" style="display: inline-block">
                                        <li><a href="#"><img src="{{asset('images/logos_4.png')}}" alt=""></a></li>
                                    </ul>
                                    <ul class="logos_list" style="display: inline-block">
                                        <li><a href="#"><img src="{{asset('images/logos_5.png')}}" alt=""></a></li>
                                    </ul>
                                    <ul class="logos_list" style="display: inline-block">
                                        <li><a href="#"><img src="{{asset('images/logos_6.png')}}" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="titular">Nome do titular</label>
                                    <input type="text" name="titular" placeholder="Nome do Titular do cartão"
                                           class="form-facebook form-control" id="titular" value="{{old('titular')}}">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="NumeroCartao">Número do cartão</label>
                                    <input type="text" name="numero_cartao" placeholder="Número do cartão"
                                           class="form-facebook form-control" id="NumeroCartao" data-mask="0000 0000 0000 0000" value="{{old('numero_cartao')}}">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="CodSeg">Número do cartão</label>
                                    <input type="text" name="codigo" placeholder="Código de segurança"
                                           class="form-facebook form-control" id="CodSeg" data-mask="000" value="{{old('codigo')}}">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="Validade">Validade</label>
                                    <input type="text" name="validade" placeholder="Validade"
                                           class="form-facebook form-control" id="validade" data-mask="00/0000" value="{{old('validade')}}">
                                </div>


                                <div class="form-group">
                                    <input id="contrato" name="contrato" type="checkbox" value="nao">
                                    <label for="contrato">Li e aceito os <a data-toggle="modal" data-target="#exampleModalLong" style="color: #0d82d3">termos de uso</a>.</label>
                                </div>
                                <button type="button" class="btn btn-previous">Anterior</button>
                                <button type="submit" class="btn">Cadastre-me!</button>
                            </div>
                        </fieldset>
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle"><b>Termos de uso</b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        @include('layouts.termos_de_uso')
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-lg-3">

                <div
                    class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                    <div class="copyright_content">
                        Copyright &copy;<script>document.write(new Date().getFullYear().toString());</script>
                        Todos os direitos reservados | Esse site foi feito com <i class="fa fa-heart"
                                                                                  aria-hidden="true"></i> pela <a
                            href="#" target="_blank">Weiche Technologie</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Javascript -->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('css/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.backstretch.min.js')}}"></script>
<script src="{{asset('js/retina-1.1.0.min.js')}}"></script>
<script src="{{asset('js/script_tela_cadastro_produtor.js')}}"></script>
<script src="{{asset('js/termos_de_uso.js')}}"></script>
<script src="{{asset('plugins/jquery-plugin-mask/jquery.mask.js')}}"></script>

</body>

</html>
