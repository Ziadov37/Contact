<?php

spl_autoload_register("autoload");

function autoload($className)
{
    $path = "classes/";
    $extention = ".class.php";
    $fileName = $path . $className . $extention;

    if (!file_exists($fileName)) {
        return false;
    }

    include_once $fileName;
}