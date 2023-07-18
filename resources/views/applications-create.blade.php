<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создать заявку</title>

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
                <span class="bx bx-buoy"></span>
            </a>

            <a href="/cabinet/applications">
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
                    <a class="mr-15px" href="/">Создать заявку</a>
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
                <div class="card text-card form-card">
                    <h4 class="card-title">
                        Создать заявку
                    </h4>

                    <p class="tip mt-20px">
                        Заполни форму ниже, ответь на приведенные вопросы и ожидай ответа. Мы постараемся
                        рассмотреть твою заявку как можно скорее.
                    </p>

                    <form action="" class="row mt-30px">
                        <div class="col-12 overflow-x">
                            <div class="input-group">
                                <label for="">Выбери должность</label>
                                <div class="tabs width-fit mt-20px">
                                    <div class="tab active">
                                        МОДЕРАТОР
                                    </div>
                                    <div class="tab">
                                        YOUTUBE
                                    </div>
                                    <div class="tab">
                                        АДМИНИСТРАТОР
                                    </div>
                                    <div class="tab">
                                        РАЗРАБОТЧИК
                                    </div>
                                    <div class="tab">
                                        ДРУГОЕ
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-12">
                            <div class="row mt-25px">
                                <div class="col-lg-6 mb-20px">
                                    <div class="input-group">
                                        <label for="">Считаешь ли ты проект перспективным?</label>
                                        <textarea class="textarea mt-15px"
                                                  placeholder="Укажи свой ответ здесь."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-20px">
                                    <div class="input-group">
                                        <label for="">Считаешь ли ты проект перспективным?</label>
                                        <textarea class="textarea mt-15px"
                                                  placeholder="Укажи свой ответ здесь."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-20px">
                                    <div class="input-group">
                                        <label for="">Считаешь ли ты проект перспективным?</label>
                                        <textarea class="textarea mt-15px"
                                                  placeholder="Укажи свой ответ здесь."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-20px">
                                    <div class="input-group">
                                        <label for="">Считаешь ли ты проект перспективным?</label>
                                        <textarea class="textarea mt-15px"
                                                  placeholder="Укажи свой ответ здесь."></textarea>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-brand mt-35px mr-20px">
                                <span class="bx bx-check-double mr-15px"></span>
                                ОТПРАВИТЬ
                            </button>
                        </div>
                    </form>
                </div>

            </div>



            <div class="col-12 mt-40px mb-40px">
                Copyright © 2022 TynixCloud. Дизайн от <a href="//vk.com/frotterr">Frotter</a>
            </div>
        </div>
    </div>
</div>
</body>
