
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NixonHouse</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="../libs/youtubeLightbox/youtubeLightbox.css">
    
</head>
<body>
     <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header_top-row">
                        <a href="#">
                            <img src="./img/first-screen__logo.svg" alt="NixonHouse">
                        </a>    
                        <div class="header-nav">
                            <nav class="nav">
                                <ul class="nav_list">
                                    <li><a href="aboutComplex.php">О комплексе</a></li>
                                    <li><a href="/district.php">Район</a></li>
                                    <li><a href="/catalog.php">Каталог квартир</a></li>
                                    <li><a href="/gallery.php">Галерея</a></li> 
                                    <li><a href="#footer">Контакты</a></li>
                                </ul>
                             
                            </nav>
                        </div> 
                        
                        <div class="header_nav-btn">NAV BTN</div>
                    </div>
                </div>
            </div>

                <div class="container">
                   <h1 class="header_title">Жилой комплекс<br>
                    в центре Рышкановки
                    <a href="#video">
                        <img 
                        src="./img/mouse.svg" 
                        alt="scroll next"
                        class="header_title-icon"
                        >
                    </a>
                </h1>   
                </div>

            <div class="header-footer">
                     <div class="text-right">
                         <a href="#section-map" class="info info--map">Улица Спартакус 36</a>
                     </div>
                    <a href="tel:+37368820853" class="info info--tel">+373 61 11 11 15</a>
            </div>
     </header>

     <main>
        <section class="benefits ">
            <div class="container">
                <div class="benefits_row">

                    <div class="benefits-item">
                        <img src="/img/benefits/bench.svg" alt="" class="benefits_item-img">
                        <p class="benefits_item-text">Рядом прекрасный рышкановский парк</p>
                    </div>  

                    <div class="benefits-item">
                        <img src="/img/benefits/building.svg" alt="" class="benefits_item-img">
                        <p class="benefits_item-text">Полностью обустроенный</p>
                    </div>

                    <div class="benefits-item">
                        <img src="/img/benefits/fountain.svg" alt="" class="benefits_item-img">
                        <p class="benefits_item-text">Двух уровневая подземная парковка</p>
                    </div>
                        
                    <div class="benefits-item">
                        <img src="/img/benefits/bicycle.svg" alt="" class="benefits_item-img">
                        <p class="benefits_item-text">6 км велодорожек</p>
                    </div> 

                    
                </div>
            </div>
        </section>

        <section class="appartaments ">
            <div class="container">
                <div class="appartaments_title">
                    <h2 class="title-2">"О NIXON: комфорт, безопасность и стиль"</h2>
                </div>
    <div class="appartaments_cards">
    <a href="#" class="card">
        <img class="card_img" src="img/cards/location_1.jpg" alt="location”">
        <h3 class="card_title">Расположение</h3>
    </a>
    <a href="#" class="card">
        <img class="card_img" src="img/cards/advantages.webp" alt="Пентхаус “Loft Олимп”">
        <h3 class="card_title">Преимущества</h3>
    </a>
    <a href="#" class="card">
        <img class="card_img" src="img/cards/bezopasnosti.webp" alt="Пентхаус “Loft Олимп”">
        <h3 class="card_title">Безопасность</h3>
    </a>
    <a href="#" class="card">
        <img class="card_img" src="img/cards/comfort.jpg" alt="Пентхаус “Loft Олимп”">
        <h3 class="card_title">Удобство</h3>
    </a>
 </div>
            </div>
        </section>

        <section class="cta ">
            <div class="container">
                <div class="cta_title">
                    <h2 class="title-2">Хотите посмотреть?</h2>
                </div>

                <div class="cta_wrapper">
                    <div class="cta_text"><p>Nixon, современное и инновационное здание, расположенное в Кишиневе, представляет собой привлекательный дом со множеством удобств и преимуществ, предлагая потенциальным арендаторам потрясающий вид на город и окрестности.</p></div>
                    <form action="form.php" method="post" class="cta_form form">
                        <input type="text" class="form_input" name="name" placeholder="Ваше имя" autocomplete="off" required>
                        <input data-tel-input="text" class="form_input" name="phone" placeholder="Ваш телефон" autocomplete="off" required>
                    
                        <p class="form_privacy">Мы никому не передаем ваши данные<br> И не сохраняем ваш номер в базу.</p>
                    
                        <button type="submit" class="form_button">Посмотреть район</button>
                    </form>
                    
                </div>
            </div>

        </section>
      
        <section class="video " id="video" >
            <div class="container">
                <a href="https://www.youtube.com/watch?v=pbs4p4LCyDM" data-youtubeLightbox class="video_link">
                    <img src="./img/video/video.svg" alt="" class="video_icon">
                    <img src="./img/video/Rectangle 2.jpg" alt="" class="video_image">
                </a>
            </div>
            
        </section>

        <section class="section-map ">       
            <div class="container">
                <div class="section-map_title">
                    <h2 class="title-2">Район на карте</h2>
                </div>
                <div class="section-map_map">
                    <div class="map" id="map"></div>
                </div>
            </div>
        </section>

        <section class="feedback ">
            <div class="container">
                <div class="feedback_title">
                    <h2 class="title-2">Есть вопросы?</h2>
                </div>
                <form  action="form_1.php" method="post" class="feedback_form form">
                    <p class="form_privacy">Мы никому не передаем ваши данные<br> 
                        И не сохраняем ваш номер в базу.</p>

                    <input type="text" name="name_1" class="form_input" placeholder="Ваше имя" autocomplete="off">
                    <input data-tel-input="text" name="phone_1" class="form_input" placeholder="Ваш телефон" autocomplete="off">

                        <button type="submit" class="form_button">Посмотреть район</button>
                    </form>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer ">
        <div class="container">
            <div class="footer_grid">
                <div class="footer_logo">
                    <a href="#">
                        <img src="./img/first-screen__logo.svg" alt="NixonHouse">
                    </a>
                </div>
                <div class="footer_nav">
                    <nav>
                        <ul class="footer_nav-list">
                            <li><a href="/aboutComplex.php">О комплексе</a></li>
                            <li><a href="/district.php">Район</a></li>
                            <li><a href="/catalog.php">Каталог квартир</a></li>
                            <li><a href="/gallery.php">Галерея</a></li> 
                            <li><a href="#">Контакты</a></li>
                        </ul>
                     
                    </nav>
                </div>
                <div class="footer_nav">
                    <nav>
                        <ul class="footer_nav-list">
                            <li><a href="#">Поселение и переезд</a></li>
                            <li><a href="#">Сервисные услуги</a></li>
                            <li><a href="#">Экологическая устойчивость</a></li>
                            <li><a href="#">Инвестиционные возможности</a></li> 
                            <li><a href="#">Программа лояльности </a></li>
                        </ul>
                     
                    </nav>
                </div>
                <div class="footer_address" id="footer">
                    <ul class="footer_nav-list">
                        <li>Адрес: Улица Спартакус 36</li>
                        <li>Телефон: <a href="tel:+37368820853">+373 61 11 11 15</a></li>
                        <li>Отдел продаж: 09:00 - 18:00</li>
                        <li>E-mail: <a href="#" class="link-bold">buimistr@gmail.com</a></li>
                    </ul>

                    <ul class="socials">
                        <li><a href="#"><img src="/img/socials/youtube.svg" alt="youtube"></a></li>
                        <li><a href="#"><img src="/img/socials/vk.svg" alt="vk"></a></li>
                        <li><a href="#"><img src="/img/socials/facebook.svg" alt="facebook"></a></li>
                        <li><a href="#"><img src="/img/socials/instagram.svg" alt="instagram"></a></li>
                    </ul>
                </div>
          </div>
        </div>
    </footer>

    <!-- Youtube Light Box -->
    <div id="youtubelightbox" class="youtubelightbox">
        <div class="youtubelightbox__centeredchild">
            <div class="youtubelightbox__videowrapper">
                <div id="youtubelightboxPlayer"></div>
            </div>
        </div>
    </div>



    <script src="https://api-maps.yandex.ru/2.1/?apikey=0ff713b3-2d2c-4437-ac6d-8997081687af&lang=ru_RU" type="text/javascript"></script>


    <script src="./libs/phoneMask/mask.js"></script>
    <script src="./libs/phoneMask/mask_list.js"></script>
    <script src="./libs/youtubeLightbox/youtubeLightbox.js"></script>

    <script src="js/main.js"></script>
</body>
</html> 
