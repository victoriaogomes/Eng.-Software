<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Mineapple</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mineapple shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/slick-1.8.0/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/pesquisa_de_produtos_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">


    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/icon-144.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/icon-114.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/icon-72.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/icon-16.png')}}">

</head>

<body>

<div class="super_container">
    <!-- Header -->
    @if(Auth::check())
        @if(Auth::user()->consumidor != null)
            @include('layouts.header_consumidor')
        @elseif(Auth::user()->produtor != null)
            @include('layouts.header_produtor')
        @elseif(Auth::user()->administrador != null)
            @include('layouts.header_administrador')
        @endif
    @else

        @include('layouts.header_usuario')
    @endif


    <div class="top-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pt-3">
                    <h1 class="h1 page-title" data-reactid="38">@if (isset($cat)) {{$cat->nome}} @else {{'Todos Produtos'}} @endif</h1>
                    <div class="pb-3" id="line"></div>
                </div>
            </div>
        </div>
    </div>


    @foreach($produtos as $produto)
        <div class="containerInfosProdutos">
            <div class="container">
                <div class="row" id="backColor">
                    <div class="col-sm-4">
                        <div class="subcontainerProduto1">
                            <div class="imagem">
                                @php
                                    $foto = $fotos->where('produto_id', '=', $produto->id)
                                @endphp
                                @foreach($foto as $i)
                                <img src="{{asset($i->path)}}" height="200" width="200" style="float:left">
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="subcontainerProduto2 ">
                            <form role="form" method="post" action="/adicionar_carrinho">
                                <fieldset>
                                    @csrf
                                    <div class="form-row">

                                        <input type="hidden" name="id" value="{{$produto->id}}">
                                        <input type="hidden" name="nome" value="{{$produto->nome}}">
                                        <input type="hidden" name="preco" value="{{$produto->valor}}">
                                        <input type="hidden" name="embalagem" value="{{$produto->embalagem_id}}">

                                        <div class="form-group col-md-6">
                                            <label style="color: #99a8b7">Nome do Produto </label>
                                            <br/>
                                            <label><a style="color: #000000;" href={{url('/produto/'.$produto->id)}}>
                                                    {{$produto->nome}}
                                                </a></label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label style="color: #99a8b7">Embalagem</label>
                                            <br/>
                                                   @php
                                                       $embalagem = \mine_apple\Embalagem::where('id', '=', $produto->embalagem_id)->first();
                                                   @endphp
                                            <label>{{$embalagem->tipo}}</label>

                                        </div>
                                    </div>
                                    <div class="form-row" id="espac1">
                                        <div class="form-group col-md-6">
                                            <label style="color: #99a8b7">Preço</label>
                                            <br/>
                                            <label>{{$produto->valor}}</label>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="quantidade" style="color: #99a8b7">Quantidade</label>
                                            <input type="number" name="quantidade"
                                                   class="form-control"
                                                   placeholder="0">
                                        </div>
                                    </div>
                                    <div class="form-group" align="right">
                                        <button class="btn-sm btn-primary mt-4"
                                                style="background-color: #08c8b0; border: none;"
                                                type="submit">Adicionar ao carrinho</button>

                                    </div>
                                </fieldset>

                            </form>
                        </div>
                    </div>
                    <div class="pb-0" id="line"></div>
                </div>
            </div>
        

        <!-- <div class="col-md-12 mb-3">
                <button type="submit" class="btn btn-primary">Mostrar mais</button>
            </div> -->


        </div>
        @endforeach





        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <div class="row" id="linha">

                    <div class="col-lg-3 footer_col">
                        <div class="footer_column footer_contact">
                            <div class="logo_container">
                                <div class="logo"><a href="#">Mineapple</a></div>
                            </div>
                            <div class="footer_title">Tem uma dúvida? Mande-nos um email!</div>
                            <div class="footer_phone">mineapple.organicstore@gmail.com</div>
                            <div class="footer_contact_text">
                                <p>Feira de Santana</p>
                                <p>Bahia, BR</p>
                            </div>
                            <div class="footer_social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer_column">
                            <div class="footer_title">Serviços</div>
                            <ul class="footer_list">
                                <li><a href="#">Minha conta</a></li>
                                <li><a href="#">Pedidos</a></li>
                                <li><a href="#">Lista de Desejos</a></li>
                                <li><a href="#">Atendimento ao cliente</a></li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <!-- Copyright -->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div
                            class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                            <div class="copyright_content">
                                Copyright &copy;<script>document.write(new Date().getFullYear().toString());</script>
                                Todos os direitos reservados | Esse site foi feito com <i class="fa fa-heart"
                                                                                          aria-hidden="true"></i> pela
                                <a
                                    href="#" target="_blank">Weiche Technologie</a>
                            </div>
                            <div class="logos ml-sm-auto">
                                <ul class="logos_list">
                                    <li><a href="#"><img src="{{asset('images/logos_1.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('images/logos_2.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('images/logos_3.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('images/logos_4.png')}}" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('css/bootstrap4/popper.js')}}"></script>
<script src="{{asset('css/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/slick-1.8.0/slick.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/script_tela_pesquisa_produtos.js')}}"></script>


</body>

</html>
