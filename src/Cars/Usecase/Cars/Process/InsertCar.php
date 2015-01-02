<?php
namespace Cars\Usecase\Cars\Process;


class InsertCar extends ProcessBase{
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