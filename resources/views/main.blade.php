<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AstrixCloud</title>

    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('/css/tools.css')}}">
    <link rel="stylesheet" href="{{asset('/css/adaptive.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap-grid.css')}}">

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
            <img src="img/logo.png" alt="">
            <h2><span class="text-brand">ASTRIXMC</span></h2>
        </div>
        <ul class="links">
            <li class="link active">
                <a href="/">Главная</a>
            </li>
            <li class="link"><a href="#">Форум</a></li>
            <li class="link"><a href="https://vk.com/playastrix">Группа ВК</a></li>
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
    <section class="main-block">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="mb-25px"><span class="text-brand">ASTRIX</span>MC - СЕТЬ <span class="text-brand">ИГРОВЫХ</span> СЕРВЕРОВ</h1>
                <div class="d-flex mb-25px">
                    <div class="action text-danger">
                        <span class="bx bxs-skull mr-15px"></span>
                        Заходи
                    </div>

                    <div class="action text-success">
                        <span class="bx bx-joystick-alt mr-15px"></span>
                        Играй
                    </div>

                    <div class="action text-warning">
                        <span class="bx bxs-hot mr-15px"></span>
                        Побеждай
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <h3>MC.TYNIXCLOUD.RU</h3>
                    <span class="bx bx-copy-alt text-placeholder cursor-pointer ml-10px mr-30px"></span>
                    <p class="text-placeholder fs-13px"><span class="fs-16px fw-600 text-danger">{{ $ONLINE_COUNT }}</span>/1000</p>
                </div>
                <div class="online mt-5px">
                    <div class="online-path" style="width: {{ $ONLINE_COUNT / 10 }}%"></div>
                </div>

                <p class="mt-40px info">
                    Это проект с различными, а главное интересными мини-режимами для игры с друзьями в Minecraft!
                    Только у нас присутствует адекватное комьюнити, постоянные обновления и отзывчивая команда!
                </p>

                <a href="#shop" class="btn shop-btn mt-45px scale">
                    <span class="bx bx-diamond mr-15px"></span>
                    ПЕРЕЙТИ В МАГАЗИН
                </a>
            </div>
            <img class="beauty-img" src="/img/art.png" alt="Art">
        </div>
        <span class="bx bx-mouse fs-36 scroll-icon"></span>
    </section>
</div>
<section class="stat-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="stat d-flex">
                    <span class="bx bx-group"></span>
                    <div>
                        <h2>1</h2>
                        <p>Аккаунтов</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="stat d-flex">
                    <span class="bx bx-joystick"></span>
                    <div>
                        <h2>10</h2>
                        <p>Уникальных режимов</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="htp-block">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pr-0 img-1">
            </div>
            <div class="col-lg-6 pl-90px">
                <h1>СКАЧАЙ ИГРУ MINECRAFT</h1>
                <p class="mb-35px" style="max-width: 450px;">Для игры на наших серверах необходимо скачать Minecraft
                    версии 1.8-1.16.5</p>

                <a href="#" class="btn btn-success">
                    <span class="bx bx-download mr-15px"></span>
                    Скачать игру
                </a>
            </div>
        </div>

        <div class="row align-items-center swap-row">
            <div class="col-lg-6 pr-0">
                <h1>ДОБАВЬ СЕРВЕР В ИЗБРАННОЕ</h1>
                <p class="mb-35px" style="max-width: 467px;">Перейди в раздел “Сетевая игра” и нажми на кнопку
                    “Добавить сервер”. Скопируй IP и вставь его в поле “Адрес”</p>

                <a href="#" class="btn btn-brand width-fit">
                    PLAY.ASTRIXMC.NET
                </a>
            </div>

            <div class="col-lg-6 pl-0 img-2">

            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 pr-0 img-3">
            </div>
            <div class="col-lg-6 pl-90px">
                <h1>ИГРАЙ!</h1>
                <p style="max-width: 450px;">Наслаждайся игрой на нашем сервере. Зови друзей и создавай альянсы.
                    Выживай, уничтожай врагов и стань самым сильным игроком во вселенной <b><span
                            class="text-brand">ASTRIXMC</span></b></p>
            </div>
        </div>
    </div>
</section>

