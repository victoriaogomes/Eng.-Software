<?php

//Rotas púlblicas ----------------------------------------------------------------------------------

Route::get('/', 'PublicoController@index')->name('index');

Route::get('tipo_cadastro', 'PublicoController@getTipoCadastro');


//Rotas de cadastro e recuperação de senha ---------------------------------------------------------
Auth::routes();

Route::get('cadastro_produtor', 'ProdutorController@getForm');

Route::get('cadastro_consumidor', 'ConsumidorController@getForm');

Route::post('/cadastro_produtor', 'ProdutorController@cadastrarProdutor')->name('cadastrarProdutor');

Route::post('/cadastro_consumidor', 'ConsumidorController@cadastrarConsumidor')->name('cadastrarConsumidor');

Route::post('/retorna_cidades', 'CidadeController@retornaCidades')->name('retornaCidades');


//Rotas para usuários cadastrados ------------------------------------------------------------------
Route::middleware(['auth'])->group(function () {

    Route::get('/home', 'UsuarioController@home')->name('home');




    //Rotas para usuários que não definiram o tipo de conta ----------------------------------------
    Route::middleware(['auth.usuario'])->group(function () {

        Route::get('/usuario', function () {
            return Auth::user()->email . ' é usuário';
        });

    });




    //Rotas para administadores --------------------------------------------------------------------
    Route::middleware(['auth.administrador'])->group(function () {

        Route::get('/administrador', 'AdministradorController@exemplo')->name('administrador');

    });




    //Rotas para consumidores ----------------------------------------------------------------------
    Route::middleware(['auth.consumidor'])->group(function () {

        Route::get('/consumidor', 'ConsumidorController@exemplo')->name('consumidor');

        Route::get('/consumidor/adicionar_cartao', 'ConsumidorController@adicionarCartao')->name('consumidor.adicionar.cartao');

        Route::get('/consumidor/cadastrar_endereco', 'ConsumidorController@getCadastrarEndereco');

        Route::post('/consumidor/cadastrar_endereco', 'ConsumidorController@cadastrarEndereco')->name('consumidor.cadastrar.endereco');

        //Route::get('/consumidor/cadastrar', 'ConsumidorController@cadastrarConsumidor')->name('consumidor.cadastrar');
        //Route::get('/consumidor/alterar', 'ConsumidorController@alterarConsumidor')->name('consumidor.alterar');
        //Route::get('/consumidor/adicionar_cartao', 'ConsumidorController@adicionarCartao')->name('comsumidor.cartao.cadastrar');
<<<<<<< HEAD
        Route::get('/consumidor/cadastrar_endereco', 'ConsumidorController@cadastrarEndereco')->name('consumidor.endereco.cadastrar');
=======
        //
>>>>>>> d8e6784fc3c0b06d23628dd2e3e4baf07ec78707

    });




    //Rotas para produtores -----------------------------------------------------------------------
    Route::middleware(['auth.produtor'])->group(function () {

        Route::get('/produtor', 'ProdutorController@exemplo')->name('produtor');

        //Route::get('/produtor/cadastrar', 'ProdutorController@cadastrarProdutor')->name('produtor.cadastrar');
        Route::get('/produtor/alterar', 'ProdutorController@alterarProdutor')->name('produtor.alterar');

        Route::view('/produtor/cadastrar_produto', 'produtor.produto_cadastrar')->name('produtor.produto.cadastrar');
        Route::post('/produtor/cadastrar_produto', 'ProdutorController@cadastrarProduto');

        //Route::get('/produtor/alterar_produto/{id}', 'ProdutorController@editarProduto')->name('produtor.produto.alterar');
        //Route::post('/produtor/alterar_produto/{id}', 'ProdutorController@alterarProduto');

        //Route::get('/produtor/cadastrar_endereco', 'ProdutorController@cadastrarEndereco')->name('produtor.endereco.cadastrar');

    });
});
