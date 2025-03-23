<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные
    $name = trim($_POST["name"]);
    $phone = trim($_POST["phone"]);

    // Проверяем, что данные не пустые
    if (!empty($name) && !empty($phone)) {
        // Форматируем строку для записи в файл
        $data = "Имя: $name | Телефон: $phone\n";
        
        // Путь к файлу
        $file = "clients.txt";

        // Записываем данные в файл
        file_put_contents($file, $data, FILE_APPEND);
        echo "Данные успешно сохранены!";
    } else {
        echo "Заполните все поля!";
    }
}



?>
 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные
    $name = trim($_POST["name_1"]);
    $phone = trim($_POST["phone_1"]);

    // Проверяем, что данные не пустые
    if (!empty($name) && !empty($phone)) {
        // Форматируем строку для записи в файл
        $data = "Имя(Вопросы): $name | Телефон: $phone\n";
        
        // Путь к файлу
        $file = "clientsQuestions.txt";

        // Записываем данные в файл
        file_put_contents($file, $data, FILE_APPEND);
        echo "Данные успешно сохранены!";
    } else {
        echo "Заполните все поля!";
    }
}
?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NixonHouse</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./libs/youtubeLightbox/youtubeLightbox.css">
</head>
<body>
    <h<header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header_top-row">
                        <a href="#">
                            <img src="../img/first-screen__logo.svg" alt="NixonHouse">
                        </a>    
                        <div class="header-nav">
                            <nav class="nav">
                                <ul class="nav_list">
                                    <li><a href="./aboutComplex.php">О комплексе</a></li>
                                    <li><a href="/district.html">Район</a></li>
                                    <li><a href="/catalog.html">Каталог квартир</a></li>
                                    <li><a href="/gallery.html">Галерея</a></li> 
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
        <!-- Содержимое других секций... -->

        <section class="cta">
            <div class="container">
                <div class="cta_title">
                    <h2 class="title-2">Хотите посмотреть?</h2>
                </div>

                <div class="cta_wrapper">
                    <div class="cta_text"><p>Nixon, современное и инновационное здание, расположенное в Кишиневе, представляет собой привлекательный дом со множеством удобств и преимуществ, предлагая потенциальным арендаторам потрясающий вид на город и окрестности.</p></div>

                    <!-- Форма для отправки данных -->
                    <form action="./index.php" method="post" class="cta_form form">
                        <input type="text" class="form_input" name="name" placeholder="Ваше имя" autocomplete="off" required>
                        <input data-tel-input="text" class="form_input" name="phone" placeholder="Ваш телефон" autocomplete="off" required>

                        <p class="form_privacy">Мы никому не передаем ваши данные<br> И не сохраняем ваш номер в базу.</p>

                        <button type="submit" class="form_button" value="Log in">Посмотреть район</button>
                    </form>
                </div>
            </div>
        </section>
      
        <section class="feedback ">
            <div class="container">
                <div class="feedback_title">
                    <h2 class="title-2">Есть вопросы?</h2>
                </div>
                <form action= "./index.php" method="post"  class="feedback_form form">
                    <p class="form_privacy">Мы никому не передаем ваши данные<br> 
                        И не сохраняем ваш номер в базу.</p>

                    <input type="text" class="form_input" name="name_1" placeholder="Ваше имя" autocomplete="off" required>
                    <input data-tel-input="text" name="phone_1" class="form_input" placeholder="Ваш телефон" autocomplete="off">

                        <button type="submit" class="form_button">Посмотреть район</button>
                    </form>
                </form>
            </div>
        </section>

        <!-- Другие секции, например, видео, карта и так далее -->
    </main>

    <footer class="footer">
        <!-- Содержимое footer... -->
    </footer>

    <!-- Сценарии... -->
</body>
</html>
