<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class XmlController extends Controller
{
    public function index()
    {
        $url = "https://sistema.autocerto.com/xml/Anuncios?idcliente=1334&cnpj=20595366000168&chave=aut@cert@";
        $response = Http::get($url,null);
        $xml = $response->body();
        $array = $this->xmlToArray($xml);

        return view('xml.xml_response', compact('array'));
    }

    public function xmlToArray($xmlstring){

        $xml = simplexml_load_string($xmlstring, "SimpleXMLElement", LIBXML_NOCDATA);
        return json_decode(json_encode($xml), true);

    }
}
