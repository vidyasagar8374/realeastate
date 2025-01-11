<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Real Estate Listing with Scrollable Sidebar</title>
                <!-- Bootstrap Select CSS (Optional) -->
                <!-- Bootstrap CSS -->
                <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

                <!-- Bootstrap Select CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/css/bootstrap-select.min.css" rel="stylesheet">

                <!-- jQuery -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

        <style>
            body {
                margin: 0;
                padding: 0;
                overflow-x: hidden;
            }
            .sidebar {
                position: fixed;
                top: 10px;
                left: 10px;
                width: 291px;
                height: 95vh;
                padding: 15px;
                background: linear-gradient(135deg, #f8f9fa, #e9ecef);
                background-blend-mode: multiply;
                box-shadow: 3px 0 8px rgba(0, 0, 0, 0.15);
                border-top-right-radius: 15px;
                border-bottom-right-radius: 15px;
                border-right: 1px solid rgba(0, 0, 0, 0.1);
                overflow-y: auto;
                z-index: 1050;
                display: none; /* Hide sidebar by default on mobile */
            }

            /* Optional: Style the Scrollbar (for Webkit browsers) */
            .sidebar::-webkit-scrollbar {
                width: 8px;
            }

            .sidebar::-webkit-scrollbar-track {
                background: #f8f9fa;
                border-radius: 10px;
            }

            .sidebar::-webkit-scrollbar-thumb {
                background-color: #ced4da;
                border-radius: 10px;
                border: 2px solid #f8f9fa;
            }

            .sidebar::-webkit-scrollbar-thumb:hover {
                background-color: #adb5bd;
            }

            .sidebar h5 {
                margin-top: 20px;
            }

            .main-content {
                margin-left: 290px; /* Make space for the fixed sidebar */
                padding: 20px;
                height: 100vh;
                overflow-y: auto; /* Enable scrolling in the main content */
            }

            /* Listing Cards Scroll without showing the scroll bar */
            .scrollable-listings {
                max-height: calc(100vh - 40px); /* Adjust height based on header/footer if needed */
                overflow-y: auto;
                padding-right: 10px;
            }

            /* Hide scroll bar for Chrome, Safari, and Opera */
            .scrollable-listings::-webkit-scrollbar {
                width: 0px;
                background: transparent; /* Hide the scrollbar */
            }

            .listing-card {
                margin-bottom: 5px;
                height: 234px !important;
            }
            /* Extra small devices (phones, 600px and down) */
            @media only screen and (max-width: 600px) {
                .listing-card {
                            margin-bottom: 5px;
                            height: auto;
                        }
            }

/* Small devices (portrait tablets and large phones, 600px and up) */
                @media only screen and (min-width: 600px) {
                    .listing-card {
                                margin-bottom: 5px;
                                height: auto;
                            }
                }

          
            .listing-card-placeholder{
              margin-bottom: 1px;
                height: 240px;
            }

            /* Optional Styling for a Wow effect */
            .listing-card {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .listing-card:hover {
                transform: scale(1.02);
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            }

            .price-section,
            .details-section {
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
            }
            .property-image img {
                height: 95%;
                width: 100%;
                padding: 10px;
                border-radius: 10px;
            }
            /* Filter Icon on Mobile */
            .filter-icon {
                position: fixed;
                bottom: 20px;
                right: 20px;
                background-color: #dc3545;
                color: #fff;
                border-radius: 50%;
                width: 50px;
                height: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
                z-index: 1051;
            }

            /* Optional: Hide the Filter Icon on Larger Screens */
            @media (min-width: 768px) {
                .filter-icon {
                    display: none;
                }
            }
            /* Tablets and mobile devices in portrait orientation */
                @media (max-width: 991px) {
                /* Styles for tablets and smaller screens */
                .filter-icon {
                    display: block;
                }
                }
            /* Show the sidebar on larger screens */
            @media (min-width: 768px) {
                .sidebar {
                    display: block;
                }
            }
            @media (max-width: 991px) {
                /* Styles for tablets and smaller screens */
                .sidebar {
                    display: none;
                }
                }
           /* Tablets and mobile devices in portrait orientation */
                @media (min-width: 1200px) {
                /* Styles for tablets and smaller screens */
                    .sidebar {
                        display: block;
                    }
                }


            /* Main Content Margin Adjust */
            .main-content {
                margin-left: 0; /* No sidebar space on mobile */
            }
            @media (min-width: 768px) {
                .main-content {
                    margin-left: 290px; /* Space for sidebar on larger screens */
                }
            }
            @media (max-width: 991px) {
                /* Styles for tablets and smaller screens */
                .main-content {
                    margin-left: 0px; /* Space for sidebar on larger screens */
                }
            }
         
            /* Skeleton Loading Animation */
            /* Add a light gray background to simulate the loading effect */
            .skeleton-text {
                background-color: #e0e0e0;
                height: 1rem;
                border-radius: 0.25rem;
            }

            /* Add a slightly darker gray for the image placeholders */
            .skeleton-img {
                background-color: #d6d6d6;
                border-radius: 0.25rem;
            }

            /* For buttons or action elements, make them look like skeletons too */
            .skeleton-btn {
                background-color: #e0e0e0;
                height: 40px;
                border-radius: 0.25rem;
            }

            /* Add a glowing animation effect for the skeleton loaders */
            .placeholder-glow .placeholder {
                animation: loading 1.5s infinite ease-in-out;
                background: linear-gradient(90deg, #e0e0e0 25%, #f0f0f0 50%, #e0e0e0 75%);
                background-size: 200% 100%;
            }

            /* Keyframe animation for skeleton loading effect */
            @keyframes loading {
                0% {
                    background-position: -200% 0;
                }
                100% {
                    background-position: 200% 0;
                }
            }
            @media (max-width: 600px) {
                #sidebar {
                    width: 212px;
                }
            }

            /* Overlay styling */
            .overlay {
                display: none; /* Hidden by default */
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
                z-index: 999; /* Below sidebar */
            }




            /* new card stles */
     .property-card {
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      max-width: 723px;
      margin: auto;
    }
    .card-image {
      position: relative;
      background: #f8f8f8;
      padding: 20px;
      text-align: center;
    }
    .card-image img {
      max-height: 150px;
    }
    .request-photos {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
      background: #007bff;
      color: white;
      border: none;
      padding: 5px 10px;
      font-size: 14px;
      border-radius: 4px;
    }
    .request-photos:hover {
      background: #0056b3;
    }
   
    
    .text-truncate-custom {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: inline-block;
        max-width: 200px; /* Adjust as needed */
        }

        .clickable-ellipsis {
        cursor: pointer;
        color: blue; /* Optional: Gives a clickable look */
        text-decoration: underline; /* Optional: Makes it appear like a link */
        margin-left: 5px; /* Optional: Adds spacing between text and ellipsis */
        }


 
            /* new card stles */
                
</style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar Filters -->
                <aside class="sidebar col-lg-3" id="sidebar">
                    <h5>Filters</h5>
                    <!-- Price Filter -->
                    <div class="side-bar-inner">
                        <!-- filters -->
                        <form id="filter-form">
                            <!-- Location Filter -->
                            <div class="mb-3">
                                <label class="form-label">Location</label>
                          
                                <select class="selectpicker" id="location" multiple data-live-search="true">
                                <option value="hyderabad">Hyderabad</option>
                                    <option value="gachibowli">Gachibowli</option>
                                    <option value="kukatpally">Kukatpally</option>
                                    <option value="miyapur">Miyapur</option>
                                </select>
                            </div>

                            <!-- Price Filter -->
                            <div class="mb-3">
                                <label class="form-label">Price Range (₹)</label>
                                <input type="range" class="form-range" id="priceRange" min="1000000" max="20000000" />
                                <div><span>₹10 Lacs</span> - <span>₹2 Crore</span></div>
                            </div>

                            <!-- Property Type Filter -->
                            <div class="mb-3">
                                <label class="form-label">Property Type</label>
                                <select class="form-select" id="propertyType">
                                    <option value="">Select Type</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="villa">Villa</option>
                                    <option value="penthouse">Penthouse</option>
                                </select>
                            </div>

                            <!-- BHK Filter -->
                            <div class="mb-3">
                                <label class="form-label">BHK</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="bhk[]" value="1" id="1bhk" />
                                    <label class="form-check-label" for="1bhk">1 BHK</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="bhk[]" value="2" id="2bhk" />
                                    <label class="form-check-label" for="2bhk">2 BHK</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="bhk[]" value="3" id="3bhk" />
                                    <label class="form-check-label" for="3bhk">3 BHK</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="bhk[]" value="4" id="4bhk" />
                                    <label class="form-check-label" for="4bhk">4 BHK</label>
                                </div>
                            </div>

                            <!-- Area Filter -->
                            <div class="mb-3">
                                <label class="form-label">Area (sqft)</label>
                                <input type="range" class="form-range" id="areaRange" min="500" max="5000" />
                                <div><span>500 sqft</span> - <span>5000 sqft</span></div>
                            </div>

                            <!-- Amenities Filter -->
                            <div class="mb-3">
                                <label class="form-label">Amenities</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="amenities[]" value="gym" id="gym" />
                                    <label class="form-check-label" for="gym">Gym</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="amenities[]" value="swimming_pool" id="swimmingPool" />
                                    <label class="form-check-label" for="swimmingPool">Swimming Pool</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="amenities[]" value="parking" id="parking" />
                                    <label class="form-check-label" for="parking">Parking</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="amenities[]" value="clubhouse" id="clubhouse" />
                                    <label class="form-check-label" for="clubhouse">Club House</label>
                                </div>
                            </div>
                        </form>

                        <!-- Property Listings Container -->
                    </div>
                </aside>

                <!-- Main Content / Scrollable Listing Cards -->
                <main class="main-content col-lg-7">
                    <div class="scrollable-listings">
                        <!-- Repeat this block for multiple listings -->

                        <!-- Skeleton Loader Card with an ID -->
                        <div class="loading-placeholder-properties" style="display: none;">
                            <div id="property-skeleton-loader" class="card listing-card-placeholder loading-placeholder mb-4">
                                <div class="row">
                                    <!-- Image Section -->
                                    <div class="col-md-4 property-image">
                                        <div class="placeholder-glow">
                                            <div class="placeholder w-100 skeleton-img" style="height: 200px;"></div>
                                        </div>
                                    </div>

                                    <!-- Details Section -->
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <!-- Title -->
                                            <h5 class="card-title">
                                                <span class="placeholder col-6 skeleton-text"></span>
                                            </h5>
                                            <!-- Subtitle -->
                                            <p class="card-text">
                                                <span class="placeholder col-8 skeleton-text"></span>
                                            </p>

                                            <!-- Price and EMI -->
                                            <div class="price-section">
                                                <div>
                                                    <span class="placeholder col-4 skeleton-text"></span>
                                                </div>
                                                <div>
                                                    <span class="placeholder col-4 skeleton-text"></span>
                                                </div>
                                                <div>
                                                    <span class="placeholder col-4 skeleton-text"></span>
                                                </div>
                                            </div>

                                            <!-- Property Details -->
                                            <div class="details-section mt-4">
                                                <div><span class="placeholder col-4 skeleton-text"></span></div>
                                                <div><span class="placeholder col-4 skeleton-text"></span></div>
                                                <div><span class="placeholder col-4 skeleton-text"></span></div>
                                                <div><span class="placeholder col-4 skeleton-text"></span></div>
                                            </div>

                                            <!-- Action Buttons -->
                                            <div class="mt-3">
                                                <span class="placeholder col-4 skeleton-btn"></span>
                                                <span class="placeholder col-4 skeleton-btn"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <div id="property-skeleton-loader" class="card listing-card loading-placeholder mb-4">
                                <div class="row">
                                    <!-- Image Section -->
                                    <div class="col-md-4 property-image">
                                        <div class="placeholder-glow">
                                            <div class="placeholder w-100 skeleton-img" style="height: 200px;"></div>
                                        </div>
                                    </div>

                                    <!-- Details Section -->
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <!-- Title -->
                                            <h5 class="card-title">
                                                <span class="placeholder col-6 skeleton-text"></span>
                                            </h5>
                                            <!-- Subtitle -->
                                            <p class="card-text">
                                                <span class="placeholder col-8 skeleton-text"></span>
                                            </p>

                                            <!-- Price and EMI -->
                                            <div class="price-section">
                                                <div>
                                                    <span class="placeholder col-4 skeleton-text"></span>
                                                </div>
                                                <div>
                                                    <span class="placeholder col-4 skeleton-text"></span>
                                                </div>
                                                <div>
                                                    <span class="placeholder col-4 skeleton-text"></span>
                                                </div>
                                            </div>

                                            <!-- Property Details -->
                                            <div class="details-section mt-4">
                                                <div><span class="placeholder col-4 skeleton-text"></span></div>
                                                <div><span class="placeholder col-4 skeleton-text"></span></div>
                                                <div><span class="placeholder col-4 skeleton-text"></span></div>
                                                <div><span class="placeholder col-4 skeleton-text"></span></div>
                                            </div>

                                            <!-- Action Buttons -->
                                            <div class="mt-3">
                                                <span class="placeholder col-4 skeleton-btn"></span>
                                                <span class="placeholder col-4 skeleton-btn"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <!--  -->
                            <div id="property-skeleton-loader" class="card listing-card loading-placeholder mb-4">
                                <div class="row">
                                    <!-- Image Section -->
                                    <div class="col-md-4 property-image">
                                        <div class="placeholder-glow">
                                            <div class="placeholder w-100 skeleton-img" style="height: 200px;"></div>
                                        </div>
                                    </div>

                                    <!-- Details Section -->
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <!-- Title -->
                                            <h5 class="card-title">
                                                <span class="placeholder col-6 skeleton-text"></span>
                                            </h5>
                                            <!-- Subtitle -->
                                            <p class="card-text">
                                                <span class="placeholder col-8 skeleton-text"></span>
                                            </p>

                                            <!-- Price and EMI -->
                                            <div class="price-section">
                                                <div>
                                                    <span class="placeholder col-4 skeleton-text"></span>
                                                </div>
                                                <div>
                                                    <span class="placeholder col-4 skeleton-text"></span>
                                                </div>
                                                <div>
                                                    <span class="placeholder col-4 skeleton-text"></span>
                                                </div>
                                            </div>

                                            <!-- Property Details -->
                                            <div class="details-section mt-4">
                                                <div><span class="placeholder col-4 skeleton-text"></span></div>
                                                <div><span class="placeholder col-4 skeleton-text"></span></div>
                                                <div><span class="placeholder col-4 skeleton-text"></span></div>
                                                <div><span class="placeholder col-4 skeleton-text"></span></div>
                                            </div>

                                            <!-- Action Buttons -->
                                            <div class="mt-3">
                                                <span class="placeholder col-4 skeleton-btn"></span>
                                                <span class="placeholder col-4 skeleton-btn"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                        </div>

                        <!-- skeleton placeholder -->
                        <div id="property-listings">
                            @include('propetyfilter.propertylists')
                        </div>

                        <!-- Repeat more listing cards -->
                    </div>
                </main>
            </div>
        </div>

        <!-- skeleton placeholder -->
        <!-- Placeholder Card (Skeleton Loader) -->

        <div id="overlay" class="overlay" onclick="closeSidebar()"></div>
        <!-- Filter Icon for Mobile -->
        <button class="filter-icon" onclick="toggleSidebar()">
            <i class="bi bi-funnel"></i>
        </button>
         <!-- Bootstrap JS -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

        <!-- Bootstrap Select JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/js/bootstrap-select.min.js"></script>
        <!-- Bootstrap Select JS (Optional) -->

        <script>
                $(document).ready(function() {
                $('.selectpicker').selectpicker();
            });
            function toggleSidebar() {
                const sidebar = document.getElementById("sidebar");
                const overlay = document.getElementById("overlay");

                // Toggle visibility
                const isSidebarVisible = sidebar.style.display === "block";
                sidebar.style.display = isSidebarVisible ? "none" : "block";
                overlay.style.display = isSidebarVisible ? "none" : "block";
            }

            function closeSidebar() {
                document.getElementById("sidebar").style.display = "none";
                document.getElementById("overlay").style.display = "none";
            }
        </script>
        <script>
            $(document).ready(function () {
                // Trigger AJAX filter on form change
                $("#filter-form").on("change", function () {
                    $(".loading-placeholder-properties").show();
                    $("#property-listings").hide();

                    // Collect filter data from form inputs
                    const filterData = {
                        location: $("#location").val(),
                        // priceRange: $('#priceRange').val(),
                        // areaRange: $('#areaRange').val(),
                        propertyType: $("#propertyType").val(),
                        bhk: $('input[name="bhk[]"]:checked')
                            .map(function () {
                                return this.value;
                            })
                            .get(),
                        amenities: $('input[name="amenities[]"]:checked')
                            .map(function () {
                                return this.value;
                            })
                            .get(),
                    };

                    // AJAX request to filter route
                    $.ajax({
                        url: "{{ route('properties.lists') }}",
                        method: "GET",
                        data: filterData,
                        success: function (response) {
                            $(".loading-placeholder-properties").hide();
                            $("#property-listings").show();
                            console.log(response);
                            // Clear existing property listings
                            $("#property-listings").html(response.html);

                            // Populate listings from response data
                        },
                        error: function (error) {
                            $(".loading-placeholder-properties").hide();
                            console.log(error);
                        },
                    });
                });
            });

        
        </script>
    </body>
</html>
