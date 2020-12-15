<?php

spl_autoload_register(function ($name){
    $diretory = str_replace('\\', DIRECTORY_SEPARATOR, $name);
    $name = str_replace('Alura', 'src', $diretory);
    @require_once "$name.php";
});
