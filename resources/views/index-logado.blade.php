@extends('layouts.app3')

@section('content')
    <div class="container">
        <h1>Mais Vistos</h1>
        <div class="row">
            @foreach ($pacotes as $pacote)
                <div class="col-sm" style="margin-left: 10px; padding-bottom: 10px;">
                    <div class="card " style="border-radius: 22px;">
                        <img class="card-img-top" style="border-radius: 22px 22px 0px 0px;"
                            src="{{ url('assets/img/fundo.jpg') }}" alt="Card image cap">
                        <div class="card-body" style="padding: 0.5em">
                            <p>Pacotes Para</p>
                            @foreach ($pontos as $ponto)
                                @if ($ponto->cidade->id == $pacote->pontoturistico->cidade_id)
                                    @if ($anterior == $ponto->cidade->nomeCidade && $anteriorID == $pacote->pontoturistico->id)
                                        @break
                                    @else
                                        @php $anterior=$ponto->cidade->nomeCidade @endphp
                                        @php $anteriorID=$pacote->pontoturistico->id @endphp
                                        {{ $ponto->cidade->nomeCidade }}
                                    @endif
                                @endif
                            @endforeach
                            <h5 class="card-title">{{ $pacote->pontoturistico->nomePontoTuristico }}</h5>
                            <strong> em até 12x</strong>
                            <h3>R${{ $pacote->preco }}
                                <a href="{{ route('minhascompras.edit',$pacote->id) }}" methot="POST" class="link-compra">
                                    <i data-feather="shopping-cart"></i>
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <h1>Para você</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="border-radius: 22px">
                    <img class="card-img-top" style="border-radius: 22px 22px 0px 0px;"
                        src="{{ url('assets/img/fundo.jpg') }}" alt="Card image cap">
                    <div class="card-body" style="padding: 0.5em">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <strong> em até 12x</strong>
                        <h3>R$100,00</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
