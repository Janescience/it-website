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

<!--============================ หลักสูตร =================================-->

<div class="col-xlg-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                          <div class="card-body">
                              <br>
                              <h4 class="card-title text-center">หลักสูตร</h4>
                              <h6 class="card-subtitle text-center" >ระดับปริญญาเอก </h6>


                                <div class="table-responsive m-t-20">
                                    <table class="table stylish-table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">ชื่อหลักสูตร</th>
                                                <th></th>

                                            </tr>
                                            <tr id="loaderHeader2">
                                              <td colspan="6"><img src="../images/ajax-loader.gif">  Loading...</td>
                                            </tr>
                                        </thead>
                                        <tbody id="Suggestion_work">

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
</div>




<!--============================ สาขาวิชา =================================-->
<div class="col-xlg-12 col-lg-12 col-md-12 col-sm-12" id="branch">
    <div class="card">
        <div class="card-block">
        <div class="card-body">
          <br>
          <br>
          <br>
          <br>
          <br>
            <h4 class="card-title text-center">กลุ่มวิชาที่เปิดสอน</h4>
            <h6 class="card-subtitle text-center" id="TitleStudyplan"></h6> </div>

        <div class="comment-widgets">
          <div class="row" id="Branch_work">



                </div>



        </div>
    </div>
</div>
</div>






<!--=====================================================================-->
<!--============================ รายวิชา =================================-->

<!--=====================================================================-->
<!--============================ ดาวน์โหลด =================================-->

<div class="col-xlg-12 col-lg-12 col-md-12 col-sm-12" id="download">



    <div class="card">
        <div class="card-block">
        <div class="card-body">
          <br>
          <br>
          <br>
          <br>
          <br>
          <h4 class="card-title text-center">ดาวน์โหลด แผนการศึกษาและวิชาที่เปิดสอน</h4>
          <h6 class="card-subtitle text-center">

            <div class="card-body">

                                <p class="card-text">รูปแบบเอกสารเป็นไฟล์ PDF</p>
                                <a href="javascript:void(0)" class="btn btn-danger" id="downloadPlan" target="_blank">ดาวน์โหลด</a>
                            </div>



            <h4 class="card-title text-center">และสามารถดาวน์โหลด เอกสารเพิ่มเติมได้ที่ด้านล้างนี้</h4>
            <h6 class="card-subtitle text-center" id="TitleDownload"></h6> </div>

        <div class="comment-widgets">
          <div class="row" id="Download_work">



                </div>



        </div>
    </div>
</div>
</div>

<!--=====================================================================-->


          </div>
        </div>
        
        <div class="card">

          <?php include('footer.php')?>
          <footer class="footer">Copyright © Information Technology 2017</footer>

        </div>




    <?php include('import-javascript.php')?>
    <script src="js/course-doctorate.js"></script>
</body>

</html>
