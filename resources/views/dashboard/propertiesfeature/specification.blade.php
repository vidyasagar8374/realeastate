@extends('dashboard.basedashbord') @section('title', 'addkeys')

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
                        <form id="multiStepForm" method="POST" action="{{ route('admin.storespecification') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-step">
                                    <h4 class="heading">Specifications</h4>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="key" name="key[]" class="form-control" placeholder="key">
                                                <label for="key">Key</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-floating mb-3">
                                                <input type="text" id="value" name="value[]" class="form-control" placeholder="value">
                                                <label for="value">Value</label>
                                            </div>
                                        </div>
                                        <div id="dynamic-fields-container"></div>
                                    </div>
                                </div>
                                <div class="form-bottons">
                                    <button type="button" id="add-field-button" class="btn btn-primary mt-3">Add</button>
                                    <button type="submit" class="btn btn-success mt-3">Submit</button>
                                </div>
                                <input type="hidden" name="property_id" value="{{ $properties->id }}" />
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>


document.addEventListener('DOMContentLoaded', () => {
    const addFieldButton = document.getElementById('add-field-button');
    const dynamicFieldsContainer = document.getElementById('dynamic-fields-container');

    addFieldButton.addEventListener('click', () => {
        const row = document.createElement('div');
        row.classList.add('row', 'dynamic-row', 'mt-3');
        row.innerHTML = `
            <div class="col-lg-3">
                <div class="form-floating mb-3">
                    <input type="text" name="key[]" class="form-control" placeholder="key">
                    <label>Key</label>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-floating mb-3">
                    <input type="text" name="value[]" class="form-control" placeholder="value">
                    <label>Value</label>
                </div>
            </div>
            <div class="col-lg-2 text-end">
                <button type="button" class="btn btn-danger remove-field-button"><i class="bi bi-trash"></i></button>
            </div>
        `;

        dynamicFieldsContainer.appendChild(row);

        row.querySelector('.remove-field-button').addEventListener('click', () => {
            dynamicFieldsContainer.removeChild(row);
        });
    });
});

</script>
@endsection



