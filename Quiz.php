<html>
    <head>
        <title>
            Gameporium : Quiz  
        </title> 
        <link rel="stylesheet" href="QuizStyles.css">
    </head>
    <body>
        <div class="navbar">
            <div class="row">
              <div class="columnLogo">
                <a href="Home.php"><img class="logoStyles" src="logo.png" alt="gameporiumLogo" /></a>
              </div>
              <div class="columnNavbar">
                <a href="Home.php" style="text-decoration: none;"><img
                  title="Home"
                  width="60px"
                  style="cursor: pointer"
                  src="home.png"
                  alt="home"
                  onmouseover="this.src='home_hover.png';"
                  onmouseout="this.src='home.png';"
                />
              </a>
                <a href="#" style="text-decoration: none">
                  <img
                    width="60px"
                    title="Explore"
                    style="cursor: pointer"
                    src="explore.png"
                    alt="explore"
                    id="exploreIcon"
                    onmouseover="this.src='explore_hover.png';"
                    onmouseout="this.src='explore.png';" 
                    onclick="dropDown('explore')"
                  />
                </a>
                <div class="dropdown-content-explore" id="dropdownExplore">
                  <a href="storePageUI.php#actionBookmark">Action-Adventure</a>
                  <a href="storePageUI.php#fpsBookmark">FPS Shooter</a>
                  <a href="storePageUI.php#rpgBookmark">RPG</a>
                  <a href="storePageUI.php#platformersBookmark">Platfomers</a>
                  <a href="storePageUI.php#dimesionalGamesBookmark">2D Games</a>
                </div>
                <?php
