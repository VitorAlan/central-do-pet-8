<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Nav bar -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #E14B56;">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/listar/pets">Adotar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/consultar">Consultar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/listar/funcionarios">Equipe</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/paineladm">Painel de usuário</a>
        </li>
          <li class="nav-item">
              <a class="nav-link" href="/listar/Meuspets">Meus Pets</a>
          </li>


      </ul>

      <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
    </div>
</nav>
</head>

<body>
  <div class='jumbotron'>

  <h1>Painel de Administrador <img src="https://img.icons8.com/ios/50/000000/administrator-male--v1.png"/></h1>
  <p class="lead">Confira as ações possíveis abaixo!</p>


  </div>

<div class='container'>
  @if(trim(Auth::user()->funcao) == trim("Administrador"))
  <a type="button" class="btn btn-primary btn-lg btn-block" href="/listar/users/">Usuários</a>
  <a type="button" class="btn btn-primary btn-lg btn-block" href="/listar/pets/">Pets</a>
  <a type="button" class="btn btn-primary btn-lg btn-block" href="/listar/historicos/">Históricos médicos</a>
  <a type="button" class="btn btn-primary btn-lg btn-block" href="/listar/doencas/">Doenças</a>
  <a type="button" class="btn btn-primary btn-lg btn-block" href="/listar/vacinas/">Vacinas</a>
  <a type="button" class="btn btn-primary btn-lg btn-block" href="/listar/transfusaos/">Transfussões</a>
  @endif

  @if(trim(Auth::user()->funcao) == trim("Funcionário"))
  <a type="button" class="btn btn-primary btn-lg btn-block" href="/listar/users/">Usuários</a>
  <a type="button" class="btn btn-primary btn-lg btn-block" href="/listar/pets/">Pets</a>
  <a type="button" class="btn btn-primary btn-lg btn-block" href="/listar/historicos/">Históricos médicos</a>
  <a type="button" class="btn btn-primary btn-lg btn-block" href="/listar/doencas/">Doenças</a>
  <a type="button" class="btn btn-primary btn-lg btn-block" href="/listar/vacinas/">Vacinas</a>
  <a type="button" class="btn btn-primary btn-lg btn-block" href="/listar/transfusaos/">Transfussões</a>
  @endif



  @if(trim(Auth::user()->funcao) == trim("Médico Veterinário"))
  <a type="button" class="btn btn-primary btn-lg btn-block" href="/listar/historicos/">Históricos médicos</a>
  <a type="button" class="btn btn-primary btn-lg btn-block" href="/listar/doencas/">Doenças</a>
  <a type="button" class="btn btn-primary btn-lg btn-block" href="/listar/vacinas/">Vacinas</a>
  <a type="button" class="btn btn-primary btn-lg btn-block" href="/listar/transfusaos/">Transfussões</a>
  @endif

  @if(trim(Auth::user()->funcao) == trim("ONG"))
  <a type="button" class="btn btn-primary btn-lg btn-block" href="/listar/pets/">Pets</a>
  @endif

  @if(trim(Auth::user()->funcao) == trim("Tutor"))
  <a type="button" class="btn btn-primary btn-lg btn-block" href="/listar/pets/">Pets</a>
  @endif

</div>
</body>
</html>