<section id="shop" class="shop-block">
    <div class="container">
        <div class="d-flex align-items-center heading">
            <h1><span class="text-brand">МАГАЗИН</span> ПРИВИЛЕГИЙ</h1>
            <div class="tabs ml-auto">
                <div class="tab active" id="privilegies">
                    ПРИВИЛЕГИИ
                </div>
                <div class="tab" id="other">
                    ПРОЧЕЕ
                </div>
                <div class="tab" id="cristalls">
                    КРИСТАЛЛЫ
                </div>
                <div class="tab" id="cases">
                    КЕЙСЫ
                </div>
            </div>
        </div>

        <div class="row mt-60px">
            <div class="col-lg-6">
                <div class="row">
                    <div class="donate-icon col-lg-6 col-sm-6">
                        <div class="shop-item gold scale">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h4>GOLD</h4>
                                    <div class="d-flex">
                                        <p class="price">100 ₽</p>
                                        <p class="oldprice">55 ₽</p>
                                    </div>
                                </div>
                                <div class="ml-auto discount">
                                    -10%
                                </div>
                            </div>
                            <img src="img/gold.png" class="ml-auto mr-auto">
                        </div>
                    </div>

                    <div class="donate-icon col-lg-6 col-sm-6">
                        <div class="shop-item diamond scale">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h4>DIAMOND</h4>
                                    <div class="d-flex">
                                        <p class="price">300 ₽</p>
                                    </div>
                                </div>
                            </div>
                            <img src="img/diamond.png" class="ml-auto mr-auto">
                        </div>
                    </div>

                    <div class="donate-icon col-lg-6 col-sm-6">
                        <div class="shop-item radiant scale">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h4>EMERALD</h4>
                                    <div class="d-flex">
                                        <p class="price">590 ₽</p>
                                    </div>
                                </div>
                            </div>
                            <img src="img/radiant.png" class="ml-auto mr-auto">
                        </div>
                    </div>

                    <div class="donate-icon col-lg-6 col-sm-6">
                        <div class="shop-item ruby scale">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h4>MAGMA</h4>
                                    <div class="d-flex">
                                        <p class="price">900 ₽</p>
                                        <p class="oldprice">1075 ₽</p>
                                    </div>
                                </div>
                                <div class="ml-auto discount">
                                    -10%
                                </div>
                            </div>
                            <img src="img/ruby.png" class="ml-auto mr-auto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">


                <div class="donate-icon shop-item platinum shop-item-long shop-item-big">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4>SHULLKER</h4>
                            <div class="d-flex">
                                <p class="price">1399 ₽</p>
                            </div>
                            <p class="description">
                                Имея данный статус, Вы получаете возможность полёта во всех Лобби, а так же
                                появляется доступ к Быстрым сообщениям в /dm, что позволяет отправлять
                                уникальные сообщения, которые точно удивят ваших друзей. Удобная и
                                комфортная игра, в меру своей стоимости, что понравится каждому!
                            </p>
                        </div>

                        <img src="img/platinum.png" class="ml-auto mr-auto">
                    </div>

                    <img src="img/horse.png" alt="" style="position: absolute;
                        bottom: 20px;
                        right: 80px;
                        width: 420px;
                        height: 330px;" class="horse">
                </div>

            </div>
        </div>
    </div>
</section>

