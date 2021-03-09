<div class="container">
    <nav class="headerNav">
        <a href="/" class="logo">
            <?php include "logo.php" ?>
        </a>
        <ul class="menu">
            <?php $url = $_SERVER["REQUEST_URI"]; ?>
            <li class="menu-li"><a href="/page/iPhone.php" <?php if ($url == "/page/iPhone.php") {
                    echo 'class="menu-link active"';
                } ?> class="menu-link">iPhone</a></li>
            <li class="menu-li"><a href="/page/iPad.php" <?php if ($url == "/page/iPad.php") {
                    echo 'class="menu-link active"';
                } ?> class="menu-link">iPad</a></li>
            <li class="menu-li"><a href="/page/mac.php" <?php if ($url == "/page/Mac.php") {
                    echo 'class="menu-link active"';
                } ?> class="menu-link">Mac</a></li>
            <li class="menu-li"><a href="/page/iWatch.php" <?php if ($url == "/page/iWatch.php") {
                    echo 'class="menu-link active"';
                } ?> class="menu-link">iWatch</a></li>
            <li class="menu-li">
                <a href="/page/about.php"
                    <?php
                    if ($url == "/page/about.php" || $url == "/page/about.php?reviews=open") {  echo 'class="menu-link active"'; }
                    ?> class="menu-link">О нас</a></li>
            <li class="menu-li">
                <a href="/page/price.php" <?php if ($url == "/page/price.php") {echo 'class="menu-link active"';} ?> class="menu-link">Список цен</a>
            </li>
        </ul>
        <a href="tel:" class="tel">+7 (495) 118 23 72</a>
    </nav>
</div>