<?php
namespace Cars\Usecase\Cars\Process;

use Cars\Entity;
use Cars\Repository;

class DeleteCar {
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
    public function delete_car($id){
        $this->repo->delete("DELETE FROM `test2`.`cars` WHERE `cars`.`pos` = $id LIMIT 1");
    }

}