<?php

namespace App\Tranformers\Employee;

class ListEmployeeToArray
{
    /**
     * Tranform array of object to array
     *
     * @param array $arrayOfEmployee
     * @return void
     */
    public function toArray(array $arrayOfEmployee){
        $array=[];
        foreach($arrayOfEmployee as $employee){
            array_push($array,(array)$employee);
        }
        return $array;
    }
}
