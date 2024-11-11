@extends('dashboard.basedashbord')

@section('title', 'addproperties')

@section('content')
            <!-- Main Content -->
    <div class="content">
        <h1>Add Appartment</h1>
            <!-- Start content Appartments-->
            <div class="container mt-5">
                <div class="col-lg-10 col-sm-10 col-xs-12">
                    <div class="card">
                      <div class="card-header">
                        <div class="card-body">
                <!-- Step Headers -->
                <div class="step-headers d-flex justify-content-between mb-4">
                    <div class="step-header active" data-step="0">Basic Information</div>
                    <div class="step-header" data-step="1">Address</div>
                    <div class="step-header" data-step="2">Uploads</div>
                </div>
            
                <!-- Form -->
                <form id="multiStepForm">
                    <!-- Step 1 -->
                    <div class="form-step">
                        <h4>Basic Information</h4>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <button type="button" class="btn btn-primary next-step">Next</button>
                    </div>
            
                    <!-- Step 2 -->
                    <div class="form-step d-none">
                        <h4>Address</h4>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <button type="button" class="btn btn-secondary prev-step">Previous</button>
                        <button type="button" class="btn btn-primary next-step">Next</button>
                    </div>
            
                    <!-- Step 3 -->
                    <div class="form-step d-none">
                        <h4>Uploads</h4>
                        <div class="form-group">
                            <label for="file">Upload File:</label>
                            <input type="file" class="form-control" id="file" name="file" required>
                        </div>
                        <button type="button" class="btn btn-secondary prev-step">Previous</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
                <div id="loading" class="text-center d-none mt-3">
                  <img src="https://i.sstatic.net/kOnzy.gif" alt="Loading..." style="width: 50px; height: 50px;">
                </div>
              </div>
            </div>
          </div>
            </div>
          </div>
            <!-- End content Appartments -->
    </div>



@endsection