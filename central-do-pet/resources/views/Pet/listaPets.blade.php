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
            <a class="nav-link" href="listar/funcionarios">Equipe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ajuda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
        </ul>
      </div>
</nav>

  </head>

  <body>


</div>
  @auth
</div>
<div class='jumbotron'>
<h1>Lista de Pets </h1>
    @if(trim(Auth::user()->funcao) != trim("Tutor") and trim(Auth::user()->funcao) != trim("Médico Veterinário"))
<p class="lead">Página com todos os pets do sistema. O usuário pode inserir, editar e visualizar as informações de cada um.</p>
<a type="button" class="btn btn-primary" href="/adicionar/pet">Adicionar novo pet</a>

        <br>
        <br>
        <a href="/listar/pets/" class="btn btn-primary">Todos</a>
        @foreach($especies as $e)
            <a href="/listar/pets/{{$e}}" class="btn btn-primary">{{$e}}</a>
        @endforeach

</div>
        <div class="container">
        <div class="row">

      @foreach ($pets as $pet)
          <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="{{\Illuminate\Support\Facades\URL::to('fotos/pets/' . $pet->image )}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $pet->nome }}</h5>
              <p class="card-text">RG do Pet: {{ $pet->rga }} </p>
              <p class="card-text">Espécie: {{ $pet->especie }}</p>
              <a href="/view/pet/{{ $pet->id }}" class="btn btn-primary">Visualizar</a>
              <a href="/editar/pet/{{ $pet->id }}" class="btn btn-primary">Editar</a>
              <a href="/remover/pet/{{ $pet->id }}" class="btn btn-primary">Remover</a>
            </div>
          </div>

      @endforeach
    </div>
  </div>
    @endif

    @if(trim(Auth::user()->funcao) == trim("Tutor") or trim(Auth::user()->funcao) == trim("Médico Veterinário") )
        <p class="lead">Página com todos os pets do sistema. O usuário pode inserir, editar e visualizar as informações de cada um.</p>
        <a type="button" class="btn btn-primary" href="/adicionar/pet">Adicionar novo pet</a>

        <br>
        <br>
        <a href="/listar/pets/" class="btn btn-primary">Todos</a>
        @foreach($especies as $e)
            <a href="/listar/pets/{{$e}}" class="btn btn-primary">{{$e}}</a>
        @endforeach

        <div class="container">
            <div class="row">
                @foreach ($pets as $pet)
                    @if($pet->dono_id == Auth::user()->id)
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="{{\Illuminate\Support\Facades\URL::to('fotos/pets/' . $pet->image )}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $pet->nome }}</h5>
                            <p class="card-text">RG do Pet: {{ $pet->rga }} </p>
                            <p class="card-text">Espécie: {{ $pet->especie }}</p>
                            <a href="/view/pet/{{ $pet->id }}" class="btn btn-primary">Visualizar</a>
                            <a href="/editar/pet/{{ $pet->id }}" class="btn btn-primary">Editar</a>
                            <a href="/remover/pet/{{ $pet->id }}" class="btn btn-primary">Remover</a>
                        </div>
                    </div>
                    @endif

                @endforeach
            </div>
        </div>
    @endif
  @endauth

  @guest

</div>
<div class='jumbotron'>

<h1>Pets disponíveis para adoção <img src="https://img.icons8.com/ios-glyphs/30/000000/pet-commands-stay.png"/></h1>
<p class="lead">Confira cada Pet disponível para adoção! É possível ver suas informações e necessidades especiais!</p>

    <br>
    <br>
    <a href="/listar/pets/" class="btn btn-primary">Todos</a>
    @foreach($especies as $e)
        <a href="/listar/pets/{{$e}}" class="btn btn-primary">{{$e}}</a>
    @endforeach
</div>

  <div class="container">
    <div class="row">
  @foreach ($pets as $pet)
    @if ($pet->adotado==0)
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="{{\Illuminate\Support\Facades\URL::to('fotos/pets/' . $pet->image )}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $pet->nome }}</h5>
          <p class="card-text">RG do Pet: {{ $pet->rga }} </p>
            <p class="card-text">Espécie: {{ $pet->especie }}</p>

            <a href="/view/pet/{{ $pet->id }}" class="btn btn-primary">Visualizar</a>

</div>      </div>
      @endif
  @endforeach

</div>
  @endguest
  </body>
</html>
