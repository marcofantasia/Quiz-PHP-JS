<?php

class Model{

    public static function getNumbers($start, $count){
        for($i = $start; $i < $start + $count; $i++){
            $numbers[] = $i;
        }

        return $numbers;
    }
}