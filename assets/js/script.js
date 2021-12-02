$(document).ready(function() {
  $("#submit").click(function(){

    var mail=$("#email").val();
    var pass1=$("#psw").val();
    var pass2=$("#psw-repeat").val();
    if(mail==""){
      alert("Введите почту");
    }
    else if(pass1==""){
      alert("Введите пароль");
    }
    else if(pass2==""){
      alert("Введите повтор пароля");
    }
    else if(pass1!=pass2){
      alert("Пароли не совпадают");
    }
    else if(pass1.lenght < 4){
      alert("Пароль меньше 4 символов");
    }
    else {
      alert("send");
      $("#email").val("");
      $("#psw").val("");
      $("#psw-repeat").val("");

    }
  });

});
