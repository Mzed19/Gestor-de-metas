<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://bulma.io/vendor/fontawesome-free-5.15.2-web/css/all.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <title>Create Goal Screen</title>
</head>
<body>
<button id="btnmore"><i class="fas fa-arrow-left fa-2x"></i></button>
</div>
<div id="divop2">
    <img src="/img/logo.png" alt="">
</div>
<div id="input">
    <h1 id="title">Editando Meta</h1>
</div>
<div id="div10">
    <form action="/GoalEdit/{{$x->id}}" method="post">
    @csrf

    <div class="field">
        <div class="control">
            <input name="name" class="input" placeholder="{{$x->name}}" required>
        </div>
    </div>
    <div class="field">
        <div class="control">
            <input name="value" class="input" placeholder="{{$x->value}}" required>
        </div>
    </div>
</div>
<div id="divop1">
    <button id="btnmore"><i id="iconmore" class="fas fa-check fa-2x"></i></button>
</div>
</form>
</body>
</html>
