<?php

require '../../vendor/autoload.php';

use Medoo\Medoo;

require 'database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>Sandbox - Modern & Multipurpose Bootstrap 5 Template</title>
  <link rel="shortcut icon" href="../assets/img/favicon.png">
  <link rel="stylesheet" href="../assets/css/plugins.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/colors/orange.css">
  <style>
        .hidden {
      display: none;
    }
    
  </style>
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg extended navbar-light navbar-bg-light caret-none">
        <div class="container flex-lg-column">
          <div class="topbar d-flex flex-row w-100 justify-content-between align-items-center">
            <div class="navbar-brand"><a href="../index.html"><img src="../assets/img/logo-dark.png" srcset="../assets/img/logo-dark@2x.png 2x" alt="" /></a></div>
            <div class="navbar-other ms-auto">
              <ul class="navbar-nav flex-row align-items-center">
                <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
                <li class="nav-item dropdown language-select text-uppercase">
                  <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="#">De</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="#">Es</a></li>
                  </ul>
                </li>
                <li class="nav-item d-lg-none">
                  <button class="hamburger offcanvas-nav-btn"><span></span></button>
                </li>
              </ul>
              <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
          </div>
          <!-- /.d-flex -->
          <div class="navbar-collapse-wrapper bg-white d-flex flex-row align-items-center">
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
              <div class="offcanvas-header d-lg-none">
                <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body d-flex flex-column h-100">
              
                <!-- /.navbar-nav -->
                <div class="offcanvas-footer d-lg-none">
                  <div>
                    <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                    <br /> 00 (123) 456 78 90 <br />
                    <nav class="nav social social-white mt-4">
                      <a href="#"><i class="uil uil-twitter"></i></a>
                      <a href="#"><i class="uil uil-facebook-f"></i></a>
                      <a href="#"><i class="uil uil-dribbble"></i></a>
                      <a href="#"><i class="uil uil-instagram"></i></a>
                      <a href="#"><i class="uil uil-youtube"></i></a>
                    </nav>
                    <!-- /.social -->
                  </div>
                </div>
                <!-- /.offcanvas-footer -->
              </div>
            </div>
            <!-- /.navbar-collapse -->
        
            <!-- /.navbar-other -->
          </div>
          <!-- /.navbar-collapse-wrapper -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
      <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
        <div class="offcanvas-header">
          <h3 class="text-white fs-30 mb-0">Sandbox</h3>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pb-6">
          <div class="widget mb-8">
            <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for your business.</p>
          </div>
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Contact Info</h4>
            <address> Moonshine St. 14/05 <br /> Light City, London </address>
            <a href="mailto:first.last@email.com">info@email.com</a><br /> 00 (123) 456 78 90
          </div>
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Learn More</h4>
            <ul class="list-unstyled">
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <!-- /.widget -->
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Follow Us</h4>
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.offcanvas-body -->
      </div>
      <!-- /.offcanvas -->
    </header>
    <!-- /header -->
 
    <section class="wrapper bg-soft-primary">
      <div class="container pt-10 pb-15 pt-md-14 pb-md-20">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-5 align-items-center">
          <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start order-2 order-lg-0" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">Manage Employe</h1>
            <!-- <p class="lead fs-lg mb-7">We specialize in web, mobile and identity design. We love to turn ideas into beautiful things.</p> -->
            <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
              <span><a href="demo_table.php" class="btn btn-primary rounded me-2">View Employees</a></span>
              <!-- <span><a class="btn btn-yellow rounded">Learn More</a></span> -->
            </div>
          </div>
          <!-- /column -->
          <!-- <div class="col-lg-7" data-cue="slideInDown">
            <figure><img class="w-auto" src="./assets/img/illustrations/i6.png" srcset="./assets/img/illustrations/i6@2x.png 2x" alt="" /></figure>
          </div> -->
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16 pb-md-17">
        <div class="row gx-md-5 gy-5 mt-n18 mt-md-n21 mb-14 mb-md-17">
          <div class="col-md-12 col-xl-12">
            <div class="card shadow-lg card-border-bottom border-soft-yellow">
              <div class="card-body">
                <!-- <img src="../assets/img/icons/lineal/browser.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" /> -->
                <h4>Employee Registration Form</h4>
                <!-- <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p> -->
                <div class="container mt-5">
                  <h2>Company Employees Form</h2>
                  <form class="needs-validation" action="process.php" method="post" novalidate >
                 
                
                    <div class="form-row row">
                      <div class="col-md-6 mb-3">
                          <label for="branchId">Branch ID</label>
                          <select class="form-control" id="branchId" name="branch_id" required>
                              <option value="">Choose...</option>
                              <?php
                              // Fetch branch IDs from branch_detail table
                              $branches = $database->select('branch_details', 'branch_id');
                              if (!empty($branches)) {
                                  foreach ($branches as $branchid) {
                                      echo "<option value='" . htmlspecialchars($branchid) . "'>" . htmlspecialchars($branchid) . "</option>";
                                  }
                              } else {
                                  echo "<option value=''>No branches available</option>";
                              }
                              ?>
                          </select>
                          <div class="invalid-feedback">
                              Please provide a branch ID.
                          </div>
                      </div>
                  </div>
                
                    <!-- Employee Information -->
                    <div class="form-row row">
                        <div class="col-md-4 mb-3">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="first_name" required placeholder="E.g. John">
                            <div class="invalid-feedback">
                                Please provide a first name.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="middleName">Middle Name <span class="text-muted">(optional)</span></label>
                            <input type="text" class="form-control" id="middleName" name="middle_name" placeholder="E.g. Robert">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="last_name" required placeholder="E.g. Doe">
                            <div class="invalid-feedback">
                                Please provide a last name.
                            </div>
                        </div>
                    </div>
                
                    <div class="form-row row">
                        <!-- New mobile number field -->
                        <div class="col-md-4 mb-3">
                            <label for="mobileNumber">Mobile Number</label>
                            <input type="text" class="form-control" id="mobileNumber" name="mobile_number" required placeholder="E.g. 123-456-7890">
                            <div class="invalid-feedback">
                                Please provide a mobile number.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="E.g. jhon@gmail.com">
                            <div class="invalid-feedback">
                                Please provide a valid email address.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required placeholder="E.g. YourPassword123">
                            <div class="invalid-feedback">
                                Please provide a password.
                            </div>
                        </div>
                   
                    </div>
                
                    <div class="form-row row">
                      <div class="col-md-4 mb-3">
                        <label for="address1">Address 1</label>
                        <input type="text" class="form-control" id="address1" name="address1" required placeholder="E.g. 123 Main St">
                        <div class="invalid-feedback">
                            Please provide an address.
                        </div>
                      </div>
                        <div class="col-md-4 mb-3">
                            <label for="address2">Address 2 <span class="text-muted">(optional)</span></label>
                            <input type="text" class="form-control" id="address2" name="address2" placeholder="E.g. Apartment 2B">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" required placeholder="E.g. Cennai">
                            <div class="invalid-feedback">
                                Please provide a city.
                            </div>
                        </div>
                      
                    </div>
                
                    <div class="form-row row">
                      <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state" name="state" required placeholder="E.g.Tamilnadu">
                        <div class="invalid-feedback">
                            Please provide a state.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="country">Country</label>
                      <input type="text" class="form-control" id="country" name="country" required placeholder="E.g. India">
                      <div class="invalid-feedback">
                          Please provide a country.
                      </div>
                  </div>
                 
                  <div class="col-md-4 mb-3">
                      <label for="role">Role</label>
                      <select class="form-control" id="role" name="role" required>
                          <option value="">Choose...</option>
                          <option value="cashier">Cashier</option>
                          <option value="executive">Executive</option>
                          <option value="driver">Driver</option>
                          <option value="branchAdmin">Branch Admin</option>
                      </select>
                      <div class="invalid-feedback">
                          Please select a role.
                      </div>
                  </div>
                    <div class="col-md-4 mb-3">
                      <label for="emergencyContacts">Emergency Contacts</label>
                      <input type="text" class="form-control" id="emergencyContacts" name="emergency_contacts" required placeholder="E.g. John Doe (123-456-7890)">
                      <div class="invalid-feedback">
                          Please provide emergency contact information.
                      </div>
                  </div>
                    
                    </div>
                    <button type="submit" name="submit" class="btn btn-gradient  gradient-2 rounded me-1 mb-2 mb-md-0">Submit</button>
                    <!-- <button class="btn btn-primary" >Submit</button> -->
                
                </form>
                
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
      
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
          <div class="col-lg-7">
            <figure><img class="w-auto" src="./assets/img/illustrations/i8.png" srcset="./assets/img/illustrations/i8@2x.png 2x" alt="" /></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h3 class="display-4 mb-7">Our three process steps on creating awesome projects.</h3>
            <div class="d-flex flex-row mb-6">
              <div>
                <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span class="number fs-18">1</span></span>
              </div>
              <div>
                <h4 class="mb-1">Collect Ideas</h4>
                <p class="mb-0">Nulla vitae elit libero pharetra augue dapibus. Praesent commodo cursus. Donec ullamcorper nulla non metus.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-6">
              <div>
                <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span class="number fs-18">2</span></span>
              </div>
              <div>
                <h4 class="mb-1">Data Analysis</h4>
                <p class="mb-0">Vivamus sagittis lacus vel augue laoreet. Etiam porta sem malesuada magna auctor fringilla augue.</p>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span class="number fs-18">3</span></span>
              </div>
              <div>
                <h4 class="mb-1">Finalize Product</h4>
                <p class="mb-0">Cras mattis consectetur purus sit amet. Aenean lacinia bibendum nulla sed. Nulla vitae elit libero pharetra.</p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-7 order-lg-2">
            <figure><img class="w-auto" src="./assets/img/illustrations/i2.png" srcset="./assets/img/illustrations/i2@2x.png 2x" alt="" /></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h3 class="display-4 mb-7 mt-lg-10">Few reasons why our valued customers choose us.</h3>
            <div class="accordion accordion-wrapper" id="accordionExample">
              <div class="card plain accordion-item">
                <div class="card-header" id="headingOne">
                  <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Professional Design </button>
                </div>
                <!--/.card-header -->
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card plain accordion-item">
                <div class="card-header" id="headingTwo">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Top-Notch Support </button>
                </div>
                <!--/.card-header -->
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card plain accordion-item">
                <div class="card-header" id="headingThree">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Header and Slider Options </button>
                </div>
                <!--/.card-header -->
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
            </div>
            <!--/.accordion -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-soft-primary">
      <div class="container py-14 pt-md-17 pb-md-20">
        <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
          <div class="col-lg-4 text-center text-lg-start">
            <h3 class="display-4 mb-3 pe-xl-15">We are proud of our works</h3>
            <p class="lead fs-lg mb-0 pe-xxl-10">We bring solutions to make life easier for our customers.</p>
          </div>
          <!-- /column -->
          <div class="col-lg-8 mt-lg-2">
            <div class="row align-items-center counter-wrapper gy-6 text-center">
              <div class="col-md-4">
                <img src="./assets/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                <h3 class="counter">7518</h3>
                <p>Completed Projects</p>
              </div>
              <!--/column -->
              <div class="col-md-4">
                <img src="./assets/img/icons/lineal/user.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                <h3 class="counter">3472</h3>
                <p>Happy Customers</p>
              </div>
              <!--/column -->
              <div class="col-md-4">
                <img src="./assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                <h3 class="counter">2184</h3>
                <p>Expert Employees</p>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16 pb-md-17">
        <div class="grid mb-14 mb-md-18 mt-3">
          <div class="row isotope gy-6 mt-n19 mt-md-n22">
            <div class="item col-md-6 col-xl-3">
              <div class="card shadow-lg card-border-bottom border-soft-primary">
                <div class="card-body">
                  <span class="ratings five mb-3"></span>
                  <blockquote class="icon mb-0">
                    <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta. Cras mattis consectetur.”</p>
                    <div class="blockquote-details">
                      <div class="info ps-0">
                        <h5 class="mb-1">Coriss Ambady</h5>
                        <p class="mb-0">Financial Analyst</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item col-md-6 col-xl-3">
              <div class="card shadow-lg card-border-bottom border-soft-primary">
                <div class="card-body">
                  <span class="ratings five mb-3"></span>
                  <blockquote class="icon mb-0">
                    <p>“Fusce dapibus, tellus ac cursus tortor mauris condimentum fermentum massa justo sit amet purus sit amet fermentum.”</p>
                    <div class="blockquote-details">
                      <div class="info ps-0">
                        <h5 class="mb-1">Cory Zamora</h5>
                        <p class="mb-0">Marketing Specialist</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item col-md-6 col-xl-3">
              <div class="card shadow-lg card-border-bottom border-soft-primary">
                <div class="card-body">
                  <span class="ratings five mb-3"></span>
                  <blockquote class="icon mb-0">
                    <p>“Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor eu rutrum. Nulla vitae libero.”</p>
                    <div class="blockquote-details">
                      <div class="info ps-0">
                        <h5 class="mb-1">Nikolas Brooten</h5>
                        <p class="mb-0">Sales Manager</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item col-md-6 col-xl-3">
              <div class="card shadow-lg card-border-bottom border-soft-primary">
                <div class="card-body">
                  <span class="ratings five mb-3"></span>
                  <blockquote class="icon mb-0">
                    <p>“Etiam adipiscing tincidunt elit convallis felis suscipit ut. Phasellus rhoncus eu tincidunt auctor nullam rutrum, pharetra augue.”</p>
                    <div class="blockquote-details">
                      <div class="info ps-0">
                        <h5 class="mb-1">Coriss Ambady</h5>
                        <p class="mb-0">Financial Analyst</p>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!--/column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.grid-view -->
        <div class="projects-tiles">
          <div class="project grid grid-view">
            <div class="row gx-md-8 gx-xl-12 gy-10 gy-md-12 isotope">
              <div class="item col-md-6 mt-md-7 mt-lg-15">
                <div class="project-details d-flex justify-content-center align-self-end flex-column ps-0 pb-0">
                  <div class="post-header">
                    <h2 class="display-4 mb-4 pe-xxl-15">Check out some of our recent projects below.</h2>
                    <p class="lead fs-lg mb-0">We love to turn ideas into beautiful things.</p>
                  </div>
                  <!-- /.post-header -->
                </div>
                <!-- /.project-details -->
              </div>
              <!-- /.item -->
              <div class="item col-md-6">
                <figure class="lift rounded mb-6"><a href="./single-project3.html"> <img src="../assets/img/photos/rp1.jpg" srcset="./assets/img/photos/rp1@2x.jpg 2x" alt="" /></a></figure>
                <div class="post-category text-line mb-2 text-violet">Stationary</div>
                <h2 class="post-title h3">Ipsum Ultricies Cursus</h2>
              </div>
              <!-- /.item -->
              <div class="item col-md-6">
                <figure class="lift rounded mb-6"><a href="../single-project2.html"> <img src="../assets/img/photos/rp2.jpg" srcset="./assets/img/photos/rp2@2x.jpg 2x" alt="" /></a></figure>
                <div class="post-category text-line mb-2 text-leaf">Invitation</div>
                <h2 class="post-title h3">Mollis Ipsum Mattis</h2>
              </div>
              <!-- /.item -->
              <div class="item col-md-6">
                <figure class="lift rounded mb-6"><a href="../single-project.html"> <img src="../assets/img/photos/rp3.jpg" srcset="./assets/img/photos/rp3@2x.jpg 2x" alt="" /></a></figure>
                <div class="post-category text-line mb-2 text-purple">Notebook</div>
                <h2 class="post-title h3">Magna Tristique Inceptos</h2>
              </div>
              <!-- /.item -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.project -->
        </div>
        <!-- /.projects-tiles -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-soft-primary">
      <div class="container py-14 py-md-17">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-7">
            <figure><img class="w-auto" src="../assets/img/illustrations/i5.png" srcset="./assets/img/illustrations/i5@2x.png 2x" alt="" /></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h3 class="display-4 mb-7">Got any questions? Don't hesitate to get in touch.</h3>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">Address</h5>
                <address>Moonshine St. 14/05 Light City, London</address>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">Phone</h5>
                <p>00 (123) 456 78 90</p>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">E-mail</h5>
                <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body">sandbox@email.com</a></p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="bg-light">
    <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <img class="mb-4" src="../assets/img/logo-dark.png" srcset="./assets/img/logo-dark@2x.png 2x" alt="" />
            <p class="mb-4">© <script>
                document.write(new Date().getUTCFullYear());
              </script> Sandbox. <br class="d-none d-lg-block" />All rights reserved.</p>
            <nav class="nav social ">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title  mb-3">Get in Touch</h4>
            <address class="pe-xl-15 pe-xxl-17">Moonshine St. 14/05 Light City, London, United Kingdom</address>
            <a href="mailto:#" class="link-body">info@email.com</a><br /> 00 (123) 456 78 90
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title  mb-3">Learn More</h4>
            <ul class="list-unstyled text-reset mb-0">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-12 col-lg-3">
          <div class="widget">
            <h4 class="widget-title  mb-3">Our Newsletter</h4>
            <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
            <div class="newsletter-wrapper">
              <!-- Begin Mailchimp Signup Form -->
              <div id="mc_embed_signup2">
                <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate " target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll2">
                    <div class="mc-field-group input-group form-floating">
                      <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                      <label for="mce-EMAIL2">Email Address</label>
                      <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary ">
                    </div>
                    <div id="mce-responses2" class="clear">
                      <div class="response" id="mce-error-response2" style="display:none"></div>
                      <div class="response" id="mce-success-response2" style="display:none"></div>
                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                    <div class="clear"></div>
                  </div>
                </form>
              </div>
              <!--End mc_embed_signup-->
            </div>
            <!-- /.newsletter-wrapper -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="../assets/js/plugins.js"></script>
  <script src="../assets/js/theme.js"></script>

  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- Include Select2 JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>
  <script>
  
    // Bootstrap validation
    (function () {
      'use strict';
      window.addEventListener('load', function () {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function (form) {
          form.addEventListener('submit', function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();


  </script>
</body>

</html>