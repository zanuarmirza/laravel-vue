<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Factory\Employee\EmployeeFactory;
use App\Service\Employee\CreateEmployee;
use App\Repository\Employee\EmployeeRepository;
use App\Tranformers\Employee\ListEmployeeToArray;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    private $employeeRepository;

    private $listEmployeeToArray;

    public function __construct(EmployeeRepository $employeeRepository,ListEmployeeToArray $listEmployeeToArray)
    {
        $this->employeeRepository = $employeeRepository;
        $this->listEmployeeToArray = $listEmployeeToArray;
    }
    /**
     * Return main page, list employee
     *
     * @return void
     */
    public function index(){
        $employees = $this->employeeRepository->all();
        // $path = resource_path("pegawai.json");
        // $employees = json_decode(file_get_contents($path),true);
        // return view("employee",compact('employees'));
        return view("employee",compact('employees'));
    }

    public function create(){
        // $path = resource_path("pegawai.json");
        // $employees = json_decode(file_get_contents($path),true);
        // return view("employee",compact('employees'));
        return view("employeeForm");
    }

    /**
     * Return detail page
     *
     * @param [type] $id
     * @param EmployeeRepository $employeeRepository
     * @return void
     */
    public function detail($id,EmployeeRepository $employeeRepository){
        $employee = $employeeRepository->find($id);
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
        $employee = $employeeFactory->employee(null,$request->get('firstName'),$request->get('lastName'),$request->get('job'),$request->get('address'),$request->get('education'));
        $employee = $createEmployee->create($employee);
        return view("detail",["employee"=>$employee]);
    }
    
}
