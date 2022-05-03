var checkSubmitLength = 2;     
var checkSubmit = new Array(checkSubmitLength).fill(true);
checkToBeDisabled();
function validateRequired(id, errorID, type) {
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
function myFunction() {
    var x = document.getElementById("myPassword");
    if (x.type === "password") {
      x.type = "text";
      document.getElementById("showHide").src = "hide.png";
    } else {
      x.type = "password";
      document.getElementById("showHide").src = "show.png";
    }
  }
//   function dropDown(check) {
//     if (check == "explore") {
//       document.getElementById("dropdownExplore").classList.toggle("showExplore");
//     }
//   }
//   window.onclick = function (e) {
//     // console.log(e);
//     if (e.srcElement.id == "userIcon" || e.srcElement.id == "exploreIcon")
//       return;
//     else {
//       var dropdownExplore = document.getElementById("dropdownExplore");
//       if (dropdownExplore.classList.contains("showExplore")) {
//         dropdownExplore.classList.remove("showExplore");
//       }
//     }
//   };
  function checkToBeDisabled(){
    var check = true;
    checkSubmit.forEach(element => {
          if(element==true){
            document.getElementById("loginForm").disabled = true;
            check = false;
            return;
          }
      });
      if(check == true)
      document.getElementById("loginForm").disabled = false;
  }
  function executeLogin(e){
    if(e.keyCode == 13){
      document.getElementById('loginForm').click();
    }
    else
    return;
  }
  function forgotPassword(){
    location.href = "emailEntry.html";
  }