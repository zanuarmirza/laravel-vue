<?php

namespace App\Service\Employee;

use App\Models\Employee\Employee;
use App\Repository\Employee\EmployeeRepository;

class CreateEmployee
{

    /**
     * EmployeeRepository
     *
     * @var EmployeeRepository
     */
    private $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }
    /**
     * Create new Employee
     *
     * @param Employee $employee
     * @return Employee $employee 
     */
    public function create(Employee $employee){
        $employee=$this->employeeRepository->create($employee);
        return $employee;
    }
}
