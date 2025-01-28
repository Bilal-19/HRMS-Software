<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function Dashboard()
    {
        return view('SuperAdmin.Dashboard');
    }

    public function EmployerAccount()
    {
        return view('SuperAdmin.EmployerAccount');
    }

    public function AddEmployer()
    {
        return view("SuperAdmin.AddEmployer");
    }

    public function createEmployerAccount(Request $request)
    {
        print_r($request->all());
        // Form Validation
        $request->validate([
            'owner_name' => 'required',
            'company_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'account_pswd' => 'required',
            'cin' => 'required',
            'total_employees' => 'required',
            'industry_type' => 'required',
        ]);

        // Store Employer Information
        $isRecCreated = DB::table('employer')->insert([
            'owner_name' => $request->owner_name,
            'name' => $request->company_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'password' => $request->account_pswd,
            'cin' => $request->cin,
            'total_employees' => $request->total_employees,
            'industry_type' => $request->industry_type,
            'created_at' => Carbon::now()
        ]);

        // Create Employer Account - Users table.
        $isEmployerSignUp = DB::table('users')->insert([
            'name' => $request->owner_name,
            'email' => $request->email,
            'role' => 'Employer',
            'password' => $request->account_pswd,
            'created_at' => Carbon::now()
        ]);

        if ($isRecCreated && $isEmployerSignUp){
            return redirect()->back();
        }
    }

    public function EmployeesAccount()
    {
        return view('SuperAdmin.EmployeesAccount');
    }

    public function Payroll()
    {
        return view("SuperAdmin.Payroll");
    }

    public function UploadDoc()
    {
        return view("SuperAdmin.UploadDocs");
    }
}
