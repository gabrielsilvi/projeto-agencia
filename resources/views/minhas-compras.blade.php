@extends('layouts.app3')

@section('content')
    <div class="container">
        <h1>Minhas Compras</h1>

        <div class="compras">
            <div class="descricao">
                <img class="paisagem" src="{{ url('assets/img/fundo.jpg') }}" alt="Card image cap">
                <div class="localizacao">
                    <ul>
                        <strong>
                            <li>Ponto Turistico, Cidade. <font color="red">20/20/2020</font></li>
                            <li>12x de R$100.00</li>
                        </strong>
                        <h6>Para Sua Viagem:</h6>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </div>
                </ul>
            </div>
        </div>
        <hr class="hr">
        
        <div class="total">
            <h2>Total: R$100.00</h2>
        </div>
    </div>
@endsection