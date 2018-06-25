<?php

namespace mine_apple\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mine_apple\Estado;
use mine_apple\Cidade;
use mine_apple\Cartao;

class ConsumidorController extends Controller
{
    //Métodos para manipular as views visíveis somente para consumidores

    /**
     * @author O nome do desenvolvedor
     * @param Request $request
     * @return string
     */
    public function exemplo(Request $request) {
        return Auth::user()->email . ' é consumidor';
    }

    /**
     * @author Lucas Alves
     * @return string
     */

    public function getForm(){
        $estado = Estado::pluck('nome', 'id');
        return view('cadastro_de_consumidor',compact('estado'));

    }

    /**
     * @author Rafael Brito
     * @param Request $request
     * @return string
     */
    public function cadastrarConsumidor(Request $request) {

        $consumidor = new Consumidor();
        $consumidor->usuario_id = Auth::user()->id;
        $consumidor->nome = $request->nome;
        $consumidor->sobrenome = $request->sobrenome;
        $consumidor->sexo = $request->sexo;
        $consumidor->cpf = $request->cpf;
        $consumidor->nome = $request->nome;

        adicionarCartao($request);
        cadastrarEndereco($request);

        

    }

    /**
     * @author Rafael Brito
     * @param Request $request
     * @return string
     */
    public function alterarConsumidor(Request $request) {

    }

    /**
     * @author Lucas Alves
     * @param Request $request
     * @return string
     */
    public function adicionarCartao(Request $request) {

        $cartao = new Cartao();
        $cartao->consumidor_id = Auth::user()->id;
        $cartao->numero = $request->numero;
        $cartao->titular = $request->titular;
        $cartao->validade = $request->validade;
        $cartao->codigo = $request->codigo;
        $cartao->tipo = $request->tipo;
    }

    /**
     * @author Edcarlos
     * @param Request $request
     * @return string
     */
    public function cadastrarEndereco(Request $request) {
        $endereco = new Endereco();
        $endereco->consumidor_id = Auth::user()->id;
        $endereco->rua = $request->rua;
        $endereco->numero = $request->numero;
        $endereco->complemento = $request->complemento;
        $endereco->bairro = $request->bairro;
    }
}
