# mongoPHP
Как можно работать с коллекциями (в виде таблиц) в MongoDB на PHP

![v](https://github.com/user-attachments/assets/a38bdbdd-4884-4a75-a61a-a18e78257363)

1. Установите MongoDB Community Server по ссылке: https://www.mongodb.com/try/download/community
2. Экспортируйте файл JSON-коллекции: roytuts.users.json
3. Скачайте XAMPP по ссылке: https://www.apachefriends.org/ Комплект программ содержит PHP с настроенным web-сервером Apache.
4. Нужно открыть 'php.ini' из каталога 'C:\xampp\php\' и добавить строку: extension=php_mongodb.dll
5. Скачать и поместить файл 'php_mongodb.dll' в каталог 'C:\xampp\php\ext\'. Версия должна быть совместимой с версией PHP.
6. Версию PHP можно посмотреть после выполнения скрипта: '<?php phpinfo(); ?>' в каталоге 'C:\xampp\htdocs\'. Назовите скрипт, например, 'phpinfo.php' и откройте в браузере страницу: 'http://localhost/phpinfo.php'. Файл библиотеки скачивается с сайта: https://pecl.php.net/package/mongodb напротив номера версии MongoDB Driver нажать DLL с символом Windows.
7. Совместимость версии PHP с версией MongoDB Driver определяется по ссылке: https://www.mongodb.com/docs/drivers/php-drivers/
8. Если PHP устанавливается отдельно от XAMPP, то достаточно команды в терминале в каталоге с PHP: 'pecl install mongodb'.
9. Если удалось установить библиотеку, то исследуйте примеры в каталоге 'light'.
