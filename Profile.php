<?php
session_start();
$conn = new mysqli("localhost","root","Bhuvan@2808","new_gameporium");
$uid = $_SESSION["userid"];
$sql = "select * from users where userid = '$uid';";
$resultant = $conn->query($sql);
$row = $resultant->fetch_assoc();
$sql2 = "select * from quiz where UserID = $uid;";
$resultant2 = $conn->query($sql2);
$row2 = $resultant2->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="\" dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>Gp</title>
    <link rel="stylesheet" href="profilePageStyles.css" />
</head>
<body class="background_image">
    <div class="container-fluid">
        <div class="navbar">
            <div class="row">
                <div class="columnLogo">
                    <a href="homePage.html">
                        <img class="logoStyles" src="logo.png" alt="gameporiumLogo" />
                    </a>
                </div>
                <div class="columnNavbar">
                    <a href="homePage.html" style="text-decoration: none;">
                        <img title="Home"
                            width="60px"
                            style="cursor: pointer"
                            src="home.png"
                            alt="home"
                            onmouseover="this.src='home_hover.png';"
                            onmouseout="this.src='home.png';" />
                    </a>
                    <a href="#" style="text-decoration: none">
                        <img width="60px"
                            title="Explore"
                            style="cursor: pointer"
                            src="explore.png"
                            alt="explore"
                            id="exploreIcon"
                            onmouseover="this.src='explore_hover.png';"
                            onmouseout="this.src='explore.png';"
                            onclick="dropDown('explore')" />
                    </a>
                    <div class="dropdown-content-explore" id="dropdownExplore">
                        <a href="storePage.html#actionBookmark">Action-Adventure</a>
                        <a href="storePage.html#fpsBookmark">FPS Shooter</a>
                        <a href="storePage.html#rpgBookmark">RPG</a>
                        <a href="storePage.html#platformersBookmark">Platfomers</a>
                        <a href="storePage.html#dimesionalGamesBookmark">2D Games</a>
                    </div>
                    <a href="#">
                        <img width="60px"
                            title="Profile"
                            style="cursor: pointer"
                            src="user_hover.png"
                            alt="user"
                            id="userIcon"
                            onmouseover="this.src='user_hover.png';"
                            onmouseout="this.src='user_hover.png';"
                            onclick="dropDown('user')" />
                    </a>
                    <div class="dropdown-content-user" id="dropdownUser">
                        <a href="#">Profile</a>
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar2Container">
            <ul style="padding: 0px">
                <a class="navbarItems" href="Quiz.php">
                    <li>Quiz</li>
                </a>
                <a class="navbarItems" href="subscriptionPlans.php">
                    <li>Subscription Plans</li>
                </a>
                <a class="navbarItems" href="userLibrary.php">
                    <li>Library</li>
                </a>
                <a class="navbarItems" href="#">
                    <li>New & Trending</li>
                </a>
                <a class="navbarItems" href="storePageUI.php">
                    <li>Store</li>
                </a>
                <a class="navbarItems" href="ContactUs.php">
                    <li>Contact Us</li>
                </a>
                <a class="navbarItems" href="AboutUs.html">
                    <li>About Us</li>
                </a>
            </ul>
        </div>

        <div class="button">
            <p class="boxlabel txtalign">
                <b>EDIT PROFILE</b>
            </p>
        </div>
        <div class="profilepic">
            <img src="profile-image.png" alt="" class="imgstl" />
        </div>
        <div class="accinfo">
            <h1 align="center">ACCOUNT INFO</h1>
            <ul style="font-size:18px;">
                <li>Name: <?php echo $row['firstName'] . " " . $row['LastName'] ;?> </li><br />
                <li>Account Name: <?php echo $row['AccountName'];?></li><br />
                <li>Email: <?php echo $row['EmailID'];?></li><br />
            </ul>
        </div>
        <div class="button" style="margin-top:-15px;">
            <p class="boxlabel txtalign" style="margin-top:0px;background-color:white;">
            <br>
                <b><?php echo $row['AccountName'];?></b>
            </p>
        </div>
        <div class="add">
            <img src="add_circle.png" style="width:100%;height:100%;cursor:pointer;" />
        </div>
        <div class="label">
            <p class="boxlabel">RECENT ACTIVITY</p>
        </div>
        <div class="entrybar"></div>
        <div class="label">
            <p class="boxlabel">STATUS</p>
        </div>
        <div class="entrybar"></div>
        <div class="label">
            <p class="boxlabel">NO. OF GAMES</p>
        </div>
        <div class="entrybar"></div>
        <div class="label">
            <p class="boxlabel">REVIEWS</p>
        </div>
        <div class="entrybar"></div>
        <div class="label">
            <p class="boxlabel">FEEDBACK GIVEN</p>
        </div>
        <div class="entrybar"></div>
        <div class="label">
            <p class="boxlabel">QUIZ STATUS</p>
            <div class="boxLabel">
            <p class="boxlabel">Favourite Genres :</p>
            <ul style="font-family : 'OCR A'" >
                <li>
                    <?php echo $row2['Genre1'];
                     ?>
                </li>
                <li>
                    <?php echo $row2['Genre2'];
                     ?>
                </li><li>
                    <?php echo $row2['Genre3'];
                     ?>
                </li>
            </ul>
            <ul  style="font-family : 'OCR A'"  >
                <li>Preference on New Release : <?php echo $row2['Pref_NewReleases'];
                     ?></li>
                     <li>Preference on story driven games : <?php echo $row2['Pref_StoryDrivenGames'];
                     ?></li><li>Average Playing Hours : <?php echo $row2['Avg_PlayingHrs'];
                     ?></li>
                     <li>Single Player/MultiPlayer : <?php echo $row2['SP_or_MP'];
                     ?></li>
            </ul>
            </div>
            
        </div>
        <div class="entrybar" style="margin-bottom:100px;"></div>
        <div class="footer">
            <div class="site-footer">
                <div class="row">
                    <div class="column too_left"></div>
                    <div class="column left">
                        <h3 style="color: white; text-align: justify">ABOUT</h3>
                        <p style="
                text-align: justify;
                font-family: 'OCR A';
                margin-right: 25px;
              ">
                            We want our users to have the ultimate gaming experience. Our
                              project will provide users with personalised recommendations based
                              on their interests. Users can choose from various plans according
                              to their suitability. Each plan will provide them with vast number
                              of new games to be explored without buying each of them. Our
                              project is best suitable for people who doesn�t replay games and
                              like to try and explore new genres and titles. Indie game
                              developers will have a vast platform to expand their network &
                              community and distribute their games for users to play.
                        </p>
                    </div>
                    <div class="column middle">
                        <h3 style="color: white; text-align: justify">GENRES</h3>
                        <ol style="font-family: 'OCR A'">
                            <li>Action-Adventure</li>
                            <li>FPS Shooter</li>
                            <li>RPG</li>
                            <li>Platformers</li>
                            <li>2D Games</li>
                        </ol>
                    </div>
                    <div class="column right">
                        <h3 style="color: white; text-align: justify">QUICK LINKS</h3>
                        <ol style="font-family: 'OCR A'">
                            <li>About Us</li>
                            <li>Contact Us</li>
                            <li>Contribute Your Game</li>
                            <li>Privacy Policy</li>
                        </ol>
                    </div>
                    <div class="column too_right"></div>
                </div>
                <div class="row">
                    <div class="column leftSocial"></div>
                    <div class="column middleSocial">
                        <hr />
                        <div class="column divide_linksLeft">
                            <p style="font-family: 'OCR A'">
                                Copyright &copy; 2022 All Rights Reserved by
                                <a href="Login.html"
                                    style="
                    color: red;
                    text-decoration: none;
                    font-family: 'OCR A';
                  ">
                                    Gameporium
                                </a>.
                            </p>
                        </div>
                        <div class="column divide_linksRight"></div>
                        <ul>
                            <li class="display_inline">
                                <a href="https://twitter.com/BhuvanMehta9?t=kpjP4MwoRmT65fU8tttE7g&s=08"
                                    target="_blank">
                                    <img class="logos"
                                        src="twitter_footer.png"
                                        onmouseover="this.src='twitter_footer_OG.png';"
                                        onmouseout="this.src='twitter_footer.png';" />
                                </a>
                            </li>
                            <li class="display_inline">
                                <a href="https://www.linkedin.com/in/bhuvan-mehta-a6044422a/"
                                    target="_blank">
                                    <img class="logos"
                                        src="linkedin_footer.png"
                                        onmouseover="this.src='linkedin_footer_OG.png';"
                                        onmouseout="this.src='linkedin_footer.png';" />
                                </a>
                            </li>
                            <li class="display_inline">
                                <a href="">
                                    <img class="logos"
                                        src="facebook_footer.png"
                                        onmouseover="this.src = 'facebook_footer_OG.png'; this.style.transition = '0.6s'"
                                        onmouseout="this.src='facebook_footer.png';" />
                                </a>
                            </li>
                            <li class="display_inline">
                                <a href="">
                                    <img class="logos"
                                        src="instagram_footer.png"
                                        onmouseover="this.src='instagram_footer_OG.png';"
                                        onmouseout="this.src='instagram_footer.png';" />
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="column rightSocial"></div>
                </div>
            </div>
        </div>
        <script>
              var images = ["aco.jpeg", "aco2.jpg", "sifu.jpg"];
              var the_image = document.getElementById("main-image");
              the_image.src = images[0];
              var index = 0;
              setInterval("show_image('right')", 3000);
              function show_image(direction) {
                  if (direction == "left") {
                      index--;
                  } else {
                      index++;
                  }
                  if (index > images.length - 1) {
                      index = 0;
                  }

                  if (index < 0) {
                      index = images.length - 1;
                  }

                  the_image.src = images[index];
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
        </script>
</body>
</html>
