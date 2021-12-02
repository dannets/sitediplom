$(document).ready(function() {

  // наведение на меню

  function show_catmen() {
    $(this).show()
  }

  function hide_catmen() {
    $(this).hide()
  }

  $("#descr1").mouseover(show_catmen).mouseleave(hide_catmen);
  $("#descr2").mouseover(show_catmen).mouseleave(hide_catmen);
  $("#descr3").mouseover(show_catmen).mouseleave(hide_catmen);
  $("#descr4").mouseover(show_catmen).mouseleave(hide_catmen);
  $("#descr5").mouseover(show_catmen).mouseleave(hide_catmen);
  $("#descr6").mouseover(show_catmen).mouseleave(hide_catmen);
  //$(".descr-in").mouseover(show_catmen).mouseleave(hide_catmen);

  $("#list1").mouseover(function () {$("#descr1").show()}).mouseleave(function () {$("#descr1").hide()});
  $("#list2").mouseover(function () {$("#descr2").show()}).mouseleave(function () {$("#descr2").hide()});
  $("#list3").mouseover(function () {$("#descr3").show()}).mouseleave(function () {$("#descr3").hide()});
  $("#list4").mouseover(function () {$("#descr4").show()}).mouseleave(function () {$("#descr4").hide()});
  $("#list5").mouseover(function () {$("#descr5").show()}).mouseleave(function () {$("#descr5").hide()});
  $("#list6").mouseover(function () {$("#descr6").show()}).mouseleave(function () {$("#descr6").hide()});




  /*$("#list1").click(function(){
    if($(".item_catt1").is(":hidden")){
      $(".item_catt2").hide()
      $(".item_catt3").hide()
      $(".item_catt4").hide()
      $(".item_catt1").show()
    }
  });
  $("#list2").click(function(){
    if($(".item_catt2").is(":hidden")){
      $(".item_catt1").hide()
      $(".item_catt3").hide()
      $(".item_catt4").hide()
      $(".item_catt2").show()
    }
  });
  $("#list3").click(function(){
    if($(".item_catt3").is(":hidden")){
      $(".item_catt1").hide()
      $(".item_catt2").hide()
      $(".item_catt4").hide()
      $(".item_catt3").show()
    }
  });
  $("#list4").click(function(){
    if($(".item_catt4").is(":hidden")){
      $(".item_catt1").hide()
      $(".item_catt2").hide()
      $(".item_catt3").hide()
      $(".item_catt4").show()
    }
  });*/

});
