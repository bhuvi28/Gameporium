var checkSubmitLength = 2;
var checkSubmit = new Array(checkSubmitLength).fill(true);
var firstPassword = "";
checkToBeDisabled();
function validateRequired(id, errorID, type) {
  var myErrorID = document.getElementById(errorID);
  firstPassword = document.getElementById(id).value;
  if (firstPassword == "" || firstPassword == null) {
    checkSubmit[type] = true;
    myErrorID.classList.add("showError");
  } else {
    if (myErrorID.classList.contains("showError"))
      myErrorID.classList.remove("showError");
    checkSubmit[type] = false;
  }
  checkToBeDisabled();
}
function validateCheckPassword(id, reqErrorID, equalityCheckErrorID, type) {
  var reqErrorID = document.getElementById(reqErrorID);
  var equalityCheckErrorID = document.getElementById(equalityCheckErrorID);
  var secondPassword = document.getElementById(id).value;
  if (secondPassword == "" || secondPassword == null) {
    reqErrorID.classList.add("showError");
    if (equalityCheckErrorID.classList.contains("showError"))
      equalityCheckErrorID.classList.remove("showError");
    checkSubmit[type] = true;
    return;
  } else {
    reqErrorID.classList.contains("showError");
    reqErrorID.classList.remove("showError");
    checkSubmit[type] = false;
  }
  if (firstPassword != secondPassword) {
    equalityCheckErrorID.classList.add("showError");
    checkSubmit[type] = true;
  } else {
    if (equalityCheckErrorID.classList.contains("showError"))
      equalityCheckErrorID.classList.remove("showError");
    checkSubmit[type] = false;
  }
  checkToBeDisabled();
}
function myFunction() {
  var x = document.getElementById("myCheckPassword");
  if (x.type === "password") {
    x.type = "text";
    document.getElementById("showHide").src = "hide.png";
  } else {
    x.type = "password";
    document.getElementById("showHide").src = "show.png";
  }
}
function checkToBeDisabled() {
  var check = true;
  checkSubmit.forEach((element) => {
    if (element == true) {
      document.getElementById("submit").disabled = true;
      check = false;
      return;
    }
  });
  if (check == true) document.getElementById("submit").disabled = false;
}
window.onload = function getAndSendURL() {
  var url_string = window.location;
  var url = new URL(url_string);
  var id = url.searchParams.get("id");
  document.getElementById("sendID").value = id; 
};
function executeLogin(e) {
  if (e.keyCode == 13) {
    document.getElementById("submitFP").click();
  } else return;
}
