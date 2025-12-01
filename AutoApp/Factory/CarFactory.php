<?php

namespace AutoApp\Factory;

use AutoApp\Models\Car;
use AutoApp\Models\CarType;
use AutoApp\Models\CarCollection;
use AutoApp\Observers\ObserverInterface;

class CarFactory{
    private CarCollection $carCollection;

    private array $observers = [];

    private int $idCounter = 1;

    public function __construct(){
        $this->carCollection = new CarCollection();
    }

    public function attachObserver(ObserverInterface $obs){
        $this->observers[] = $obs;
    }

    private function notifyObservers(string $msg){
        foreach($this->observers as $obs){
            $obs->update($msg);
        }
    }

    public function createCar(string $naziv, int $godiste, string $tipNaziv):Car{
       
        $tip = new CarType(rand(1,100), $tipNaziv);

        $car = new Car(
            $this->idCounter++,
            $naziv,
            $godiste,
            $tip
        );

        $this->carCollection->add($car);
        $this->notifyObservers("Proizveden novi auto: {$car->info()}");

        return $car;
    }

    public function getCars(): CarCollection{
        return $this->carCollection;
    }
}



?>