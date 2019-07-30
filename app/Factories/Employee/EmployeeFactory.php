<?php

namespace App\Factory\Employee;

use App\Models\Employee\Employee;

class EmployeeFactory 
{

    public function employee($id=null,$firstName,$lastname,$job,$address,$education){
        $employee = new Employee($id,$firstName,$lastname,$job,$address,$education);
        return $employee;
    }

}
