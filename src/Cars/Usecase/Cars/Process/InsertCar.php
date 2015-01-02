<?php
namespace Cars\Usecase\Cars\Process;

use Cars\Entity;
use Cars\Repository;

class InsertCar {
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
    public function insert_car(){
        $model = $_POST['model'];
        if($model =='m'){
            return false;
        }
        $price = $_POST['price'];
        $image = $_POST['image'];
        $continent = $_POST['continent'];
        $price = str_replace(',', '', $price);
        $this->repo->insert($model, $price, $image, $continent);
        return true;
    }

}