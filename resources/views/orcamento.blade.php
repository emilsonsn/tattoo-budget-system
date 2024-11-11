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
    <div class="form-container">
        <form action="{{route('calc')}}">
            <h1>Pré-orçamento online</h1>
            <hr>
            <p>
                Preencha o formulário atentamente. É importante que você preencha todas as informações solicitadas para que possamos trabalhar da melhor forma de acordo com suas particularidades.
                Qualquer dúvida, contate a gente!
            </p>
            <hr>
            <h3 class="mt-2">Seus dados</h3>
            <div class="col-12 row">
                <div class="col-md-6">
                    <label class="mt-2" for="nome">Nome *</label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Informe seu nome" required>
                </div>
                <div class="col-md-6">
                    <label class="mt-2" for="email">Email *</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Informe seu email" required>
                </div>
            </div>

            <div class="col-12 row">
                <div class="col-md-6">
                    <label class="mt-2" for="celular">Celular *</label>
                    <input type="text" name="celular" class="form-control" placeholder="Informe seu número de celular" required>
                </div>
                <div class="col-md-6">
                    <label  class="mt-2"for="instagram">Instagram *</label>
                    <input type="text" name="instagram" class="form-control" placeholder="Informe seu instagram. exe.: @fulano" required>
                </div>
            </div>

            <div class="col-12 row">
                <div class="col-md-6">
                    <label class="mt-2" for="estado">Qual seu estado?</label>
                    <select name="estado" class="form-control" id="" required> 
                        <option value="">Selecione um estado</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AM">AM</option>
                        <option value="AP">AP</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MG">MG</option>
                        <option value="MS">MS</option>
                        <option value="MT">MT</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="PR">PR</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="RS">RS</option>
                        <option value="SC">SC</option>
                        <option value="SE">SE</option>
                        <option value="SP">SP</option>
                        <option value="TO">TO</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label  class="mt-2"for="cidade">Qual sua cidade?</label>
                    <input type="text" class="form-control" name="cidade" placeholder="Informe a cidade onde você mora" required>
                </div>
            </div>
            <hr>
        

            <hr>
            <h3 class="mt-2">Informações adicionais?</h3>
            <strong>Tem algum desses?</strong>
            <div class="col-12 row">
                <div class="col-md-6">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                    <label class="form-check-label" for="defaultCheck10">
                        Possui cicatrizes
                    </label>
                </div>

                <div class="col-md-6">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck7">
                    <label class="form-check-label" for="defaultCheck7">
                        Já teve retoque? 
                    </label>
                </div>
     
                <div class="col-md-6 mt-3">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck11">
                    <label class="form-check-label" for="defaultCheck11">
                        Tatuagem profissional
                    </label>
                </div>
                
                <div class="col-md-6">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck12">
                    <label class="form-check-label" for="defaultCheck12">
                        Tatuagem Amadora
                    </label>
                </div>

                <div class="col-md-6">
                    <label class="" for="defaultCheck8">
                    Quanto tempo tem a tatuagem
                    </label>
                    <input class="form-control" type="text" value="" id="defaultCheck8">
                </div>
            </div>

            <hr>
            <h3 class="mt-2">Informações da tatuagem</h3>
            <div class="col-12 row">
                <div class="col-md-6">
                    <label class="mt-2" for="tipo_desenho">Desenho *</label>
                    <select type="text" name="tipo_desenho" class="form-control" required>
                        <option value="">Selecione</option>
                        <option value="BlackWork">BlackWork</option>
                        <option value="Maori/Tribal">Maori/Tribal</option>
                        <option value="Texto/Escrita">Texto/Escrita</option>
                        <option value="Realismo">Realismo</option>
                        <option value="Pontilhismo">Pontilhismo</option>
                        <option value="Old school">Old school</option>
                        <option value="Geometrico">Geometrico</option>
                        <option value="Minimalista">Minimalista</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="mt-2" for="local">Local da tatuagem *</label>
                    <select name="local" class="form-control" required>
                        <option value="">Selecione</option>
                        <option value="Braço">Braço</option>
                        <option value="Antebraço">Antebraço</option>
                        <option value="Costas">Costas</option>
                        <option value="Peito">Peito</option>
                        <option value="Perna">Perna</option>
                        <option value="Panturrilha">Panturrilha</option>
                        <option value="Coxa">Coxa</option>
                        <option value="Pé">Pé</option>
                        <option value="Ombro">Ombro</option>
                        <option value="Mão">Mão</option>
                        <option value="Pescoço">Pescoço</option>
                        <option value="Rosto">Rosto</option>
                        <option value="Costela">Costela</option>
                        <option value="Barriga">Barriga</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>
                
            </div>

            <div class="col-12 row">
                <div class="col-md-6">
                    <label class="mt-2" for="altura">Altura</label>
                    <input type="text" name="altura" class="form-control" placeholder="Informe a altura da tatuagem" required>

                </div>
                <div class="col-md-6">
                    <label  class="mt-2"for="largura">Largura</label>
                    <input type="text" name="largura" class="form-control" placeholder="Informe a largura da tatuagem" required>
                </div>
            </div>

            <div class="col-12 row">
                <div class="col-md-6">
                    <label class="mt-2" for="cicatriz">Tem cicatriz no local? *</label>
                    <select type="text" name="cicatriz" class="form-control" required>
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label  class="mt-2"for="remocao">Já ouve tentativa de remoção? *</label>
                    <select type="text" name="remocao" class="form-control" required>
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>
                    </select>
                </div>
            </div>

            <hr>
            <h3>Cores</h3>

            <div class="col-12 row">
                <div class="col-md-3">
                    <input class="form-check-input" type="checkbox" name="cores[]" value="preto" id="preto">
                    <label class="form-check-label" for="preto">
                        Preto
                    </label>
                </div>
                <div class="col-md-3">
                    <input class="form-check-input" type="checkbox" name="cores[]" value="cinza" id="cinza">
                    <label class="form-check-label" for="cinza">
                        Cinza
                    </label>
                </div>
                <div class="col-md-3">
                    <input class="form-check-input" type="checkbox" name="cores[]" value="branco" id="branco">
                    <label class="form-check-label" for="branco">
                        Branco
                    </label>
                </div>
                <div class="col-md-3">
                    <input class="form-check-input" type="checkbox" name="cores[]" value="vermelho" id="vermelho">
                    <label class="form-check-label" for="vermelho">
                        Vermelho
                    </label>
                </div>
                <div class="col-md-3">
                    <input class="form-check-input" type="checkbox" name="cores[]" value="azul" id="azul">
                    <label class="form-check-label" for="azul">
                        Azul
                    </label>
                </div>
                <div class="col-md-3">
                    <input class="form-check-input" type="checkbox" name="cores[]" value="verde" id="verde">
                    <label class="form-check-label" for="verde">
                        Verde
                    </label>
                </div>
                <div class="col-md-3">
                    <input class="form-check-input" type="checkbox" name="cores[]" value="amarelo" id="amarelo">
                    <label class="form-check-label" for="amarelo">
                        Amarelo
                    </label>
                </div>
                <div class="col-md-3">
                    <input class="form-check-input" type="checkbox" name="cores[]" value="roxo" id="roxo">
                    <label class="form-check-label" for="roxo">
                        Roxo
                    </label>
                </div>
                <div class="col-md-3">
                    <input class="form-check-input" type="checkbox" name="cores[]" value="laranja" id="laranja">
                    <label class="form-check-label" for="laranja">
                        Laranja
                    </label>
                </div>
                <div class="col-md-3">
                    <input class="form-check-input" type="checkbox" name="cores[]" value="rosa" id="rosa">
                    <label class="form-check-label" for="rosa">
                        Rosa
                    </label>
                </div>
                <div class="col-md-3">
                    <input class="form-check-input" type="checkbox" name="cores[]" value="marrom" id="marrom">
                    <label class="form-check-label" for="marrom">
                        Marrom
                    </label>
                </div>
                <div class="col-md-3">
                    <input class="form-check-input" type="checkbox" name="cores[]" value="lilas" id="lilas">
                    <label class="form-check-label" for="lilas">
                        Lilás
                    </label>
                </div>                
            </div>
            <button type="submit">
                Calcular orçamento aproximado
            </button>
        </form>
    </div>
</body>
</html>