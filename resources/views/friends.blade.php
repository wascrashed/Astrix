<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мои друзья</title>

    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('/css/cabinet/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('/css/cabinet/cabinet.css')}}">
    <link rel="stylesheet" href="{{asset('/css/cabinet/tools.css')}}">
    <link rel="stylesheet" href="{{asset('/css/cabinet/adaptive.css')}}">

    <link rel="stylesheet" href="{{asset('/css/main.css')}}">


    <link rel="icon" href="{{asset('/img/favicon.png')}}">
</head>

<body>
<div class="container">
    <div class="mobile-iconbar">
        <div class="icons">
            <a href="/cabinet">
                <span class="bx bx-user-circle active"></span>
            </a>

            <a href="">
                <span class="bx bx-store"></span>
            </a>

            <a href="/cabinet/stats">
                <span class="bx bx-buoy"></span>
            </a>

            <a href="/cabinet/applications">
                <span class="bx bx-briefcase"></span>
            </a>

        </div>
    </div>

    <div class="iconbar">
        <img src="/img/logo.png" alt="">

        <div class="icons">
            <a href="/cabinet">
                <span class="bx bx-user-circle active"></span>
            </a>

            <a href="">
                <span class="bx bx-store"></span>
            </a>

            <a href="/cabinet/stats">
                <span class="bx bx-buoy"></span>
            </a>

            <a href="">
                <span class="bx bx-briefcase"></span>
            </a>

        </div>

        <a class="mt-auto" href="">
            <span class="bx bx-exit text-placeholder fs-24"></span>
        </a>
    </div>

    <div class="content">
        <header class="d-flex align-items-center">
            <div>
                <h1>Привет, <b>{{ $user->getName() }}</b></h1>

                <div class="d-flex breadcrumb">
                    <a class="mr-15px" href="/">Главная</a>
                    <span class="bx bx-chevron-right mr-15px"></span>
                    <a class="mr-20px" href="/">Мои друзья</a>
                </div>
            </div>
            <div class="ml-auto d-flex align-items-center">
                <a class="mr-30px" href="/auth/logout">
                    <span class="bx bx-exit text-placeholder fs-24"></span>
                </a>
                <img src="https://minotar.net/avatar/{{ $user->getName() }}.png" alt="">
            </div>
        </header>

        <div class="row mt-55px">
            <div class="container">
                <div class="donaters d-flex mt-50px">
                    <div class="donater scale">
                        <div class="img">
                            <img src="{{asset('img/default.png')}}" alt="">
                        </div>
                        <p>User</p>
                    </div>
                    <div class="donater scale" style="margin-left: 10px">
                        <div class="img">
                            <img src="{{asset('img/default.png')}}" alt="">
                        </div>
                        <p>User</p>
                    </div>
                    <div class="donater scale" style="margin-left: 10px">
                        <div class="img">
                            <img src="{{asset('img/default.png')}}" alt="">
                        </div>
                        <p>User</p>
                    </div>
                    <div class="donater scale" style="margin-left: 10px">
                        <div class="img">
                            <img src="{{asset('img/default.png')}}" alt="">
                        </div>
                        <p>User</p>
                    </div>
                    <div class="donater scale" style="margin-left: 10px">
                        <div class="img">
                            <img src="{{asset('img/default.png')}}" alt="">
                        </div>
                        <p>User</p>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-40px mb-40px">
                Copyright © 2022 AstrixMC. Дизайн от <a href="//vk.com/frotterr">VoltMX</a>
            </div>
        </div>
    </div>
</div>
</body>
