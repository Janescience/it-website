$(document).ready(function(){

  var config = {
    apiKey: "AIzaSyA4WVo9ZjdTKHW1ALNRwbuoqx5uxP8gsWM",
    authDomain: "itms-management-system.firebaseapp.com",
    databaseURL: "https://itms-management-system.firebaseio.com",
    projectId: "itms-management-system",
    storageBucket: "itms-management-system.appspot.com",
    messagingSenderId: "131587290108"
  };

    firebase.initializeApp(config);

    $.LoadingOverlay("show");

    var activityBecRef = firebase.database().ref("website/student/bechelor/activity");

  // ======================================================= Get Portfolio =======================================================
    activityBecRef.on("child_added",snap => {
      var key = snap.key;
      var showStatus = snap.child("activity_show_status").val();
      var dateStart = snap.child("activity_start").val();
      var dateEnd = snap.child("activity_end").val();
      var detail = snap.child("activity_detail").val();

      if (showStatus == "checked"){
      $('#showActivityBachelor').append("<div  class='"+'col-xlg-3 col-lg-4 col-md-4 col-sm-6'+"'>"+
          "<div class='"+'card '+"'>"+
            "<div class='"+'card-block'+"'>"+
              "<div  class='"+'el-card-item'+"'>"+
                  "<div class='"+'el-card-content'+"'>"+
                      "<h3 class='"+'box-title text-center'+"'><i class='"+'mdi mdi-lightbulb-on'+"'></i><br>"+key+"</h3>"+
                      "<p class='"+'box-title text-center'+"'>"+detail+"</p><br><br>"+
                      "<h6 class='"+'text-center'+"'><i class='"+'mdi mdi-calendar-clock'+"'></i> "+dateStart+" - "+dateEnd+"</h6><br>"+
                      "</div>"+

              "</div>"+
              "<div class='"+'card-body text-center'+"' id='"+key+"'>"+
                  "<button class='"+'btn btn-info image'+"'><i class='"+'mdi mdi-image-multiple'+"'></i> รูปภาพ</button>"+
                  " <button class='"+'btn btn-warning video'+"'><i class='"+'mdi mdi-video'+"'></i> วิดีโอ</button>"+
              "</div>"+
            "</div>"+
          "</div>"+
      "</div>");

      }
      $.LoadingOverlay("hide");
    });

    $('#showActivityBachelor').on('click','.image',function(){
      var id = $(this).closest('div').attr('id');
      sessionStorage.setItem("activityId",id);
      window.open("http://localhost/it-website/lite/detail-activity-bachelor.php");
    });

    $('#showActivityBachelor').on('click','.video',function(){
      $('#list_video').empty();
      var id = $(this).closest('div').attr('id');
      $('#showVideoModal').modal('show');
      var videoBecRef = firebase.database().ref("website/student/bechelor/activity").child(id).child('activity_video');
      videoBecRef.on("child_added",snap => {
        var video = snap.child('videos').val();
        $('#list_video').append("<div class='"+'col-xlg-6 col-lg-6 col-sm-12 col-md-12'+"'><video style='"+'border-radius:10px'+"'width='"+'370px'+"' controls><source src='"+video+"' type='"+'video/WebM'+"'></video></div>");
      });

    });


    var activityGraRef = firebase.database().ref("website/student/graduate/activity");

  // ======================================================= Get Portfolio =======================================================
    activityGraRef.on("child_added",snap => {
      var key = snap.key;
      var showStatus = snap.child("activity_show_status").val();
      var dateStart = snap.child("activity_start").val();
      var dateEnd = snap.child("activity_end").val();
      var detail = snap.child("activity_detail").val();

      if (showStatus == "checked"){
      $('#showActivityGraduation').append("<div  class='"+'col-xlg-3 col-lg-4 col-md-4 col-sm-6'+"'>"+
          "<div class='"+'card'+"'>"+
            "<div class='"+'card-block'+"'>"+
              "<div  class='"+'el-card-item'+"'>"+
                  "<div class='"+'el-card-content'+"'>"+
                      "<h3 class='"+'box-title text-center'+"'><i class='"+'mdi mdi-lightbulb-on'+"'></i><br>"+key+"</h3>"+
                      "<p class='"+'box-title text-center'+"'>"+detail+"</p><br><br>"+                      
                      "<h6 class='"+'text-center'+"'><i class='"+'mdi mdi-calendar-clock'+"'></i> "+dateStart+" - "+dateEnd+"</h6><br>"+
                      "</div>"+

              "</div>"+
              "<div class='"+'card-body text-center'+"' id='"+key+"'>"+
                  "<button class='"+'btn btn-info image'+"'><i class='"+'mdi mdi-image-multiple'+"'></i> รูปภาพ</button>"+
                  " <button class='"+'btn btn-warning video'+"'><i class='"+'mdi mdi-video'+"'></i> วิดีโอ</button>"+
              "</div>"+
            "</div>"+
          "</div>"+
      "</div>");

      }

    });

    $('#showActivityGraduation').on('click','.image',function(){
      var id = $(this).closest('div').attr('id');
      sessionStorage.setItem("activityId",id);
      window.open("http://localhost/it-website/lite/detail-activity-graduate.php");
    });



  });