<section class="news-block">
    <div class="container">
        <h1>ПОСЛЕДНИЕ НОВОСТИ</h1>
        <div class="row mt-60px">
            <div class="col-lg-3 mb-20px">
                <div class="news-card">
                    <p class="tag text-success mb-10px">СОБЫТИЕ</p>
                    <h4 class="card-title mb-20px">Ребрендинг проекта</h4>

                    <p class="tip mb-25px">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna.
                    </p>

                    <div class="card-footer">
                        <b><span class="text-danger">TYNIX</span>CLOUD</b> Team
                        <p class="ml-auto text-placeholder">
                            02.01.2021
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-20px">
                <div class="news-card">
                    <p class="tag text-success mb-10px">СОБЫТИЕ</p>
                    <h4 class="card-title mb-20px">Ребрендинг проекта</h4>

                    <p class="tip mb-25px">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna.
                    </p>

                    <div class="card-footer">
                        <b><span class="text-danger">TYNIX</span>CLOUD </b> Team
                        <p class="ml-auto text-placeholder">
                            02.01.2021
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-20px">
                <div class="news-card">
                    <p class="tag text-success mb-10px">СОБЫТИЕ</p>
                    <h4 class="card-title mb-20px">Ребрендинг проекта</h4>

                    <p class="tip mb-25px">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna.
                    </p>

                    <div class="card-footer">
                        <b><span class="text-danger">Astrix</span>MC </b> Team
                        <p class="ml-auto text-placeholder">
                            02.01.2021
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 mb-20px">
                <div class="news-card">
                    <p class="tag text-success mb-10px">СОБЫТИЕ</p>
                    <h4 class="card-title mb-20px">Ребрендинг проекта</h4>

                    <p class="tip mb-25px">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna.
                    </p>

                    <div class="card-footer">
                        <b><span class="text-danger">TYNIX</span>CLOUD </b> Team
                        <p class="ml-auto text-placeholder">
                            02.01.2021
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container d-flex">
        <div>
            <p class="mb-10px text-white">Copyright © 2023 AstrixMC</p>
            <p class="white-placeholder">web@astrixmc.net</p>
        </div>
        <div class="ml-auto">
            <p class="white-placeholder mb-10px text">Дизайн от</p>
            <a href="vk.com/asyncsq1uz" class="text-white">VoltMX</a>
        </div>
    </div>
</footer>


