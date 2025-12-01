<?php

namespace AutoApp\Observers;

class ProductNotifier implements ObserverInterface{
    public function __construct(private string $korisnik){}

    public function update (string $message){
        echo "<br>Obavijest za {$this->korisnik}: {$message}";
    }
}


?>