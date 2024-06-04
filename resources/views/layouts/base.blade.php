<!DOCTYPE html>
<html lang="en"></html>
<head>
  <meta charset="UTF-8">
  <title>Evaluation Team</title>
  <link rel="stylesheet" href="{{URL::asset('css/styles.css')}}">
</head>
<!---Proyecto Final---->
<body>
  <div class="container">
    <header class="header">
      <h1 id="title" class="text-center">How can the Soccer improve their entertainment value</h1>      
    </header>
    @yield('content')
  </div>  
  <div>
    <ul>
        <li><a href="{{route('listar')}}">Listar</a></li>
        <li><a href="{{route('home')}}">Registrar Jugador</a></li>
    </ul>
  </div>
</body>
</html>