<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function index()
    {
        $xml = new XmlController();
        $array = $xml->index()->getData();
        $newXml = $array['array']['veiculo'];
        $selectMarca = super_unique($array['array'],'marca');
        $selectModelo = super_unique($array['array'],'modelo');

        return view('site.index', compact('newXml','selectMarca', 'selectModelo'));
    }

    public function analise(Request $request)
    {
        $mensagem = $request->mensagem;

        return view('site.analise', compact('mensagem'));

    }
    public function contato(Request $request)
    {
        $mensagem = $request->mensagem;

        return view('site.contato', compact('mensagem'));

    }

    public function compras()
    {
        return view('site.compras');

    }

    public function estoque()
    {
        $xml = new XmlController();
        $array = $xml->index()->getData();
        $newXml = $array['array']['veiculo'];
        $selectMarca = super_unique($array['array'],'marca');
        $selectModelo = super_unique($array['array'],'modelo');


        return view('site.veiculos', compact('newXml','selectMarca', 'selectModelo'));
    }


    public function buscar(Request $request)
    {
        $xml = new XmlController();
        $array = $xml->index()->getData();
        $newXml = $array['array']['veiculo'];
        $selectMarca = super_unique($array['array'],'marca');
        $selectModelo = super_unique($array['array'],'modelo');
        $busca = [];

        if($request->marca && $request->modelo == "false"){
            foreach($newXml as $key => $arr){
                if($arr['marca'] == $request->marca){
                    $busca[]=$newXml[$key];
                }
            }
        }

        if($request->modelo && $request->marca == "false"){
            foreach($newXml as $key => $arr){
                if($arr['modelo'] == $request->modelo){
                    $busca[]=$newXml[$key];
                }
            }
        }

        if($request->modelo == "false" && $request->marca == "false"){
            $busca=$newXml;
        }

        return view('site.buscar',compact('newXml','busca','selectMarca', 'selectModelo'));

    }

    public function veiculo($id, Request $request)
    {
        $xml = new XmlController();
        $array = $xml->index()->getData();
        $newXml = $array['array']['veiculo'];
        $busca = [];
        $status = $request->mensagem;

        foreach($newXml as $key => $arr){
            if($arr['idveiculo'] == $id){
                $busca[]=$newXml[$key];
            }
        }
        $mensagem = "Mensagem enviada!";

        return view('site.veiculo',compact('busca','newXml', 'status', 'mensagem'));
    }

    public function contatoVeiculo(Request $request)
    {
        $user = [
            'tipo' => $request->tipo,
            'nome' => $request->nome,
            'email'=> $request->email,
            'telefone'=> $request->telefone,
            'endereco'=> $request->endereco,
            'mensagem'=> $request->mensagem
        ];

        Mail::to('vendas.websmartveiculos@gmail.com')->send(new SendMail($user));

        return redirect('/veiculos/'. $request->idveiculo.'?mensagem=enviada');

    }

    public function contatoAnalise(Request $request)
    {
        $user = [
            'tipo'=> $request->tipo,
            'nome' => $request->nome,
            'nascimento'=> $request->nascimento,
            'rg'=> $request->rg,
            'cpf'=> $request->cpf,
            'mae'=> $request->mae,
            'endereco' => $request->endereco,
            'cidade'=> $request->cidade,
            'telefone'=> $request->telefone,
            'celular1'=> $request->celular1,
            'celular2'=> $request->celular2,
            'empresa' => $request->empresa,
            'cargo'=> $request->cargo,
            'renda'=> $request->renda,
            'tempoempresa'=> $request->tempoempresa,
            'mensagem'=> $request->mensagem
        ];

        Mail::to('vendas.websmartveiculos@gmail.com')->send(new SendMail($user));

        return redirect('/analise/?mensagem=enviada');
    }

    public function contatoSite(Request $request)
    {
        $user = [
            'tipo'=> $request->tipo,
            'nome' => $request->nome,
            'email'=> $request->email,
            'endereco' => $request->endereco,
            'cidade'=> $request->cidade,
            'telefone'=> $request->telefone,
            'mensagem'=> $request->mensagem
        ];

        Mail::to('vendas.websmartveiculos@gmail.com')->send(new SendMail($user));

        return redirect('/contato/?mensagem=enviada');
    }

}
