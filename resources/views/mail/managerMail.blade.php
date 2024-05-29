<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Pré-Orçamento Recebido</title>
    <style>
        .email-content {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f9f9f9;
            width: 500px;
            margin: 0 auto;
        }
        .email-header {
            text-align: center;
            background-color: #333;
            color: white;
            padding: 10px 0;
        }
        .email-body {
            margin: 20px 0;
        }
        .email-body h3 {
            color: green;
        }
        .email-footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9em;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="email-content">
        <div class="email-header">
            <h1>Novo Pré-Orçamento Recebido</h1>
        </div>
        <div class="email-body">
            <p>Você recebeu um novo pré-orçamento com as seguintes informações:</p>
            <h3>Detalhes do Cliente:</h3>
            <p><strong>Nome:</strong> {{ $orcamento->nome }}</p>
            <p><strong>Email:</strong> {{ $orcamento->email }}</p>
            <p><strong>Celular:</strong> {{ $orcamento->celular }}</p>
            <p><strong>Instagram:</strong>{{'@'}}{{ $orcamento->instagram }}</p>
            <p><strong>Estado:</strong> {{ $orcamento->estado }}</p>
            <p><strong>Cidade:</strong> {{ $orcamento->cidade }}</p>

            <h3>Detalhes do Orçamento:</h3>
            <p><strong>Tipo de Desenho:</strong> {{ $orcamento->tipo_desenho }}</p>
            <p><strong>Local do Corpo:</strong> {{ $orcamento->local }}</p>
            <p><strong>Largura (cm):</strong> {{ $orcamento->largura }}</p>
            <p><strong>Altura (cm):</strong> {{ $orcamento->altura }}</p>
            <p><strong>Cicatriz:</strong> {{ $orcamento->cicatriz ? 'Sim' : 'Não' }}</p>
            <p><strong>Remoção de Tatuagem Anterior:</strong> {{ $orcamento->remocao ? 'Sim' : 'Não' }}</p>
            <p><strong>Cores:</strong> {{ $orcamento->cores }}</p>

            <h3>Valor do Pré-Orçamento:</h3>
            <h2><strong>R$ {{ number_format($orcamento->valor, 2, ',', '.') }}</strong></h2>
        </div>
        <div class="email-footer">
            <p>Este é um email automático. Por favor, não responda diretamente a este email.</p>
        </div>
    </div>
</body>
</html>
