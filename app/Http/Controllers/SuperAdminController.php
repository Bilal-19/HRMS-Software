<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function Dashboard(){
        return view('SuperAdmin.Dashboard');
    }

    public function EmployerAccount(){
        return view('SuperAdmin.EmployerAccount');
    }

    public function EmployeesAccount(){
        return view('SuperAdmin.EmployeesAccount');
    }

    public function Payroll(){
        return view("SuperAdmin.Payroll");
    }

    public function UploadDoc(){
        return view("SuperAdmin.UploadDocs");
    }
}
