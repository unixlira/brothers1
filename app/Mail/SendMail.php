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

    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        if($this->user['tipo'] == 'veiculos'){
            return $this->from('vendas.websmartveiculos@gmail.com', 'Smart veículos')
                ->view('email.template-veiculos')
                ->subject('Contato de cliente do Site Smart Veiculos')
                ->with([
                    'user' => $this->user
                ]);
        }
        if($this->user['tipo'] == 'analise'){
            return $this->from('vendas.websmartveiculos@gmail.com', 'Smart veículos')
                ->view('email.template-analise')
                ->subject('Proposta para analise de crédito do Site Smart Veiculos')
                ->with([
                    'user' => $this->user
                ]);
        }
        if($this->user['tipo'] == 'contato'){
            return $this->from('vendas.websmartveiculos@gmail.com', 'Smart veículos')
                ->view('email.template-contato')
                ->subject('Contato de cliente do Site Smart Veiculos')
                ->with([
                    'user' => $this->user
                ]);
        }

    }
}
