<?php include "../head.php" ?>
    <header class="details-page">
        <?php include "../header.php" ?>
    </header>
    <div class="content" id="ancor">
        <div class="container">

            <div class="page-content">

                <h2>Рассчитать стоимость</h2>

                <div class="page-nav">
                    <a href="../page/iPhone.php#ancor" class="page-link active">iPhone</a>
                    <a href="../page/iPad.php#ancor" class="page-link">iPad</a>
                    <a href="../page/Mac.php#ancor" class="page-link">Mac</a>
                    <a href="../page/iWatch.php#ancor" class="page-link">iWatch</a>
                </div>

                <div class="step">
                    <a href="javascript:history.back()" class="step-link"></a>
                    <div class="step-inf">3 из 3</div>
                </div>

                <div class="cardDetails">
                    <div class="cardDetails-img">
                        <img src="/assets/img/12%20Pro%20Max.png" alt="">
                    </div>
                    <div class="cardDetails-inf">
                        <h2>Замена дисплея на iPhone 12 Pro Max</h2>
                        <div class="cardDetails-price">от <span>26000</span> ₽</div>
                        <div class="cardDetails-radio">
                            <div class="inpRadio">
                                <input type="radio" id="one" name="radio" hidden>
                                <label for="one"><span class="before"></span>Оригинальный дисплей</label>
                            </div>
                            <div class="inpRadio">
                                <input type="radio" id="two" name="radio" hidden>
                                <label for="two"><span class="before"></span>Установка защитного стекла</label>
                            </div>
                            <div class="inpRadio">
                                <input type="radio" id="thre" name="radio" hidden>
                                <label for="thre"><span class="before"></span>Без защитного стекла</label>
                            </div>
                        </div>
                        <div class="sale_item">
                            <div class="left">
                                Заявка<br> через сайт
                            </div>
                            <div class="right" data-sale="500">-500₽</div>
                        </div>
                        <hr>
                        <button class="btn popup-open">Заказать ремонт</button>

                    </div>
                </div>

            </div>


            <?php include "../advantages.php" ?>

        </div>
    </div>


<?php include "../footer.php" ?>