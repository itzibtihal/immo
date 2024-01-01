<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="Assets/css/dashClient.css" />
    <link rel="stylesheet" href="Assets/css/Home.css" />
    <title>ImmoConnect - Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-house-user me-2"></i>Immo</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Projects</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Analytics</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Reports</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Store Mng</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-gift me-2"></i>Products</a> -->
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Chat</a>
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>Outlet</a> -->
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 text-white">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold text-white" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2 text-white"></i>Said Aabilla
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" id="profileLink" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Profile Section (initially hidden) -->
            <div id="profile-section" class="container mt-4 d-none">
                <div
                    class="row p-3 customCard shadow-sm d-flex justify-content-between align-items-start rounded col-md-10 mx-auto">
                    <div class="col-md-2">
                        <!-- User profile picture -->
                        <img src="path/to/user-profile-picture.jpg" alt="User Profile Picture"
                            class="img-fluid rounded-circle">
                    </div>
                    <div class="col-md-9">
                        <!-- User information -->
                        <h3>User Name</h3>
                        <p>Email: <span class="scndText">user@example.com</span></p>
                        <p>Phone: <span class="scndText">123-456-7890</span></p>
                        <p>Address: <span class="scndText">123 Main St</span></p>
                        <p>City: <span class="scndText">City Name</span></p>
                        <!-- Add more user information as needed -->

                        <!-- Edit button -->
                        <button class="btn mainBtnColor" id="edit-profile-btn" data-bs-toggle="modal"
                            data-bs-target="#editProfileModal">
                            Edit Profile
                        </button>
                    </div>

                    <div class="col-md-1 text-end bg-white rounded-pill" style="width: fit-content">
                        <!-- Close icon -->
                        <span class="btn-close text-white" aria-label="Close" id="close-profile-section"></span>
                    </div>
                </div>
                <!-- Edit Profile Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add your profile modification form elements here -->
                <form>
                    <!-- Example: -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter your username">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter your address">
                    </div>

                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" placeholder="Enter your city">
                    </div>

                    <!-- Add more form fields for editing user information -->
                    <button type="submit" class="btn mainBtnColor">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

            </div>

            <div id="testimonialCarousel" class="carousel slide col-md-11 mx-auto mt-4 " data-bs-ride="carousel">
                <h2 class="custom-section font-weight-bold">Waiting Announces List</h2>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row text-center">
                            <div class="col-md-4 mb-4 mb-md-0">
                                <div class="card customCard">
                                    <div class="card-body py-4 mt-2 text-start">
                                        <h6 class="rounded-pill p-2 scndryBtnColor" style="width: fit-content">STATUS
                                        </h6>
                                        <h5 class="font-weight-bold">How do I search for properties on Estatein?</h5>

                                        <h6 class="font-weight-bold my-3 scndText">Learn how to use our user-friendly
                                            search tools to find properties that match your criteria.</h6>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <p class="scndText">Price</p>
                                                <p class="custom-section">$</p>
                                            </div>

                                            <a href="#!" class="btn btn-dark btn-lg mainBtnColor">View Property
                                                Details</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-0">
                                <div class="card customCard">
                                    <div class="card-body py-4 mt-2 text-start">
                                        <h6 class="rounded-pill p-2 scndryBtnColor" style="width: fit-content">STATUS
                                        </h6>
                                        <h5 class="font-weight-bold">How do I search for properties on Estatein?</h5>

                                        <h6 class="font-weight-bold my-3 scndText">Learn how to use our user-friendly
                                            search tools to find properties that match your criteria.</h6>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <p class="scndText">Price</p>
                                                <p class="custom-section">$</p>
                                            </div>

                                            <a href="#!" class="btn btn-dark btn-lg mainBtnColor">View Property
                                                Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-0">
                                <div class="card customCard">
                                    <div class="card-body py-4 mt-2 text-start">
                                        <h6 class="rounded-pill p-2 scndryBtnColor" style="width: fit-content">STATUS
                                        </h6>
                                        <h5 class="font-weight-bold">How do I search for properties on Estatein?</h5>

                                        <h6 class="font-weight-bold my-3 scndText">Learn how to use our user-friendly
                                            search tools to find properties that match your criteria.</h6>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <p class="scndText">Price</p>
                                                <p class="custom-section">$</p>
                                            </div>

                                            <a href="#!" class="btn btn-dark btn-lg mainBtnColor">View Property
                                                Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat similar structure for other carousel items -->

                    </div>
                </div>
            </div>

            <div class="carousel-controls d-flex justify-content-center">
                <button class="carousel-control-btn custom-carousel-btn" type="button"
                    data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="arrow-icon custom-arrow-icon">&larr;</span>
                </button>
                <button class="carousel-control-btn custom-carousel-btn" type="button"
                    data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="arrow-icon custom-arrow-icon">&rarr;</span>
                </button>
            </div>

            <div id="testimonialCarousel" class="carousel slide col-md-11 mx-auto mt-4 " data-bs-ride="carousel">
                <h2 class="custom-section font-weight-bold">Real Estate History</h2>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row text-center">
                            <div class="col-md-4 mb-4 mb-md-0">
                                <div class="card customCard">
                                    <div class="card-body py-4 mt-2 text-start">
                                        <h6 class="rounded-pill p-2 scndryBtnColor" style="width: fit-content">STATUS
                                        </h6>
                                        <h5 class="font-weight-bold">How do I search for properties on Estatein?</h5>

                                        <h6 class="font-weight-bold my-3 scndText">Learn how to use our user-friendly
                                            search tools to find properties that match your criteria.</h6>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <p class="scndText">Price</p>
                                                <p class="custom-section">$</p>
                                            </div>

                                            <a href="#!" class="btn btn-dark btn-lg mainBtnColor">View Property
                                                Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-0">
                                <div class="card customCard">
                                    <div class="card-body py-4 mt-2 text-start">
                                        <h6 class="rounded-pill p-2 scndryBtnColor" style="width: fit-content">STATUS
                                        </h6>
                                        <h5 class="font-weight-bold">How do I search for properties on Estatein?</h5>

                                        <h6 class="font-weight-bold my-3 scndText">Learn how to use our user-friendly
                                            search tools to find properties that match your criteria.</h6>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <p class="scndText">Price</p>
                                                <p class="custom-section">$</p>
                                            </div>

                                            <a href="#!" class="btn btn-dark btn-lg mainBtnColor">View Property
                                                Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-0">
                                <div class="card customCard">
                                    <div class="card-body py-4 mt-2 text-start">
                                        <h6 class="rounded-pill p-2 scndryBtnColor" style="width: fit-content">STATUS
                                        </h6>
                                        <h5 class="font-weight-bold">How do I search for properties on Estatein?</h5>

                                        <h6 class="font-weight-bold my-3 scndText">Learn how to use our user-friendly
                                            search tools to find properties that match your criteria.</h6>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <p class="scndText">Price</p>
                                                <p class="custom-section">$</p>
                                            </div>

                                            <a href="#!" class="btn btn-dark btn-lg mainBtnColor">View Property
                                                Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat similar structure for other carousel items -->

                    </div>
                </div>
            </div>

            <div class="carousel-controls d-flex justify-content-center">
                <button class="carousel-control-btn custom-carousel-btn" type="button"
                    data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="arrow-icon custom-arrow-icon">&larr;</span>
                </button>
                <button class="carousel-control-btn custom-carousel-btn" type="button"
                    data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="arrow-icon custom-arrow-icon">&rarr;</span>
                </button>
            </div>


        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="Assets/js/dashClient.js"></script>

</body>

</html>