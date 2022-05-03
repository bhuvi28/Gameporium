<?php
session_start();
$conn = mysqli_connect("localhost","root","Bhuvan@2808","new_gameporium");
$uid = $_SESSION["userid"];
$res=mysqli_query($conn,"select * from subscription;");
?>
<html>
<head>
    <title>Gameporium</title>
    <link rel="stylesheet" href="SubscriptionPlansStyles.css" />
</head>
<body>
    <div class="navbar">
        <div class="row">
            <div class="columnLogo">
                <a href="homePage.html">
                    <img class="logoStyles" src="logo.png" alt="gameporiumLogo" />
                </a>
            </div>
            <div class="columnNavbar">
                <a href="homePage.html" style="text-decoration: none;">
                    <img
                        title="Home"
                        width="60px"
                        style="cursor: pointer"
                        src="home.png"
                        alt="home"
                        onmouseover="this.src='home_hover.png';"
                        onmouseout="this.src='home.png';" />
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
                    <img
                        width="60px"
                        title="Profile"
                        style="cursor: pointer"
                        src="user.png"
                        alt="user"
                        id="userIcon"
                        onmouseover="this.src='user_hover.png';"
                        onmouseout="this.src='user.png';"
                        onclick="dropDown('user')" />
                </a>
                <div class="dropdown-content-user" id="dropdownUser">
                    <a href="Profile.php">Profile</a>
                    <a href="#">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar2Container">
        <ul style="padding: 0px">
            <a class="navbarItems" href="Quiz.html">
                <li>Quiz</li>
            </a>
            <a class="navbarItems active" href="subscriptionPlans.html">
                <li>Subscription Plans</li>
            </a>
            <a class="navbarItems" href="userLibrary.html">
                <li>Library</li>
            </a>
            <a class="navbarItems" href="#">
                <li>News & Trending</li>
            </a>
            <a class="navbarItems" href="#">
                <li>Bestsellers</li>
            </a>
            <a class="navbarItems" href="storePage.html">
                <li>Store</li>
            </a>
            <a class="navbarItems" href="ContactUs.html">
                <li>Contact Us</li>
            </a>
        </ul>
    </div>
    <div class="pricing">
        <br />
        <p style="color: #545454; font-family: 'OCR A';font-size: 40px">Choose a plan</p>

        <div class="grid">
            <?php while($row=mysqli_fetch_array($res)):?>
            <div class="grid__item">
                <p><?php echo $row['PlanName'];?></p>
                <span class="grid__price"> &#x20B9; <?php echo $row['Price']?>  <span> for <?php echo $row['Validity'];?> </span></span>
                <ul>
                    <li><?php echo $row['GamesAvailable']; ?> Games Available </li>
                    <li><?php echo $row['No_of_Accounts']; ?> Accounts </li>
                    <li><?php echo $row ['No_of_FreeGames'];?> </li>
                    <li>Privilige-4</li>
                    <li>Privilige-5</li>
                </ul>
                <?php $_POST["subid"] = $row['PlanID']; ?>
                <form action="bill.php" method="post">
                    <input type="hidden" name="plan" value="<?php echo $row['PlanID'] ?>" />
                    <button type="submit">Choose Plan</button>
                </form>
            </div>
            <?php endwhile;?>
            
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
<br />
<br />
<footer class="site-footer">
    <div class="row">
        <div class="column too_left"></div>
        <div class="column left">
            <h3 style="color: white; text-align: justify">ABOUT</h3>
            <p style="text-align: justify; font-family: 'OCR A';margin-right:25px">
                We want our users to have the ultimate gaming experience. Our project
          will provide users with personalised recommendations based on their
          interests. Users can choose from various plans according to their
          suitability. Each plan will provide them with vast number of new games
          to be explored without buying each of them. Our project is best
          suitable for people who doesn�t replay games and like to try and
          explore new genres and titles. Indie game developers will have a vast
          platform to expand their network & community and distribute their
          games for users to play.
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
                    <a
                        href="Login.html"
                        style="color: red; text-decoration: none; font-family: 'OCR A'">
                        Gameporium
                    </a>.
                </p>
            </div>
            <div class="column divide_linksRight"></div>
            <ul>
                <li class="display_inline">
                    <a
                        href="https://twitter.com/BhuvanMehta9?t=kpjP4MwoRmT65fU8tttE7g&s=08"
                        target="_blank">
                        <img
                            class="logos"
                            src="twitter_footer.png"
                            onmouseover="this.src='twitter_footer_OG.png';"
                            onmouseout="this.src='twitter_footer.png';" />
                    </a>
                </li>
                <li class="display_inline">
                    <a
                        href="https://www.linkedin.com/in/bhuvan-mehta-a6044422a/"
                        target="_blank">
                        <img
                            class="logos"
                            src="linkedin_footer.png"
                            onmouseover="this.src='linkedin_footer_OG.png';"
                            onmouseout="this.src='linkedin_footer.png';" />
                    </a>
                </li>
                <li class="display_inline">
                    <a href="">
                        <img
                            class="logos"
                            src="facebook_footer.png"
                            onmouseover="this.src='facebook_footer_OG.png';"
                            onmouseout="this.src='facebook_footer.png';" />
                    </a>
                </li>
                <li class="display_inline">
                    <a href="">
                        <img
                            class="logos"
                            src="instagram_footer.png"
                            onmouseover="this.src='instagram_footer_OG.png';"
                            onmouseout="this.src='instagram_footer.png';" />
                    </a>
                </li>
            </ul>
        </div>
        <div class="column rightSocial"></div>
    </div>
</footer>
</html>
