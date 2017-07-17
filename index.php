<?php
spl_autoload_register('order_loader');
spl_autoload_register('tovar_loader');

// грузим напрямую:
function order_loader() {
    include_once __DIR__.DIRECTORY_SEPARATOR.'Basket'.DIRECTORY_SEPARATOR.'Basket.php';
    include_once __DIR__.DIRECTORY_SEPARATOR.'Basket'.DIRECTORY_SEPARATOR.'Order.php';
}

order_loader();
tovar_loader();

// читаем каталоги с товарами:
function tovar_loader() {
    $pref = __DIR__.DIRECTORY_SEPARATOR.'Product'.DIRECTORY_SEPARATOR; // префикс для поиска товаров
    echo($pref);
    $phpfiles = getPhp($pref);
    echo ($phpfiles);
    foreach (explode(',',$phpfiles) as $file) {
        include_once $pref.$file;
    }
}

function getPhp($dir) {
    $pattern="/^w*\.php$/"; // маска валидных файлов
    $files=scandir($dir);
    $phpfiles='';
    foreach ($files as $filename) {
        if(is_dir($filename)) $phpfiles.=','.getPhp($filename);
        preg_match($pattern, $filename, $matches);
        $phpfiles.= implode(',',$matches);
    }
    return $phpfiles;
}
?>

