@extends('layouts.app2')

@section('content')

    <h1>Mais Vistos</h1>


    <div class="container row">

        @foreach ($pacotes as $pacote)
            <div class="col-sm" style="margin-left: 10px">
                <div class="card " style="border-radius: 22px;">
                    <img class="card-img-top" style="border-radius: 22px 22px 0px 0px;"
                        src="{{ url('assets/img/fundo.jpg') }}" alt="Card image cap">
                    <div class="card-body" style="padding: 0.5em">
                        <p>Pacotes Para</p>
                        @foreach ($pontos as $ponto)
                            @if ($ponto->cidade->id == $pacote->pontoturistico->cidade_id )
                                @if ($anterior == $ponto->cidade->nomeCidade)
                                    @break
                                @else
                                <?php $anterior=$ponto->cidade->nomeCidade ?>
                                    {{ $ponto->cidade->nomeCidade }}
                                @endif
                            @endif      
                        @endforeach
                        <h5 class="card-title">{{ $pacote->pontoturistico->nomePontoTuristico }}</h5>
                        <strong> em até 12x</strong>
                        <h3>R${{ $pacote->preco }}</h3>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    {{-- {!! $pontos->links() !!} --}}

@endsection

{{-- @foreach ($pontos as $ponto)
    @if ($ponto->cidade->id == $pacote->pontoturistico->cidade_id)
        {{ $ponto->cidade->nomeCidade }}
    @endif
@endforeach --}}
