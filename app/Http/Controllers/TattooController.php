<?php

namespace App\Http\Controllers;

use App\Models\Orcamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TattooController extends Controller
{
    public function calc(Request $request)
    {
        $data = $request->only([
            'nome',
            'email',
            'celular',
            'instagram',
            'estado',
            'cidade',
            'tipo_desenho',
            'local',
            'largura',
            'altura',
            'cicatriz',
            'remocao',
            'cores',
        ]);

        if (isset($data['cores']) && is_array($data['cores'])) {
            $data['cores'] = implode(', ', $data['cores']);
        } else {
            $data['cores'] = '';
        }
        
        $valorInicial = round(sqrt($data['altura']**2 + $data['largura']**2) * 60, 2);
        $adicional = 0;
        
        if($data['cicatriz'] == 'Sim'){
            $adicional+= $valorInicial * 0.2;
        }

        if($data['remocao'] == 'Sim'){
            $adicional+= $valorInicial * 0.3;
        }

        if($data['cores']){
            $cores = explode(', ', $data['cores']);
            $cores = array_filter($cores, function($cor) {
                return strtolower($cor) !== 'preto';
            });
    
            foreach($cores as $cor ){
                $adicional+= $valorInicial * 0.1;
            }
        }

        $data['valor'] = $valorInicial + $adicional;

        $orcamento = Orcamento::create($data);

        Mail::send('mail.clientMail', ['valor' => $orcamento->valor], function($message) use ($orcamento) {
            $message->to($orcamento->email);
            $message->subject('Seu Pré-Orçamento');
        });

        $tatuadorEmail = 'emilsonsn2@gmail.com';
        Mail::send('mail.managerMail', ['orcamento' => $orcamento], function($message) use ($tatuadorEmail) {
            $message->to($tatuadorEmail);
            $message->subject('Novo Pré-Orçamento Recebido');
        });

        return redirect()->route('orcamento_calculado')->with(['valor' => $orcamento->valor]);
    }
}
