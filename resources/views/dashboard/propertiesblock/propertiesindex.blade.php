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
    const routes = {
        viewproperty : "{{ route('properties.singleproperty', ['id' => '__PROPERTY_ID__']) }}",
        videoUrl : "{{ route('admin.media', ['property_id' => '__PROPERTY_ID__']) }}",
        imagesUrl : "{{ route('admin.gallery', ['property_id' => '__PROPERTY_ID__']) }}",
        propertyAmenities : "{{ route('admin.propertyamenties', ['property_id' => '__PROPERTY_ID__']) }}",
        specifications : "{{ route('admin.specification', ['property_id' => '__PROPERTY_ID__']) }}",
        floorPlan : "{{ route('admin.floorplans', ['property_id' => '__PROPERTY_ID__']) }}"
    };
</script>
<script>
  function launchModal(propertyId, propertyExists) {
  
    // Generate the dynamic route URL
    // send to route service
    const detailsUrl = routes.propertyAmenities.replace('__PROPERTY_ID__', propertyId);
    const propertyAmenitiesdetail = routes.propertyAmenities.replace('__PROPERTY_ID__', propertyId);
    const videourUrl = routes.videoUrl.replace('__PROPERTY_ID__', propertyId);
    const imagesUrl = routes.imagesUrl.replace('__PROPERTY_ID__', propertyId);
    const specificationsUrl = routes.specifications.replace('__PROPERTY_ID__', propertyId);
    const floorPlanUrl = routes.floorPlan.replace('__PROPERTY_ID__', propertyId);

    // Construct the dynamic HTML content with icons
    const modalContent = `
      <div class="container">
      <p>Property ID: ${propertyId}</p>
        <div class="row">
            <div class="col-lg-2 col-md-12 col-xs-6 unstyled-link m-1">
                <div class=""> <a href="${detailsUrl}" class="btn btn-link" target="_blank">
                  <i class="bi bi-house d-block"></i>View
                 </a></div>  
            </div>
            <div class="col-lg-2 col-md-12 col-xs-6 unstyled-link m-1">
                <div class=""> <a href="${propertyAmenitiesdetail}" class="btn btn-link" target="_blank">
                  <i class="bi bi-list-check d-block"></i>Ammenities
                 </a></div> 
            </div>
            <div class="col-lg-2 col-md-12 col-xs-6 unstyled-link m-1">
                <div class=""> 
                <a href="${videourUrl}" class="btn btn-link" target="_blank">
                  <i class="bi bi-play-circle d-block"></i>video
                 </a>
                 </div> 
            </div>
            <div class="col-lg-2 col-md-12 col-xs-6 unstyled-link m-1">
                <div class=""> <a href="${imagesUrl}" class="btn btn-link" target="_blank">
                  <i class="bi bi-images d-block"></i>Images
                 </a></div> 
            </div>
               <div class="col-lg-2 col-md-12 col-xs-6 unstyled-link m-1">
                <div class=""> <a href="${floorPlanUrl}" class="btn btn-link" target="_blank">
                  <i class="bi bi-images d-block"></i>Planning
                 </a></div> 
            </div>
              <div class="col-lg-2 col-md-12 col-xs-6 unstyled-link m-1">
                <div class=""> <a href="${specificationsUrl}" class="btn btn-link" target="_blank">
                  <i class="bi bi-images d-block"></i>Specifications
                 </a></div> 
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
        <h5 class="modal-title" id="exampleModalLabel">Assets</h5>
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