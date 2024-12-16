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
                        <form id="multiStepForm" method="POST" action="{{ route('admin.storegallery') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-step">
                                    <h4 class="heading">Gallery</h4>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="file" id="galleryImages" name="images[]" class="form-control" multiple accept="image/*">
                                                <label for="image_id">Image</label>
                                            </div>
                                            <div id="galleryPreview" class="gallery-preview"></div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="property_id" value="{{ $properties->id }}">
                                <div class="form-step">
                                    <button type="submit" class="btn btn-primary amenties-btn">Add Gallery</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const galleryImages = document.getElementById('galleryImages');
const galleryPreview = document.getElementById('galleryPreview');

galleryImages.addEventListener('change', (event) => {
    const files = Array.from(event.target.files);

    // Clear previous previews
    galleryPreview.innerHTML = '';

    files.forEach((file, index) => {
        const reader = new FileReader();

        reader.onload = function (e) {
            // Create a container div for the gallery item
            const galleryItem = document.createElement('div');
            galleryItem.className = 'gallery-item';

            // Create the image element
            const img = document.createElement('img');
            img.src = e.target.result;

            // Create the remove button
            const removeBtn = document.createElement('button');
            removeBtn.className = 'remove-btn';
            removeBtn.innerHTML = '&times;';

            // Remove the image preview on button click
            removeBtn.addEventListener('click', () => {
                galleryItem.remove();
                removeFileAtIndex(index);
            });

            // Append the image and remove button to the gallery item
            galleryItem.appendChild(img);
            galleryItem.appendChild(removeBtn);

            // Append the gallery item to the preview container
            galleryPreview.appendChild(galleryItem);
        };

        reader.readAsDataURL(file);
    });
});

// Function to remove file from input field dynamically
function removeFileAtIndex(index) {
    const dt = new DataTransfer();
    const { files } = galleryImages;

    for (let i = 0; i < files.length; i++) {
        if (i !== index) {
            dt.items.add(files[i]); // Keep all files except the removed one
        }
    }

    galleryImages.files = dt.files; // Update the file input with new file list
    console.log("Remaining files:", galleryImages.files);
}

</script>
@endsection