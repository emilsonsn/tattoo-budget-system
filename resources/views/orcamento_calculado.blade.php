<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faça seu pré-orçamento</title>
</head>

@vite(['resources/sass/app.scss', 'resources/sass/orcamento.scss'])
<body>

    <div class="loading">
        {{-- <img src="https://media1.giphy.com/media/ehgg71YYchm78RWJ8B/giphy.gif" alt=""> --}}
        <img src="./assets/images/logoMari.jpeg" alt="" width="350"> <br>
        <img src="https://cdn.pixabay.com/animation/2023/10/08/03/19/03-19-26-213_512.gif" alt="" width="80">
    </div>

    <div class="calculado">
        <h1 class="c-green">Orçamento Calculado</h1>
        <p>
            <h3>
                O valor do seu pré-orçamento é: 
            </h3>
            @if(session('valor'))
            <h2><strong>R$ {{ number_format(session('valor'), 2, ',', '.') }}</strong></h2>
            @else
                <h2><strong>R$ 0,00</strong></h2>
            @endif
        </p>
        <p class="info">
            Caso queira um orçamento mais preciso ou tenha alguma dúvida entre em contato com a gente. Estamos ansiosos pelo seu contato!
            <a href="">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/018/930/746/small/whatsapp-logo-whatsapp-icon-whatsapp-transparent-free-png.png" alt="">
                Entrar em contato
            </a>
            <a href="{{route('orcamento')}}">
                <img src="https://cdn-icons-png.flaticon.com/512/8099/8099317.png" alt="">
                Fazer outro orçamento
            </a>
        </p>
    </div>
</body>

<script>
    let calculado = document.querySelector('.calculado');
    let loading = document.querySelector('.loading');

    setTimeout(() => {
        loading.style.display = "none";
        calculado.style.display = "block";
    }, 2000);
</script>
</html>