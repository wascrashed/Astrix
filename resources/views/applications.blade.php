<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявки</title>

    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/cabinet/bootstrap-grid.css">
    <link rel="stylesheet" href="/css/cabinet/cabinet.css">
    <link rel="stylesheet" href="/css/cabinet/tools.css">
    <link rel="stylesheet" href="/css/cabinet/adaptive.css">

    <link rel="icon" href="/img/favicon.png">
</head>

<body>
<div class="container container-sm">
    <div class="mobile-iconbar">
        <div class="icons">
            <a href="">
                <span class="bx bx-user-circle"></span>
            </a>

            <a href="">
                <span class="bx bx-store"></span>
            </a>

            <a href="">
                <span class="bx bx-buoy"></span>
            </a>

            <a href="">
                <span class="bx bx-briefcase active"></span>
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
                <span class="bx bx-buoy"></span>
            </a>

            <a href="/cabinet/applications">
                <span class="bx bx-briefcase active"></span>
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
                    <a class="mr-15px" href="/">Заявки</a>
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
                <div class="card text-card">
                    <div class="row">
                        <div class="col-lg-7">
                            <h4 class="card-title">
                                Желаешь вступить в команду <a class="text-danger">TYNIX</a>CLOUD?
                            </h4>

                            <p class="tip mt-20px">
                                У тебя есть опыт и ты готов поделится им с нашим проектом? У тебя большая аудитория
                                или ты просто желаешь стать частью нашей семьи? Тогда заполни форму ниже, мы
                                обработаем твою заявку в ближашее время.
                            </p>

                            <button class="btn btn-brand mt-40px">
                                <span class="bx bxs-add-to-queue mr-15px"></span>
                                СОЗДАТЬ ЗАЯВКУ
                            </button>
                        </div>
                        <div class="col-lg-5">
                            <img src="/img/application.png" class="application-img" alt="">
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12">
                <div class="border-top mt-40px">
                    <div class="card appl-card mb-20px">
                        <div class="d-flex card-header">
                            <div class="icon">
                                    <span class="bx bx-time fs-24 text-warning">
                                    </span>
                            </div>
                            <div>
                                <p class="fs-14">
                                    Заявка на должность:
                                </p>
                                <h4 class="card-title mt-5px text-main">
                                    МОДЕРАТОР
                                </h4>
                            </div>
                        </div>

                        <div class="ml-auto mr-auto d-flex">
                            <div class="mr-80px">
                                <p class="fs-14 text-placeholder">
                                    Дата подачи:
                                </p>
                                <h4 class="card-title mt-5px text-main d-flex align-items-center">
                                    <span class="bx bx-calendar fs-16px text-danger mr-10px"></span>
                                    22.01.2021 в 17:56
                                </h4>
                            </div>

                            <div>
                                <p class="fs-14 text-placeholder">
                                    Последний ответ:
                                </p>
                                <h4 class="card-title mt-5px text-main d-flex align-items-center">
                                    <span class="bx bx-message-check fs-16px text-success mr-10px"></span>
                                    22.01.2021 в 17:56
                                </h4>
                            </div>
                        </div>

                        <a href="" class="btn btn-secondary">
                            <span class="bx bx-link-external mr-15px"></span>
                            ОТКРЫТЬ
                        </a>
                    </div>

                    <div class="card appl-card mb-20px">
                        <div class="icon">
                                <span class="bx bx-time fs-24 text-warning">
                                </span>
                        </div>
                        <div>
                            <p class="fs-14">
                                Заявка на должность:
                            </p>
                            <h4 class="card-title mt-5px text-main">
                                МОДЕРАТОР
                            </h4>
                        </div>

                        <div class="ml-auto mr-auto d-flex">
                            <div class="mr-80px">
                                <p class="fs-14 text-placeholder">
                                    Дата подачи:
                                </p>
                                <h4 class="card-title mt-5px text-main d-flex align-items-center">
                                    <span class="bx bx-calendar fs-16px text-danger mr-10px"></span>
                                    22.01.2021 в 17:56
                                </h4>
                            </div>

                            <div>
                                <p class="fs-14 text-placeholder">
                                    Последний ответ:
                                </p>
                                <h4 class="card-title mt-5px text-main d-flex align-items-center">
                                    <span class="bx bx-message-check fs-16px text-success mr-10px"></span>
                                    22.01.2021 в 17:56
                                </h4>
                            </div>
                        </div>

                        <a href="" class="btn btn-secondary">
                            <span class="bx bx-link-external mr-15px"></span>
                            ОТКРЫТЬ
                        </a>
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
