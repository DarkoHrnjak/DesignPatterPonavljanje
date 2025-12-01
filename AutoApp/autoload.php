<?php

spl_autoload_register(function($className){

if(strpos($className,'AutoApp\\')!==0){
    return;
}

$relativeClass = str_replace('AutoApp\\','',$className);

$putanja = __DIR__.'/'.str_replace('\\','/',$relativeClass).'.php';

if(file_exists($putanja)){
    require_once $putanja;
}
else{
    echo "Datoteka za klasu {$className} ne postoji!";
}

});

?> 