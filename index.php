<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Diet Planner</title>
    <link rel="icon" href="images/balanced-diet.png">
    <!--fonts-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Ubuntu:wght@500&display=swap"
      rel="stylesheet">

    <!--bootstrap-->
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous">


    <!--css-->

    <link rel="stylesheet" href="styles.css">

    <!--awesome icons-->

    <script src="https://kit.fontawesome.com/7cc2184576.js"
      crossorigin="anonymous"></script>
  </head>

  <body>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>


    <section id="title" class="header">
      <div class="container-fluid">
        <!-- Nav Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href=""><img src="images/balanced-diet.png" alt="" width="30%"><u>Diet planner</u> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#footer"> Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testimonial-carousel"> Review</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pricing"> Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registration/sign-up.php"> Join </a>
              </li>
            </ul>
          </div>
        </nav>



        <!-- Title -->

        <div class="row">
          <div class="col-lg-6">
            <h1>lose weight and gain healthy habits</h1>
            <button type="button" class="btn btn-outline-light btn-lg
              download-buttons"><i><a href="login.php">LOGIN</a> </i></button>
            <button type="button" class="btn btn-outline-light btn-lg
              download-buttons"><i><a href="registration/sign-up.php">JOIN NOW</a> </i> </button>
          </div>
        </div>
      </div>
    </section>


    <!-- Features -->

    <section id="features">

      <div class="row">


        <div class="col-lg-4 features-box">
          <i><img class="icon" src="images/diet.png" height="45%" width="54%"
              alt=""></i>
          <h3>Nutrition Made Simple</h3>
          <p>Life is complicated—healthy eating shouldn’t be. Our system and
            customized plans make it easier.</p>
        </div>


        <div class="col-lg-4 features-box">
          <i class=""><img class="icon" src="images/timetable.png" height="45%"
              width="54%" alt=""></i>
          <h3>No Quick Fixes</h3>
          <p>We’re not a pill. Or prepackaged meals. We’re nutritional and
            behavioral science that changes your relationship with food for
            weight loss done well.</p>
        </div>

        <div class="col-lg-4 features-box">
          <i class=""><img class="icon" src="images/group.png" height="45%"
              width="54%" alt=""></i>
          <h3>A Strong Support System .</h3>
          <p>You don't have to do it alone. Our expert coaches and millions of
            members understand weight loss and are here to support you—online or
            in person.</p>
        </div></div>
    </section>


    <!-- results -->

    <section id="results">
      <div class="row">


        <div class="col-lg-6 result-box">
          <i><img src="images/pricing-page-testimonials.png"
              alt="" height="350"></i>
        </div>


        <div class="col-lg-6 result-box">
          <h2>DP members lose 2x more weight than doing it
            on their own</h2><p> *People following the DP program can expect to
            lose 1 to 2 pounds per week.</p>
        </div>


      </div>
    </section>


    <!-- Testimonials -->

    <section id="testimonials">



      <div id="testimonial-carousel" class="carousel slide" data-ride="false">
        <h2><u>Customer Reviews:</u></h2>
        <div class="carousel-inner">


          <div class="carousel-item active">
            <h3>"I've completely changed how I look at food, exercise, and the
              choices I make to feel better!"
            </h3>
            <img class="testimonial-image" src="images/customer.jpeg"
              alt="customer-profile">
            <em>Nikki M. -72 lbs*</em>
          </div>


          <div class="carousel-item">
            <h3 class="testimonial-text">"With WW, I have a new sense of self
              and identity. My life has opened up completely."
            </h3>
            <img class="testimonial-image" src="images/lady-img.jpg"
              alt="lady-profile">
            <em>Naomi M. -68 lbs*</em>
          </div>


          <div class="carousel-item">
            <h3 class="testimonial-text">"i used to be a sedentary person.
              WW helped me learn to be more active and love running!
            </h3>
            <img class="testimonial-image" src="images/customer 2.jpeg"
              alt="lady-profile">
            <em>Stephen A. -16 lbs*</em>
          </div>
        </div>

        <a class="carousel-control-prev" href="#testimonial-carousel"
          role="button" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>


        <a class="carousel-control-next" href="#testimonial-carousel"
          role="button" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>


        <a class="carousel-control-next" href="#testimonial-carousel"
          role="button" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>

    </section>




    <!-- Pricing -->

    <section id="pricing">

      <h2><u>Join for as low as $10/month until next fall!</u></h2>
      <p>HURRY UP! Choose your Duration</p>


      <div class="row">
        <div class="pricing-column col-lg-4 col-md-6">
          <div class="card">
            <div class="card-header">
              <h2>non-veg</h2>
            </div>


            <div class="card-body">
              <h4>$10.00/month</h4>
              <p>non-vegetarian</p>
              <p>Standard Monthly Fee :$23.00</p>
              <p>Starter Fee :$20.00</p>
              <p>Your Total Today :$10.00</p>
              <button class="btn btn-lg btn-block btn-outline-dark"
                type="button"><a href="donation.php">Buy Now</a> </button>
            </div>
          </div>
        </div>

        <div class="pricing-column col-lg-4 col-md-6">
          <div class="card">
            <div class="card-header">
              <h2>vegan</h2>
            </div>


            <div class="card-body">
              <h4>$15.00/month</h4>
              <p>vegan</p>
              <p>Standard Monthly Fee :$23.00</p>
              <p>Monthly Discount :$8.00</p>
              <p>Your Total Today :$15.00</p>
              <p></p>
              <button class="btn btn-lg btn-block btn-outline-dark"
                type="button"><a href="donation.php">Buy Now</a></button>

            </div>
          </div>
        </div>



        <div class="pricing-column col-lg-4 ">
          <div class="card">
            <div class="card-header">
              <h2>vegetarian</h2>
            </div>


            <div class="card-body">
              <h4>$43.00/today</h4>
              <p>vegetarian</p>
              <p>Standard Monthly Plan :$23.00</p>
              <p>Starter Fee :$20.00</p>
              <p>Your Total Today :$43.00</p>
              <button class="btn btn-lg btn-block btn-outline-dark"
                type="button"><a href="donation.php">Buy Now</a></button>
            </div>
          </div></div>
      </div>

    </section>


    <!-- Call to Action -->


    <section id="cta">
      <h3 class="cta-header">Hurry, offer ends tomorrow!<p>just $10/month until
          next fall
          Select plan purchase required. Offer terms</p>
      </h3>
      <button type="button" class="download-buttons btn btn-outline-light btn-lg ">
       <a href="login.php">LOG IN</a> </button>
      <button type="button" class="btn btn-outline-light btn-lg">
      <a href="registration/sign-up.php">BE A MEMBER</a></button>
    </section>

    <!-- Press -->

    <section id="press">
      <img class="press-logo"
        src="images/vegan-home-logo-organic-leaf-and-home-logo-suitable-for-all-companies-about-agriculture-restaurants-medicine-diet-programs-and-more-logo-template-free-vector.jpg"
        alt="tc-logo">
      <img class="press-logo" src="images/images.png" alt="tnw-logo">
      <img class="press-logo" src="images/weight-watchers.jpg"
        alt="biz-insider-logo">
      <img class="press-logo"
        src="images/calcut-the-diet-hub-dwarka-delhi-dietitians-kscksqx55q.webp"
        alt="mashable-logo">
    </section>


    <!-- Footer -->

    <footer id="footer">
      <i class="social-icon fa-brands fa-facebook"></i>
      <i class="social-icon fa-brands fa-twitter"></i>
      <i class="social-icon fa-brands fa-instagram"></i>
      <i class="social-icon fa-solid fa-envelope"></i>
      <p>© Copyright DietPlannar</p>

    </footer>


  </body>

</html>
