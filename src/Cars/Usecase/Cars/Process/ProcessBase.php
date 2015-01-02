<?php
namespace Cars\Usecase\Cars\Process;

use Cars\Entity;
use Cars\Repository;

class ProcessBase {
    protected $car;
    protected $repo;

    public function __construct(
        Entity\Car $car,
        Repository\CarsData $repo
    )
    {
        $this->car = $car;
        $this->repo = $repo;
    }
}