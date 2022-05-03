var items = [];
var itemsCaption = [];
var itemsType = [];
var itemsSerial = [];
var itemsUser = [];
var itemsID = [];
window.onload = function () {
    onLoadAllImages();
  };
  function showLibrary(data){
    var showData = [];
    showData = data;
    if(showData && showData[0][0] === false ){
       var image = `<h3 class="storeItemsHeading" >No Items added in the library</h3>`;
       document.getElementById("libraryItems").innerHTML += image;
    }
    showData[1].forEach((element) => {
      var image = `<a href="gamePage.php?type=${element.type}&id=${element.Serial}"><div id="showLibrary" class="storeFigure">
            <img src = "${element.image}" alt = "img" class = "storeImages"></a>
            <table>
            <tr>
            <td><h3 class="storeItemsCaption" >${element.caption}</h3></td>
            <td><span class="fa fa-trash-o" style="font-size:30px;color:red;cursor:pointer;" onclick="deleteFromLibrary('${element.GameID},${element.type},${element.UserID}')"></span></td>
            </tr>
            </table>
            </div>`;
      document.getElementById("libraryItems").innerHTML += image;
    });
}
function onLoadAllImages(){
    try {
        postData("userLibraryGetImages.php","").then((data) => {
            console.log(data);
          showLibrary(data);
        });
    } catch (error) {
    }

}
async function postData(url = "",formData) {
    const response = await fetch(url, {
      method: "POST",
      body : formData,
    });
    return response.json();
  }
  function deleteFromLibrary(id){
      var myArray = id.split(",");
      toastr.success("Item deleted successfully");
      // console.log(myArray[0]);
    const formData = new FormData();
    formData.append("id",myArray[0]);
    formData.append("type",myArray[1]);
    formData.append("user",myArray[2]);
    postData("userLibraryDelete.php",formData).then((data) => {
      // window.location.reload();
        setTimeout(window.location.reload.bind( window.location ),1500);
    });
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
    // console.log(e);
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