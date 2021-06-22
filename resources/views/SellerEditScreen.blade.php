<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://bulma.io/vendor/fontawesome-free-5.15.2-web/css/all.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <title>AdmEdit</title>
</head>
<body>
    <div>
    <button id="btnmore2"><a href="/Options"><img id="imgedit" src="/img/Seta2x.jpg" alt=""></a></button>
    </div>
    <div>
        <img src="/img/logo.png" alt="">
    </div>
    <div id="input"></div>
    <div id="input">
        <h1 id="title2">Editando Vendedor(a)</h1>
    </div>
    <div id="divop1"></div>
    <div id="divop1">
        <form action="/SellerEdit/{{$user->id}}" method="post">
        @csrf
        <div class="field">
            <input name="name" value="{{$user->name}}" class="input" placeholder="Nome">
        </div>
        <div class="field">
        <div class="control">
            <input name="email" value="{{$user->email}}" class="input" placeholder="E-mail">
        </div>
        </div>


        <div id="divop4"></div>
        <div>
            <button id="btnmore2"><img id="imgedit" src="/img/Untitled-12x.jpg" alt=""></button>
        </div>
    </div>
    </form>
</body>
</html>
