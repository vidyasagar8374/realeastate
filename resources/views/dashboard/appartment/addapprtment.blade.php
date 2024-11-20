@extends('dashboard.basedashbord') @section('title', 'addproperties') <style>
  .next-step {
    background: orange !important;
    border: none !important;
    padding: 10px 30px !important;
    border-radius: 10px !important;
    float: right !important;
    margin: 10px 0px !important;
    color: #fff !important;
  }

  .next-step1 {
    background: orange !important;
    border: none !important;
    padding: 10px 30px !important;
    border-radius: 10px !important;
    float: right !important;
    margin: 10px 0px !important;
    color: #fff !important;
  }

  .next-step2 {
    background: orange !important;
    border: none !important;
    padding: 10px 30px !important;
    border-radius: 10px !important;
    float: right !important;
    margin: 10px 0px !important;
    color: #fff !important;
    margin-left: 5px !important;
  }

  .heading {
    color: orange !important;
  }
</style> @section('content')
<!-- Main Content -->
<div class="content">
  <h1>Add Appartment</h1>
  <!-- Start content Appartments-->
  <div class="container mt-5">
    <div class="col-lg-12 col-sm-10 col-xs-12">
      <div class="card">
        <div class="card-header">
          <div class="card-body">
            <!-- Step Headers -->
            <div class="step-headers d-flex justify-content-between mb-4">
              <div class="step-header active">Basic Information</div>
            </div>
            <!-- Form -->
            <form id="multiStepForm" method="POST" action="{{ route('admin.storeproperties') }}">
             @csrf
              <!-- Step 1 -->
              <div class="form-step">
                <h4 class="heading">Basic Information</h4>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingInput" mailto:placeholder="name@example.com">
                      <label for="floatingInput">Title</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Subtitle</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Name</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">

                        <select class="form-control" id="country" name="country">
                          <option value="" disabled selected>Select Country</option>
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
                      <input type="text" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Facing</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Bathrooms</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Bedrooms</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Startingsqft</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Endsqft</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Startprice</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Endprice</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Nofloors</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Parking</label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingtext" placeholder="Description">
                      <label for="floatingPassword">Estimated Emi</label>
                    </div>
                  </div>
                </div>
              
              </div>
              <!-- Step 2 -->
             
              <!-- Step 3 -->
             <button type="submit" class="btn btn-primary d-flex justify-content-end">Submint</button>
            </form>
            <div id="loading" class="text-center d-none mt-3">
              <img src="https://i.sstatic.net/kOnzy.gif" alt="Loading..." style="width: 50px; height: 50px;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End content Appartments -->
</div> @endsection