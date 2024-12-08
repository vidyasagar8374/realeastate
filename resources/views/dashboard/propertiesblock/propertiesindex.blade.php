@extends('dashboard.basedashbord') @section('title', 'addproperties') 
 @section('content')
<!-- Main Content -->
<!-- boostrap table for properties list -->
<!-- Main Content -->
<div class="content">
  <div id="loading" class="text-center d-none mt-3">
    <img src="https://i.sstatic.net/kOnzy.gif" alt="Loading..." style="width: 50px; height: 50px;">
  </div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4>Properties List</h4>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Subtitle</th>               
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($properties as $property)
              <tr>
                <th scope="row">{{ $property->id }}</th>
                <td>{{ $property->title }}</td>
                <td>{{ $property->subtitle }}</td>               
                <td>
                <button type="button" class="btn btn-primary" id="launchModal"  onclick="launchModal({{ $property->id, $property->propertie_id }})" >
                Launch demo modal
                </button>

                  <a href="#" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<script>
  function launchModal(propertyId, propertyExists) {
    // Generate the dynamic route URL
    const detailsUrl = `/properties/${propertyId}`;
    const amenitiesUrl = `/properties/${propertyId}/amenities`;
    const videoUrl = `/properties/${propertyId}/videos`;
    const imagesUrl = `/properties/${propertyId}/images`;

    // Construct the dynamic HTML content with icons
    const modalContent = `
      <div class="container">
      <p>Property ID: ${propertyId}</p>
        <div class="row">
            <div class="col">
                <p> <a href="${detailsUrl}" class="btn btn-link" target="_blank">
                  <i class="bi bi-house"></i> View Property Details
                 </a></p> 
                 
            </div>
            <div class="col">
                <p> <a href="${amenitiesUrl}" class="btn btn-link" target="_blank">
                  <i class="bi bi-list-check"></i> View Property Details
                 </a></p> 
            </div>
            <div class="col">
                <p> <a href="${videoUrl}" class="btn btn-link" target="_blank">
                  <i class="bi bi-play-circle"></i> View Property Details
                 </a></p> 
            </div>
            <div class="col">
                <p> <a href="${imagesUrl}" class="btn btn-link" target="_blank">
                  <i class="bi bi-images"></i> View Property Details
                 </a></p> 
            </div>

        </div>
      </div>
     
    
    `;

    // Get the modal body and append the link
     // Update the modal body with the new content
     const modalBody = document.querySelector('#exampleModal .modal-body');
     modalBody.innerHTML = modalContent; 

    // Initialize and show the modal
    const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
    modal.show();
  }
</script>
<!-- model -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Placeholder for dynamic content -->
        <p>Loading...</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- model -->
@endsection