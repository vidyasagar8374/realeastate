@extends('dashboard.basedashbord') @section('title', 'Media')
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
                                   <!-- show success and error message  using laravel response show in div -->
                                    @if (Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                    @endif 
                                    @if (Session::has('error'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('error') }}
                                    </div>
                                    @endif    
                        <form id="multiStepForm" method="POST" action="{{ route('admin.storeMedia') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-step">
                                    <h4 class="heading">Media</h4>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="title_id" name="title" class="form-control" placeholder="Title">
                                                <label for="title">Title</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                             <div class="form-floating mb-3">
                                                <input type="text" id="description_id" name="description" class="form-control" placeholder="description" required>
                                                <label for="description">Description</label>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="file" id="image_id" name="image" class="form-control" placeholder="Image" required>
                                                <label for="image_id">Image</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="video_url" name="video_url" class="form-control" placeholder="Video URL" >
                                                <label for="video_url">Video URL</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <input type="hidden" name="property_id" value="{{ $properties->id }}">
                                <div class="form-step">
                                    <button type="submit" class="btn btn-primary amenties-btn">Add Media</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection