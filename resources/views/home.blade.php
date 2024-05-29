@extends('layouts.app')

@section('content')
@php
    use App\Models\Orcamento;
    $name = $_GET['name'] ?? null;
    $date = $_GET['date'] ?? null;
    $orcamentos = Orcamento::query();

    if($name){
        $orcamentos->where('nome', $name);
    }

    if($date){
        $orcamentos->whereDate('created_at', $date);
    }

    $orcamentos = $orcamentos->get();
@endphp
@vite(['resources/sass/home.scss'])

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Listagem de Orçamentos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container mt-5 table-container">
                        <form action="" class="row mb-4">
                            <div class="col-md-4">
                                <input type="text" value="{{$name}}" name="name" class="form-control" placeholder="Nome do cliente">
                            </div>
                            <div class="col-md-4">
                                <input type="date" value="{{$date}}" name="date" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary">Fitlrar</button>
                            </div>
                        </form>
                        <h1>Orçamentos Calculados</h1>
                        @if($orcamentos->isEmpty())
                            <h2><strong>Nenhum orçamento disponível</strong></h2>
                        @else
                            <table class="table table-bordered table-striped table-responsive">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Celular</th>
                                        <th>Instagram</th>
                                        <th>Estado</th>
                                        <th>Cidade</th>
                                        <th>Tipo de Desenho</th>
                                        <th>Local</th>
                                        <th>Largura</th>
                                        <th>Altura</th>
                                        <th>Cicatriz</th>
                                        <th>Remoção</th>
                                        <th>Cores</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orcamentos as $orcamento)
                                        <tr>
                                            <td>{{ $orcamento->nome }}</td>
                                            <td>{{ $orcamento->email }}</td>
                                            <td>{{ $orcamento->celular }}</td>
                                            <td>{{ $orcamento->instagram }}</td>
                                            <td>{{ $orcamento->estado }}</td>
                                            <td>{{ $orcamento->cidade }}</td>
                                            <td>{{ $orcamento->tipo_desenho }}</td>
                                            <td>{{ $orcamento->local }}</td>
                                            <td>{{ $orcamento->largura }}</td>
                                            <td>{{ $orcamento->altura }}</td>
                                            <td>{{ $orcamento->cicatriz }}</td>
                                            <td>{{ $orcamento->remocao }}</td>
                                            <td>{{ $orcamento->cores }}</td>
                                            <td>R$ {{ number_format($orcamento->valor, 2, ',', '.') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
