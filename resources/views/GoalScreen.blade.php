<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://bulma.io/vendor/fontawesome-free-5.15.2-web/css/all.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <title>GoalScreen</title>
</head>
<body>

<div>
    <button id="btnmore2"><a href="/Options"><img id="imgedit" src="/img/Seta2x.jpg" alt=""></a></button>
</div>
<div id="divop2">
    <img src="/img/logo.png" alt="">
</div>
<div id="input"></div>
<div id="input">
    <h1 id="title1">METAS</h1>
</div>
<div id="div101">

            @if(count($metas) == 0)
                Nenhuma meta informada
            @else

                @foreach ($metas as $meta)
                <div id="div05">
                    <div id="usersi" class="control">
                        <h6 id="textadm">{{$meta->name}}: {{$meta->value}}</h6> <h6 id="textadm3"></h6>
                        <a href="/GoalEditScreen/{{$meta->id}}"><img id="lapis" src="/img/ferramenta-lapis2x.jpg"></a>
                        <a href="/GoalDelete/{{$meta->id}}"><img id="lixeira" src="/img/lixeira2x.jpg"></a>
                    </div>
                </div>

                @endforeach

            @endif

</div>

<footer class="footer">
<div id="divop2">
    <button id="btnmore"><a id="link" href="/CreateGoalScreen"><i id="iconmore" class="fas fa-plus fa-2x"></i></a></button>
</div>
</footer>
</body>
</html>
