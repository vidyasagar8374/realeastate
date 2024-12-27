@extends('dashboard.basedashbord') @section('title', 'addproperties') @section('content')
<!-- Main Content -->
<div class="content">
    <h1>Select Properties</h1>

    <!-- Cards -->
    <div class="row pt-3 pb-3">
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-6 propertises-card">
                        <img src="{{ asset('dashbordpages/appartment-card-logo.jpg') }}" class="img-fluid rounded-start" alt="..." />
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Appartments</h5>
                            <p class="card-text"></p>
                            <a href="{{ route('admin.addapprtment') }}">
                                <button type="button" class="btn btn-outline-success">Add &nbsp; <i class="bi bi-database-add"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-6 propertises-card">
                        <img src="{{ asset('dashbordpages/villa.jpg') }}" class="img-fluid rounded-start" alt="..." />
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Villa</h5>
                            <p class="card-text"></p>
                            <a href="{{ route('admin.addapprtment') }}">
                                <button type="button" class="btn btn-outline-success">Add &nbsp; <i class="bi bi-database-add"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-6 propertises-card">
                        <img src="{{ asset('dashbordpages/individual-house.jpg') }}" class="img-fluid rounded-start" alt="..." />
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Individual</h5>
                            <p class="card-text"></p>
                            <a href="{{ route('admin.addapprtment') }}">
                                <button type="button" class="btn btn-outline-success">Add &nbsp; <i class="bi bi-database-add"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-6 propertises-card">
                        <img src="{{ asset('dashbordpages/Investing-in-Land-A-Smart-Way-to-Grow-Your-Wealth-scaled.jpg') }}" class="img-fluid rounded-start" alt="..." />
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Invest or Land</h5>
                            <p class="card-text"></p>
                            <a href="{{ route('admin.addapprtment') }}">
                                <button type="button" class="btn btn-outline-success">Add &nbsp; <i class="bi bi-database-add"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
