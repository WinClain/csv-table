<?php 

require './app/PageController.php';
require './app/DownoloadController.php';
$homecontroller = new PageController();
$downoload_controller = new DownoloadController();

$uri = $_SERVER['REQUEST_URI'];

    if ('/' === $uri) {
        $homecontroller->viewDownoload();
    }elseif('/downoload-file' === $uri){
        $downoload_controller->DownoloadFile()  ;
    }elseif('/view-result' === $uri){
        $homecontroller->viewResult();
    }