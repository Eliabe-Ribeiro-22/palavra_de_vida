<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IgrejaController extends Controller
{
    public function mainPg() {
        return view('igreja.inicio');
    }

    public function institutionalPg () {
        return view('igreja.institucional');
    }

    public function contactPg () {
        return view('igreja.contato');
    }

    public function projectsPg () {
        return view('igreja.projetos');
    }

    public function reunionsPg () {
        return view('igreja.reunioes');
    }

    
    public function form_create(){
            return view('igreja.form');
    }

    public function sendForm(Request $request)
    {

        try {
            if($request->telefone != ""){
                $tipo_contato = 'telefone';
                $campo_tipo_contato = $request->telefone;
            }
            else{
                $tipo_contato = 'email';
                $campo_tipo_contato = $request->email;
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
                        'campo_tipo_contato' => $campo_tipo_contato,

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
