@extends('dashboard.basedashbord') @section('title', 'floorplans')
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
                        <form id="multiStepForm" method="POST" action="{{ route('admin.storeFloorplans') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-step">
                                    <h4 class="heading">FloorPlans</h4>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="title_id" name="title" class="form-control" placeholder="Title">
                                                <label for="title">Title</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                             <div class="form-floating mb-3">
                                                <input type="text" id="subtitle_id" name="subtitle" class="form-control" placeholder="subtitle" required>
                                                <label for="subtitle">Subtitle</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                             <div class="form-floating mb-3">
                                                <input type="number" id="Price_id" name="price" class="form-control" placeholder="price" required>
                                                <label for="Price">Price</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="file" id="image_id" name="image" class="form-control" placeholder="price" required>
                                                <label for="image_id">Image</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-step">
                                    <button type="submit" class="btn btn-primary amenties-btn">Add Plans</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection