<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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
        <a href="/Start"><button id="btnmore2"><img id="imgedit" src="/img/Seta2x.jpg" alt=""></button></a>
    </div>
<div id="divop2">
    <img src="/img/logo.png" alt="">
</div>
<div id="input"></div>
<div id="input">
    <h1 id="title1">METAS</h1>
</div>

    <div id="div10">

                @if(count($metas) == 0)
                    Nenhuma meta informada
                @else

                    @foreach ($metas as $meta)
                    <form action="/Archieved" method="post">
                        @csrf
                        <div id="div05">
                            <div id="usersi" class="control">

                                <h6 id="textadm">{{$meta->name}}:</h6><input class="input is-hovered" placeholder="Valor..." id="goalinput" type="number">

                            </div>
                        </div>
                    </form>
                    @endforeach

                @endif

</div>

<div id="divop1">

</div>
<div id="divop2">
</div>
</body>
</html>
