@extends('SuperAdminLayout.DashboardTemplate')

@section('main-section')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-3">
                <h3 class="text-center">Add New Employer</h3>
            </div>


        </div>

        <form action="">
            <div class="row mt-3">
                <h4>Employer Basic Information</h4>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label class="form-label mb-0">Enter Employer Name: </label>
                    <input type="text" name="employer_name" class="form-control" placeholder="Enter employer name">
                </div>

                <div class="col-md-4">
                    <label class="form-label mb-0">Enter Company Name: </label>
                    <input type="text" name="company_name" class="form-control" placeholder="Enter company name">
                </div>
            </div>
        </form>
    </div>
@endsection
