@extends('dashboard.basedashbord') @section('title', 'addproperties') 
 @section('content')
<!-- Main Content -->
<div class="content">
  <div id="loading" class="text-center d-none mt-3">
    <img src="https://i.sstatic.net/kOnzy.gif" alt="Loading..." style="width: 50px; height: 50px;">
  </div>
  <h1>Add Appartment</h1>
  <!-- Start content Appartments-->
  <div class="container mt-5">
    <div class="col-lg-12 col-sm-10 col-xs-12">
      <div class="card">
        <div class="card-header">
          <div class="card-body">
            <!-- Step Headers -->
            <div class="mb-4">
              <div class="step-header">Basic Information</div>
            </div>
            <!-- Form -->
            <form id="multiStepForm" method="POST" action="{{ route('admin.storeproperties') }}" enctype="multipart/form-data">
             @csrf
              <!-- Step 1 -->
              <div class="form-step">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" id="title" name="title"  value="{{ old('title') }}"  class="form-control" id="floatingInput" placeholder="title">
                      <label for="floatingInput">Title</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" id="subtitle" name="subtitle"  value="{{ old('subtitle') }}" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Subtitle</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text"  id="name" name="name"  value="{{ old('name') }}" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Name</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">

                        <select class="form-control" id="country" name="country">
                          <option value="" disabled {{ old('country') ? '' : 'selected' }}>Select Country</option>
                          <option value="United States" {{ old('country') == 'United States' ? 'selected' : '' }}>United States</option>
                          <option value="Canada"{{ old('country') == 'Canada' ? 'selected' : '' }}>Canada</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="India">India</option>
                          <option value="Australia">Australia</option>
                          <option value="Germany">Germany</option>
                          <option value="France">France</option>
                          <option value="Japan">Japan</option>
                          <option value="China">China</option>
                          <option value="Brazil">Brazil</option>
                        </select>
                        
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <select class="form-control" id="country" name="country"  value="{{ old('bathrooms') }}" >
                          <option value="" disabled selected>Select State</option>
                          <option value="United States">United States</option>
                          <option value="Canada">Canada</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="India">India</option>
                          <option value="Australia">Australia</option>
                          <option value="Germany">Germany</option>
                          <option value="France">France</option>
                          <option value="Japan">Japan</option>
                          <option value="China">China</option>
                          <option value="Brazil">Brazil</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                    <select class="form-control" id="country" name="country">
                          <option value="" disabled selected>Select District</option>
                          <option value="United States">United States</option>
                          <option value="Canada">Canada</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="India">India</option>
                          <option value="Australia">Australia</option>
                          <option value="Germany">Germany</option>
                          <option value="France">France</option>
                          <option value="Japan">Japan</option>
                          <option value="China">China</option>
                          <option value="Brazil">Brazil</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                    <select class="form-control" id="country" name="country">
                          <option value="" disabled selected>Select City</option>
                          <option value="United States">United States</option>
                          <option value="Canada">Canada</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="India">India</option>
                          <option value="Australia">Australia</option>
                          <option value="Germany">Germany</option>
                          <option value="France">France</option>
                          <option value="Japan">Japan</option>
                          <option value="China">China</option>
                          <option value="Brazil">Brazil</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                    <select class="form-control" id="country" name="country">
                          <option value="" disabled selected>Select Locality</option>
                          <option value="1">United States</option>
                          <option value="2">Canada</option>
                          <option value="3">United Kingdom</option>
                          <option value="4">India</option>
                          <option value="5">Australia</option>
                          <option value="6">Germany</option>
                          <option value="7">France</option>
                          <option value="8">Japan</option>
                          <option value="9">China</option>
                          <option value="10">Brazil</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" id="facing" name="facing" value="{{ old('facing') }}" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Facing</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" id="bathrooms" name="bathrooms" value="{{ old('bathrooms') }}" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Bathrooms</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" id="bedrooms" name="bedrooms" value="{{ old('bedrooms') }}" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Bedrooms</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" id="start_sqft" name="start_sqft" value="{{ old('start_sqft') }}" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Startingsqft</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" id="end_sqft" name="end_sqft" value="{{ old('end_sqft') }}" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Endsqft</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" id="start_price" name="start_price" value="{{ old('start_price') }}" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Startprice</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" id="end_price" name="end_price" value="{{ old('end_price') }}" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Endprice</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" id="no_floors" name="no_floors" value="{{ old('no_floors') }}" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Nofloors</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" id="parking" name="parking" value="{{ old('parking') }}" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Parking</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" id="estimated_emi" name="estimated_emi" value="{{ old('estimated_emi') }}" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Estimated Emi</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="file" id="estimated_emi" name="property_sm_img" value="{{ old('property_sm_img') }}" class="form-control" id="floatingtext" placeholder="Upload file">
                      <label for="floatingPassword">SM IMage</label>
                    </div>
                  </div>
                </div>
              
              </div>
             <button type="submit" class="btn btn-primary d-flex justify-content-end">Submint</button>
            </form>
           
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End content Appartments -->
</div> @endsection