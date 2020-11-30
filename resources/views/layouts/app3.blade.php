<!DOCTYPE html> 
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia</title>
    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!-- icon -->
    <link rel="icon" type="image/png" href="{{url('assets/img/favicon.png')}}">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1 class="oculta">Agencia Viagens</h1>

            <nav class="menu row">
                <div class="logo">
                    <a href="{{route('indexlogado')}}">
                        <img src="{{url('assets/img/logo.png')}}" alt="Logo Agencia" class="logo">
                    </a>
                </div>
                <ul>
                    <li>
                        <a href="{{route('indexlogado')}}">Home</a>
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
                    <div class="dropdown user-dash">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{url('assets/img/user-image.png')}}" alt="Mike" class="user-dashboard">
                        <p class="user-name"> {{Auth::user()->name}}</p>
                            <span class="caret"></span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{route('minhascompras.index')}}">Minhas Compras</a>
                        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                        </div>
			        </div>
                </ul>
                
            </nav>

            
            
        </div>        
    </header>
    <!-- final do header -->
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