<?php
spl_autoload_register('class_loader');

function class_loader($className) {
    $file = __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
    if (file_exists($file)) {
        include_once $file;
        echo "Класс $className найден и подключен<br/>";
    }
    else {
        echo "Класс $className не найден в функции order_loader<br/>";
    }
}

