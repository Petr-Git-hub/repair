<?php include "../head.php" ?>
    <header>
        <?php include "../header.php" ?>
    </header>

    <div class="about-wrap">

        <div class="about">
            <div class="about-fon">
                <a href="/" class="logo">
                    <?php include "../logo.php" ?>
                </a>
            </div>
            <div class="container">
                <div class="about-description">Сервисный центр <b>i-Fix workshop</b> - это <b>широкий спектр услуг по
                        ремонту техники Apple</b>: ремонт iPhone, ремонт iPad, ремонт и апгрейд
                    iMac/Mac/MacBook, ремонт Apple Watch.
                    <br>
                    <br>
                    Обращаясь к нам, Вы всегда <b>можете быть уверены в качестве
                        ремонта</b>, ведь только официальный сервисный центр
                    предоставляет гарантию на свои услуги, а все <b>комплектующие
                        имеют сертификаты соответствия</b>. Ждем Вас!
                </div>
            </div>
        </div>

        <div class="container">
            <div class="aboutAdvantages">
                <h2>Наши преимущества</h2>
                <div class="aboutAdvantages-wrap">
                    <div class="aboutAdvantages-item">
                        <div class="title">Выезд мастера</div>
                        <div class="description">Осуществим ремонт на выезде или курьерскую доставку. За 60 минут в
                            любую точку Москвы.
                        </div>
                    </div>
                    <div class="aboutAdvantages-item">
                        <div class="title">Гарантия качества</div>
                        <div class="description">Сертифицированные запчасти. На оказанные услуги гарантия от 3 до 12
                            месяцев.
                        </div>
                    </div>
                    <div class="aboutAdvantages-item">
                        <div class="title">Лучшая цена на рынке</div>
                        <div class="description">Мы уверены в своих ценах. Нашли дешевле? Мы снизим цены прямо сейчас.
                        </div>
                    </div>
                    <div class="aboutAdvantages-item">
                        <div class="title">Полностью открытый сервис</div>
                        <div class="description">Своя лаборатория для ремонта, сертифицированные комплектующие и мастера
                            с огромным опытом ждут вас.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="reviews reviews-about <?php echo $_GET["reviews"] ?>  " id="reviews">
            <div class="still">Показать все</div>
            <div class="container">
                <h2>Отзывы о нас</h2>
                <?php include "../reviews.php" ?>
            </div>
        </div>

        <?php include "../stages-wrap.php" ?>

        <div class="container">
            <?php include "../advantages.php" ?>
        </div>

    </div>

<?php include "../footer.php" ?>