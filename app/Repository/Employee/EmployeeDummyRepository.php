<?php

namespace App\Repository\Employee;

use App\Factory\Employee\EmployeeFactory;
use App\Models\Employee\Employee;

class EmployeeRepository
{

    private $employees=[];

    public function __construct(EmployeeFactory $employeeFactory)
    {
        $path = resource_path("pegawai.json");
        $arrayJson = json_decode(file_get_contents($path),true);
        foreach($arrayJson as $item){
            $employee = call_user_func_array(array($employeeFactory, 'employee'),$item);
            array_push($this->employees,(array)$employee);
        }
    }

    public function all(){
        return $this->employees;
    }

    public function find($id){
        $index = array_search($id,array_column($this->employees,'id'));
        return $this->employees[$index];
    }

    public function create(Employee $employee){
        $employee->id=random_int(1,10);
        return $employee;
    }

}
