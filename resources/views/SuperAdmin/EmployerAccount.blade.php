@extends('SuperAdminLayout.DashboardTemplate')

@section('main-section')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-3">
                <h3 class="text-center">Employer Accounts</h3>
            </div>

            <div class="col-md-12">
                <a href="{{route("SuperAdmin.AddEmployer")}}" class="primary-btn">Add Employer</a>
            </div>
            <div class="col-md-12 mt-3">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Company Name</th>
                        <th>Employer Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Total Employees</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
