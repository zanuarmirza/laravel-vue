<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\Employee\CreateEmployee;
use App\Factory\Employee\EmployeeFactory;
use App\Models\Employee\EmployeeEloquent;
use App\Repository\Employee\EmployeeRepository;

class EmployeeAPIController extends Controller
{
    /**
     * Return all employees
     *
     * @return string
     */
    public function index(EmployeeRepository $employeeRepository){
        $employee = $employeeRepository->all();
        return response([
            'data' => $employee
        ], 200);
    }

    /**
     * Return spesific employee by param id
     *
     * @param [type] $id
     * @param EmployeeEloquent $employeeEloquent
     * @return string
     */
    public function detail($id,EmployeeRepository $employeeRepository){
        $employeeCollection = $employeeRepository->find($id);
        return response($employeeCollection, 200);
    }

    /**
     * Create new Employee
     *
     * @param Request $request
     * @return string 
     */
    public function create(Request $request,EmployeeFactory $employeeFactory,CreateEmployee $createEmployee){
        $employee = $employeeFactory->employee(null,$request->firstName,$request->lastName,$request->job,$request->address,$request->education);
        $employee = $createEmployee->create($employee);
        return response((array)$employee, 200);
    }
}
