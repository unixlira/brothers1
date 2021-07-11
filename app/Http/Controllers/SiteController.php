<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\XmlController;

class SiteController extends Controller
{
    public function index()
    {
        $response = Http::get(env('INTEGRATOR_URL'));
        $xml = $response->body();
        $array = $this->xmlToArray($xml);
        $newXml = $array['veiculo'];

        return view('site.index', compact('newXml'));

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

    public function veiculos()
    {
        return view('site.veiculos');

    }

    public function estoque()
    {
        $xml = new XmlController();
        $array = $xml->index()->getData();
        $newXml = $array['array']['veiculo'];

        return view('site.estoque', compact('newXml'));
    }

    public function xmlToArray($xmlstring){

        $xml = simplexml_load_string($xmlstring, "SimpleXMLElement", LIBXML_NOCDATA);
        return json_decode(json_encode($xml), true);

    }
}
