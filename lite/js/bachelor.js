$(document).ready(function(){
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyA4WVo9ZjdTKHW1ALNRwbuoqx5uxP8gsWM",
    authDomain: "itms-management-system.firebaseapp.com",
    databaseURL: "https://itms-management-system.firebaseio.com",
    projectId: "itms-management-system",
    storageBucket: "itms-management-system.appspot.com",
    messagingSenderId: "131587290108"
  };

  firebase.initializeApp(config);

  var idBody;
  var Auth = firebase.auth();
  var dbRef = firebase.database();
  var topicRef = dbRef.ref('website')
  var i=0;

  $('#Studyplan').hide();
  $('#branch').hide();
  $('#download').hide();
   /*------------------------  edit course (2555) -----------------------------------*/

  var rootRefCourses = topicRef.child("course/AddCourses").child('ปริญญาตรี');
  rootRefCourses.on("child_added",snap => {
   var snapkey = snap.key;
   i=i+1;

  ;
    $('#Suggestion_work').append(
      "<tr id='"+snap.key+"'> <td class='"+'txttopic'+"' >" + snapkey +
      "</td><td class='"+'txttopic2'+"'>"+
      "<a href='"+'javascript:void(0)'+"' class='"+'btn-edit-expert m-t-10 waves-effect waves-dark btn btn-info btn-md btn-rounded'+"' ><i class='"+'fas fa-arrow-alt-circle-right'+"'></i> อ่านรายระเอียดเพิ่มเติม</a></td>"+


                                 "</tr>");
                                  $('#loaderHeader2').hide();

    });


    $('#Suggestion_work').on('click','.btn-edit-expert',function(){

      var key = $(this).closest('tr').attr("id");

      var rootRefBranch = topicRef.child("course/AddCourses").child('ปริญญาตรี').child(key);

      $('#Studyplan').show();
      $('#branch').show();
      $('#download').show();

      $('#TitleStudyplan').text(key);

      $('#Branch_work').empty();

rootRefBranch.on("child_added",snap => {
 var snapkey = snap.key;
 var img = snap.child('file').val();
 var topic = snap.child('topic').val();
 var topic2 = snap.child('topic2').val();
 var detail = snap.child('detail').val();
 var detail2 = snap.child('detail2').val();


 $('#Branch_work').append(
     "<div class='"+'col-lg-4 col-xlg-4 col-md-5'+"' id='"+snap.key+"'>"+
         "<div class='"+'card'+"'>"+
             "<img class='"+'card-img-top'+"' src='"+ img +"' alt='"+'Card image cap'+"' width='"+'100%'+"' >"+
             "<div class='"+'card-body little-profile text-center'+"'>"+
               "<div class='"+'card-block'+"'>"+
                 "<h3 class='"+'m-b-0'+"'>"+ topic +"</h3>"+
                 "<p>สาขาวิชาเทคโนโลยีสารสนเทศ </p>"+

               "</div>"+
             "</div>"+
         "</div>"+
       "</div>"+

       "<div class='"+'col-lg-8 col-xlg-8'+"'>"+
        "<div class='"+'card'+"'>"+
            "<div class='"+'card-block'+"'>"+
                "<div class='"+'card-body'+"'>"+
                    "<h4 class='"+'card-title text-center'+"'>"+ topic +"</h4>"+
                    "<h6 class='"+'card-subtitle text-center'+"'>ลักษณะวิชาที่ศึกษาและลักษณะวิชาชีพ</h6> </div>"+
                      "<div class='"+'comment-widgets'+"'>"+
                          "<div class='"+'d-flex flex-row comment-row'+"'>"+
                            "<div class='"+'p-2'+"'><span class='"+'round'+"'><img src='"+'../images/education-icon_348737.png'+"'  width='"+'50'+"'></span></div>"+
                              "<div class='"+'comment-text w-100'+"'>"+
                                "<h5>ชื่อปริญญา</h5>"+
                                "<p class='"+'m-b-5'+"'>"+ topic2 +"</p>"+
                                "</div>"+
                              "</div>"+
                            "<div class='"+'d-flex flex-row comment-row'+"'>"+
                          "<div class='"+'p-2'+"'><span class='"+'round'+"'><img src='"+'../images/philosophy.png'+"' width='"+'50'+"'></span></div>"+
                            "<div class='"+'comment-text w-100'+"'>"+
                              "<h5>ลักษณะวิชาที่ศึกษา</h5>"+
                              "<p class='"+'m-b-5'+"'>"+ detail2 +"</p>"+
                            "</div>"+
                          "</div>"+
                      "<div class='"+'d-flex flex-row comment-row'+"'>"+
                        "<div class='"+'p-2'+"'><span class='"+'round'+"'><img src='"+'../images/objective.png'+"' width='"+'50'+"'></span></div>"+
                          "<div class='"+'comment-text w-100'+"'>"+
                            "<h5>ลักษณะวิชาชีพ</h5>"+
                            "<p class='"+'m-b-5'+"'>"+ detail +"</p>"+
                          "</div>"+
                        "</div>"+

                        "</div>"+
                      "</div>"+

                  "</div>"+
                "</div>"


   );



    });

    /*------------------------  edit Dowload (2555) -----------------------------------*/
    var Download = topicRef.child("course/AddDownload").child('ปริญญาตรี').child(key);
$('#Download_work').empty();
 Download.on("child_added",snap => {
   var snapkey = snap.key;
   var topic = snap.child('topic').val();
   var detail = snap.child('topic2').val();
   var file = snap.child('file').val();


   $('#Download_work').append(

   "<div class='"+'col-lg-4 col-md-4'+"' id='"+snap.key+"'>"+
                          "<div class='"+'card card-inverse card-success'+"'>"+
                            "<div class='"+'card-block'+"'>"+
                               "<div class='"+'card-body'+"'>"+
                                 "<div class='"+'d-flex'+"'>"+
                                   "<div class='"+'m-r-20 align-self-center'+"'>"+
                                       "<h1 class='"+'text-white'+"'><i class='"+'icon-cloud-download'+"'></i></h1></div>"+
                                       "<div>"+
                                           "<h3 class='"+'card-title'+"'>"+ detail +"</h3>"+
                                           "<h6 class='"+'card-subtitle'+"'>"+ topic +"</h6></div>"+
                                       "</div>"+
                                   "<div class='"+'row'+"'>"+
                                       "<div class='"+'col-4 align-self-center'+"'>"+
                                       "</div>"+
                                       "<div class='"+'col-8 p-t-10 p-b-10 text-right'+"'>"+
                                           "<div class='"+'spark-count'+"' style='"+'height:25px'+"'><a href='"+ file +"'><button type='"+'button'+"'  class='"+'btn waves-effect waves-light btn-info'+"'>ดาวน์โหลด</button></a></div>"+

                                           "</div>"+
                                       "</div>"+

                                   "</div>"+
                               "</div>"+

                           "</div>"+
                       "</div>"


 );

 });
    /*------------------------ end edit Dowload (2555) -----------------------------------*/

    });

    $('#Branch_work').on('click','.btn btn-block',function(){


      $('#ModelStudyplan').modal('show');
    });


 $('#btClose').on('click',function(e){
      e.preventDefault();
        $('#ModelStudyplan').modal('hide');
    });

    /*------------------------ end edit course (2555) -----------------------------------*/

    /*------------------------  edit openCourses and edit studyplan (2555) -----------------------------------*/





    /*------------------------  end edit openCourses (2555) -----------------------------------*/




});
