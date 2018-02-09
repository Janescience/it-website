<!DOCTYPE html>
<html lang="en">

<head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />

     <?php  include('header.php') ?>

</head>

<body class="fix-header fix-sidebar card-no-border logo-center">

  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.12";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

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

    <!--==================================== Show Video ====================================================-->

    <div class="modal fade" id="showVideoModal" role="dialog" aria-labelledby="Message" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header  bg-black">
            <h4 class="modal-title" >วิดีโอ</h4>
          </div>
          <div class="modal-body bg-black">

            <div id="list_video" class="row">
            </div>

          </div>
        </div>
      </div>
    </div>

    <!--===========================================================================================================-->

</body>
</html>
