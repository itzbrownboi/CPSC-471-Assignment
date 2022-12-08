<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Main Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <!--Font awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <style>
      body {
        background-image: linear-gradient(rgba(5, 13, 122, 0.8),rgba(18, 76, 110, 0.8)); background-size: cover; background-repeat: no-repeat;}
      
  </style>
</head>

<body>
  <section id="title">
    <div class="container-fluid">
      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="http://localhost/HomePage.php">Air Connect</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/Customer.php">Account</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="row">
        <div class="col-lg-6">
          <h1>Fly With Joy!</h1>
        </div>
      </div>

    </div>
  </section>
  <div class="container-fluid" style="padding-bottom: 22%;">

    <div class="row">
      <div id="tab1" class="col-lg-12  p-4 rounded-1">
        <div class="d-flex flex-column">
          <div class="d-flex align-items-center text-white fw-bold">
            <form action="SearchResult.php" method = "post">

              <div class="plane" style = "padding-left:25%;">
                <fieldset>
                  <label for="Cabin"></label>
                  <select required="" id = "flightClass" name="flightClass" onchange="this.form.()">
                      <option value="Economy">Economy</option>
                      <option value="Business class">Business class</option>
                      <option value="First class">First class</option>
                  </select>
                </fieldset>
              </div>
              <div class="dropdown1">
                  <label for="Adults">Adults </label>
                  <input type="number" id="Adult" name="Adult" >
              </div>
              <div class="dropdown3">
                 <label for="Luggage">Luggage </label>
                  <input type="number" id="Luggage" name="Luggage">
              </div>
              <!-- FLIGHT CLASS END-->

              <div id = "ip" class="d-flex align-items-center py-2">
                <!-- From -->
                <div class="col-lg-3">
                  <label for="From" class="form-label mb-0 text-white fw-bold">From</label>
                  <input class="form-control" list="datalistOptions"name = "From" id="From" placeholder="Country,city,airport">
                </div>
                <!-- FROM END -->
                <!-- TO-->
                <div class="col-lg-3">
                  <label for="To" class="form-label mb-0 text-white fw-bold">To</label>
                  <input class="form-control" name = "To" id="To" placeholder="Country,city,airport">
                </div>
                <!-- TO end -->
                <!--DEPARTURE -->
                <div class="col-lg-2 mb-0 text-white fw-bold" >
                  <label for="departure">Departure date:</label>
                  <input name="departure" type="date" class="form-control date" id="departure" placeholder="mm/dd/yyy" required="" onchange="this.form.()">
                </div>
                <!-- DEPARTURE END-->
                <!-- RETURN -->
                <div class="col-lg-2 mb-0 text-white fw-bold">
                  <label for="return">Return date:</label>
                  <input name="return" type="date" class="form-control date" id="return" placeholder="mm/dd/yyy" required="" onchange="this.form.()">
                </div>
                <!-- RETURN END -->
                <div class="button-field">
                  <button class = "btn btn-dark fw-bold btn-lg inp-width" type="submit" name="searchBtn" >Search</button> 
                </div>
              </div>
            </form>

          
          </div>

        </div>
      </div>
    </div>      
  </div>

</body>
</html>
