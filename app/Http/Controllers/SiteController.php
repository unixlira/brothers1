<?php

namespace App\Http\Controllers;

use DOMDocument;
use DOMElement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

    public function analise()
    {
        return view('site.analise');

    }
    public function contato()
    {
        return view('site.contato');

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

        if($request->marca && $request->modelo == 0){
            foreach($newXml as $key => $arr){
                if($arr['marca'] == $request->marca){
                    $busca[]=$newXml[$key];
                }
            }
        }

        if($request->modelo && $request->marca == 0){
            foreach($newXml as $key => $arr){
                if($arr['modelo'] == $request->modelo){
                    $busca[]=$newXml[$key];
                }
            }
        }




        return view('site.buscar',compact('newXml','busca','selectMarca', 'selectModelo'));

    }

}
