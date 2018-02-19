  <html lang="en">

<head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

     <?php  include('header.php') ?>
     <link href="css/hover-teacher.css" rel="stylesheet">
     <link href="css/hover-staff.css" rel="stylesheet">

     <style>

.avatar {
width:200px;
/* margin: 10px; */
border-radius: 500px;
-webkit-border-radius: 500px;
-moz-border-radius: 500px;
}

</style>

</head>

<body class="fix-header fix-sidebar card-no-border logo-center">
  <div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
  </div>


    <?php  include('navbar.php') ?>

    <div class="page-wrapper">
      <div class="card-block">
        <div class="card col-xlg-12 col-lg-12 col-md-12 col-sm-12 ">
          <div class="card-block">
            <h1 class="card-title text-center "><i class="ti-user"></i><br> คณาจารย์ </h1>
          </div>
        </div>
          <div class="card">
            <div class="card-block">
              <br>
  <div class="row text-center" id="list_teacher">

  </div>
</div>
</div>


        <div class="card col-xlg-12 col-lg-12 col-md-12 col-sm-12 ">
          <div class="card-block">
          <h1 class="card-title text-center "><i class="mdi mdi-user"></i> เจ้าหน้าที่บริหารงานทั่วไป </h1>
          </div>
        </div>

        <div class="card">
          <div class="card-block">
            <br>
  <div class="row" id="list_admin">
  </div>
</div>
</div>


        <div class="card col-xlg-12 col-lg-12 col-md-12 col-sm-12 ">
          <div class="card-block">
            <h1 class="card-title text-center "><i class="mdi mdi-user"></i> ผู้ช่วยสอนและวิจัย </h1>
          </div>
        </div>

        <div class="card">
          <div class="card-block">
            <br>
  <div class="row" id="list_ta">
  </div>




  </div>
  </div>
</div>

</div>
</div>
<?php include('footer.php')?>


  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8Mg5Fex-2rEgnmve3DCccIAokXhcqmpA" type="text/javascript"></script>

    <?php include('modal-personal.php')?>
  <?php include('import-javascript.php')?>
  <script src="js/personal.js"></script>
</body>
</html>
