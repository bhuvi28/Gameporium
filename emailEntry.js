var checkSubmitLength = 1;     
var checkSubmit = new Array(checkSubmitLength).fill(true);
checkToBeDisabled();

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
function checkToBeDisabled(){
    var check = true;
    checkSubmit.forEach(element => {
          if(element==true){
            document.getElementById("submit").disabled = true;
            check = false;
            return;
          }
      });
      if(check == true)
      document.getElementById("submit").disabled = false;
  }
  function sendEmail(){
      
  }