session_start();
$conn = new mysqli("localhost","root","Bhuvan@2808","new_gameporium");
if (isset($_SESSION["userid"])) {
?>
                    <a href="#">
                        <img
                            width="60px"
                            title="Profile"
                            style="cursor: pointer"
                            src="user.png"
                            alt="user"
                            id="userIcon"
                            onclick="dropDown('user')"
                            onmouseover="this.src='user_hover.png';"
                            onmouseout="this.src='user.png';" />
                    </a>
                    <div class="dropdown-content-user" id="dropdownUser">
                        <a href="Profile.php">Profile</a>
                        <a href="logout.php">Logout</a>
                    </div>
                    <?php
}
else{
    ?>
<a href="#">
                        <img
                            width="60px"
                            title="Profile"
                            style="cursor: pointer"
                            src="user.png"
                            alt="user"
                            id="userIcon"
                            onclick="dropDown('user')"
                            onmouseover="this.src='user_hover.png';"
                            onmouseout="this.src='user.png';" />
                    </a>
                    <div class="dropdown-content-user" id="dropdownUser">
                        <a href="login.html">Login</a>
                        <a href="SignIn.html">Sign Up</a>
                    </div>
                    <?php
}
?>
              </div>
            </div>
          </div>
          <div class="navbar2Container">
            <ul style="padding: 0px;margin: 0px;">
              <a class="navbarItems active" href="Quiz.php"><li>Quiz</li></a>
              <a class="navbarItems" href="subscriptionPlans.php"><li>Subscription Plans</li></a>
              <a class="navbarItems" href="userLibrary.php"><li>Library</li></a>
              <a class="navbarItems" href="#"><li>New & Trending</li></a>
              <a class="navbarItems" href="storePageUI.php"><li>Store</li></a>
              <a class="navbarItems" href="ContactUs.php"><li>Contact Us</li></a>
              <a class="navbarItems" href="AboutUs.html"><li>About Us</li></a>
            </ul>
          </div>
        <h1 style="text-align: center; margin-top: 15px;color:#545454;font-family: 'OCR A';font-size:60px">
            QUIZ
           </h1>
           <form name="myForm" action="quizPHP.php" method="post">
                <div class="container">
                    <b> <label>Choose your favourite genres </label> </b>
                    <br />
                    <br />
                    <label><b>Genre 1</b></label><br /><br />
                    <div class="radioInline">
                        <input type="radio" id="Action" name="Genre" value="Action">
                        <label class="radioLabel" for="Action">Action</label><br>
                        <input type="radio" id="FPS" name="Genre" value="FPS">
                        <label class="radioLabel" for="FPS">FPS</label><br>
                        <input type="radio" id="2D Platformers" name="Genre" value="2D Platformers">
                        <label class="radioLabel" for="2D Platformers">2D Platformers</label>
                        <input type="radio" id="RPG" name="Genre" value="RPG">
                        <label class="radioLabel" for="RPG">RPG</label>
                    </div> <br />
                    <br />
                    <label><b>Genre 2</b></label><br /><br />
                    <div class="radioInline">
                        <input type="radio" id="Action2" name="Genre2" value="Action">
                        <label class="radioLabel" for="Action2">Action</label><br>
                        <input type="radio" id="FPS2" name="Genre2" value="FPS">
                        <label class="radioLabel" for="FPS2">FPS</label><br>
                        <input type="radio" id="2D Platformers2" name="Genre2" value="2D Platformers">
                        <label class="radioLabel" for="2D Platformers2">2D Platformers</label>
                        <input type="radio" id="RPG2" name="Genre2" value="RPG">
                        <label class="radioLabel" for="RPG2">RPG</label>
                    </div> <br />
                    <br />
                    <label><b>Genre 3</b></label><br /><br />
                    <div class="radioInline">
                        <input type="radio" id="Action3" name="Genre3" value="Action">
                        <label class="radioLabel" for="Action3">Action</label><br>
                        <input type="radio" id="FPS3" name="Genre3" value="FPS">
                        <label class="radioLabel" for="FPS3">FPS</label><br>
                        <input type="radio" id="2D Platformers3" name="Genre3" value="2D Platformers">
                        <label class="radioLabel" for="2D Platformers3">2D Platformers</label>
                        <input type="radio" id="RPG3" name="Genre3" value="RPG">
                        <label class="radioLabel" for="RPG3">RPG</label>
                    </div> <br />
                    <br />
                    <br />
                    <b> <label>Preference on Release date</label> </b>
                    <br />
                    <br />
                    <div class="radioInline">
                        <input type="radio" id="old" name="release" value="Old Games">
                        <label class="radioLabel" for="old">Old Games</label><br>
                        <input type="radio" id="slnew" name="release" value="Slightly New Games">
                        <label class="radioLabel" for="slnew">Slightly New Games</label><br>
                        <input type="radio" id="Lgames" name="release" value="Latest Games">
                        <label class="radioLabel" for="Lgames">Latest games</label>
                    </div> <br />
                    <br />
                    <b> <label>Preference on Story Driven Games</label> </b>
                    <br />
                    <br />
                    <div class="radioInline">
                        <input type="radio" id="story" name="StoryGames" value="Story Heavy">
                        <label class="radioLabel" for="story">Story Heavy</label><br>
                        <input type="radio" id="nostory" name="StoryGames" value="Without story">
                        <label class="radioLabel" for="nostory">Without story</label><br>
                        <input type="radio" id="both" name="StoryGames" value="Balanced Experience">
                        <label class="radioLabel" for="both">Balanced Experience</label>
                    </div> <br />
                    <br />
                    <b><label for="avghrs">Average Playing Hours</label></b>
                    <input type="number" id="avghrs" name="avghrs" min="0" max="24" style="width:100px;">
                    <br />
                    <br />
                    <b> <label>Single-player games/Multiplayer-games</label> </b>
                    <br />
                    <br />
                    <div class="radioInline">
                        <input type="radio" id="sp" name="spmp" value="Singleplayer-games">
                        <label class="radioLabel" for="sp">Singleplayer-games</label><br>
                        <input type="radio" id="mp" name="spmp" value="Multiplayer-games">
                        <label class="radioLabel" for="mp">Multiplayer-games</label><br>
                    </div> <br />
                    <br />
                       <input type="submit" class="button" onclick="showToaster()"></input>

                </div>

            </form>
            <div class="footer">
        <div class="site-footer">
            <div class="row">
              <div class="column too_left"></div>
              <div class="column left">
                <h3 style="color: white; text-align: justify">ABOUT</h3>
                <p
                  style="text-align: justify; font-family: 'OCR A'; margin-right: 25px"
                >
                  We want our users to have the ultimate gaming experience. Our project
                  will provide users with personalised recommendations based on their
                  interests. Users can choose from various plans according to their
                  suitability. Each plan will provide them with vast number of new games
                  to be explored without buying each of them. Our project is best
                  suitable for people who doesn’t replay games and like to try and
                  explore new genres and titles. Indie game developers will have a vast
                  platform to expand their network & community and distribute their
                  games for users to play.
                </p>
              </div>
              <div class="column middle">
                <h3 style="color: white; text-align: justify">GENRES</h3>
                <ol style="font-family: 'OCR A'">
              <li><a style="text-decoration:none;color: #737373;" href="storePageUI.php#actionBookmark">Action-Adventure</a></li>
              <li><a style="text-decoration:none;color: #737373;" href="storePageUI.php#fpsBookmark">FPS Shooter</a></li>
              <li><a style="text-decoration:none;color: #737373;" href="storePageUI.php#rpgBookmark">RPG</a></li>
              <li><a style="text-decoration:none;color: #737373;" href="storePageUI.php#platformersBookmark">Platfomers</a></li>
              <li><a style="text-decoration:none;color: #737373;" href="storePageUI.php#dimesionalGamesBookmark">2D Games</a></li>
                </ol>
              </div>
              <div class="column right">
                <h3 style="color: white; text-align: justify">QUICK LINKS</h3>
                <ol style="font-family: 'OCR A'">
                  <li> <a style="text-decoration:none;color: #737373;" href="AboutUs.html"> About Us</a></li>
                  <li> <a style="text-decoration:none;color: #737373;" href="ContactUs.php"> Contact Us </a></li>
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
                    <a
                      href="Home.php"
                      style="color: red; text-decoration: none; font-family: 'OCR A'"
                      >Gameporium</a
                    >.
                  </p>
                </div>
                <div class="column divide_linksRight"></div>
                <ul>
                  <li class="display_inline">
                    <a
                      href="https://twitter.com/BhuvanMehta9?t=kpjP4MwoRmT65fU8tttE7g&s=08"
                      target="_blank"
                    >
                      <img
                        class="logos"
                        src="twitter_footer.png"
                        onmouseover="this.src='twitter_footer_OG.png';"
                        onmouseout="this.src='twitter_footer.png';"
                      />
                    </a>
                  </li>
                  <li class="display_inline">
                    <a
                      href="https://www.linkedin.com/in/bhuvan-mehta-a6044422a/"
                      target="_blank"
                    >
                      <img
                        class="logos"
                        src="linkedin_footer.png"
                        onmouseover="this.src='linkedin_footer_OG.png';"
                        onmouseout="this.src='linkedin_footer.png';"
                      />
                    </a>
                  </li>
                  <li class="display_inline">
                    <a href="">
                      <img
                        class="logos"
                        src="facebook_footer.png"
                        onmouseover="this.src = 'facebook_footer_OG.png'; this.style.transition = '0.6s'"
                        onmouseout="this.src='facebook_footer.png';"
                      />
                    </a>
                  </li>
                  <li class="display_inline">
                    <a href="">
                      <img
                        class="logos"
                        src="instagram_footer.png"
                        onmouseover="this.src='instagram_footer_OG.png';"
                        onmouseout="this.src='instagram_footer.png';"
                      />
                    </a>
                  </li>
                </ul>
              </div>
              <div class="column rightSocial"></div>
            </div>
        </div>
            <script>
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

