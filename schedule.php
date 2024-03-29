<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/icono.ico"/>
    <meta name="description" content="Natatorial.com">
    <meta name="author" content="Natatorial.com">
    <meta name="generator" content="Natatorial.com">
    <title>Swimming classes</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/script.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .grayscale {
        filter: grayscale(100%);
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/headers.css" rel="stylesheet">
    <body>
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
              <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="img/natatorial_logo.png" alt="" width="40" height="38" role="img" >
              </a>
        
              <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.html" class="nav-link px-2 link-dark"><i class="bi bi-house"></i> Home</a></li>
                <li><a class="nav-link active px-2 link-secondary"><i class="bi bi-wallet"></i>  Schedule</a></li>
                <li><a href="about.html" class="nav-link px-2 link-dark"><i class="bi bi-exclamation-circle-fill"></i> About us</a></li>
              </ul>
        
              <div class="col-md-3 text-end">
                <a href="admin/" type="button" class="btn btn-outline-dark me-2">Login</a>
              </div>
            </header>
        </div>

        <div class="container w-50">
        <img class="d-block mx-auto mb-4" src="img/natatorial_logo.png" alt="" width="150" height="140">
        <!-- <img src="img/natatorial_logo.png" width="270" height="250" role="img" alt=""> -->
        <h2 class="text-center">Checkout form</h2>
            <p class="lead text-center">Section to pay for your scheduled swimming class.</p>
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Schedule
                  </button>
                  <form class="needs-validation" enctype="multipart/form-data" name="formSchedule" id="formSchedule">
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">

                    <div class="input-group mb-3">
                      <span class="input-group-text" id="inputGroup-sizing-default"><i class="bi bi-calendar2-event-fill"></i></span>
                      <input type="date" id="scheduleDate" name="scheduleDate" onchange="dateTime()" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                    </div>

                    <div class="input-group mb-3" id="hiddenDiv" hidden>
                      <span class="input-group-text" id="inputGroup-sizing-default"><i class="bi bi-clock-fill"></i></span>
                      <select class="form-select" name="scheduleTime" id="scheduleTime" onchange="queryDate()" required>
                        <option value="">Select hour...</option>
                        <option value="9">9:00</option>
                        <option value="10">10:00</option>
                        <option value="11">11:00</option>
                        <option value="12">12:00</option>
                        <option value="13">13:00</option>
                        <option value="14">14:00</option>
                        <option value="15">15:00</option>
                        <option value="16">16:00</option>
                        <option value="17">17:00</option>
                        <option value="18">18:00</option>
                        <option value="19">19:00</option>
                        <option value="20">20:00</option>
                        <option value="21">21:00</option>
                      </select>
                    </div>
                    <div id="scheduleId"></div>
                  </div>
                    <div class="d-grid gap-2 mb-2">
                      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" id="button1" disabled>Next</button>
                    </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header border-bottom" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Billing
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="col-md-12 col-lg-12">
                      <h4 class="mb-3">Billing address</h4>

                        <div class="row g-3">
                          
                          <div class="col-sm-6">
                            <label for="lastName" class="form-label">Last name</label>
                            <input type="text" class="form-control" name="lastname" id="lastName" placeholder="" value="" onchange="validarInputs()" required>
                            <div class="invalid-feedback">
                              Valid last name is required.
                            </div>
                          </div>

                          <div class="col-sm-6">
                            <label for="firstName" class="form-label">First name</label>
                            <input type="text" class="form-control" name="firtsname" id="firstName" placeholder="" value="" onchange="validarInputs()" required>
                            <div class="invalid-feedback">
                              Valid first name is required.
                            </div>
                          </div>

                          <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" onchange="validarInputs()">
                            <div class="invalid-feedback">
                              Please enter a valid email address for shipping updates.
                            </div>
                          </div>

                          <div class="col-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" onchange="validarInputs()" onkeypress="validarInputs()" required>
                            <div class="invalid-feedback">
                              Please enter your shipping address.
                            </div>
                          </div>
                        </div>
                  </div>
                </div>
                <div class="d-grid gap-2 mb-2">
                      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" id="button2" disabled>Next</button>
                    </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse" aria-expanded="false" aria-controls="flush-collapseThree">
                    Payment
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  <h4 class="mb-3">Payment</h4>
                  <h6 class="mb-3">You can upload your file with your proof of payment</h6>

                  <!-- <div class="my-3">
                    <div class="form-check">
                      <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked>
                      <label class="form-check-label" for="credit">Credit card</label>
                    </div>
                    <div class="form-check">
                      <input id="debit" name="paymentMethod" type="radio" class="form-check-input">
                      <label class="form-check-label" for="debit">Debit card</label>
                    </div>
                    <div class="form-check">
                      <input id="paypal" name="paymentMethod" type="radio" class="form-check-input">
                      <label class="form-check-label" for="paypal">PayPal</label>
                    </div>
                  </div> -->

                  <div class="row gy-3">
                    <!-- <div class="col-md-6">
                      <label for="cc-name" class="form-label">Name on card</label>
                      <input type="text" class="form-control" id="cc-name" placeholder="" required onchange="validarInputs2()">
                      <small class="text-muted">Full name as displayed on card</small>
                      <div class="invalid-feedback">
                        Name on card is required
                      </div>
                    </div>

                    <div class="col-md-6">
                      <label for="cc-number" class="form-label">Credit card number</label>
                      <input type="text" class="form-control" id="cc-number" placeholder="" requiredv onchange="validarInputs2()">
                      <div class="invalid-feedback">
                        Credit card number is required
                      </div>
                    </div>

                    <div class="col-md-3">
                      <label for="cc-expiration" class="form-label">Expiration</label>
                      <input type="month" min="2018-03" class="form-control" id="cc-expiration" placeholder="" required onchange="validarInputs2()">
                      <div class="invalid-feedback">
                        Expiration date required
                      </div>
                    </div>

                    <div class="col-md-3">
                      <label for="cc-cvv" class="form-label">CVV</label>
                      <input type="text" class="form-control" id="cc-cvv" placeholder="" required onchange="validarInputs2()" onkeypress="validarInputs2()">
                      <div class="invalid-feedback">
                        Security code required
                      </div>
                    </div> -->
                    <div class="input-group mb-3">
                      <label class="input-group-text" for="inputGroupFile01"><i class="bi bi-folder-plus"></i></label>
                      <input type="file" class="form-control" id="fileSwimm" name="file1" onchange="validarInputs2()">
                    </div>

                  </div>
                  
                  </div>
                  <div class="d-grid gap-2 mb-2">
                      <button class="btn btn-primary" type="button" id="button3" disabled onclick="checkOut()">Next</button>
                    </div>
                  
                </div>
                
              </div>
            </div>

          <button class="w-100 btn btn-primary btn-lg mt-5" type="button" data-bs-toggle="modal" data-bs-target="#infoCheck" id="btnCheckout" onclick="reservation()" disabled>Continue to checkout</button>
        </form>
      </div>

        </div>
          
    </body>

    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">&copy; 2022 Natatorial.com</p>
    
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
       
          <img class="d-block mx-auto mb-4 grayscale" src="img/natatorial_logo.png" alt="" width="32" height="32">
          
        </a>
    
        <ul class="nav col-md-4 justify-content-end">
          <li><a href="index.html" class="nav-link px-2 link-secondary"><i class="bi bi-house"></i> Home</a></li>
          <li><a href="schedule.php" class="nav-link px-2 link-dark"><i class="bi bi-wallet"></i>  Schedule</a></li>
          <li><a href="about.html" class="nav-link px-2 link-dark"><i class="bi bi-exclamation-circle-fill"></i> About us</a></li>
        </ul>
      </footer>
    </div>

    </html>

    <!-- modal -->

    <div class="modal fade" id="infoCheck" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-credit-card-fill"></i> About reservation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <div class="card text-bg-primary mb-3" style="width: 100%;">
          <div class="card-header pt-3"><h4><i class="bi bi-info-circle"></i> Information</h4></div>
          <div class="card-body">
            <!-- <h5 class="card-title">Primary card title</h5> -->
            <p class="card-text">
            <p><strong>Date:</strong> <span id="dateInf"></span> <strong>Hour:</strong> <span id="hourInf"></span>hs</p>
                <p><strong>Last name:</strong> <span id="lastInf"></span> <strong>First name:</strong> <span id="firstInf"></span></p>
                <p><strong>Email:</strong> <span id="emailInf"></span></p>
                <p><strong>Address:</strong> <span id="addressInf"></span></p>  
            </p>
          </div>
        </div>
        <!-- <p><strong>Type of card:</strong> <span id="adresslInf"></span></p>
        <p><strong>Name of card:</strong> <span id="ccInf"></span></p>
        <p><strong>Number of card:</strong> <span id="ccnumber"></span></p>
        <p><strong>Expiration card:</strong> <span id="addresslInf"></span></p> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill"></i> Close</button>
        <button type="button" class="btn btn-primary" onclick="submitReservation()"><i class="bi bi-check-circle-fill"></i> Confirm reservation</button>
      </div>
    </div>
  </div>
</div>
