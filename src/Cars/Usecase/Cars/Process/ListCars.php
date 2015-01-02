<?php
namespace Cars\Usecase\Cars\Process;

use Cars\Entity;
use Cars\Repository;

class ListCars extends ProcessBase{
    public function list_cars()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = $_SERVER['REQUEST_URI'];
        $paths = explode("/", $path);
        if(!$paths[0])
            array_shift($paths);
        if($paths[0]=='cars') {
            array_shift($paths);
            $name = array_shift($paths);
            $name = array_shift(explode('?', $name));
            if (empty($name)) {
                //die('sdsdsdd');
                $matches = $this->repo->select("SELECT * FROM `cars`");
                //echo "<pre>",print_r($matches),"</pre>";die();;
            }else{
                switch ($name) {
                    case "Asia":
                        $where = "WHERE continent = 'Asia'";
                        break;
                    case "American":
                        $where = "WHERE continent = 'American'";
                        break;
                    case "Japan":
                        $where = "WHERE continent = 'Japan'";
                        break;
                    default:
                        $where = "";
                }
                $matches = $this->repo->select("SELECT * FROM cars ".$where);
            }
            foreach ($matches as $k => $value) {
                $matches[$k]['price'] = number_format($value['price']);
            }
            $sum = $this->repo->select("SELECT SUM(price) sum FROM `cars`".$where);
            return array("matches" => $matches, "sum" => number_format($sum[0]['sum']));
        }else{
            // We only handle resources under 'cars'
            //header('HTTP/1.1 404 Not Found');
            die('not car');
        }

    }

}