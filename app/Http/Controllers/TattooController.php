<?php

namespace App\Http\Controllers;

use App\Models\Orcamento;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;

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
        
        $valorInicial = round(sqrt($data['altura']**2 + $data['largura']**2) * 80, 2);
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

        $clientEmailBody = view('mail.clientMail', ['valor' => $orcamento->valor])->render();
        $this->sendMailWithPHPMailer($orcamento->email, 'Seu Pré-Orçamento', $clientEmailBody);
        
        // Envio de email para o tatuador
        $tatuadorEmail = 'contato@maribranquinho.com.br';
        $managerEmailBody = view('mail.managerMail', ['orcamento' => $orcamento])->render();
        $this->sendMailWithPHPMailer($tatuadorEmail, 'Novo Pré-Orçamento Recebido', $managerEmailBody);
                
        return redirect()->route('orcamento_calculado')->with(['valor' => $orcamento->valor]);
    }

    function sendMailWithPHPMailer($to, $subject, $body, $fromEmail = 'contato@maribranquinho.com.br', $fromName = 'Mari Branquinho')
    {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'br1014.hostgator.com.br';
            $mail->SMTPAuth = true;
            $mail->Username = 'contato@maribranquinho.com.br';
            $mail->Password = 'Ma290589@';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom($fromEmail, $fromName);
            $mail->addAddress($to);

            $mail->isHTML(true);
            $mail->Subject = mb_encode_mimeheader($subject, 'UTF-8', 'B');
            $mail->Body    = $body;

            $mail->send();
        } catch (Exception $e) {}
    }
}
