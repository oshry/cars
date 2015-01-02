<?php
namespace Cars\Usecase\Cars\Process;

class Filters {
    public function filters(){
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

    }

}