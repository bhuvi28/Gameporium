var id, type;
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
      document.getElementById("dropdownUser").classList.contains("showUser")
    ) {
      document.getElementById("dropdownUser").classList.remove("showUser");
    }
    document.getElementById("dropdownExplore").classList.toggle("showExplore");
  }
}
window.onclick = function (e) {
  // console.log(e);
  if (e.srcElement.id == "userIcon" || e.srcElement.id == "exploreIcon") return;
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
function goToLoginPage() {
  toastr.warning("Please login/register to add games to your library");
  // window.location.href = "login.html";
  // alert("Please login/register to add games to your library");
}
window.onload = function getAndSendURL() {
  var url_string = window.location;
  var url = new URL(url_string);
  type = url.searchParams.get("type");
  id = url.searchParams.get("id");
  // document.getElementById("sendID").value = id;
};
async function postData(url = "", formData) {
  const response = await fetch(url, {
    method: "POST",
    body: formData,
  });
  return response.json();
}
function submitForm() {
  const formData = new FormData();
  formData.append("gameid", id);
  formData.append("gametype", type);
  postData("libraryUpdate.php", formData).then((data) => {
    console.log(data);
    if (data[0] == 202) {
      toastr.success(data[1]);
    } else toastr.error(data[1]);
  });
}
