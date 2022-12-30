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
        echo "<script>alert('ok')</script>";
        try {
            $credentials = $request->validate([
                'nome' => ['required'],
                'telefone' => ['required'],
                'mensagem' => ['required'],
            ]);

            $nome = $request->nome;
            $telefone = $request->telefone;
            $mensagem = $request->mensagem;

            echo "<script>alert('passou nomes')</script>";
            if ($credentials) {
                echo "<script>alert('entrou no credentials')</script>";
                Mail::send(
                    'email.enviarGmail',
                    [
                        'mensagem' => $mensagem,
                        'nome' => $nome,
                        'telefone' => $telefone,
                    ],
                    function ($message) use ($request) {
                        $message->from('palavradevida.associacao@gmail.com');
                        $message->to('palavradevida.associacao@gmail.com');
                        $message->subject('Alguém enviou uma mensagem para associação');
                    },
                );
                echo "<script>alert('enviado com sucesso')</script>";

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
