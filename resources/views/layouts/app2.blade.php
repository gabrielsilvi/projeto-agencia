<!DOCTYPE html> 
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia</title>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    ntegrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!-- icon -->
    <link rel="icon" type="image/png" href="{{url('assets/img/favicon.png')}}">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1 class="oculta">Agencia Viagens</h1>

            <div class="logo">
                <a href="{{route('index')}}">
                    <img src="{{url('assets/img/logo.png')}}" alt="Logo Agencia" class="logo">
                </a>
            </div>
            
            <nav class="menu">
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="?page=package">Pacotes</a>
                    </li>
                    <li>
                        <a href="?page=passagens">Passagens</a>
                    </li>
                    <li>
                        <a href="?page=about">Sobre</a>
                    </li>
                </ul>
            </nav>

            <div class="button-login">
                <a href="{{route('login')}}">login/register</a>
            </div>
        </div>        
    </header>
    <!-- final do reader -->
    <section class="slide background-parallax-slide">
        <div class="container text-center ">
            <h1 class="titulo-slide">Agência de Viagens</h1>
            <p class="descricao-slide">Agência de viagens utilizando mecanismo de inteligência artificial para sistema de recomendação</p>
            <a href="" class="btn-saiba-mais">Saiba Mais</a>
        </div>
    </section>
    @yield('content')
    <!-- final section slide -->
    
</body>
</html>