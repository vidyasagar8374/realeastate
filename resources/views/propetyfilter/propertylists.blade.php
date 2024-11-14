@foreach($properties as $data)
<div class="card listing-card">
    <div class="row">
        <!-- Image Section -->
        <div class="col-md-4 property-image">
            <img src="{{  asset($data->property_sm_img)  }}" alt="Property Image" class="img-fluid rounded" />
        </div>
        <!-- Details Section -->
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $data->title }}</h5>
                <p class="card-text">{{ $data->subtitle }}</p>
                <!-- Price and EMI -->
                <div class="price-section">
                    <div>
                        <h6>₹39 Lacs</h6>
                        <small>₹4,588 per sq.ft.</small>
                    </div>
                    <div>
                        <h6>₹22,352/Month</h6>
                        <small>Estimated EMI</small>
                    </div>
                    <div>
                        <h6>850 sqft</h6>
                        <small>Builtup Area</small>
                    </div>
                </div>

                <!-- Property Details -->
                <div class="details-section mt-1">
                    <div>
                        <strong><i class="bi bi-compass"></i> East</strong><br />
                        Facing
                    </div>
                    <div>
                        <strong><i class="bi bi-building"></i> 1 BHK</strong><br />
                        Apartment Type
                    </div>
                    <div>
                        <strong><i class="bi bi-droplet"></i> 1</strong><br />
                        Bathrooms
                    </div>
                    <div>
                        <strong><i class="bi bi-car-front"></i> None</strong><br />
                        Parking
                    </div>
                </div>

                <!-- Action Button -->
                <div class="mt-1">
                    <a href="#" class="btn btn-danger">Get Owner Details</a>
                    <a href="#" class="btn btn-outline-secondary">Join Visit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
