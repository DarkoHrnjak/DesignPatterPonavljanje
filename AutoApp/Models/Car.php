<?php

namespace AutoApp\Models;

class Car{
    public function __construct(
        public int $id,
        public string $naziv,
        public int $godiste,
        public CarType $tip
    )
    {}

    public function info():string{
        return "{$this->id} - {$this->naziv}, ({$this->godiste}), tip {$this->tip->naziv}";
    }
}



?>