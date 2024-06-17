<?php

class Controller{

    public function handleRequest(){

        $start = isset($_GET['start']) ? intval($_GET['start']) : 2;
        $count = isset($_GET['count']) ? intval($_GET['count']) : 10;

        $numbers = Model::getNumbers($start, $count);
        
        $this->sendResponse($numbers);

    }

    public function sendResponse($data){

        header('Content-Type: application/json');
        echo json_encode($data);
    }
}