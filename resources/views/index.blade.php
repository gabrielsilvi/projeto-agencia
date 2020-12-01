@extends('layouts.app2')

@section('content')
<div class="container">
  <h1>Mais Vistos</h1> 
  <div class="row">
    
      <div class="col-md-4">
        <div class="card " style="border-radius: 22px">
          <img class="card-img-top" style="border-radius: 22px 22px 0px 0px;"src="{{url('assets/img/fundo.jpg')}}" alt="Card image cap">
          <div class="card-body" style="padding: 0.5em">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <strong> em até 12x</strong>
            <h3>R$1000,00</h3>
          </div>
        </div>
      </div>
  </div>
</div> 
@endsection