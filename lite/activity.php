<!DOCTYPE html>
<html lang="en">

<head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

     <?php  include('header.php') ?>

</head>

<body class="fix-header fix-sidebar card-no-border logo-center">

    <div class="preloader">
      <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <div id="main-wrapper">

    <?php  include('navbar.php') ?>

      <div class="page-wrapper">
        <div class="card-block">

        <div class="card">
          <center>
            <div class="card-block col-lg-4">
          <div class="card text-center">
            <div class="card-block">
              <h1>กิจกรรมของนักศึกษา</h1>
            </div>
          </div>
        </div>
      </center>
          <div class="card-block">
            <center>
              <h2>ปริญญาตรี</h2>
            </center>
            <div id="showActivityBachelor" class="row">

            </div>
            <br><br>
            <center>
              <h2>บัณฑิตศึกษา</h2>
            </center>
            <div id="showActivityGraduation" class="row">

            </div>
          </div>
        </div>


        </div>
      </div>

      <?php include('footer.php')?>
      <footer class="footer">Copyright © Information Technology 2017</footer>
    </div>

    <?php include('import-javascript.php')?>
    <script src="js/activity.js"></script>

</body>
</html>
