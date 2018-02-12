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

  var portBecRef = firebase.database().ref("website/student/bechelor/portfolio");

// ======================================================= Get Portfolio =======================================================
  portBecRef.on("child_added",snap => {
    var key = snap.key;
    var Name = snap.child("port_name").val();
    var Detail = snap.child("port_detail").val();
    var Image = snap.child("port_image").val();
    var Type = snap.child("port_type").val();
    var Status = snap.child("port_status").val();
    var Year = snap.child("port_years").val();
    var showStatus = snap.child("port_show_status").val();


    if (showStatus == "checked"){
    $('#showPort').append("<div  class='"+'col-xlg-3 col-md-3 col-sm-4'+"'>"+
        "<div class='"+'card'+"'>"+
            "<div  class='"+'el-card-item'+"'>"+
                "<div class='"+'el-card-avatar el-overlay-1 '+"' style='"+'height:200px'+"'> <img src='"+Image+"'   alt='"+'user'+"'>"+
                    "<div class='"+'el-overlay scrl-up'+"'>"+
                        "<ul id='"+key+"' class='"+'el-info'+"'>"+
                            "<li ><a class='"+'btn default btn-outline image-popup-vertical-fit detail'+"' ><i class='"+'mdi mdi-comment'+"'></i></a></li>"+
                        "</ul>"+
                    "</div>"+
                "</div>"+
                "<div class='"+'el-card-content'+"'>"+
                    "<h2 class='"+'box-title'+"'><i class='"+'mdi mdi-seal'+"'></i>"+Name+"</h2>"+
                    "</div>"+
            "</div>"+
        "</div>"+
    "</div>");

    }
    $.LoadingOverlay("hide");
  });
  // ======================================================= End Code =======================================================

  // ======================================================= Port Detail =======================================================
  $('#showPort').on('click','.detail',function(e){


    $('#portfolioImage').empty();


    $('#portfolioModal').modal("show");
    var id = $(this).closest('ul').attr("id");

    var dbName = portBecRef.child(id).child('port_name');
    dbName.on('value',snap => {

      document.getElementById("namePortfolio").innerHTML = snap.val();

      // $('#namePort').val(snap.val());
    });

    var dbDetail = portBecRef.child(id).child('port_detail');
    dbDetail.on('value',snap => {
      document.getElementById("portfolioDetail").innerHTML = snap.val();

      // $('#portDetail').val(snap.val());
    });

    var dbType = portBecRef.child(id).child('port_type');
    dbType.on('value',snap => {
      document.getElementById("portfolioType").innerHTML = snap.val();

      // $('#portType').val(snap.val());
    });

    var dbYear = portBecRef.child(id).child('port_years');
    dbYear.on('value',snap => {
      document.getElementById("portfolioYear").innerHTML = snap.val();

      // $('#portYear').val(snap.val());
    });

    var dbImage = portBecRef.child(id).child('port_image');
    dbImage.on('value',snap => {
      $('#portfolioImage').append("<img src='"+snap.val()+"' style='"+'border-radius: 25px'+"' class='"+'col-md-12'+"' border='"+'2'+"'/>");
    });

    });
    // ======================================================= End Code =======================================================


});
