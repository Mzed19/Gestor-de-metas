<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://bulma.io/vendor/fontawesome-free-5.15.2-web/css/all.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <title>AdmCreate</title>
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
        <h1 id="title2">Administradores</h1>
    </div>
    <div>
    @if(count($administradores) == 0)
                Nenhum administrador informado
            @else

                @foreach ($administradores as $administrador)
            <div id="div05">
                <div id="usersi" class="control">
                   <img id="iconsz" src="/img/Adm.png"> <h6 id="textadm31">{{$administrador->name}}</h6>
                   <a href="/AdmEditScreen/{{$administrador->id}}"><img id="lapis" src="/img/ferramenta-lapis2x.jpg"></a>
                   <a href="/AdmDelete/{{$administrador->id}}"><img id="lixeira" src="/img/lixeira2x.jpg"></a>
                </div>
            </div>


                @endforeach

            @endif

    </div>
    <div id="div10"></div>
    <div id="divop2">
    <a id="link" href="/AdmAdd"><button id="btnmore"><i id="iconmore" class="fas fa-plus fa-2x"></i> </button></a>
    </div>

</body>
</html>
