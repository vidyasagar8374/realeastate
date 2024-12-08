@extends('dashboard.basedashbord') @section('title', 'addamenties')

@section('content')

<style>
.form-bottons{
    float: right !important;
}
.content h1{
   color:orange; 
}
.content .heading{
   color:orange; 
}
.form-step .amenties-btn{
 float: right;
 background-color:orange;
 border:none;
}
</style>

<div class="content">
    <!-- <h1>Add Keys</h1> -->
    <div class="container mt-5">
        <div class="col-lg-12 col-sm-10 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <!-- <div class="step-headers d-flex justify-content-between mb-4">
                            <div class="step-header active">Specifications</div>
                        </div> -->
                        <form id="multiStepForm" method="POST" action="{{ route('admin.storeAmenties') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-step">
                                    <h4 class="heading">Amenties</h4>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="name_id" name="name" class="form-control" placeholder="Name">
                                                <label for="name">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                             <div class="form-floating mb-3">
                                                <input type="text" id="icon_id" name="icon" class="form-control" placeholder="Icon">
                                                <label for="icon">Icon</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-step">
                                    <button type="submit" class="btn btn-primary amenties-btn">Add Amenities</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection