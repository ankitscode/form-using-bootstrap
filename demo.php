<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">


  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">HANGINGPANDA PVT LTD</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="jumbotron">
    <h1>FORM</h1>
    <p>Making our form using Html,CSS,Bootstrap and getting form data in our database using post method.is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
  </div>

  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="images/pexels-josh-sorenson-1054397.jpg" class="img-fluid img">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <div class="form-width">
          <form method="post" action="backend.php" <?php echo $_SERVER["PHP_SELF"]; ?>>
            <div class="formgroup">
              <label for="name" class="form-label"><strong>Name</strong> <span class="errorclass">*</span></label>
              <input type="text" name="name" class="form-control" placeholder="Name" id="" required>
              <!-- <span class="errorclass">* <?php $name_error = "";
                                              $name_error; ?></span> -->
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="formgroup py-1">
              <div></div>
              <label for="" class="form-label"> <strong>MOBILE NUMBER </strong></label>
              <input type="text" name="mobile_no" required autocomplete="off" class="form-control" placeholder="Mobile Number" id="" required >
            </div>
            <div class="formgroup py-1">
              <label for="code" class="form-label"> <strong>STUDENT CODE </strong></label>
              <input type="text" name="student_code" required autocomplete="off" class="form-control" placeholder="Student Code" id="code">
            </div>
            <div class="formgroup py-1">
              <label for="id" class="form-label"> <strong> STUDENT ID</strong></label>
              <input type="text" name="student_id" required autocomplete="off" class="form-control" placeholder="Student Id" id="id">
            </div>
            <div class="formgroup py=1">
              <label for="rollno" class="form-label"><strong>ROLL NO</strong></label>
              <input type="text" name="roll_no" required autocomplete="off" class="form-control" placeholder="Roll NO" id="roll no">
            </div>
            <div class="formgroup py-2">
              <button type="submit" class="btn btn-success">SUBMIT NOW</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <p class="py-2 m-0 bg-dark text-white text-center">@HANGINGPANDA$PVT LTD</p>
  </footer>
  <script>
    var validating = document.myform.name;
    var validating = document.myform.mobile_no;
    var validating = document.myform.student_code;
    var validating = document.myform.student_id;
    var validating = document.myform.roll_no;

    /* function validate() {
       alert("your  form is submitted")
       if (name) {
         name.classlist.remove("is-invalid");
         name.classlist.add("is-valid");
       } else {
         name.classlist.remove("is-ivalid");
         name.classlist.add("is-invalid");

       };
       if (mobile_no) {
         name.classlist.remove("is-invalid");
         name.classlist.add("is-valid");
       } else {
         name.classlist.remove("is-ivalid");
         name.classlist.add("is-invalid");

       };
       if (student_code) {
         name.classlist.remove("is-invalid");
         name.classlist.add("is-valid");
       } else {
         name.classlist.remove("is-ivalid");
         name.classlist.add("is-invalid");

       };
       if (student_id) {
         name.classlist.remove("is-invalid");
         name.classlist.add("is-valid");
       } else {
         name.classlist.remove("is-ivalid");
         name.classlist.add("is-invalid");

       };


     }*/
  </script>
  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>