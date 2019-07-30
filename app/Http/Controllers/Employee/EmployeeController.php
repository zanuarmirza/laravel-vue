<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Factory\Employee\EmployeeFactory;
use App\Service\Employee\CreateEmployee;
use App\Models\Employee\EmployeeEloquent;

class EmployeeController extends Controller
{

    /**
     * Return main page, list employee
     *
     * @return void
     */
    public function index(){
        $path = resource_path("pegawai.json");
        $employees = json_decode(file_get_contents($path),true);
        return view("employee",compact('employees'));
    }

    /**
     * Return detail page
     *
     * @param [type] $id
     * @param EmployeeEloquent $employeeEloquent
     * @return void
     */
    public function detail($id,EmployeeEloquent $employeeEloquent){
        $employee = $employeeEloquent->find($id);
        return view("detail",compact('employee'));
    }

    /**
     * create new employee
     *
     * @param Request $request
     * @param EmployeeFactory $employeeFactory
     * @param CreateEmployee $createEmployee
     * @return void
     */
    public function sumbit(Request $request,EmployeeFactory $employeeFactory,CreateEmployee $createEmployee){
        $employee = $employeeFactory->employee($request->firstName,$request->lastName,$request->job,$request->address,$request->education);
        $employee = $createEmployee->create($employee);
        return view("detail",["employee"=>(array)$employee]);
    }
    
}
