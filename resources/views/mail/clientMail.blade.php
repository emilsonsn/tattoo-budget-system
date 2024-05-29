<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faça seu pré-orçamento</title>
    <style>
    .bg{
        height: 500px;
        background: rgb(167, 167, 167);
        padding-top: 50px;
    }
    .calculado{
        background: white;
        border-radius: 10px;
        width: 90%;
        max-width: 500px;
        padding: 10px;
        text-align: center;

        margin: 0 auto;
    }
    .info{
        padding-bottom: 30px;
    }
    .info a{        
        font-size: 1.3rem;
        padding: 10px;
        margin: 10px;
        border-radius: 10px;
        background: green;
        color: white;
        text-decoration: none;
        display: block;
        
    }

    .info a img{        
        width: 40px;
        display: inline-block;
    }

    </style>
</head>
<body>
    <div class="bg">
        <div class="calculado" >
            <h1 class="c-green">Orçamento Calculado</h1>
            <h3>
                O valor do seu pré-orçamento é: 
            </h3>
            <h2><strong>R$ {{ number_format($valor, 2, ',', '.') }}</strong></h2>
            <p class="info">
                Caso queira um orçamento mais preciso ou tenha alguma dúvida entre em contato com a gente. Estamos ansiosos pelo seu contato!
                <a href="https://wa.me/seunumerodetelefone">
                    <span>Entrar em contato</span>
                </a>
                <a href="{{ route('orcamento') }}">
                    <span>Fazer outro orçamento</span>
                </a>
            </p>
        </div>
    </div>

</body>
</html>
