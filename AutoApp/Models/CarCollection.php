<?php

namespace AutoApp\Models;

use Iterator;

class CarCollection implements Iterator{

    private array $cars = [];

    private int $position = 0;

    public function current(): mixed{return $this->cars[$this->position];}

    public function key(): mixed{return $this->position; }

    public function next(): void{$this->position++;}

    public function rewind(): void{$this->position=0;}

    public function valid(): bool{return isset($this->cars[$this->position]);}

    public function add(Car $car): void{
        $this->cars[]=$car;
    }

    public function count(): int{
        return count($this->cars);
    }
}


?>