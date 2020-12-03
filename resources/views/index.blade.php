@extends('layouts.app2')

@section('content')

    <h1>Mais Vistos</h1>
  

    <div class="container row">
        @foreach ($pontos as $ponto)
            <div class="col-sm" style="margin-left: 10px">
                <div class="card " style="border-radius: 22px;">
                    <img class="card-img-top" style="border-radius: 22px 22px 0px 0px;"
                        src="{{ url('assets/img/fundo.jpg') }}" alt="Card image cap">
                    <div class="card-body" style="padding: 0.5em">
                        <p>Pacotes Para</p>
                        <h5 class="card-title">Cidade Tal</h5>
                        <h5 class="card-title">{{ $ponto->nomePontoTuristico }}</h5>
                        <strong> em até 12x</strong>
                        <h3>R$1000,00</h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
     {{-- {!! $pontos->links() !!} --}}

@endsection
