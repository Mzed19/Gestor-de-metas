<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://bulma.io/vendor/fontawesome-free-5.15.2-web/css/all.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <title>SellerCreate</title>
</head>
<body>
    <div>
   <a href="/Options"><button id="btnmore2"><img id="imgedit" src="/img/Seta2x.jpg" alt=""></button></a>
    </div>
    <div>
        <img src="/img/logo.png" alt="">
    </div>
    <div id="input"></div>
    <div id="input">
        <h1 id="title2">Vendedores</h1>
    </div>
    <div id="div10">
        @if(count($vendedores) == 0)
            Nenhum vendedor(a) informado
        @else

            @foreach ($vendedores as $vendedore)
            <div id="div05">
                <div id="usersi" class="control">
                   <img id="iconsz" src="/img/User.png"><h6 id="textadm31"> {{$vendedore->name}}</h6>
                   <a href="/SellerEditScreen/{{$vendedore->id}}"><img id="lapis" src="/img/ferramenta-lapis2x.jpg"></a>
                   <a href="/SellerDelete/{{$vendedore->id}}"><img id="lixeira" src="/img/lixeira2x.jpg"></a>
                </div>
            </div>

            @endforeach

        @endif

    </div>
    <div id="input"></div>
    <div id="divop2">
    <button id="btnmore"><a id="link" href="/SellerAdd"><i id="iconmore" class="fas fa-plus fa-2x"></i></a> </button>
    </div>
</body>
</html>
