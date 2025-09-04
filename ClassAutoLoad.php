<?php
require 'conf.php';
$directory = ["Forms", "Layouts", "Globals"];

spl_autoload_register(function ($class_name) use ($directory) {
    foreach ($directory as $dir) {
        $file = __DIR__ . "/$dir/$class_name.php";
       if (file_exists($file)) {
           require_once$file;
           return;
       }
    }
});

$layout = new structure();  
