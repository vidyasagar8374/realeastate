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
    <h1>Add Keys</h1>
    <div class="container mt-5">
        <div class="col-lg-12 col-sm-10 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <div class="step-headers d-flex justify-content-between mb-4">
                            <div class="step-header active">Keys Information</div>
                        </div>
                        <form id="multiStepForm" method="POST" action="{{ route('admin.addkeys') }}" enctype="multipart/form-data">
                            @csrf
                            <div id="dynamic-fields-container">
                                <div class="form-step">
                                    <h4 class="heading">Key Information</h4>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="value">Value:</label>
                                            <input type="text" id="value" name="value[]" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="key">Key:</label>
                                            <input type="text" id="key" name="key[]" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-bottons">
                                <button type="button" id="add-field-button" class="btn btn-primary mt-3">Add</button>
                                <button type="submit" class="btn btn-success mt-3">Submit</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('add-field-button').addEventListener('click', function () {
        const newFields = document.createElement('div');
        newFields.classList.add('form-step', 'mt-3');
        newFields.innerHTML = `
            <div class="row">
                <div class="col-lg-6">
                    <label for="value">Value:</label>
                    <input type="text" name="value[]" required>
                </div>
                <div class="col-lg-6">
                    <label for="key">Key:</label>
                    <input type="text" name="key[]" required>
                </div>
            </div>
        `;
        document.getElementById('dynamic-fields-container').appendChild(newFields);
    });
});
</script>


