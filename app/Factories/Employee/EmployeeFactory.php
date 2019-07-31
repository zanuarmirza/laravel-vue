<?php

namespace App\Factory\Employee;

use App\Models\Employee\Employee;

class EmployeeFactory 
{

    public function employee($id=null,$firstName,$lastName,$job,$address,$education){
        $employee = new Employee($id,$firstName,$lastName,$job,$address,$education);
        return $employee;
    }

}
