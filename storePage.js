var action = [];
var actionCaption = [];
var actionType = [];
var actionSerial = [];
var fps = [];
var fpsCaption = [];
var fpsType = [];
var fpsSerial = [];
var rpg = [];
var rpgCaption = [];
var rpgType = [];
var rpgSerial = [];
var platformers = [];
var platformersCaption = [];
var platformersType = [];
var platformersSerial = [];
var dimensionalgames = [];
var dimensionalgamesCaption = [];
var dimensionalgamesType = [];
var dimensionalgamesSerial = [];
var startAction = 0;
var startFPS = 0;
var startRPG = 0;
var startPlatformers = 0;
var start2D = 0;
var limitAction = 0;
var limitFPS = 0;
var limitRPG = 0;
var limitPlatformers = 0;
var limit2D = 0;

window.onload = function () {
  onLoadAllImages();
};
function genreAction() {
  action.forEach((element, index) => {
    var image = `<a href="gamePage.php?type=${actionType[index]}&id=${actionSerial[index]}"><div class="storeFigure">
          <img src = "${element}" alt = "img" class = "storeImages">
          <h3 class="storeItemsCaption" >${actionCaption[index]}</h3>
          </div></a>`;
    document.getElementById("action_figures").innerHTML += image;
  });
}
function genreFPS() {
  fps.forEach((element, index) => {
    var image = `<a href="gamePage.php?type=${fpsType[index]}&id=${fpsSerial[index]}"<div class="storeFigure">
        <img src = "${element}" alt = "img" class = "storeImages">
        <h3 class="storeItemsCaption" >${fpsCaption[index]}</h3>
        </div></a>`;
    document.getElementById("fps_figures").innerHTML += image;
  });
}
function genreRPG() {
  rpg.forEach((element, index) => {
    var image = `<a href="gamePage.php?type=${rpgType[index]}&id=${rpgSerial[index]}"<div class="storeFigure">
          <img src = "${element}" alt = "img" class = "storeImages">
          <h3 class="storeItemsCaption" >${rpgCaption[index]}</h3>
          </div></a>`;
    document.getElementById("rpg_figures").innerHTML += image;
  });
}
function genrePlatformers() {
  platformers.forEach((element, index) => {
    var image = `<a href="gamePage.php?type=${platformersType[index]}&id=${platformersSerial[index]}"<div class="storeFigure">
          <img src = "${element}" alt = "img" class = "storeImages">
          <h3 class="storeItemsCaption" >${platformersCaption[index]}</h3>
          </div></a>`;
    document.getElementById("platformers_figures").innerHTML += image;
  });
}
function genreDimensionalGames() {
  dimensionalgames.forEach((element, index) => {
    var image = `<a href="gamePage.php?type=${dimensionalgamesType[index]}&id=${dimensionalgamesSerial[index]}"<div class="storeFigure">
          <img src = "${element}" alt = "img" class = "storeImages">
          <h3 class="storeItemsCaption" >${dimensionalgamesCaption[index]}</h3>
          </div></a>`;
    document.getElementById("dimensionalgames_figures").innerHTML += image;
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
function onLoadAllImages() {
  // console.log("Show images");
  const formDataAction = new FormData();
  formDataAction.append("type", "action");
  limitAction += 2;
  startAction = limitAction;
  formDataAction.append("limit", limitAction);
  formDataAction.append("start", 0);
  postData("storePage.php", formDataAction).then((data) => {
    // console.log(data);
    data[1].forEach((element) => {
      action.push(element.image);
      actionCaption.push(element.caption);
      actionType.push(element.type);
      actionSerial.push(element.serial);
    });
    genreAction();
  });
  const formDataFPS = new FormData();
  formDataFPS.append("type", "fps");
  limitFPS += 2;
  startFPS = limitFPS;
  formDataFPS.append("limit", limitFPS);
  formDataFPS.append("start", 0);
  postData("storePage.php", formDataFPS).then((data) => {
    console.log(data);
    data[1].forEach((element) => {
      fps.push(element.image);
      fpsCaption.push(element.caption);
      fpsType.push(element.type);
      fpsSerial.push(element.serial);
    });
    genreFPS();
  });
  const formDataRPG = new FormData();
  formDataRPG.append("type", "rpg");
  limitRPG += 2;
  startRPG = limitRPG;
  formDataRPG.append("limit", limitRPG);
  formDataRPG.append("start", 0);
  postData("storePage.php", formDataRPG).then((data) => {
    console.log(data);
    data[1].forEach((element) => {
      rpg.push(element.image);
      rpgCaption.push(element.caption);
      rpgType.push(element.type);
      rpgSerial.push(element.serial);
    });
    genreRPG();
  });
  const formDataPlatformers = new FormData();
  formDataPlatformers.append("type", "platformers");
  limitPlatformers += 2;
  startPlatformers = limitPlatformers;
  formDataPlatformers.append("limit", limitPlatformers);
  formDataPlatformers.append("start", 0);
  postData("storePage.php", formDataPlatformers).then((data) => {
    console.log(data);
    data[1].forEach((element) => {
      platformers.push(element.image);
      platformersCaption.push(element.caption);
      platformersType.push(element.type);
      platformersSerial.push(element.serial);
    });
    genrePlatformers();
  });
  const formData2D = new FormData();
  formData2D.append("type", "dimensionalgames");
  limit2D += 2;
  start2D = limit2D;
  formData2D.append("limit", limit2D);
  formData2D.append("start", 0);
  postData("storePage.php", formData2D).then((data) => {
    console.log(data);
    data[1].forEach((element) => {
      dimensionalgames.push(element.image);
      dimensionalgamesCaption.push(element.caption);
      dimensionalgamesType.push(element.type);
      dimensionalgamesSerial.push(element.serial);
    });
    genreDimensionalGames();
  });
}
function loadMore(type) {
  const formData = new FormData();
  formData.append("type", type);
  if (type == "action") {
    limitAction += 2;
    formData.append("limit", limitAction);
    formData.append("start", startAction + 1);
    postData("storePage.php", formData).then((data) => {
      // console.log(data);
      action.length = 0;
      actionCaption.length = 0;
      actionSerial.length = 0;
      actionType.length = 0;
      genreAction();
      data[1].forEach((element) => {
        action.push(element.image);
        actionCaption.push(element.caption);
        actionSerial.push(element.serial);
        actionType.push(element.type);
      });
      genreAction();
      removeLoadMore(limitAction, type, data[0].count);
    });
    startAction = limitAction;
  } else if (type == "fps") {
    limitFPS += 2;
    formData.append("limit", limitFPS);
    formData.append("start", startFPS + 1);
    postData("storePage.php", formData).then((data) => {
      console.log(data);
      fps.length = 0;
      fpsCaption.length = 0;
      fpsType.length = 0;
      fpsSerial.length = 0;
      genreFPS();
      data[1].forEach((element) => {
        fps.push(element.image);
        fpsCaption.push(element.caption);
        fpsSerial.push(element.serial);
        fpsType.push(element.type);
      });
      genreFPS();
      removeLoadMore(limitFPS, type, data[0].count);
    });
    startFPS = limitFPS;
  } else if (type == "rpg") {
    limitRPG += 2;
    formData.append("limit", limitRPG);
    formData.append("start", startRPG + 1);
    postData("storePage.php", formData).then((data) => {
      console.log(data);
      rpg.length = 0;
      rpgCaption.length = 0;
      rpgType.length = 0;
      rpgSerial.length = 0;
      genreRPG();
      data[1].forEach((element) => {
        rpg.push(element.image);
        rpgCaption.push(element.caption);
        rpgSerial.push(element.serial);
        rpgType.push(element.type);
      });
      genreRPG();
      removeLoadMore(limitRPG, type, data[0].count);
    });
    startRPG = limitRPG;
  } else if (type == "platformers") {
    limitPlatformers += 2;
    formData.append("limit", limitPlatformers);
    formData.append("start", startPlatformers + 1);
    postData("storePage.php", formData).then((data) => {
      console.log(data);
      platformers.length = 0;
      platformersCaption.length = 0;
      platformersType.length = 0;
      platformersSerial.length = 0;
      genrePlatformers();
      data[1].forEach((element) => {
        platformers.push(element.image);
        platformersCaption.push(element.caption);
        platformersSerial.push(element.serial);
        platformersType.push(element.type);
      });
      genrePlatformers();
      removeLoadMore(limitPlatformers, type, data[0].count);
    });
    startPlatformers = limitPlatformers;
  } else if (type == "dimensionalgames") {
    limit2D += 2;
    formData.append("limit", limit2D);
    formData.append("start", start2D + 1);
    postData("storePage.php", formData).then((data) => {
      console.log(data);
      dimensionalgames.length = 0;
      dimensionalgamesCaption.length = 0;
      dimensionalgamesType.length = 0;
      dimensionalgamesSerial.length = 0;
      genreDimensionalGames();
      data[1].forEach((element) => {
        dimensionalgames.push(element.image);
        dimensionalgamesCaption.push(element.caption);
        dimensionalgamesSerial.push(element.serial);
        dimensionalgamesType.push(element.type);
      });
      genreDimensionalGames();
      removeLoadMore(limit2D, type, data[0].count);
    });
    start2D = limit2D;
  }
}
async function postData(url = "", data) {
  const response = await fetch(url, {
    method: "POST",
    body: data,
  });
  return response.json();
}
function removeLoadMore(limit, type, total) {
  total = parseInt(total);
  if (limit >= total) {
    var remove = document.getElementById(type);
    remove.classList.add("removeLoadMore");
  }
}
