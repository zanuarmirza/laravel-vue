<?php

namespace App\Models\Employee;

class Employee 
{
    public $id;

    public $firstName;

    public $lastname;

    public $job;

    public $address;

    public $education;
    
    public function __construct($id=null,$firstName,$lastname,$job,$address,$education){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastname = $lastname;
        $this->job = $job;
        $this->address = $address;
        $this->education = $education;
    }

}
