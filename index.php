<?php
spl_autoload_register('order_loader');
spl_autoload_register('tovar_loader');

// грузим напрямую:
function order_loader() {
    $dir=__DIR__.DIRECTORY_SEPARATOR.'Basket'.DIRECTORY_SEPARATOR;
    include_once $dir.'Basket.php';
    include_once $dir.'Order.php';
}

//order_loader();
tovar_loader();

// читаем каталоги с товарами:
function tovar_loader() {
    $pref = __DIR__.DIRECTORY_SEPARATOR.'Product'.DIRECTORY_SEPARATOR; // префикс для поиска товаров
    $phpfiles = getPhp($pref);
    echo $phpfiles;
    foreach (explode(',',$phpfiles) as $file) {
        if (file_exists($file)) {
            include_once $file;
        }
    }
}

// рекурсивно читаем директории на поиск php фалов:
function getPhp($dir) {
    $pattern="/^\w*.php$/";
    $files=scandir($dir);
    $phpfiles='';
    foreach ($files as $filename) {
        $full=$dir.$filename;
        if(is_dir($full) && $filename != '.' && $filename != '..') {
            $phpfiles.=getPhp($full.DIRECTORY_SEPARATOR);
        }
        else {
            preg_match($pattern, $filename, $matches);
            foreach ($matches as $php) {
                $phpfiles .= $dir.$php.',';
            }
        }
    }
    return $phpfiles;
}
?>

