<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

//API GZAPPY
use Illuminate\Support\Facades\Http;
class PdAController extends Controller
{
    //PdA = Palavra de Vida Controller
     public function mainPg() {
        return view('associacao.inicio');
    }

    public function divulgationPg () {
        return view('associacao.divulgation');
    }

    public function SobrePg (){
        return view('associacao.sobre_nos');
    }
    
    public function diretoriaPg(){
        return view('associacao.diretoria');
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

$GZAPPY_URL = "https://api.gzappy.com/v1/message/send-message";
$GZAPPY_API_TOKEN = "850cb51bda92317d7e9752188729a3f63cf4159b4ba7c3ab3e12dffd04f7bb88456ac483098704ee128b2b032d3342bbf58b398c7da6432efbfe6e49b9370354";
$GZAPPY_INSTANCE_ID = "JYJBND8MTY70BNFB2XZDXRC0";

        $client = new Client();

        $response = $client->request('POST', GZAPPY_URL, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer $GZAPPY_API_TOKEN'
            ],
            'json' => [
                'instance_id' => GZAPPY_INSTANCE_ID,
                'message' => [$nome],
                'phone' => ["5549988477611", "5549988967075"]
            ]
        ]);

        $data = json_decode($response->getBody(), true);

        echo json_encode($data, JSON_PRETTY_PRINT);
          
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

    public function new_form(){
        return view("associacao.new_form");
    }    
}
