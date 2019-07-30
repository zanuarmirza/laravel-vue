<?php

use Illuminate\Database\Seeder;
use App\Models\Employee\EmployeeEloquent;

class EmployeeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(EmployeeEloquent::class, 5)->create();
    }
}
