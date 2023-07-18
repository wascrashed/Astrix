<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Моя Статистика</title>

    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/css/cabinet/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('/css/cabinet/cabinet.css')}}">
    <link rel="stylesheet" href="{{asset('/css/cabinet/tools.css')}}">
    <link rel="stylesheet" href="{{asset('/css/cabinet/adaptive.css')}}">

    <link rel="icon" href="{{asset('/img/favicon.png')}}">
</head>

<body>
<div class="container container-vsm">
    <div class="mobile-iconbar">
        <div class="icons">
            <a href="/cabinet">
                <span class="bx bx-user-circle"></span>
            </a>

            <a href="">
                <span class="bx bx-store"></span>
            </a>

            <a href="/cabinet/stats">
                <span class="bx bx-buoy active"></span>
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
                <span class="bx bx-user-circle"></span>
            </a>

            <a href="">
                <span class="bx bx-store"></span>
            </a>

            <a href="/cabinet/stats">
                <span class="bx bx-buoy active"></span>
            </a>

            <a href="/cabinet/applications">
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
                    <a class="mr-15px" href="/">Статистика</a>
                </div>
            </div>
            <div class="ml-auto d-flex align-items-center">
                <a class="mr-30px" href="">
                    <span class="bx bx-exit text-placeholder fs-24"></span>
                </a>
                <img src="https://minotar.net/avatar/{{ $user->getName() }}.png" alt="">
            </div>
        </header>

        <div class="row mt-55px">
            <div class="col-12">
                <div class="card stats-card">
                    <div class="sidebar active">
                        <h4 class="card-title">
                            Выбери режим
                        </h4>

                        <div class="mt-40px">
                            <div class="gamemode">
                                <img src="/img/survival.png" alt="">
                                <p>Grief</p>
                            </div>

                            <div class="gamemode">
                                <img src="/img/skywars.png" alt="">
                                <p>SkyWars</p>
                            </div>

                            <div class="gamemode">
                                <img src="/img/grief.png" alt="">
                                <p>Grief</p>
                            </div>

                            <div class="gamemode">
                                <img src="/img/anarchy.png" alt="">
                                <p>ArcadeGames</p>
                            </div>

                            <div class="gamemode">
                                <img src="/img/bedwars.png" alt="">
                                <p>BedWars</p>
                            </div>

                            <div class="gamemode">
                                <img src="/img/stick.png" alt="">
                                <p>Duels</p>
                            </div>

                            <div class="gamemode">
                                <img src="/img/gungame.png" alt="">
                                <p>GunGame</p>
                            </div>

                            <div class="gamemode">
                                <img src="/img/survival.png" alt="">
                                <p>OneBlock</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="card-title">
                                    SkyWars
                                </h4>
                                <p class="mt-10px">Статистика режима игры.</p>
                            </div>
                            <span class="bx bx-menu fs-36 d-none ml-auto"></span>
                        </div>

                        <div class="row mt-40px">
                            <div class="col-md-6 mb-25px">
                                <div class="stat">
                                    <span class="bx bx-trophy text-warning"></span>
                                    <div>
                                        <h5 class="text-warning">1321</h5>
                                        <p>Всего побед.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-25px">
                                <div class="stat">
                                    <span class="bx bxs-skull text-danger"></span>
                                    <div>
                                        <h5 class="text-danger">937</h5>
                                        <p>Всего поражений.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-20px">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <span class="bx bx-stats mr-15px title-icon"></span>
                                    <h5 class="card-title">Прогресс уровня</h5>
                                </div>


                                <p class="fs-14 mt-15px text-placeholder">1443/3000 XP</p>
                                <div class="online mt-5px">
                                    <div class="online-path" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-40px">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <span class="bx bx-list-check mr-15px title-icon"></span>
                                    <h5 class="card-title">Другая статистика</h5>
                                </div>

                                <div class="row mt-25px">
                                    <div class="col-md-6 d-flex mb-15px">
                                        <p class="fw-600 mr-15px">Solo убийств:</p>
                                        <p class="fw-600 text-danger">5</p>
                                    </div>
                                    <div class="col-md-6 d-flex mb-15px">
                                        <p class="fw-600 mr-15px">Doubles убийств:</p>
                                        <p class="fw-600 text-danger">10</p>
                                    </div>

                                    <div class="col-md-6 d-flex mb-15px">
                                        <p class="fw-600 mr-15px">Solo побед:</p>
                                        <p class="fw-600 text-danger">2</p>
                                    </div>
                                    <div class="col-md-6 d-flex mb-15px">
                                        <p class="fw-600 mr-15px">Doubles побед:</p>
                                        <p class="fw-600 text-danger">3</p>
                                    </div>

                                    <div class="col-md-6 d-flex mb-15px">
                                        <p class="fw-600 mr-15px">Ranked побед:</p>
                                        <p class="fw-600 text-danger">1</p>
                                    </div>
                                    <div class="col-md-6 d-flex mb-15px">
                                        <p class="fw-600 mr-15px">Ranked рейтинг:</p>
                                        <p class="fw-600 text-danger">20</p>
                                    </div>

                                    <div class="col-md-6 d-flex mb-15px">
                                        <p class="fw-600 mr-15px">Ranked девизия:</p>
                                        <p class="fw-600 text-danger">-</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-40px mb-40px">
                Copyright © 2022 TynixCloud. Дизайн от <a href="//vk.com/froterr">Frotter</a>
            </div>
        </div>
    </div>
</div>
</body>
