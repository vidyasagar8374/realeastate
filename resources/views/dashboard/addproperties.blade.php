@extends('dashboard.basedashbord')

@section('title', 'addproperties')

@section('content')
            <!-- Main Content -->
    <div class="content">
        <h1>Select Properties</h1>

        <!-- Cards -->
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-4 propertises-card">
                        <img src="{{ asset('dashbordpages/appartment-card-logo.jpg') }}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Appartments</h5>
                          <p class="card-text"></p>
                          <a href="{{ route('admin.addapprtment') }}"><button type="button" class="btn btn-outline-success">Add &nbsp; <i class="bi bi-database-add"></i></button></a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        Warning Card
                    </div>
                    <div class="card-footer">
                        <a href="#" class="text-white">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        Success Card
                    </div>
                    <div class="card-footer">
                        <a href="#" class="text-white">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                        Danger Card
                    </div>
                    <div class="card-footer">
                        <a href="#" class="text-white">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection