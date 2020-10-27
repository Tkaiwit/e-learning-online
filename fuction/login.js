function logins() {
  var username = document.getElementById("user").value;
  var password = document.getElementById("pass").value;
  var text = document.getElementById("text");

  var logins = new XMLHttpRequest();

  logins.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var data = this.response;
        // console.log(data);
        if (data==1) {
          window.location.href = "./teacher.php";
        }
        else if (data==2) {
          window.location.href = "./student.php";
        }
         else {
          text.innerHTML = "ข้อมูลผิดพลาด Username และ Password";           
        }
      }
  };

  logins.open("POST", "fuction/checklogin.php", true);
  logins.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  logins.send("Username="+ username+"&Password="+password);
  return false;
// alert("asdfjdsjgjsdgljdsjgljsdjgklj");
}
function register(){
  var user = document.getElementById("user").value;
  var pass = document.getElementById("pass").value;
  var passs = document.getElementById("passs").value;
  var email = document.getElementById("email").value;
  var fn = document.getElementById("fn").value;
  var ln = document.getElementById("ln").value;
  var tel = document.getElementById("tel").value;
  var gender = document.getElementById("gender").value;
  if (pass != passs) {
    alert("รหัสผ่านไม่ตรงกัน!");
  }
  var register = new XMLHttpRequest();
  register.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
      var datar = this.response;
      if (datar == 1) {
        window.location.href = "./login.php";
      } else {
        alert("ข้อมูลผิดพลาด"+datar);
      }
    }
  };
  register.open("POST","fuction/insertmember.php",true);
  register.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  register.send("Username="+user+"&pass="+pass+"&email="+email+"&fn="+fn+"&ln="+ln+"&tel="+tel+"&gender="+gender);
  return false;
}
function editprofile(){
  var user = document.getElementById("user").value;
  var pass = document.getElementById("pass").value;
  var passs = document.getElementById("passs").value;
  var email = document.getElementById('email').value;
  var fn = document.getElementById("fn").value;
  var ln = document.getElementById("ln").value;
  var tel = document.getElementById("tel").value;
  var gender = document.getElementById("gender").value;
  // alert("gender"+gender+user+pass+email+fn+ln+tel);
  var editpro = new XMLHttpRequest();
  editpro.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
      var data = this.response;
      if (data == 1) {
        window.location.href = "./profile.php";
      } else {
        alert(data);
      } 
    }
  };
  editpro.open("POST","fuction/updateprofile.php",true);
  editpro.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  editpro.send("Username="+user+"&pass="+pass+"&email="+email+"&fn="+fn+"&ln="+ln+"&tel="+tel+"&gender="+gender);
  return false;

}

function MarkAnswerss(){
    // alert("asdfjdsjgjsdgljdsjgljsdjgklj");
    var A0 = document.forms['myform']['A0'].value;var answer0 = document.forms['myform']['answer0'].value;
    var A1 = document.forms['myform']['A1'].value;var answer1 = document.forms['myform']['answer1'].value;
    var A2 = document.forms['myform']['A2'].value;var answer2 = document.forms['myform']['answer2'].value;
    var A3 = document.forms['myform']['A3'].value;var answer3 = document.forms['myform']['answer3'].value;
    var A4 = document.forms['myform']['A4'].value;var answer4 = document.forms['myform']['answer4'].value;
    var A5 = document.forms['myform']['A5'].value;var answer5 = document.forms['myform']['answer5'].value;
    var A6 = document.forms['myform']['A6'].value;var answer6 = document.forms['myform']['answer6'].value;
    var A7 = document.forms['myform']['A7'].value;var answer7 = document.forms['myform']['answer7'].value;
    var A8 = document.forms['myform']['A8'].value;var answer8 = document.forms['myform']['answer8'].value;
    var A9 = document.forms['myform']['A9'].value;var answer9 = document.forms['myform']['answer9'].value;
    var user = document.getElementById("user").value;
    var course = document.getElementById("course").value;
    var unit = document.getElementById("unit").value;
    var totol = 0;var AA7 = parseInt(answer7);
    var AA0 = parseInt(answer0);var AA1 = parseInt(answer1);var AA2 = parseInt(answer2);
    var AA3 = parseInt(answer3);var AA4 = parseInt(answer4);var AA5 = parseInt(answer6);
    var AA6 = parseInt(answer6);var AA8 = parseInt(answer8);var AA9 = parseInt(answer9);
      if (A0 == AA0) { totol = totol+1;}if (A2 == AA2) { totol = totol+1;}if (A3 == AA3) { totol = totol+1;}
      if (A3 == AA3) { totol = totol+1;}if (A4 == AA4) { totol = totol+1;}if (A5 == AA5) { totol = totol+1;}
      if (A6 == AA6) { totol = totol+1;}if (A7 == AA7) { totol = totol+1;}if (A8 == AA8) { totol = totol+1;}
      if (A9 == AA9) { totol = totol+1;} 

      var scores = new XMLHttpRequest();
      scores.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          var datas = this.response;
          // console.log(datas);
          // alert(datas);}
          if (datas==1) {
            if (!alert('คะแนนที่ได้ '+totol+'/10 ข้อ')) {
              window.location.href = "./test.php";
            }
          } else {
            alert("I dont's no"+datas);
            // text.innerHTML = "ข้อมูลผิดพลาด Username และ Password";           
          }
        }
    };
    // alert(user);
    scores.open("POST", "fuction/insertscore.php", true);
    scores.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    scores.send("Username="+user+"&totol="+totol+"&cid="+course+"&uid="+unit);
    return false;
  }
$(function(){
 
    $("#filepicture").on("change",function(){
        var _fileName = $(this).val();
        $(this).next("label").text(_fileName);
    });

  $(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
 
});
