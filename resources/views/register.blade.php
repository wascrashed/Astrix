<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>AstrixMC | Авторизация</title>

    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/css/dependency.css')}}">
    <link rel="stylesheet" href="{{asset('/css/cabinet/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('/css/cabinet/cabinet.css')}}">
    <link rel="stylesheet" href="{{asset('/css/cabinet/tools.css')}}">
    <link rel="stylesheet" href="{{asset('/css/cabinet/adaptive.css')}}">

    <link rel="icon" href="{{asset('/img/favicon.png')}}">
</head>

<body>
<div class="container">
    <header>
        <div id="mobile-menu" class="">
            <button id="close-mobile" class="flat ml-auto cursor-pointer">
                <span class="bx bx-x fs-36 text-regular"></span>
            </button>
            <ul class="mobile-links">
                <li>
                    <a class="active" href="/">Главная</a>
                </li>
                <li>
                    <a href="https://vk.com/playastrix">Группа ВК</a>
                </li>
                <li>
                    <a href="#">Discord</a>
                </li>
                <li>
                    <a href="#">Тех. поддержка</a>
                </li>
            </ul>
        </div>
        <div class="logo d-flex align-items-center">
            <h2><span class="text-danger">ASTRIX</span>MC</h2>
        </div>
        <ul class="links">
            <li class="link active">
                <a href="/">Главная</a>
            </li>
            <li class="link"><a href="https://forum.tynixcloud.ru/">Форум</a></li>
            <li class="link"><a href="https://vk.com/tynixcloud">Группа ВК</a></li>
            <li class="link"><a href="#">Discord</a></li>
            <li class="link"><a href="#">Правила</a></li>
        </ul>
        <div class="d-flex">
            <button class="mobile-burger" id="mobile-btn">
                <img src="img/burger.svg" alt="">
            </button>
            <a href="/login" class="btn btn-brand">
                <span class="bx bx-exit mr-15px"></span>
                Личный кабинет
            </a>
        </div>
    </header>
</div>
<section class="login">
    <div class="login-card">
        <div class="card-header">
            <div>
                <h1><span class="text-danger">ASTRIX</span>MC</h1>
                <p>Личный кабинет игрока</p>
            </div>
        </div>
        <div class="card-body mt-30px">
            <p class="tip">
                Введи <span class="text-danger">логин</span> и <span class="text-danger">пароль</span>, который ты
                используешь <span class="text-danger">на сервере</span>, чтобы войти в личный кабинет.
            </p>

            <form id="auth__form" class="mt-40px">
                <div class="input-group">
                    <label for="">Никнейм</label>
                    <div class="input-prepend">
                        <span class="bx bx-user-circle"></span>
                        <input id="nickname" type="text" class="input" placeholder="Введи ник на сервере" />
                    </div>
                </div>

                <div class="input-group mt-30px">
                    <label for="">Пароль</label>
                    <div class="input-prepend">
                        <span class="bx bx-lock"></span>
                        <input id="password" type="password" class="input" placeholder="Введи пароль от аккаунта" />
                    </div>
                </div>

                <div class="d-flex align-items-center mt-35px">
                    <img class="mr-15px" src="/img/checkbox.svg" alt="" />
                    <span>Запомнить меня</span>
                </div>

                <button class="btn btn-brand btn-block mt-50px">
                    <span class="bx bx-check-double mr-15px"></span>
                    ВОЙТИ В КАБИНЕТ
                </button>
            </form>
        </div>
    </div>
</section>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('js/app.js')}}"></script>
</html>
