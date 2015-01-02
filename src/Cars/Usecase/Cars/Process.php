<?php
namespace Cars\Usecase\Cars;

use Cars\Entity;
use Cars\Repository;
//use Cars\Usecase\Cars\Process;

class Process {

    protected $car;
    protected $repo;

    public function __construct(
        $limit = NULL,
        Entity\Car $car,
        Repository\CarsData $repo
    )
    {
        $this->limit = $limit;
        $this->car = $car;
        $this->repo = $repo;
    }

    public function set($limit)
    {
        $this->limit = $limit;
    }
    //Get Filer Array
    /* MOVED TO OWN PROCESS
     * public function filters(){
        $path = $_SERVER['REQUEST_URI'];
        $paths = explode("/", $path);
        $filter_key = $paths[1];
        $filter_options = array('All', 'Asia', 'American', 'Japan');
        //Filter List To View
        if(isset($filter_key) AND $filter_key!=''){
            //Filter Exist
            foreach($filter_options as $filter){
                if($filter == $filter_key){
                    $filters[] = array('name'=>$filter, 'checked'=>'checked');
                }else{
                    $filters[] = array('name'=>$filter, 'checked'=>'');
                }
            }
        }else{
            $first=1;
            foreach($filter_options as $filter){
                if($first){
                    $filters[] = array('name'=>$filter, 'checked'=>'checked');
                    $first = false;
                    continue;
                }
                $filters[] = array('name'=>$filter, 'checked'=>'');
            }
        }
        $cars_filter = array("filter"=>$filters);
        return $cars_filter;

    }*/
    /* MOVED TO OWN PROCESS
    public function update_car($id){
        parse_str(file_get_contents("php://input"),$post_vars);
        $model = $post_vars['model'];
        $price = $post_vars['price'];
        $image = $post_vars['image'];
        $continent = $post_vars['continent'];
        $price = str_replace(',', '', $price);
        $this->repo->update("UPDATE `test2`.`cars` SET `model` = '$model', `price` = '$price', `image` = '$image', `continent` = '$continent'  WHERE `cars`.`pos` =$id LIMIT 1");
        return true;
    }*/
    /* MOVED TO OWN PROCESS
    public function delete_car($id){
        $this->repo->delete("DELETE FROM `test2`.`cars` WHERE `cars`.`pos` = $id LIMIT 1");
    }

    */
    /*MOVED TO OWN PROCESS
     * public function insert_car(){
        $model = $_POST['model'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        $continent = $_POST['continent'];
        $price = str_replace(',', '', $price);
        $this->repo->insert($model, $price, $image, $continent);
        return true;
    }*/

    /*MOVED TO OWN PROCESS§
     * public function cars_list()
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
                $matches = $this->repo->select("SELECT * FROM `cars`");
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
            return  array("matches" => $matches, "sum" => number_format($sum[0]['sum']));
        }else{
            // We only handle resources under 'cars'
            //header('HTTP/1.1 404 Not Found');
            die('not car');
        }

    }*/

}