<div id="donateModal" class="modal-backdrop" style="display: none">
    <div class="modal-container">
        <div class="modal card-lg" style="height: fit-content">
            <div class="card-header">
                <img class="donate-description-img" src="img/ruby.png" alt="" id="img" />
                <div class="header-title">
                    <h2 id="title">Ruby</h2>
                    <p id="price">1050 ₽</p>
                </div>
                <button class="flat cursor-pointer ml-auto" id="close-modal">
                    <i class="fs-36 bx bx-x text-regular"></i>
                </button>
            </div>
            <div class="row mt-40px">
                <div class="col-lg-6 border-right lgpr-20px">
                    <h4 class="card-title">
                        <span class="bx bx-store"></span> Покупка товара
                    </h4>
                    <form action="">
                        <div class="input-group mt-30px">
                            <label for="">Игровой ник</label>
                            <div class="input-prepend">
                                <span class="bx bx-user"></span>
                                <input type="text" class="input" placeholder="Введите ник" />
                            </div>
                        </div>

                        <div class="input-group mt-30px">
                            <label for="">Промокод</label>
                            <div class="input-prepend">
                                <span class="bx bxs-discount"></span>
                                <input type="text" class="input" placeholder="Необязательное поле" />
                            </div>
                        </div>

                        <p class="tip mt-40px">
                            <span class="text-danger">ВАЖНО!</span> Всегда внимательно
                            проверяйте введённый Вами ник, часто бывает, что в конце ника
                            есть НИЖНЕЕ ПОДЧЕРКИВАНИЕ!
                        </p>

                        <div class="d-flex align-items-center mt-30px">
                            <img class="mr-15px" src="img/checkbox.svg" alt="" />
                            <span>Согласен с
                                    <a class="text-main" href="//vk.com/">правилами</a> проекта
                                    <b><span class="text-danger">TYNIX</span>CLOUD </b>.</span>
                        </div>

                        <a href="" class="btn btn-brand mt-50px width-fit">
                            <span class="feather-shopping-cart mr-15px"></span>
                            Продолжить покупку
                        </a>
                    </form>
                </div>

                <div class="col-lg-6 lgpl-20px">
                    <h4 class="card-title">
                        <span class="bx bx-check-circle"></span> Описание привилегии
                    </h4>
                    <div class="row mt-30px" style="
                            max-height: 445px;
                            overflow-y: auto;
                            margin-bottom: 20px;
                        ">
                        <div class="col-12">
                            <h4 class="subtitle mb-15px">
                                <i class="fs-24 bx bx-code text-main mr-15px"></i>
                                КОМАНДЫ
                            </h4>

                            <div id="cmds">
                                <p class="tip"><span class="text-danger"> /fly </span> - возможность летать</p>
                            </div>
                        </div>
                        <div class="col-12 mt-30px">
                            <h4 class="subtitle mb-15px">
                                <i class="fs-24 bx bx-map-pin text-main mr-15px"></i>
                                РЕГИОНЫ
                            </h4>
                            <div id="regions">Описание регионов</div>
                        </div>
                        <div class="col-12 mt-30px">
                            <h4 class="subtitle mb-15px">
                                <i class="fs-24 bx bx-tag text-main mr-15px"></i>
                                ПРЕФИКС
                            </h4>
                            <div id="prefix">Описание </div>
                        </div>
                        <div class="col-12 mt-30px">
                            <h4 class="subtitle mb-15px">
                                <i class="fs-24 bx bx-category text-main mr-15px"></i>
                                ДОП. ВОЗМОЖНОСТИ
                            </h4>
                            <div id="abilities"></div>
                        </div>

                        <div class="modal-scroll-mask"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="donateEconomyModal" class="modal-backdrop" style="display: none">
    <div class="modal-container">
        <div class="modal card-lg" style="height: fit-content">
            <div class="card-header">
                <img class="donate-description-img" src="img/ruby.png" alt="" id="img" />
                <div class="header-title">
                    <h2 id="title">Валюта</h2>
                    <p id="price">10 ₽</p>
                </div>
                <button class="flat cursor-pointer ml-auto" id="close-modal">
                    <i class="fs-36 bx bx-x text-regular"></i>
                </button>
            </div>
            <div class="row mt-40px">
                <div class="col-lg-6 border-right lgpr-20px">
                    <h4 class="card-title">
                        <span class="bx bx-store"></span> Покупка товара
                    </h4>
                    <form action="">
                        <div class="input-group mt-30px">
                            <label for="">Игровой ник</label>
                            <div class="input-prepend">
                                <span class="bx bx-user"></span>
                                <input type="text" class="input" placeholder="Введите ник" />
                            </div>
                        </div>

                        <div class="input-group mt-30px">
                            <label for="">Промокод</label>
                            <div class="input-prepend">
                                <span class="bx bxs-discount"></span>
                                <input type="text" class="input" placeholder="Необязательное поле" />
                            </div>
                        </div>

                        <p class="tip mt-40px">
                            <span class="text-danger">ВАЖНО!</span> Всегда внимательно
                            проверяйте введённый Вами ник, часто бывает, что в конце ника
                            есть НИЖНЕЕ ПОДЧЕРКИВАНИЕ!
                        </p>

                        <div class="d-flex align-items-center mt-30px">
                            <img class="mr-15px" src="img/checkbox.svg" alt="" />
                            <span>Согласен с
                                    <a class="text-main" href="//vk.com/playastrix">правилами</a> проекта
                                    <b><span class="text-brand">ASTRIXMC</span></b>.</span>
                        </div>

                        <a href="" class="btn btn-brand mt-50px width-fit">
                            <span class="feather-shopping-cart mr-15px"></span>
                            Продолжить покупку
                        </a>
                    </form>
                </div>

                <div class="col-lg-6 lgpl-20px">
                    <h4 class="card-title">
                        <span class="bx bx-check-circle"></span> Описание привилегии
                    </h4>
                    <div class="input-group mt-30px">
                        <label for="">Тип валюты</label>
                        <select class="input" id="currency" name="currency">
                            <option value="COINS" selected="">Монеты</option>
                            <option value="ASTERS">Астры (Донат-валюта)</option>
                        </select>
                    </div>

                    <div class="input-group mt-30px">
                        <label for="">Кол-во валюты</label>
                        <div class="input-prepend">
                            <span class="bx bx-coin"></span>
                            <input type="number" class="input" name="amount" onchange="calculateCost(this.value)" placeholder="Введите кол-во" required="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script lang="javascript">
    //Получаем элементы
    const mobileBtn = document.querySelector("#mobile-btn")
    const mobileMenu = document.querySelector("#mobile-menu")
    const closeMenu = document.querySelector("#close-mobile")

    mobileBtn.addEventListener("click", (event) => {
        mobileMenu.setAttribute("class", "active")
    })

    closeMenu.addEventListener("click", (event) => {
        mobileMenu.setAttribute("class", "")
    })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
