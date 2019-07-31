<?php

namespace App\Models\Employee;

class Employee 
{
    public $id;

    public $firstName;

    public $lastName;

    public $job;

    public $address;

    public $education;
    
    public function __construct($id=null,$firstName,$lastName,$job,$address,$education){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->job = $job;
        $this->address = $address;
        $this->education = $education;
    }

}
