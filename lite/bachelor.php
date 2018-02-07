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
        <div class="container-fluid">

          <div class="row page-titles">



          </div>






<!--============================ หลักสูตร =================================-->

<div class="col-lg-12">
    <div class="card">
        <div class="card-block">
        <div class="card-body">
            <h4 class="card-title text-center">หลักสูตร</h4>
            <h6 class="card-subtitle text-center" >ระดับปริญญาตรี </h6></div>

            <!-- Start Page Download 1-->


                                        <form class="form-horizontal form-material ">
                                          <div class="table-responsive">
                                              <table id="tableDownload" class="table text-center color-bordered-table success-bordered-table">
                                                  <thead >
                                                      <tr >
                                                          <th class="text-center">ชื่อหลักสูตร</th>
                                                          <th class="text-center"></th>


                                                      </tr>
                                                      <tr id="loaderHeader2">
                                                        <td colspan="6"><img src="../images/ajax-loader.gif">  Loading...</td>
                                                      </tr>
                                                  </thead>
                                                  <tbody id="Suggestion_work">

                                                  </tbody>
                                              </table>
                                          </div>
                                        </form>

        </div>
    </div>
</div>
</div>




<!--============================ สาขาวิชา =================================-->
<div class="col-lg-12" id="branch">
    <div class="card">
        <div class="card-block">
        <div class="card-body">
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

<div class="col-lg-12" id="Studyplan">
    <div class="card">
        <div class="card-block">
        <div class="card-body">
            <h4 class="card-title text-center">แผนการศึกษา และ วิชาที่เปิดสอน</h4>
            <h6 class="card-subtitle text-center" id="TitleStudyplan"></h6> </div>

        <div class="comment-widgets">
          <div class="row">



            <div class="col-lg-4 col-md-6">
                     <div class="card card-inverse card-success">
                       <div class="card-block">
                          <div class="card-body">
                            <div class="d-flex">
                              <div class="m-r-20 align-self-center">

                                  <h1 class="text-white"><i class="icon-cloud-download"></i></h1></div>
                                  <div>
                                      <h3 class="card-title">45646456456</h3>
                                      <h6 class="card-subtitle">5555555</h6>
                                  </div>
                                  </div>
                              <div class="row">
                                  <div class="col-4 align-self-center">
                                  </div>
                                  <div class="col-8 p-t-10 p-b-10 text-right">
                                      <div class="spark-count" style="height:25px"><a href="file"><button type="button"  class="btn waves-effect waves-light btn-info">ดาวน์โหลด</button></a></div>

                                      </div>
                                  </div>

                              </div>
                          </div>

                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6">
                           <div class="card card-inverse card-success">
                             <div class="card-block">
                                <div class="card-body">
                                  <div class="d-flex">
                                    <div class="m-r-20 align-self-center">

                                        <h1 class="text-white"><i class="icon-cloud-download"></i></h1></div>
                                        <div>
                                            <h3 class="card-title">45646456456</h3>
                                            <h6 class="card-subtitle">5555555</h6>
                                        </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                        </div>
                                        <div class="col-8 p-t-10 p-b-10 text-right">
                                            <div class="spark-count" style="height:25px"><a href="file"><button type="button"  class="btn waves-effect waves-light btn-info">ดาวน์โหลด</button></a></div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>


                </div>



        </div>
    </div>
</div>
</div>

<!--=====================================================================-->
<!--============================ ดาวน์โหลด =================================-->

<div class="col-lg-12" id="download">
    <div class="card">
        <div class="card-block">
        <div class="card-body">
            <h4 class="card-title text-center">ดาวน์โหลด เอกสารเพิ่มเติม</h4>
            <h6 class="card-subtitle text-center" id="TitleStudyplan"></h6> </div>

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
      </div>

            <footer class="footer">Copyright © Information Technology 2017</footer>
        </div>
    </div>

    <?php include('import-javascript.php')?>
    <script src="js/bachelor.js"></script>
</body>

</html>
