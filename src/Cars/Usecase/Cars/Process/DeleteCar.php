<?php
namespace Cars\Usecase\Cars\Process;

use Cars\Entity;
use Cars\Repository;

class DeleteCar extends ProcessBase{
    public function delete_car($id){
        $this->repo->delete("DELETE FROM `test2`.`cars` WHERE `cars`.`pos` = $id LIMIT 1");
    }

}