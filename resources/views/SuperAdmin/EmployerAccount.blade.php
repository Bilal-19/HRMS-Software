@extends('SuperAdminLayout.DashboardTemplate')

@section('main-section')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-3">
                <h3 class="text-center">Employer Accounts</h3>
            </div>

            <div class="col-md-12">
                <a href="{{ route('SuperAdmin.AddEmployer') }}" class="primary-btn">Add Employer</a>
            </div>
            <div class="col-md-12 mt-3">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Company Name</th>
                        <th>Owner Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Total Employees</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($fetchEmployerAccounts as $rec)
                        <tr>
                            <td>{{ $rec->name }}</td>
                            <td>{{ $rec->owner_name }}</td>
                            <td>{{ $rec->email }}</td>
                            <td>{{ $rec->phone_number }}</td>
                            <td>{{ $rec->total_employees }}</td>
                            <td>
                                <a href="{{route('SuperAdmin.EditEmployerAccount', ['id'=>$rec->id])}}" class="text-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a href="" class="text-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
