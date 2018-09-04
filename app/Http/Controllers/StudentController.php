<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BaseModels\Student;
use App\BaseModels\Parents;
use App\Employee;

use App\Http\Resources\Profile as ProfileResource;
use App\Http\Resources\Parents as ParentResource;
use App\Http\Resources\Employee as EmployeeResource;

class StudentController extends Controller
{
    //
    public function profile_details(Request $request){
        
        if($request->user_type=="student")
         return new ProfileResource(Student::profile($request->USERID));

        if($request->user_type=="parent")
        return new ProfileResource(Student::profile($request->USERID));

        if($request->user_type=="employee")
         return new EmployeeResource(Employee::profile($request->USERID));

     return $request;

    }

    public function written_tests(Request $request){

    	return Student::written_tests($request);

    }
    public function written_tests_date(Request $request){

    	return Student::written_tests_date($request);

    }
}
