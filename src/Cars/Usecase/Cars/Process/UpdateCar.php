<?php
namespace Cars\Usecase\Cars\Process;

use Cars\Entity;
use Cars\Repository;

class UpdateCar {
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
    public function update_car($id){
        parse_str(file_get_contents("php://input"),$post_vars);
        $model = $post_vars['model'];
        $price = $post_vars['price'];
        $image = $post_vars['image'];
        $continent = $post_vars['continent'];
        $price = str_replace(',', '', $price);
        $this->repo->update("UPDATE `test2`.`cars` SET `model` = '$model', `price` = '$price', `image` = '$image', `continent` = '$continent'  WHERE `cars`.`pos` =$id LIMIT 1");
        return true;
    }

}