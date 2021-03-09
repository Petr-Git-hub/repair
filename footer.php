<footer>
   <div class="container">
      <div class="flex">
         <div class="col">
            <a href="/" class="logo">
               <?php include "logo.php" ?>
            </a>
         </div>
         <div class="col">
            <ul class="menu">
               <li class="menu-li">Ремонт Apple</li>
               <li class="menu-li"><a href="/" class="menu-link">iPhone</a></li>
               <li class="menu-li"><a href="/" class="menu-link">iPad</a></li>
               <li class="menu-li"><a href="/" class="menu-link">Mac</a></li>
               <li class="menu-li"><a href="/" class="menu-link">iWatch</a></li>
            </ul>
         </div>
         <div class="col">
            <div class="vcard">
               <a href="tel:+74951182372" class="tel">+7 (495) 118 23 72</a>
               <div class="adr">
                  <span class="locality">г. Москва</span>,
                  <span class="street-address">ул. Большая Садовая, д. 5, <br>
                     под. 3, этаж 1А, офис А24</span>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="call_master">Заказать звонок</div>
            <div class="soc_icons">
               <a href="" class="ic"><i class="fa fa-youtube-play"></i></a>
               <a href="" class="ic"><i class="fa fa-instagram"></i></a>
               <a href="" class="ic"><i class="fa fa-whatsapp"></i></a>
               <a href="" class="ic"><i class="fa fa-paper-plane"></i></a>
            </div>
         </div>
      </div>
      <div class="copyright">
         <span>iFix 2021, Все права защищены.</span>
      </div>

   </div>
</footer>

<!-- модальное окноформа обратной связи -->
<div class="popup-overlay">
    <div class="popup">
        <div class="popup-header">
            <h3 class="popup-title">Форма обратной связи</h3>
            <button class="popup-close"></button>
        </div>
        <div class="popup-body">
            <form action="action.php" method="post">
                <div class="form-group">
                    <div class="form-name">Ваше Имя</div>
                    <input id="user_name" type="text" class="form-control" >
                </div>
                <div class="form-group">
                    <div class="form-name">Номер телефона</div>
                    <input id="user_phone" type="text" class="form-control" >
                </div>
                <div class="form-group">
                    <div class="form-name">Какая у Вас неисправность?</div>
                    <textarea id="text_comment" class="form-control" ></textarea>
                </div>
                <div class="form-politic">Нажимая кнопку отправить вы соглашаетесь с <a href="/page/politika.php">политикой сайта</a></div>
                <button id="btn_submit" type="button" class="btn btn-primary popup-close">Отправить</button>
                <div class="messages"></div>
            </form>
        </div>
    </div>
</div>


<script src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="../assets/js/script.js"></script>
</body>

</html>