<?php

namespace App\Mail;

use http\Env\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->from('joserobertolira@gmail.com')
                    ->view('view.email.template')
                    ->subject('Mensagem do Site Smart Veiculos')
                    ->with([
                        'nome' => $request->nome,
                        'email'=> $request->email,
                        'telefone'=> $request->telefone,
                        'endereco'=> $request->endereco,
                        'mensagem'=> $request->mensagem,
                    ]);
    }
}
