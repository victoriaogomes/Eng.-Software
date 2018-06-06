<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fale conosco</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/fale_conosco_style.css">
    <link rel="stylesheet" type="text/css" href="styles/fale_conosco_responsive.css">

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/icon-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/icon-72.png">
    <link rel="apple-touch-icon-precomposed" href="images/icon-16.png">

</head>

<body>

<div class="super_container">

    <!-- Header -->
    <header class="header">


        <!-- Top Bar -->

        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="top_bar_content ml-auto">
                            <div class="top_bar_user">
                                <div class="user_icon"><img src="images/user.svg" alt=""></div>
                                <div><a href="#">Cadastrar</a></div>
                                <div><a href="#">Login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Main -->

        <div class="header_main">
            <div class="container">
                <div class="row">

                    <!-- Logo -->
                    <div class="col-lg-4 col-sm-3 col-3 order-1">
                        <div class="logo_container">
                            <div class="logo_icon"><img src="images/logoSite.png" class="img-fluid" alt=""></div>

                        </div>
                    </div>

                    <!-- Search  6 col 12 ord 2 order 3-->
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                    <form action="#" class="header_search_form clearfix">
                                        <input type="search" required="required" class="header_search_input"
                                               placeholder="Pesquisar produtos...">

                                        <div class="custom_dropdown">
                                            <div class="custom_dropdown_list">
                                                <span class="custom_dropdown_placeholder clc">Todas as categorias</span>
                                                <i class="fas fa-chevron-down"></i>
                                                <ul class="custom_list clc">
                                                    <li><a class="clc" href="#">Todas as categorias</a></li>
                                                    <li><a class="clc" href="#">Cereais</a></li>
                                                    <li><a class="clc" href="#">Frutas</a></li>
                                                    <li><a class="clc" href="#">Legumes</a></li>
                                                    <li><a class="clc" href="#">Leguminosas</a></li>
                                                    <li><a class="clc" href="#">Raízes</a></li>
                                                    <li><a class="clc" href="#">Tubérculos</a></li>
                                                    <li><a class="clc" href="#">Verduras</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <button type="submit" class="header_search_button trans_300" value="Submit"><img
                                                src="images/search.png" alt=""></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Wishlist -->
                    <div class="col-lg-2 col-9 order-lg-3 order-2 text-lg-left text-right">
                        <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                            <!-- <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist_icon"><img src="images/heart.png" alt=""></div>
                                <div class="wishlist_content">
                                    <div class="wishlist_text"><a href="#">Favoritos</a></div>
                                    <div class="wishlist_count">0</div>
                                </div>
                            </div> -->

                            <!-- Cart -->
                            <div class="cart">
                                <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                    <div class="cart_icon">
                                        <a href="#">
                                            <i class="fa fa-shopping-basket fa-3x" style="color: #000000"></i>
                                        </a>
                                        <!--<img src="images/carrinho.png" alt="">-->
                                        <div class="cart_count"><span>0</span></div>
                                    </div>
                                    <!--<div class="cart_content">-->
                                    <!--<div class="cart_text"><a href="#">Minha cesta</a></div>-->
                                    <!--&lt;!&ndash; <div class="cart_price">0</div>  Modificado &ndash;&gt;-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->

        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="main_nav_content d-flex flex-row">

                            <!-- Categories Menu -->

                            <div class="cat_menu_container">
                                <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                    <div class="cat_burger"><span></span><span></span><span></span></div>
                                    <div class="cat_menu_text">Categorias</div>
                                </div>

                                <ul class="cat_menu">
                                    <li><a href="#">Cereais <i class="fas fa-chevron-right ml-auto"></i></a></li>
                                    <li><a href="#">Frutas<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">Legumes<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">Leguminosas<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">Raízes<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">Tubérculos<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">Verduras<i class="fas fa-chevron-right"></i></a></li>

                                </ul>
                            </div>

                            <!-- Main Nav Menu -->

                            <div class="main_nav_menu ml-auto">
                                <ul class="standard_dropdown main_nav_dropdown">
                                    <li><a href="#">Inicio<i class="fas fa-chevron-down"></i></a></li>
                                    <!--<li><a href="#">Produtos<i class="fas fa-chevron-down"></i></a></li>-->
                                    <!-- <li class="hassubs">
                                        <a href="#">Produtos<i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li>
                                                    <a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                    <ul>
                                                        <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                        <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                        <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                            </ul>
                                        </li>
                                         <li class="hassubs">
                                            <a href="#">Destaques<i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li>
                                                    <a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                    <ul>
                                                        <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                        <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                        <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                            </ul>
                                        </li>
                                        <li class="hassubs">
                                            <a href="#">Pages<i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="product.html">Product<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="fale_conosco.html">Contact<i class="fas fa-chevron-down"></i></a></li>
                                            </ul>
                                        </li> -->
                                    <li><a href="blog.html">Sobre<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="fale_conosco.html">Fale Conosco<i class="fas fa-chevron-down"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Menu Trigger -->

                            <div class="menu_trigger_container ml-auto">
                                <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                    <div class="menu_burger">
                                        <div class="menu_trigger_text">menu</div>
                                        <div class="cat_burger menu_burger_inner">
                                            <span></span><span></span><span></span></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Menu -->

        <div class="page_menu">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page_menu_content">

                            <div class="page_menu_search">
                                <form action="#">
                                    <input type="search" required="required" class="page_menu_search_input"
                                           placeholder="Pesquisar produtos...">
                                </form>
                            </div>
                            <ul class="page_menu_nav">

                                <li class="page_menu_item">
                                    <a href="#">Inicio<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item">
                                    <a href="#">Produtos<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item">
                                    <a href="#">Sobre<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item">
                                    <a href="#">Fale Conosco<i class="fa fa-angle-down"></i></a>
                                </li>
                            </ul>

                            <!-- <div class="menu_contact">
                                 <div class="menu_contact_item">
                                     <div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>
                                     +38 068 005 3570
                                 </div>
                                 <div class="menu_contact_item">
                                     <div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div>
                                     <a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
                             </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!-- Contact Info -->

    <div class="contact_info">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="phone"><i class="fa fa-mobile-alt fa-3x" style="color: #08c8b0"></i></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Telefone</div>
                                <div class="contact_info_text">+55 075 1234 5678</div>
                            </div>
                        </div>

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="email"><i class="far fa-envelope fa-3x" style="color: #08c8b0"></i></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Email</div>
                                <div class="contact_info_text">mineapple@gmail.com</div>
                            </div>
                        </div>

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <!--<div class="contact_info_image"><img src="images/contact_3.png" alt=""></div>-->
                            <div class="mapMarker"><i class="fa fa-map-marker-alt fa-3x" style="color: #08c8b0"></i>
                            </div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Endereço</div>
                                <div class="contact_info_text">Rua Itamar de Carvalho, 271, Feira de Santana, Bahia,
                                    BR
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form -->

    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_container">
                        <div class="contact_form_title">Fale conosco</div>

                        <form action="#" id="contact_form">
                            <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                                <input type="text" id="contact_form_name" class="contact_form_name input_field"
                                       placeholder="Seu nome" required="required"
                                       data-error="É obrigatório informar seu nome.">
                                <input type="email" id="contact_form_email" class="contact_form_email input_field"
                                       placeholder="Seu email" required="required"
                                       data-error="É obrigatório informar seu email.">
                                <input type="tel" id="contact_form_phone" class="contact_form_phone input_field"
                                       placeholder="Seu número de telefone">
                            </div>
                            <div class="contact_form_text">
                                <textarea id="contact_form_message" class="text_field contact_form_message"
                                          name="message" rows="4" placeholder="Mensagem" required="required"
                                          data-error="Por favor, escreva-nos uma mensagem."></textarea>
                            </div>
                            <div class="contact_form_button">
                                <button type="submit" class="button contact_submit_button">Enviar mensagem</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="panel"></div>
    </div>

    <!-- Map -->

    <!--<div class="contact_map">-->
    <!--<div id="google_map" class="google_map">-->
    <!--<div class="map_container">-->
    <!--<div id="map"></div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!-- Newsletter -->

    <!--<div class="newsletter">-->
    <!--<div class="container">-->
    <!--<div class="row">-->
    <!--<div class="col">-->
    <!--<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">-->
    <!--<div class="newsletter_title_container">-->
    <!--<div class="newsletter_icon"><img src="images/send.png" alt=""></div>-->
    <!--<div class="newsletter_title">Sign up for Newsletter</div>-->
    <!--<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>-->
    <!--</div>-->
    <!--<div class="newsletter_content clearfix">-->
    <!--<form action="#" class="newsletter_form">-->
    <!--<input type="email" class="newsletter_input" required="required"-->
    <!--placeholder="Enter your email address">-->
    <!--<button class="newsletter_button">Subscribe</button>-->
    <!--</form>-->
    <!--<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 footer_col">
                    <div class="footer_column footer_contact">
                        <div class="logo_container">
                            <div class="logo"><a href="#">Mineapple</a></div>
                        </div>
                        <div class="footer_title">Tem uma dúvida? Mande-nos um email!</div>
                        <div class="footer_phone">mineapple@gmail.com</div>
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

                <!--div class="col-lg-2 offset-lg-2">
                    <div class="footer_column">
                        <div class="footer_title">Find it Fast</div>
                        <ul class="footer_list">
                            <li><a href="#">Computers & Laptops</a></li>
                            <li><a href="#">Cameras & Photos</a></li>
                            <li><a href="#">Hardware</a></li>
                            <li><a href="#">Smartphones & Tablets</a></li>
                            <li><a href="#">TV & Audio</a></li>
                        </ul>
                        <div class="footer_subtitle">Gadgets</div>
                        <ul class="footer_list">
                            <li><a href="#">Car Electronics</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer_column">
                        <ul class="footer_list footer_list_2">
                            <li><a href="#">Video Games & Consoles</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Cameras & Photos</a></li>
                            <li><a href="#">Hardware</a></li>
                            <li><a href="#">Computers & Laptops</a></li>
                        </ul>
                    </div>
                </div-->

                <div class="col-lg-2">
                    <div class="footer_column">
                        <div class="footer_title">Serviços</div>
                        <ul class="footer_list">
                            <li><a href="#">Sobre</a></li>
                            <li><a href="#">Fale conosco</a></li>
                            <li><a href="#">Dúvidas frequentes</a></li>
                            <li><a href="#">Termos e condições</a></li>

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

                    <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                        <div class="copyright_content">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            Todos os direitos reservados | Esse site foi feito com <i class="fa fa-heart"
                                                                                      aria-hidden="true"></i> pela <a
                                href="#" target="_blank">Weiche Technologie</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <!--<div class="logos ml-sm-auto">-->
                        <!--<ul class="logos_list">-->
                        <!--<li><a href="#"><img src="images/logos_1.png" alt=""></a></li>-->
                        <!--<li><a href="#"><img src="images/logos_2.png" alt=""></a></li>-->
                        <!--<li><a href="#"><img src="images/logos_3.png" alt=""></a></li>-->
                        <!--<li><a href="#"><img src="images/logos_4.png" alt=""></a></li>-->
                        <!--</ul>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>
</body>

</html>