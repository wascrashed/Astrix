<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой профиль</title>

    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/css/cabinet/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('/css/cabinet/cabinet.css')}}">
    <link rel="stylesheet" href="{{asset('/css/cabinet/tools.css')}}">
    <link rel="stylesheet" href="{{asset('/css/cabinet/adaptive.css')}}">

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
                    <a class="mr-20px" href="/">Мой профиль</a>
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
            <div class="col-lg-5">
                <div class="card profile-card mb-35px">
                    <div class="profile-info d-flex align-items-center">
                        <div class="img-bg" style="background: linear-gradient(90deg, {{$group->getColor()}} 0%, {{$group->getColor()}} 100%);">
                            <img src="https://minotar.net/avatar/{{ $user->getName() }}.png" alt="">
                        </div>
                        <div class="profile-text">

                                <h2>{{ $user->getName() }}</h2>

                            <p class="mt-5px">{{$user->getLastDate()}}</p>
                            <div class="d-flex mt-15px align-items-center">
                                <a href="">
                                    <img class="mr-20px" src="/img/vk.svg">
                                </a>
                                <a href="">
                                    <img class="mr-20px" src="/img/discord.svg">
                                </a>
                                <a href="">
                                    <img class="mr-20px" src="/img/youtube.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row info">
                            <div class="col-12 col-md-4 text-align-left">
                                <p>Привилегия</p>
                                <h3 style="color: {{ $group->getColor() }}">{{ $group->getName() }}</h3>
                            </div>

                            <div class="col-12 col-md-4 text-align-center">
                                <p>Монеты</p>
                                <h3 class="d-flex align-items-center justify-content-center">
                                    {{ $user->getCoins() }}
                                    <img src="/img/coin.svg" class="ml-15px" alt="">
                                </h3>
                            </div>

                            <div class="col-12 col-md-4 text-align-right">
                                <p>Астры</p>
                                <h3 class="d-flex align-items-center f-end">
                                    {{ $user->getGolds() }}
                                    <img src="/img/mineral.svg" alt="" class="ml-15px">
                                </h3>
                            </div>

                        </div>

                        <div class="mt-40px add-info">
                            <div class="row w-100 align-items-center mt-15px">
                                <div class="col-3 col-md-7">
                                    <div class="d-flex align-items-center">
                                        <img src="/img/id.svg" width="25" class="mr-15px" alt="">
                                        <p>Ваш уникальный ID: </p>
                                    </div>
                                </div>
                                <div class="col-9 col-md-5 text-align-right">
                                    <b>{{ $user->getID() }}</b>
                                </div>
                            </div>

                            <div class="row w-100 align-items-center mt-15px">
                                <div class="col-3 col-md-7">
                                    <div class="d-flex align-items-center">
                                        <img src="/img/medal.svg" width="25" class="mr-15px" alt="">
                                        <p>Уровень: </p>
                                    </div>
                                </div>
                                <div class="col-9 col-md-5 text-align-right">
                                    <b>{{ $user->getLevel() }}</b>
                                </div>
                            </div>

                            <div class="row w-100 align-items-center">
                                <div class="col-5">
                                    <div class="d-flex align-items-center">
                                        <img src="/img/medal.svg" class="mr-15px" alt="">
                                        <p>Опыт: </p>
                                    </div>
                                </div>
                                <div class="col-7 text-align-right">
                                    <b><span class="text-danger">{{ $user->getExperience() }}</span>/{{ $user->getMaxExperience() }} XP</b>
                                </div>
                            </div>

                            <div class="row w-100 align-items-center mt-15px">
                                <div class="col-3 col-md-7">
                                    <div class="d-flex align-items-center">
                                        <img src="/img/calendar.svg" class="mr-15px" alt="">
                                        <p>Дата регистрации: </p>
                                    </div>
                                </div>
                                <div class="col-9 col-md-5 text-align-right">
                                    <b>{{ $user->getRegisterDate() }}</b>
                                </div>
                            </div>
                        </div>

                        <a href="/#shop" class="btn btn-lg btn-brand btn-block mt-60px">
                            <span class="bx bx-store mr-15px"></span>
                            ПЕРЕЙТИ В МАГАЗИН
                        </a>
                    </div>
                </div>

                <div class="card mb-35px">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="d-flex align-items-center">
                                <span class="bx bx-list-check mr-15px"></span>
                                <h4 class="card-title">Логи авторизации</h4>
                            </div>
                            <p class="mt-15px">
                                Список последних попыток входа в аккаунт
                            </p>
                        </div>

                        <div class="table mt-35px overflow-x">
                            <div class="table-item">
                                <p class="w-100px">
                                    127.0.0.1
                                </p>
                                <p class="w-230px">17.06.2020 в 13:08</p>
                                <div class="ml-auto table-badge badge-success">
                                    УСПЕШНО
                                </div>
                            </div>

                            <div class="table-item">
                                <p class="w-100px">
                                    127.0.0.1
                                </p>
                                <p class="w-230px">17.06.2020 в 13:08</p>
                                <div class="ml-auto table-badge badge-success">
                                    УСПЕШНО
                                </div>
                            </div>

                            <div class="table-item">
                                <p class="w-100px">
                                    127.0.0.1
                                </p>
                                <p class="w-230px">17.06.2020 в 13:08</p>
                                <div class="ml-auto table-badge badge-danger">
                                    ОШИБКА
                                </div>
                            </div>

                            <div class="table-item">
                                <p class="w-100px">
                                    127.0.0.1
                                </p>
                                <p class="w-230px">17.06.2020 в 13:08</p>
                                <div class="ml-auto table-badge badge-success">
                                    УСПЕШНО
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-7">
                <div class="card mb-35px">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="d-flex align-items-center">
                                <span class="bx bx-store mr-15px"></span>
                                <h4 class="card-title">Последние покупки</h4>
                            </div>
                            <p class="mt-15px">
                                Список транзакций на вашем аккаунте.
                            </p>
                        </div>

                        <div class="overflow-x">
                            <div class="table-header mt-35px d-flex">
                                <div class="d-flex align-items-center" style="min-width: 115px;">
                                    <span class="bx bx-hash mr-15px"></span> ID
                                </div>

                                <div class="d-flex align-items-center" style="min-width: 170px;">
                                    <span class="bx bx-cart mr-15px"></span> ТОВАР
                                </div>

                                <div class="d-flex align-items-center" style="min-width: 160px;">
                                    <span class="bx bx-dollar-circle mr-15px"></span> ЦЕНА
                                </div>

                                <div class="d-flex align-items-center">
                                    <span class="bx bx-calendar mr-15px"></span> ДАТА
                                </div>
                            </div>

                            <div class="mt-25px d-flex good-table">
                                <div class="table-item" style="min-width: 115px;">
                                    <div class="good-icon">
                                        <img src="/img/gold.png" alt="">
                                    </div>
                                </div>

                                <div class="table-item" style="min-width: 170px;">
                                    <h5 class="good-title">GOLD</h5>
                                </div>

                                <div class="table-item" style="min-width: 170px;">
                                    <span class="text-danger">300 ₽</span>
                                </div>

                                <div class="table-item" style="min-width: 170px;">
                                    21.01.2021 в 16:17
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="card mb-35px">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="d-flex align-items-center">
                                <span class="bx bx-cog mr-15px"></span>
                                <h4 class="card-title">Настройки аккаунта</h4>
                            </div>
                            <p class="mt-15px">
                                Смена пароля и привязка соц. сетей
                            </p>
                        </div>

                        <div class="row mt-45px">
                            <div class="col-md-12 mb-25px">
                                <div class="input-group">
                                    <label for="">Старый пароль</label>
                                    <div class="input-prepend">
                                        <span class="bx bx-lock-open"></span>
                                        <input type="password" class="input" placeholder="Введи старый пароль" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-25px">
                                <div class="input-group">
                                    <label for="">Новый пароль</label>
                                    <div class="input-prepend">
                                        <span class="bx bx-lock"></span>
                                        <input type="password" class="input" placeholder="Введи новый пароль" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-25px">
                                <div class="input-group">
                                    <label for="">Повтори пароль</label>
                                    <div class="input-prepend">
                                        <span class="bx bx-lock"></span>
                                        <input type="password" class="input" placeholder="Повтори новый пароль" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex mb-20px card-btns">
                            <button class="btn btn-brand mt-30px mr-20px">
                                <span class="bx bx-check-double mr-15px"></span>
                                СОХРАНИТЬ
                            </button>

                            <button class="btn btn-secondary mt-30px">
                                <span class="bx bx_add_box mr-15px"></span>
                                ДОБАВИТЬ СОЦ. СЕТЬ
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 mt-40px mb-40px">
                Copyright © 2022 TynixCloud. Дизайн от <a href="//vk.com/frotterr">Frotter</a>
            </div>
        </div>
    </div>
</div>
</body>
