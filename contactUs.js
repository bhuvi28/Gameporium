var checkSubmitLength = 3;     
var checkSubmit = new Array(checkSubmitLength).fill(true);
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
  var checkPattern = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
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
function dropDown(check) {
    if (check == "user") {
      document.getElementById("dropdownUser").classList.toggle("showUser");
      if (
        document
          .getElementById("dropdownExplore")
          .classList.contains("showExplore")
      ) {
        document
          .getElementById("dropdownExplore")
          .classList.remove("showExplore");
      }
    } else if (check == "explore") {
      if (
        document
          .getElementById("dropdownUser")
          .classList.contains("showUser")
      ) {
        document
          .getElementById("dropdownUser")
          .classList.remove("showUser");
      }
      document
        .getElementById("dropdownExplore")
        .classList.toggle("showExplore");
    }
  }
  window.onclick = function (e) {
    if (e.srcElement.id == "userIcon" || e.srcElement.id == "exploreIcon")
      return;
    else {
      var dropdownUser = document.getElementById("dropdownUser");
      var dropdownExplore = document.getElementById("dropdownExplore");
      if (dropdownUser.classList.contains("showUser")) {
        dropdownUser.classList.remove("showUser");
      }
      if (dropdownExplore.classList.contains("showExplore")) {
        dropdownExplore.classList.remove("showExplore");
      }
    }
  };
  // function showToaster(){
  //   toastr.success('Our agent will get back to you at the earliest');
  // }
  async function postData(url = "",formData) {
    const response = await fetch(url, {
      method: "POST",
      body : formData,
    });
    return response.json();
  }
  function submitForm(){
    const formData = new FormData();
    formData.append('name',document.getElementById('name').value);
    formData.append('message',document.getElementById('message').value);
    formData.append('emailID',document.getElementById('emailID').value);
    postData("sendContactUsEmail.php",formData).then((data) => {
      console.log(data);
      if(data[0]==202){
        toastr.success('Our agent will get back to you at the earliest');
        document.getElementById('myContactUsForm').reset();
      }
    else
    toastr.danger("Message not sent");

      // data[1].forEach((element) => {
      // items.push(element.image);
      // itemsCaption.push(element.caption);
      // itemsType.push(element.type);
      // itemsID.push(element.GameID);
      // itemsUser.push(element.UserID);
      // itemsSerial.push(element.serial);
    // });
  });
  }
