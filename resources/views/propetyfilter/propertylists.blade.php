@foreach($properties as $data)
<div class="container mt-2">
  <div class="property-card row">
    <!-- Image Section -->
    <div class="card-image col-md-5">
      <img src="https://via.placeholder.com/150" alt="House Image">
      <!-- <button class="request-photos">Request Photos</button> -->
    </div>

    <!-- Text Content Section -->
    <div class="col-md-7 p-1">
     <h5 class="fw-bold">Standalone Apartment</h5>
     <p class="text-muted">2 BHK Flat in Manikonda, Hyderabad</p>
        <div class="row">
            <div class="col-4 pb-1">
                  <!-- Price Info -->
                <div class="price-info">
                    <span>₹45 Lac</span>
                    <span>₹5,000/sqft</span>
                </div>

            </div>
            <div class="col-4 pb-1">

                         <!-- Additional Details -->
                    <div class="details">
                        <p>83.61 sqft</p>
                       
                    </div>
            </div>
            <div class="col-4 pb-1"></div>
        </div>
        <!-- Additional Details -->
        <span class="text-truncate-custom" id="text-content">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem non dolor tempora? 
        <span id="toggle-btn" class="clickable-ellipsis">...</span>
        </span>
        <!-- Additional Details -->
      <!-- Contact Buttons -->
      <div class="contact-buttons d-flex gap-1">
         <p class="text-muted small">2mo ago • Owner</p>
            <button type="button" class="btn  btn-outline-primary btn-sm">Small button</button>
            <button type="button" class="btn btn-primary btn-sm">Small button</button>
      </div>
    </div>
  </div>
</div>

 <script>
document.addEventListener('DOMContentLoaded', () => {
  const textContent = document.getElementById('text-content');
  const toggleEllipsis = document.getElementById('toggle-btn');

  toggleEllipsis.addEventListener('click', () => {
    const isTruncated = textContent.classList.toggle('text-truncate-custom');
    toggleEllipsis.textContent = isTruncated ? '...' : ' Read Less';
  });
});

</script>

@endforeach
