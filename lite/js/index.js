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
    $.LoadingOverlay("show");
  var i=0;
  var dbImgHeaderSlide = firebase.database().ref('website/index/header');
dbImgHeaderSlide.on('child_added',snap=>{

  var bg = snap.child('bg').val();
  var topic = snap.child('topic').val();
  var detail = snap.child('detail').val();
  var link = snap.child('link').val();
  var txt_bt = snap.child('txt_bt').val();

  if(i==0){
    $('#carouselCount').append("<li data-target='"+'#carouselExampleIndicators'+"' data-slide-to='"+i+"' class='"+'active'+"'></li>");
    $('#imageHeaderSlide').append("<div class='"+'carousel-item active'+"' ><img class='"+'d-block w-100'+"' src='"+bg+"' ><div class='"+'carousel-caption d-none d-md-block'+"'>"+
                              "<h1 class='"+'text-white'+"'>"+topic+"</h1><h3 class='"+'text-white'+"'>"+detail+"</h3><a href='"+link+"'><button type='"+'button'+"' class='"+'btn btn-success '+"'>"+txt_bt+"</button></a></div></div>");
  }else{
    $('#carouselCount').append("<li data-target='"+'#carouselExampleIndicators'+"' data-slide-to='"+i+"'></li>");
    $('#imageHeaderSlide').append("<div class='"+'carousel-item'+"'><img class='"+'d-block w-100'+"'  src='"+bg+"' ><div class='"+'carousel-caption d-none d-md-block'+"'>"+
                              "<h1 class='"+'text-white'+"'>"+topic+"</h1><h3 class='"+'text-white'+"'>"+detail+"</h3><a href='"+link+"'><button type='"+'button'+"' class='"+'btn btn-success '+"'>"+txt_bt+"</button></a></div></div>");
  }
  $.LoadingOverlay("hide");
  i=i+1;
});

var dbImgBachelor = firebase.database().ref('website/index/courseoffered').child('imageBachelor');
dbImgBachelor.on('value',snap => {
  $('#imageBachelor').attr("src",snap.val());
});

var dbImageMaster = firebase.database().ref('website/index/courseoffered').child('imageMaster');
dbImageMaster.on('value',snap => {
  $('#imageMaster').attr("src",snap.val());
});

var dbImageDoctor = firebase.database().ref('website/index/courseoffered').child('imageDoctor');
dbImageDoctor.on('value',snap => {
  $('#imageDoctor').attr("src",snap.val());
});


var dbPhilosophyBachelor = firebase.database().ref('website/index/about').child('philosophy');
  dbPhilosophyBachelor.on('value',snap => {
    $('#philosophy').text(snap.val());
  });
var n=0;
var dbPurposeBachelor = firebase.database().ref('website/index/about/purpose');
  dbPurposeBachelor.on('child_added',snap => {
    var purpose = snap.child('purpose').val();
    n=n+1;
    $('#purpose').append(""+n+"."+purpose+"<br>");

  });
var cout=0;

var dbInfoBachelor = firebase.database().ref('website/index/info/infobachelor');

dbInfoBachelor.on('child_added',snap=>{
  var photo = snap.child('photo').val();
  var topic = snap.child('topic').val();
  var url = snap.child('url').val();

  if(cout==0){
    $('#carouselInfoBachelor').append("<li data-target='"+'#carouselExampleIndicators'+"' data-slide-to='"+cout+"' class='"+'active'+"'></li>");
    $('#imageInfoBachelorSlide').append("<div class='"+'carousel-item active'+"' ><img class='"+'d-block w-100'+"' src='"+photo+"'><div class='"+'carousel-caption d-none d-md-block'+"'>"+
                              "<h3 class='"+'text-white'+"'>"+topic+"</h3><a href='"+url+"'><button type='"+'button'+"' class='"+'btn btn-success '+"'>รายละเอียด</button></a></div></div>");
  }else{
    $('#carouselInfoBachelor').append("<li data-target='"+'#carouselExampleIndicators'+"' data-slide-to='"+cout+"' ></li>");
    $('#imageInfoBachelorSlide').append("<div class='"+'carousel-item'+"' ><img class='"+'d-block w-100'+"' src='"+photo+"'><div class='"+'carousel-caption d-none d-md-block'+"'>"+
                              "<h3 class='"+'text-white'+"'>"+topic+"</h3><a href='"+url+"'><button type='"+'button'+"' class='"+'btn btn-success '+"'>รายละเอียด</button></a></div></div>");
  }
    cout=cout+1;
});
var num=0;
var dbInfoGraduate = firebase.database().ref('website/index/info/infograduate');
dbInfoGraduate.on('child_added',snap=>{
  var photo = snap.child('photo').val();
  var topic = snap.child('topic').val();
  var url = snap.child('url').val();

  if(num==0){
    $('#carouselInfoGraduate').append("<li data-target='"+'#carouselExampleIndicators'+"' data-slide-to='"+num+"' class='"+'active'+"'></li>");
    $('#imageInfoGraduationSlide').append("<div class='"+'carousel-item active'+"' ><img class='"+'d-block w-100'+"' src='"+photo+"'><div class='"+'carousel-caption d-none d-md-block'+"'>"+
                              "<h3 class='"+'text-white'+"'>"+topic+"</h3><a href='"+url+"'><button type='"+'button'+"' class='"+'btn btn-success '+"'>รายละเอียด</button></a></div></div>");
  }else{
    $('#carouselInfoGraduate').append("<li data-target='"+'#carouselExampleIndicators'+"' data-slide-to='"+num+"' v></li>");
    $('#imageInfoGraduationSlide').append("<div class='"+'carousel-item'+"'><img class='"+'d-block w-100'+"' src='"+photo+"'><div class='"+'carousel-caption d-none d-md-block'+"'>"+
                              "<h3 class='"+'text-white'+"'>"+topic+"</h3><a href='"+url+"'><button type='"+'button'+"' class='"+'btn btn-success '+"'>รายละเอียด</button></a></div></div>");
  }
  num=num+1;

});




});
