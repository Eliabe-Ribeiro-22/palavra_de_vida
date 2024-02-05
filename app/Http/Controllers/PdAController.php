<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PdAController extends Controller
{
    //PdA = Palavra de Vida Controller
     public function mainPg() {
        return view('associacao.inicio');
    }

    public function divulgationPg () {
        return view('associacao.divulgation');
    }
    
    public function maintainer(){
            return view('associacao.maintainer');
    }

    public function sendForm(Request $request)
    {
        try {
            if($request->telefone != ""){
                $tipo_contato = 'telefone';
                $campo_contato = $request->telefone;
            }
            else{
                $tipo_contato = 'email';
                $campo_contato = $request->email;
            }
            
            $credentials = $request->validate([
                'nome' => ['required'],
                $tipo_contato => ['required'],
                'mensagem' => ['required'],
            ]);
        
            $mensagem = $request->mensagem;
            $nome = $request->nome;

            if ($credentials) {
                Mail::send(
                    'email.enviarGmail',
                    [
                        'mensagem' => $mensagem,
                        'nome' => $nome,
                        'tipo_contato' => $tipo_contato,
                        'campo_contato' => $campo_contato,

                    ],
                    function ($message) use ($request) {
                        $message->from('palavradevida.associacao@gmail.com');
                        $message->to('palavradevida.associacao@gmail.com');
                        $message->subject('Alguém enviou uma mensagem para associação');
                    },
                );
                return redirect('/')->with('msg', 'O formulário foi enviado com sucesso');
            } else {
                return redirect('/')->with('msg', 'Falha ao enviar o formulário. Tente mais tarde');
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function rest() {
        return view('rest.error_404');
    }
}
