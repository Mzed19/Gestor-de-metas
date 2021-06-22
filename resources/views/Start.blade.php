<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://bulma.io/vendor/fontawesome-free-5.15.2-web/css/all.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <title>Start</title>
</head>
<body>

    <div class="container" id="div10">
        <div class="column">
            <img class="image" src="/img/logo.png" alt="">
            <img class="image" src="/img/login.png" alt="">
        <div id="input"></div>
            <div class="field">
                <form action="/Start" method="post">
                @csrf
                <p class="control has-icons-left has-icons-right">
                    <input name="email" class="input" type="email" placeholder="Email">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </p>
            </div>
            <div class="field">
                <p class="control has-icons-left">
                    <input name="password" class="input" type="password" placeholder="Password" />
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                </p>

            <div id="divop1"></div>
                <div>
                    <button id="buttonone" class="button">ENTRAR</button>
                </div>
            </div>
            </form>
        </div>
    </div>

</body>
</html>
