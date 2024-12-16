@extends('dashboard.basedashbord') @section('title', 'Media') @section('content')
<style>
    .form-bottons {
        float: right !important;
    }
    .content h1 {
        color: orange;
    }
    .content .heading {
        color: orange;
    }
    .form-step .amenties-btn {
        float: right;
        background-color: orange;
        border: none;
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
                        @endif @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                        @endif

                        <!-- <div class="step-headers d-flex justify-content-between mb-4">
                            <div class="step-header active">Specifications</div>
                        </div> -->
                        <form id="multiStepForm" method="POST" action="{{ route('admin.storeropertyAmenties') }}">
                            @csrf
                            <div class="form-step">
                                <h4 class="heading">Property Amenities</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="container mt-3">
                                            <label for="example-multiselect" class="form-label">Select Options:</label>
                                            <select class="form-select" id="multiple-select-field" name="property_amenties[]" data-placeholder="Choose anything" multiple>
                                                @foreach($amenties as $ament)
                                                <option value="{{ $ament->id }}">{{ $ament->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="property_id" value="{{ $property->id }}" />
                                </div>
                            </div>
                            <div class="form-step">
                                <button type="submit" class="btn btn-primary amenties-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#multiple-select-field").select2({
        theme: "bootstrap-5",
        width: $(this).data("width") ? $(this).data("width") : $(this).hasClass("w-100") ? "100%" : "style",
        placeholder: $(this).data("placeholder"),
        closeOnSelect: false,
    });
</script>
@endsection
