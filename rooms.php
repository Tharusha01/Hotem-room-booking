<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gabary Hotel Rooms</title>
  <?php require('inc/links.php'); ?>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <style>
    .pop:hover {
      border-top-color: var(--teal) !important;
      transform: scale(1.05);
      transition: all 0.5s;
    }
  </style>

</head>

<body class="bg-light">


  <?php require('inc/header.php'); ?>

  <!-- Our Facilities-->
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center"> Our Rooms</h2>
    <div class="h-line bg-dark"></div>


  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2">Filters<h4>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                  <div class="border bg-light p-3 rounded mb-3">

                    <h5 class="mb-3" style="font-size:20px">Check Avilability</h5>
                    <label class="form-label">Check-in</label>
                    <input type="date" class="form-control shadow-none mb-3">
                    <label class="form-label">Check-out</label>
                    <input type="date" class="form-control shadow-none mb-3">
                  </div>
                  <div class="border bg-light p-3 rounded mb-3">
                    <h5 class="mb-3" style="font-size:20px;">Facilities</h5>
                    <div class="mb-2">
                      <input type="checkbox" id="f1" class="form-check-input shadow-none me-1" />
                      <label class="form-check-label" style="font-size:17px;" for="f1">Facilitie One</label>
                    </div>
                    <div class="mb-2">
                      <input type="checkbox" id="f2" class="form-check-input shadow-none me-1" />
                      <label class="form-check-label" style="font-size:17px;" for="f2">Facilitie two</label>
                    </div>
                    <div class="mb-2">
                      <input type="checkbox" id="f3" class="form-check-input shadow-none me-1" />
                      <label class="form-check-label" style="font-size:17px;" for="f3">Facilitie three</label>
                    </div>
                  </div>
                  <div class="border bg-light p-3 rounded mb-3">
                    <h5 class="mb-3" style="font-size:20px;">Guests</h5>
                    <div class="d-flex">
                      <div class="me-3">
                        <label class="form-label" style="font-size:17px;">Adults</label>
                        <input type="number" class="form-control shadow-none">
                      </div>
                      <div>
                        <label class="form-label" style="font-size:17px;">Kids</label>
                        <input type="number" class="form-control shadow-none">
                      </div>
                    </div>

                  </div>
                </div>
          </div>
        </nav>
      </div>
      <div class="col-lg-9 col-md-12 px-4">
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="https://t3.ftcdn.net/jpg/02/71/08/28/360_F_271082810_CtbTjpnOU3vx43ngAKqpCPUBx25udBrg.jpg" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
             <h5>Simple Room Name</h5>
             <div class="features mb-3">
              <h6 class="mb-3">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">2 rooms</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 bathroom</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
            </div>         
              <div class="features mb-4">
                <h6 class="mb-2">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Room heater</span>
              </div>
              <div class="features mb-4">
                <h6 class="mb-2">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">5 adults</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                
              </div>
            </div>
            <div class="col-md-2 text-align-center">
              <h6 class="mb-4">Rs.5000 Per Night</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="https://t3.ftcdn.net/jpg/02/71/08/28/360_F_271082810_CtbTjpnOU3vx43ngAKqpCPUBx25udBrg.jpg" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
             <h5>Simple Room Name</h5>
             <div class="features mb-3">
              <h6 class="mb-3">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">2 rooms</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 bathroom</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
            </div>         
              <div class="features mb-4">
                <h6 class="mb-2">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Room heater</span>
              </div>
              <div class="features mb-4">
                <h6 class="mb-2">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">5 adults</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                
              </div>
            </div>
            <div class="col-md-2 text-align-center">
              <h6 class="mb-4">Rs.5000 Per Night</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="https://t3.ftcdn.net/jpg/02/71/08/28/360_F_271082810_CtbTjpnOU3vx43ngAKqpCPUBx25udBrg.jpg" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
             <h5>Simple Room Name</h5>
             <div class="features mb-3">
              <h6 class="mb-3">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">2 rooms</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 bathroom</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
            </div>         
              <div class="features mb-4">
                <h6 class="mb-2">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Room heater</span>
              </div>
              <div class="features mb-4">
                <h6 class="mb-2">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">5 adults</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                
              </div>
            </div>
            <div class="col-md-2 text-align-center">
              <h6 class="mb-4">Rs.5000 Per Night</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="https://t3.ftcdn.net/jpg/02/71/08/28/360_F_271082810_CtbTjpnOU3vx43ngAKqpCPUBx25udBrg.jpg" class="img-fluid rounded" alt="...">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
             <h5>Simple Room Name</h5>
             <div class="features mb-3">
              <h6 class="mb-3">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">2 rooms</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 bathroom</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
            </div>         
              <div class="features mb-4">
                <h6 class="mb-2">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Room heater</span>
              </div>
              <div class="features mb-4">
                <h6 class="mb-2">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">5 adults</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                
              </div>
            </div>
            <div class="col-md-2 text-align-center">
              <h6 class="mb-4">Rs.5000 Per Night</h6>
              <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
        </div>

      </div>
      
    </div>
  </div>


  <?php require('inc/footer.php'); ?>


</body>

</html>