var checkSubmitLength = 6;     
var checkSubmit = new Array(checkSubmitLength).fill(true);
// console.log(checkSubmit);
checkToBeDisabled();
function validateForm(id, errorID, type) {
  var myErrorID = document.getElementById(errorID);
  var myValue = document.getElementById(id).value;
  if (myValue == "" || myValue == null) {
      checkSubmit[type] = true;
    myErrorID.classList.add("showError");
  } else {
    if (myErrorID.classList.contains("showError"))
      myErrorID.classList.remove("showError");
      checkSubmit[type] = false;
  }
  checkToBeDisabled();
}
function validatePassword(id, reqErrorID,invalidErrorID,type){
  var reqErrorID = document.getElementById(reqErrorID);
  var invalidErrorID = document.getElementById(invalidErrorID);
  var myValue = document.getElementById(id).value;
  if (myValue == "" || myValue == null) {
    reqErrorID.classList.add("showError");
    if(invalidErrorID.classList.contains("showError"))
    invalidErrorID.classList.remove("showError");
    checkSubmit[type] = true;
    return;
  } 
  else { (reqErrorID.classList.contains("showError"))
    reqErrorID.classList.remove("showError");
    checkSubmit[type] = false;
  }
  var checkPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
    if(!myValue.match(checkPattern)){
    invalidErrorID.classList.add("showError");
    checkSubmit[type] = true;
  }
  else {
       if(invalidErrorID.classList.contains("showError"))
    invalidErrorID.classList.remove("showError");
    checkSubmit[type] = false;
  }
  checkToBeDisabled();
}
function validateFormName(id, reqErrorID,invalidErrorID,type){
  var reqErrorID = document.getElementById(reqErrorID);
  var invalidErrorID = document.getElementById(invalidErrorID);
  var myValue = document.getElementById(id).value;
  if (myValue == "" || myValue == null) {
    reqErrorID.classList.add("showError");
    if(invalidErrorID.classList.contains("showError"))
    invalidErrorID.classList.remove("showError");
    checkSubmit[type] = true;
    return;
  } 
  else { (reqErrorID.classList.contains("showError"))
    reqErrorID.classList.remove("showError");
    checkSubmit[type] = false;
  }
  var checkPattern = /^[a-zA-Z ]+(([',. -][a-zA-Z ])?[a-zA-Z ]*)*$/;
    if(!myValue.match(checkPattern)){
    invalidErrorID.classList.add("showError");
    checkSubmit[type] = true;
  }
  else {
       if(invalidErrorID.classList.contains("showError"))
    invalidErrorID.classList.remove("showError");
    checkSubmit[type] = false;
  }
  checkToBeDisabled();
}
function validateFormEmail(id, reqErrorID,invalidErrorID,type) {
  var reqErrorID = document.getElementById(reqErrorID);
  var invalidErrorID = document.getElementById(invalidErrorID);
  var myValue = document.getElementById(id).value;
  if (myValue == "" || myValue == null) {
    reqErrorID.classList.add("showError");
    if(invalidErrorID.classList.contains("showError"))
    invalidErrorID.classList.remove("showError");
    checkSubmit[type] = true;
    return;
  } 
  else { (reqErrorID.classList.contains("showError"))
    reqErrorID.classList.remove("showError");
    checkSubmit[type] = false;
  }
  var checkPattern = /[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}/;
    if(!myValue.match(checkPattern)){
    invalidErrorID.classList.add("showError");
    checkSubmit[type] = true;
  }
  else {
       if(invalidErrorID.classList.contains("showError"))
    invalidErrorID.classList.remove("showError");
    checkSubmit[type] = false;
  }
  checkToBeDisabled();
}
function validateTNC(id, errorID,type) {
    var myErrorID = document.getElementById(errorID);
    var myValue = document.getElementById(id).checked;
    console.log(myValue);
    if (!myValue) {
      myErrorID.classList.add("showError");
      checkSubmit[type] = true;
    } else {
      if (myErrorID.classList.contains("showError"))
        myErrorID.classList.remove("showError");
        checkSubmit[type] = false;
    }
    checkToBeDisabled();
  }
  function checkToBeDisabled(){
    var check = true;
    checkSubmit.forEach(element => {
          if(element==true){
            document.getElementById("submitButton").disabled = true;
            check = false;
            return;
          }
      });
      if(check == true)
      document.getElementById("submitButton").disabled = false;
  }
//   function showHideEye() {
//     var x = document.getElementById("password");
//     if (x.type === "password") {
//       x.type = "text";
//       document.getElementById("password").style.backgroundImage = "url('hide.png')";
//     } else {
//       x.type = "password";
//       document.getElementById("password").style.backgroundImage = "url('show.png')";
//     }
//   }
//   (function(){
//     document.querySelector(".passwordInput").onclick = function () {
//        showHideEye();
//     };
// }());
function showHideEye() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
      document.getElementById("showHide").src = "hide.png";
    } else {
      x.type = "password";
      document.getElementById("showHide").src = "show.png";
    }
  }
