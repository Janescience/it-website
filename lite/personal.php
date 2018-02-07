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
margin: 10px;
border-radius: 500px;
-webkit-border-radius: 500px;
-moz-border-radius: 500px;
}

</style>

</head>

<body class="fix-header fix-sidebar card-no-border logo-center">

  <div id="main-wrapper">

    <?php  include('navbar.php') ?>

    <div class="page-wrapper">
      <div class="card-block">
          <div class="card">
            <div class="card-block">

      <div class="row">
        <div class="section-title col-lg-12 col-md-12 ">
          <h1 class="mb-4"><i class="ti-user"></i> คณาจารย์</h1><br>
        </div>
      </div>
  <div class="row col-lg-12" id="list_teacher">

  </div>

  <div class="row">
    <div class="section-title col-lg-12 col-md-10 ">
      <h1 class="mb-4"><i class="ti-user"></i> เจ้าหน้าที่บริหารงานทั่วไป</h1><br>
    </div>
  </div>

  <div class="row" id="list_admin">
  </div>

  <div class="row">
    <div class="section-title col-lg-12 col-md-10 ">
      <h1 class="mb-4"><i class="ti-user"></i> ผู้ช่วยสอนและวิจัย</h1><br>
    </div>
  </div>

  <div class="row" id="list_ta">
  </div>




  </div>
  </div>
</div>

</div>
</div>
<?php include('footer.php')?>
<footer class="footer">

  Copyright © Information Technology 2017
</footer>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8Mg5Fex-2rEgnmve3DCccIAokXhcqmpA" type="text/javascript"></script>

    <?php include('modal-personal.php')?>
  <?php include('import-javascript.php')?>
  <script src="js/personal.js"></script>
</body>
</html>
