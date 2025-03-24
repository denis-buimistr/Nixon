<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные
    $name = trim($_POST["name_1"]);
    $phone = trim($_POST["phone_1"]);

    // Проверяем, что данные не пустые
    if (!empty($name) && !empty($phone)) {
        // Форматируем строку для записи в файл
        $data = "Имя: $name | Телефон: $phone\n";
        
        // Путь к файлу
        $file = "clients_questions.json";

        // Записываем данные в файл
        file_put_contents($file, $data, FILE_APPEND);
        
        // Выводим alert и перенаправляем обратно
        echo '<script>alert("Данные успешно сохранены!"); window.location.href="index.php";</script>';
    } else {
        echo '<script>alert("Заполните все поля!"); window.history.back();</script>';
    }
}
?>
