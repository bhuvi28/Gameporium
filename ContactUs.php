<html>
  <head>
    <title>Gameporium : Contact Us</title>
    <link rel="stylesheet" href="ContactUsStyles.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
  </head>
  <body class="backgroundimage">
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
        <ul style="padding: 0px">
          <a class="navbarItems" href="Quiz.php"><li>Quiz</li></a>
          <a class="navbarItems" href="subscriptionPlans.php"><li>Subscription Plans</li></a>
          <a class="navbarItems" href="userLibrary.php"><li>Library</li></a>
          <a class="navbarItems" href="#"><li>News & Trending</li></a>
          <a class="navbarItems" href="storePageUI.php"><li>Store</li></a>
          <a class="navbarItems active" href="ContactUs.php"><li>Contact Us</li></a>
          <a class="navbarItems" href="AboutUs.html"><li>About Us</li></a>
        </ul>
      </div>
    <br />
    <h2 style="color: #545454; font-family: 'OCR A'">
      <u> SEND US A MESSAGE : </u>
    </h2>
    <p style="color: #545454; margin-left: 100px; font-family: 'OCR A'">
      <i> We will get back to you at the earliest.</i>
    </p>
    <br />
    <form onsubmit="submitForm();return false;" id="myContactUsForm" method="post" >
      <div class="form-group">
        <input
          type="text"
          class="form-control"
          name="name"
          required
          id="name"
          placeholder="NAME"
          onblur = "validateFormName(id,'errorName','errorFormatName',0)"
        />
        <br>
        <span class="error" id="errorName"> *Required</span>
        <span class="error" id="errorFormatName"> Invalid Name Format</span>
      </div>
      <br /><br />
      <div class="form-group">
        <input
          type="email"
          class="form-control"
          name="emailID"
          id="emailID"
          required
          placeholder="EMAIL"
          onblur="validateFormEmail(id,'errorEmail','formatErrorEmail',1)"
        />
        <br>
        <span class="error" id="errorEmail">*Required</span>
        <span class="error" id="formatErrorEmail">*Invalid Email</span>
      </div>
      <br /><br />
      <div class="form-group">
        <textarea
          class="form-control"
          name="message"
          required
          id="message"
          placeholder="MESSAGE"
          onblur = "validateForm(id,'errorMessage',2)"
        ></textarea>
        <br>
        <span class="error" id="errorMessage">*Required</span>
      </div>
      <br /><br />
      <button type="submit" class="submitForm" id="submitButton" >SUBMIT</button>
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
      </div>
</div>

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>        
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
      <script src="contactUs.js" >
    </script>
  </body>
</html>
