<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>immo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="Assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Assets/css/proprties.css" rel="stylesheet">

  
</head>

<body>

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Discover a World of Possibilities</h1>
              <span class="color-text-a">Our portfolio of properties is as diverse as your dreams. Explore the following categories to find the perfect property that resonates with your vision of home</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active text-white" aria-current="page">
                  Properties 
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <!-- <section class="property-grid grid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="grid-option">
              <form>
                <select class="custom-select">
                  <option selected>All</option>
                  <option value="1">Shep to Expensive</option>
                  <option value="1">Expensive to Shep</option>
                  <option value="2">available</option>
                  <option value="3">Sold</option>
                </select>
              </form>
            </div>
          </div> -->
          <!-- ======= Property Grid ======= -->
<section class="property-grid grid">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="grid-option">
          <form>
            <select id="filterSelect" class="custom-select">
              <option value="all" selected>All</option>
              <option value="shepToExpensive">Shep to Expensive</option>
              <option value="expensiveToShep">Expensive to Shep</option>
              <option value="available">Available</option>
              <option value="sold">Sold</option>
            </select>
          </form>
        </div>
      </div>
   


          <?php
          


            
            use MyApp\Controllers\Proprieties;  
            $propertyController = new Proprieties();
            $propertiesForCardView = $propertyController->getAllPropertiesForCardView();
        
            foreach ($propertiesForCardView as $property): ?>
          <div class="col-md-4 property-card" data-status="<?= $property['status'] ?>">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="<?= $property['image'] ?>" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#"><?=  $property['title'] ?>
                        <br /> </a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a"><?= $property['status'] ?> |$ <?=  $property['price'] ?></span>
                    </div>
                    <a href="property-single.html" class="link-a">Click here to view
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Area</h4>
                        <span><?= $property['area'] ?>m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Beds</h4>
                        <span><?= $property['beds'] ?></span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Baths</h4>
                        <span><?= $property['baths'] ?></span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Garages</h4>
                        <span><?= $property['garage'] ?></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php endforeach  ?>



        <div class="row">
          <div class="col-sm-12">
            <nav class="pagination-a">
              <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">
                    <span class="bi bi-chevron-left"></span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item next">
                  <a class="page-link" href="#">
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Property Grid Single-->

  </main><!-- End #main -->

 

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="Assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="Assets/js/proprties.js"></script>
  
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const filterSelect = document.getElementById("filterSelect");
    const propertyCards = document.querySelectorAll(".property-card");

    filterSelect.addEventListener("change", function () {
      const selectedValue = filterSelect.value;

      propertyCards.forEach(function (card) {
        const cardStatus = card.getAttribute("data-status");

        
        if (selectedValue === "all" || selectedValue === cardStatus.toLowerCase()) {
          card.style.display = "block";
        } else {
          card.style.display = "none";
        }
      });
    });
  });
</script>


</body>

</html>