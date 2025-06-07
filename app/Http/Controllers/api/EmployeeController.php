<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
        /**
     * Return employee data of user based on employee uuid 
     *
     * @param [type] $employeeData
     * @return void
     */
    public function show ( $employeeData)
    {
        $employee = User::where('uuid', $employeeData)->where('is_employee', true)->firstOrFail();
        
    }

        /**
     * Returns active employees 
     *
     * @return void
     */
    public function index () 
    {
        // return EmployeeData::with('user')->whereNotNull('employee_number')->get();

        // use Illuminate\Database\Eloquent\Builder;

        // Query Builder
        // $employeeData = EmployeeData::query()
        //     ->join('users', 'users.id', '=', 'employee_data.user_id')
        //     ->where('users.is_active', true)
        //     ->get();

        // Eloquent 
        $employeeData = User::where('is_employee', true)->get();

        return $employeeData;
    }
}
