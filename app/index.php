<?php
//one
require '../vendor/autoload.php';
//aaa
//bbb11
ini_set('auto_detect_line_endings', true);
$car = new Cars\Entity\Car;
$repo = new Cars\Repository\CarsData;

$usecase = new Cars\Usecase\Cars\Process(
    NULL,
    $car,
    $repo
);
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['REQUEST_URI'];
$paths = explode("/", $path);
if(!$paths[0])
    array_shift($paths);
try {
    if ($paths[0] == 'cars') {
        array_shift($paths);
        switch ($method) {
            case 'PUT':
                $id = array_shift($paths);
                if (isset($id) AND is_numeric($id)) {
                    $update = new Cars\Usecase\Cars\Process\UpdateCar($car, $repo);
                    $update->update_car($id);
                } else {
                    //exception
                }
                break;
            case 'POST':
                $insert = new Cars\Usecase\Cars\Process\InsertCar($car, $repo);
                $insert_err = $insert->insert_car();
                if(!$insert_err)
                    throw new Exception("model error");
                //$usecase->insert_car();
                break;
            case 'GET':
                $list = new Cars\Usecase\Cars\Process\ListCars($car, $repo);
                $cars_list = $list->list_cars();
                //$cars_list = $usecase->cars_list();
                break;
            case 'DELETE':
                $id = array_shift($paths);
                if (empty($id)) {
                    die('Nothing To Delete');
                } else {
                    $delete = new Cars\Usecase\Cars\Process\DeleteCar($car, $repo);
                    $delete->delete_car($id);
                    //$usecase->delete_car($name);
                }
                return true;
                break;
        }
    } else {
        // We only handle resources under 'cars'
        //header('HTTP/1.1 404 Not Found');
        //throw new Exception('not car');
    }
}catch(Exception $e){
    echo 'Message: ' .$e->getMessage();
    die();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>REST</title>
    <link rel="stylesheet" href="/app/assets/css/layout.css?v=1.0">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="/app/assets/js/script.js"></script>
</head>
<body>
<?php
$m = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/views'),
));
$filters = new Cars\Usecase\Cars\Process\Filters();
echo $m->render('cars_filter', $filters->filters());
echo $m->render('cars_list', $cars_list);
$lang_form = '';
echo $m->render('form', $lang_form);
?>
</body>
</html>


