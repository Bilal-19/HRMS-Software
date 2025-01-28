@extends('SuperAdminLayout.DashboardTemplate')

@section('main-section')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-3">
                <h3 class="text-center">Create Employer Account</h3>
            </div>


        </div>

        <form action="{{ route('SuperAdmin.createEmployerAccount') }}" autocomplete="off" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <label class="form-label mb-0">Employer Owner Name: </label>
                    <input type="text" name="owner_name" class="form-control" placeholder="Ex.Bilal">
                    <small class="text-danger">
                        @error('owner_name')
                            {{ $message }}
                        @enderror
                    </small>
                </div>

                <div class="col-md-4">
                    <label class="form-label mb-0">Enter Company Name: </label>
                    <input type="text" name="company_name" class="form-control" placeholder="Ex. Software Solutions">
                    <small class="text-danger">
                        @error('company_name')
                            {{ $message }}
                        @enderror
                    </small>
                </div>

                <div class="col-md-4">
                    <label class="form-label mb-0">Enter Email: </label>
                    <input type="email" name="email" class="form-control" placeholder="softsolutions@gmail.com">
                    <small class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-4">
                    <label class="form-label mb-0">Enter Phone Number: </label>
                    <input type="number" name="phone_number" class="form-control" placeholder="+92-3082491543">
                    <small class="text-danger">
                        @error('phone_number')
                            {{ $message }}
                        @enderror
                    </small>
                </div>

                <div class="col-md-8">
                    <label class="form-label mb-0">Enter Company Address: </label>
                    <input type="text" name="address" class="form-control" placeholder="Ex. Humaira Apartment.">
                    <small class="text-danger">
                        @error('address')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
            </div>

            <div class="row mt-3">
                <h4>Account Information</h4>
            </div>

            <div class="row mt-1">
                <div class="col-md-6">
                    <label class="form-label mb-0">Enter Password: </label>
                    <input type="password" name="account_pswd" class="form-control">
                    <small class="text-danger">
                        @error('account_pswd')
                            {{ $message }}
                        @enderror
                    </small>
                </div>

                <div class="col-md-6">
                    <label class="form-label mb-0">Enter Company Identification Number: </label>
                    <input type="number" name="cin" class="form-control" placeholder="53507024">
                    <small class="text-danger">
                        @error('cin')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
            </div>

            <div class="row mt-3">
                <h4>Company Details</h4>
            </div>

            <div class="row mt-1">
                <div class="col-md-6">
                    <label class="form-label mb-0">Enter Number of Employees: </label>
                    <input type="number" name="total_employees" class="form-control">
                    <small class="text-danger">
                        @error('total_employees')
                            {{ $message }}
                        @enderror
                    </small>
                </div>

                <div class="col-md-6">
                    <label class="form-label mb-0">Select Industry Type: </label>
                    @php
                        $industries = ['IT', 'Construction', 'Healthcare', 'Education'];
                    @endphp
                    <select name="industry_type" class="form-select">
                        @foreach ($industries as $value)
                            <option value="{{ $value }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <small class="text-danger">
                        @error('industry_type')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-3">
                    <button class="btn btn-primary">Create Account</button>
                </div>
            </div>
        </form>
    </div>
@endsection
