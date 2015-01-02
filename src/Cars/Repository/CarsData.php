<?php
namespace Cars\Repository;

use Cars\Repository\FileRepository;

class CarsData extends FileRepository{
    public function __construct() {
        $this->db = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    public function __destruct() {
        mysqli_close($this->db);
    }

    public function select($query) {
        return $this->toArray($this->query($query));
    }
    public function insert($model, $price, $image, $continent) {
        return $this->query("INSERT INTO `test2`.`cars` (`pos`, `model`, `price`, `image`, `continent`) VALUES (NULL, '$model', '$price', '$image', '$continent')");
    }
    public function delete($query) {

        return $this->query($query);
    }
    public function update($query) {
        return $this->query($query);
    }
    public function query($query) {
        return mysqli_query($this->db, $query);
    }

    private function toArray($results) {
        $arr = array();

        while ($row = mysqli_fetch_array($results)) {
            $temp = array();

            foreach ($row as $key => $val) {
                if (is_string($key))
                    $temp[$key] = $val;
            }

            array_push($arr, $temp);
        }

        return $arr;
    }
}
