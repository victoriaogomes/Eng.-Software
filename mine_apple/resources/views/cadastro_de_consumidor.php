<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de consumidor</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="styles/bootstrap4/bootstrap.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
          type='text/css'>
    <link rel="stylesheet" href="styles/formularios_style.css">

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/icon-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/icon-72.png">
    <link rel="apple-touch-icon-precomposed" href="images/icon-16.png">

</head>

<body>


<!-- Top content -->
<div class="top-content">
    <div class="logo_icon"><img src="images/logoSite.png" alt=""></div>
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
                    <form role="form" action="" method="post" class="registration-form">

                        <fieldset>
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
                                    <label class="sr-only" for="form-first-name">First name</label>
                                    <input type="text" name="form-first-name" placeholder="Nome..."
                                           class="form-first-name form-control" id="form-first-name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">Last name</label>
                                    <input type="text" name="form-last-name" placeholder="Sobrenome..."
                                           class="form-first-name form-control" id="form-last-name1">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-last-name">Last name</label>
                                    <input type="text" name="form-last-name" placeholder="CPF..."
                                           class="form-last-name form-control" id="form-last-name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">First name</label>
                                    <input type="email" name="form-email" placeholder="Email..."
                                           class="form-first-name form-control" required id="form-first-name2">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="senha">Senha</label>
                                    <input type="password" minlength="8" name="form-senha" placeholder="Senha..."
                                           class="form-first-name form-control" required id="senha">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="confSenha">Confirmação de senha</label>
                                    <input type="password" minlength="8" name="form-confirmacao-senha"
                                           placeholder="Confirmação de senha..."
                                           class="form-first-name form-control" data-match="#senha" required
                                           id="confSenha">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="sexo">Sexo</label>
                                    <select class="form-control" id="sexo" required>
                                        <option disabled selected> Sexo</option>
                                        <option value="feminino">Feminino</option>
                                        <option value="masculino">Masculino</option>
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
                                    <label class="sr-only" for="form-first-name">CEP</label>
                                    <input type="text" name="form-first-name" placeholder="CEP"
                                           class="form-first-name form-control" id="CEP">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">Rua</label>
                                    <input type="text" name="form-first-name" placeholder="Rua"
                                           class="form-first-name form-control" id="Rua">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">Número</label>
                                    <input type="text" name="form-first-name" placeholder="Número"
                                           class="form-first-name form-control" id="Número">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">Complemento</label>
                                    <input type="text" name="form-first-name" placeholder="Complemento"
                                           class="form-first-name form-control" id="Complemento">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="estados">Estados</label>
                                    <select class="form-control" id="estados">
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="cidades">Cidades</label>
                                    <select class="form-control" id="cidades">
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
                                    <p>Cartão de credito:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-credit-card"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="logoscartoes">
                                    <ul class="logos_list" style="display: inline-block">
                                        <li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
                                    </ul>
                                    <ul class="logos_list" style="display: inline-block">
                                        <li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
                                    </ul>
                                    <ul class="logos_list" style="display: inline-block">
                                        <li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
                                    </ul>
                                    <ul class="logos_list" style="display: inline-block">
                                        <li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
                                    </ul>
                                    <ul class="logos_list" style="display: inline-block">
                                        <li><a href="#"><img src="images/logos_5.png" alt=""></a></li>
                                    </ul>
                                    <ul class="logos_list" style="display: inline-block">
                                        <li><a href="#"><img src="images/logos_6.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">Nome do titular</label>
                                    <input type="text" name="form-facebook" placeholder="Nome do Titular do cartão"
                                           class="form-facebook form-control" id="idnome">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">Número do cartão</label>
                                    <input type="text" name="form-facebook" placeholder="Número do cartão"
                                           class="form-facebook form-control" id="idBanco">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">Validade</label>
                                    <input type="text" name="form-facebook" placeholder="Validade"
                                           class="form-facebook form-control" id="validade">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="tipo">Tipo de cartão </label>
                                    <select class="form-control" id="tipo">
                                        <option selected disabled>Tipo de cartão</option>
                                        <option value="credito">Crédito</option>
                                        <option value="debito">Débito</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input id="contrato" name="contrato" type="checkbox" value="nao">
                                    <label for="contrato">Li e aceito os termos de uso.</label>
                                </div>
                                <button type="button" class="btn btn-previous">Anterior</button>
                                <button type="submit" class="btn">Cadastre-me!</button>
                            </div>
                        </fieldset>

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
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
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
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/retina-1.1.0.min.js"></script>
<script src="js/script_tela_cadastro_produtor.js"></script>

<!--[if lt IE 10]>
<script src="js/placeholder_tela_cadastro_produtor.js"></script>
<![endif]-->

</body>

</html>