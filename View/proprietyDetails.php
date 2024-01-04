<?php




          use MyApp\Controllers\PropertyDetailsController;
          $propertyController = new PropertyDetailsController();
          $propertyDetails = $propertyController->getPropertyDetails(1);



         
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>immo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Assets/img/favicon.png" rel="icon">
  <link href="Assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="Assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Assets/css/proprties.css" rel="stylesheet">
  <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>


</head>

<body>


  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">

              <h1 class="title-single"> <?php echo $propertyDetails['title']; ?> </h1>
              <span class="color-text-a"><ion-icon name="location-outline"></ion-icon> <?php echo $propertyDetails['city']; ?> </span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active text-white" aria-current="page">
                  Price :
                  <br>
                  <?php echo number_format($propertyDetails['price']); ?> <span> £ </span>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div id="property-single-carousel" class="swiper">
              <div class="swiper-wrapper">
                <div class="carousel-item-b swiper-slide">
                  <img src="<?php echo $propertyDetails['image1']; ?>" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="<?php echo $propertyDetails['image2']; ?>" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="<?php echo $propertyDetails['image3']; ?>" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="<?php echo $propertyDetails['image4']; ?>" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="<?php echo $propertyDetails['image5']; ?>" alt="">
                </div>
                <!-- <div class="carousel-item-b swiper-slide">
                  <img src="Assets/img/6.webp" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="Assets/img/7.webp" alt="">
                </div> -->
              </div>
            </div>
            <div class="property-single-carousel-pagination carousel-pagination"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">

            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
                    <!-- <div class="card-box-ico">
                      <span class="bi bi-cash">$</span>
                    </div>
                    <div class="card-title-c align-self-center">
                      <h5 class="title-c">15000</h5>
                    </div> -->
                  </div>
                </div>
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Quick Summary</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between text-white">
                        <strong>Property ID:</strong>
                        <span><?php echo $propertyDetails['id']; ?></span>
                      </li>
                      <li class="d-flex justify-content-between text-white">
                        <strong> <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAf9JREFUSEvVlU2Ij1EUxn8PUjQlUlKThY3NLDQT2YyaRBOJtZrZTBYWFmwsRIlkpZTCUpM9Ih8Ln4tpaj42FBYTUVZYiKHk8R7dd/rP/N+vv/ov3Ho37z33ec557nnOFV1e6jI+HRHYdiQkqfG5xoEB3BUC2/uBfcBuYHOSdA54CNyRdLdK5tIKbK8FxhN4FUYQjEj6UhRUSGB7PTANbAJ+AteAS5Ii85AqKjkOHAZWAm+B/iKSMoJ7wDDwHtgj6VVRdrb7klQbM4Lbkg4sjWsjsL0DmAB+AduzQ7O2B4BTQZYAQv+zkqZt7wSepv9RxWwrSRHBGeA0cFnS0QT+HFi1JLt5YDCR3AAORRKSztURTAGRcZ+kl7ZvAm2lJ5Bbkg7aHgIeAZOSQoGFtVBB3uMte8sl/bb9vSD7PGxe0mrb64BPi4CTGasIeiR9a0jQA3ytJMg3becSDUiaaShR3hhTmfG21d3BBeAEcFXSkYaXfB0YzTxxXtLJOoIYCdGGTdt0EHiWQIckPakjWAZEUBx8l4z2psRoW4H7wAbgMbBL0t+Jm68yJ/cCL4A1wI8M4ApwUdKHNCq2AMcyp48BK4DPqa0/1jq55bJj3oSBFvV1QSVhwhh2UW3bqnwPbMf+3vTFbMrH9et0Tw/+eVyXaP4fvmhFlXTyr6M3uRPgPPYPlDXXGUPye5UAAAAASUVORK5CYII=" />
                          Location:</strong>
                        <span><?php echo $propertyDetails['city']; ?></span>
                      </li>
                      <li class="d-flex justify-content-between text-white">
                        <strong><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALNJREFUSEvdlUEKwjAQRd8/h1AQF3qbXsaNN9ALeRA33YmC9xjpIlBjUsjQUTTb5M+b/0kyIngpuD6fBZhZDxyBndPZAOwlnZP+xYGZPYCVs3iSXSVtagAbNyS5ojOzN33u4PuA1OU0xuR4EQfhgGnneceLOPgtQMny3Btpjuh/AKU7X4rKHVEYoPXTa3YQAbgDXWvh7PxN0rr2XY8D5wRsnZALcKgOHGfRWZlrsLQ0Eg54ApqerhngS8TVAAAAAElFTkSuQmCC" />
                          Area:</strong>
                        <span>
                        <?php echo $propertyDetails['area']; ?> m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li class="d-flex justify-content-between text-white">
                        <strong> <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAOBJREFUSEvllS0OwkAQhb+X4FEEjyMIVD0GgcVzEA7BLbAIPAmeIHAEwQUIAosaAqFNWdomu/0RsH7et/PezK6o+ahmfZoHmJk9u5LkBc+r+xJpDBCajdt5bge1A7IyKLKvkgxKA8wsAnah9rzrIkn7WCPJwMwGwAFolQTcgaGk02vcYzEzWwFTYA3MJR19QGbWBxbABFhKmrmAG9AGupIuPuKpS/aAM3CV1HEBQRvsXsQdhLRFPwII8T6rJl7UtEVbYFQRYCNp/BFyahKCsqjkqSjq7o8AFYWcyHj9uyHwB+erkRlS/3eVAAAAAElFTkSuQmCC" />
                          Beds:</strong>
                        <span><?php echo $propertyDetails['beds']; ?></span>
                      </li>
                      <li class="d-flex justify-content-between text-white">
                        <strong> <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAWFJREFUSEvVlEErRGEUhp/XL1BohFLWFsqCkqIsKDsLG6WwUBbWfgRbKTZsrJQdWWChZMMfsCHSKCv713zj3pruzO3emWuafKvb7Xznec/5znlFm4/anJ/OAWz3A4fAZFTlHbAh6bOZqhtWECV/BAKk9rwCY5K+8kLSACfACnAO7ETJdoEF4EDSZlHAGzAAlCSVQzLbI8Az8CJpuCjAIYGkwkOQ1qJ/CLB9Dczk7W1G3I2k2Wqb40Db1bb81Ynfrw5Q9GFjoY0AYRz7gEFJ761UYnsICMtYllRKtugKmANWJR23CFgDjoBLSfNJwDJwCgSvGY0XLC8oUv8E9ABLks6SgC7gARgHPiqlrgP3Wb5juxeYiowxfAdTnJb0u0u1Cm13V9zzApjIqzwRdwssSvqO/9dtsu1QyTaw1yRkq+Jd+7HyVEByL7LGNjmWSVGpZpZ1Ma+QzgGa7H9qeGG/zxLyAwyvihkcLPyyAAAAAElFTkSuQmCC" />
                          Baths:</strong>
                        <span><?php echo $propertyDetails['baths']; ?></span>
                      </li>
                      <li class="d-flex justify-content-between text-white">
                        <strong> <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAgFJREFUSEu1lTloVkEUhb9DCGITC1cEEQVFS0EIxCCCWyEGUmlcsLMTRYMW9qJFMLGwE1QQxC0EQXAjrmBjoVhoo2XQBAsbBZfjG3kvTN7yOyH80w3vnvPdmbn3PtHmpTb7kwSw3Q0cBPYCBkaBG8C4pN+tkmwE2F4JHAIOAGsaTCaBOznsiaQ/5bgZANsL8ixDtpui4KkMcg24AvzIoQPZflUU8wW4ncOeFbBpgO1bQB/QmYt+AfeAy8BdSWE/Y9nuAfYA+4GF0cfPkpaFfQwIdxvWm9z0qqSvKUVguwPYCuzL9P1Al6R/3jFgBLgk6a3tncApoDc6URPrZ2b+HDgr6aHtecBuSeFGqlVkewXwLmSRkn0U8w1YJ2ki1lWqyPYwcBQYAwYkfW8Fsj0fuAnsAs5LOv4/QMggPFCvpJcpp7C9GXgKTEha3gjIG+oVMF0FiYBwEyGxpcBGSa8LXbkPzgEngSFJgynmRYztC8AR4Iyk0xWA7Q3AA2DRbIxrYkNT9kt6US7TD8DaOZoX8veS1jc1WqiiIeAEcCwRWNHUNVrRyUskTdpeDIT5krIqmlaAw1nDXM8H2sUUd6CiqQN8LE3HRO/asE+SVpffYAdwfy6ukXabpMeVWWS7eAeKI6YCm7TlRhsHtmRj4lE2Jranmoc427XapH/ybEDl2LYD/gJmS7gZHDoQXAAAAABJRU5ErkJggg==" />
                          Garage:</strong>
                        <span><?php echo $propertyDetails['garage']; ?></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Property Description</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">

                  <?php echo $propertyDetails['description']; ?>
                  </p>
                </div>


              </div>
            </div>
          </div>
          <div class="col-md-10 offset-md-1">
            <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">


              <li class="nav-item">
                <a class="nav-link text-white" id="pills-map-tab" data-bs-toggle="pill" href="#pills-map" role="tab"
                  aria-controls="pills-map" aria-selected="false"><ion-icon name="map-outline"></ion-icon> See
                  Localisation</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">


              <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                <iframe
                  src="<?php echo $propertyDetails['localization']; ?>"
                  width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row section-t3">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Contact Agent</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <img src="assets/img/agent.jpg" alt="" class="img-fluid">
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="property-agent">
                  <h4 class="title-agent"> Mary R. Neuman </h4>
                  <p class="color-text-a">
                    Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                    dui. Quisque velit nisi,
                    pretium ut lacinia in, elementum id enim.
                  </p>
                  <ul class="list-unstyled">
                    <li class="d-flex justify-content-between">
                      <strong>Phone:</strong>
                      <span class="color-text-a">(212) 0714568932</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Mobile:</strong>
                      <span class="color-text-a">777 287 378 737</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Email:</strong>
                      <span class="color-text-a">MaryNeuman@example.com</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Skype:</strong>
                      <span class="color-text-a">Mary.R.Neuman</span>
                    </li>
                  </ul>

                  <div class="socials-a">
                    <ul class="list-inline">
                      <div class="col-md-12 mt-3">
                        <button type="submit" class="btn btn-a">Send Message</button>
                      </div>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Property Single-->

  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="Assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="Assets/js/proprties.js"></script>

</body>

</html>