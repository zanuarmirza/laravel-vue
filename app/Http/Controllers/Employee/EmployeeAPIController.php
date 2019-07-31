<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\Employee\CreateEmployee;
use App\Factory\Employee\EmployeeFactory;
use App\Repository\Employee\EmployeeRepository;
use App\Tranformers\Employee\ListEmployeeToArray;

class EmployeeAPIController extends Controller
{

    private $listEmployeeToArray;

    public function __construct(ListEmployeeToArray $listEmployeeToArray)
    {
        $this->listEmployeeToArray=$listEmployeeToArray;
    }
    
    /**
     * Return all employees
     *
     * @param EmployeeRepository $employeeRepository
     * @return void
     */
    public function index(EmployeeRepository $employeeRepository){
        $listOfEmployee = $employeeRepository->all();
        $employees = $this->listEmployeeToArray->toArray($listOfEmployee);
        return response([
            'data' => $employees
        ], 200);
    }

    /**
     * Return spesific employee by param id
     *
     * @param [type] $id
     * @param EmployeeRepository $employeeRepository
     * @return void
     */
    public function detail($id,EmployeeRepository $employeeRepository){
        $employee = $employeeRepository->find($id);
        return response((array)$employee, 200);
    }

    /**
     * Create new Employee
     *
     * @param Request $request
     * @param EmployeeFactory $employeeFactory
     * @param CreateEmployee $createEmployee
     * @return void
     */
    public function create(Request $request,EmployeeFactory $employeeFactory,CreateEmployee $createEmployee){
        $employee = $employeeFactory->employee(null,$request->firstName,$request->lastName,$request->job,$request->address,$request->education);
        $employee = $createEmployee->create($employee);
        return response((array)$employee, 200);
    }
}
