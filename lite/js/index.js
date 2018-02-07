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

  i=i+1;

  if(i==1){
    $('#imageHeaderSlide').append("<div class='"+'carousel-item active'+"' style='"+'height:600px'+"'><img class='"+'d-block w-100'+"' src='"+bg+"' ><div class='"+'carousel-caption d-none d-md-block'+"'>"+
                              "<h1 class='"+'text-white'+"'>"+topic+"</h1><h3 class='"+'text-white'+"'>"+detail+"</h3><a href='"+link+"'><button type='"+'button'+"' class='"+'btn btn-success '+"'>"+txt_bt+"</button></a></div></div>");
  }else{
    $('#imageHeaderSlide').append("<div class='"+'carousel-item'+"' style='"+'height:600px'+"'><img class='"+'d-block w-100'+"' src='"+bg+"' ><div class='"+'carousel-caption d-none d-md-block'+"'>"+
                              "<h1 class='"+'text-white'+"'>"+topic+"</h1><h3 class='"+'text-white'+"'>"+detail+"</h3><a href='"+link+"'><button type='"+'button'+"' class='"+'btn btn-success '+"'>"+txt_bt+"</button></a></div></div>");
  }
  $.LoadingOverlay("hide");
  $('#load').hide();
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


var dbPhilosophyBachelor = firebase.database().ref('website/about/bachelor').child('philosophy');
  dbPhilosophyBachelor.on('value',snap => {
    $('#philosophyBachelor').text(snap.val());
  });

var dbPurposeBachelor = firebase.database().ref('website/about/bachelor').child('purpose');
  dbPurposeBachelor.on('value',snap => {
    $('#purposeBachelor').text(snap.val());
  });
var cout=0;

var dbInfoBachelor = firebase.database().ref('website/index/info/infobachelor');

dbInfoBachelor.on('child_added',snap=>{
  var photo = snap.child('photo').val();
  var topic = snap.child('topic').val();
  var url = snap.child('url').val();

  cout=cout+1;

  if(cout==1){
    $('#imageInfoBachelorSlide').append("<div class='"+'carousel-item active'+"' style='"+'height:300px'+"'><img class='"+'d-block w-100'+"' src='"+photo+"'><div class='"+'carousel-caption d-none d-md-block'+"'>"+
                              "<h3 class='"+'text-white'+"'>"+topic+"</h3><a href='"+url+"'><button type='"+'button'+"' class='"+'btn btn-success '+"'>รายละเอียด</button></a></div></div>");
  }else{
    $('#imageInfoBachelorSlide').append("<div class='"+'carousel-item'+"' style='"+'height:300px'+"'><img class='"+'d-block w-100'+"' src='"+photo+"'><div class='"+'carousel-caption d-none d-md-block'+"'>"+
                              "<h3 class='"+'text-white'+"'>"+topic+"</h3><a href='"+url+"'><button type='"+'button'+"' class='"+'btn btn-success '+"'>รายละเอียด</button></a></div></div>");
  }

});
var num=0;
var dbInfoGraduate = firebase.database().ref('website/index/info/infograduate');
dbInfoGraduate.on('child_added',snap=>{
  var photo = snap.child('photo').val();
  var topic = snap.child('topic').val();
  var url = snap.child('url').val();
  num=num+1;

  if(num==1){
    $('#imageInfoGraduationSlide').append("<div class='"+'carousel-item active'+"' style='"+'height:300px'+"'><img class='"+'d-block w-100'+"' src='"+photo+"'><div class='"+'carousel-caption d-none d-md-block'+"'>"+
                              "<h3 class='"+'text-white'+"'>"+topic+"</h3><a href='"+url+"'><button type='"+'button'+"' class='"+'btn btn-success '+"'>รายละเอียด</button></a></div></div>");
  }else{
    $('#imageInfoGraduationSlide').append("<div class='"+'carousel-item'+"' style='"+'height:300px'+"'><img class='"+'d-block w-100'+"' src='"+photo+"'><div class='"+'carousel-caption d-none d-md-block'+"'>"+
                              "<h3 class='"+'text-white'+"'>"+topic+"</h3><a href='"+url+"'><button type='"+'button'+"' class='"+'btn btn-success '+"'>รายละเอียด</button></a></div></div>");
  }
});




});
