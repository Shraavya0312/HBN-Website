<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HBN Website-Shodhyatra</title>
    <link rel="stylesheet" href="../../style.css">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" rel="stylesheet">
    <script crossorigin="anonymous" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <style>
      .navbar {
          background-color: #DAEBE3 !important;
          
      }
      #map {
          width: 80%;
          height: 500px;
      }
    </style>
    <style>
        .carousel-control-prev-icon{
            background-color: black;
            margin-left: -80px;
        }
        .carousel-control-next-icon {
            background-color: black;
            margin-right: -80px;
        }
    </style>
</head>
<body class="mainbody">
    <!-- Header -->
    <header>
        <div class="rowdiv">
            <div style="display: flex; justify-content: center; align-items: center;">
              <img src="../../assets/hbn.png" height="100px" width="auto">
              <h2 class="logotext">HONEYBEE <br> NETWORK</h2>
            </div>
            <div>
                <img src="../../assets/sristi.png" height="100px" width="auto">
                <img src="../../assets/gian.png" height="100px" width="auto" style="margin-left: 25px;">
            </div>
        </div>
        
        <nav style="background-color: #DAEBE3;" class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../../index.html">Home</a>
                        </li>
  
                        <li class="nav-item">
                            <a class="nav-link" href="./../aboutus.html">About Us</a>
                        </li>
  
                        <li class="nav-item">
                            <a class="nav-link" href="./../innovators.html">Innovators</a>
                        </li>
  
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Activities
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./competitions.php">Competitions</a></li>
                                <li><a class="dropdown-item" href="#">Shodhyatra</a></li>
                            </ul>
                        </li>
  
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Resources
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./../resources/hbn-publishedPractices.html">Honeybee Published Practices</a></li>
                                <li><a class="dropdown-item" href="./../resources/hbn-innovations.html">Honeybee Innovations</a></li>
                                <li><a class="dropdown-item" href="./../resources/hbn-lowcostPractices.html">Honeybee Lowcost Practices</a></li>
                                <li><a class="dropdown-item" href="./../resources/medicalPlant.html">Medicinal Pant Database</a></li>
                                <li><a class="dropdown-item" href="./../resources/SRISTI-library.html">SRISTI Library</a></li>
                                <li><a class="dropdown-item" href="./../resources/seekingSolutions.html">Seeking Solutions</a></li>
                                <li><a class="dropdown-item" href="./../resources/augmentInnovators.html">Augment Innovators</a></li>
                            </ul>
                        </li>
  
                        <li class="nav-item">
                            <a class="nav-link" href="../contact.html">Contact Us</a>
                        </li>
  
                    </ul>
  
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #DAEBE3; margin-right: 20px; color: black; padding-left: 15px; padding-right: 15px; border-width: 2px;">
                          English
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Hindi</a></li>
                          <li><a class="dropdown-item" href="#">Gujrathi</a></li>
                          <li><a class="dropdown-item" href="#">Tamil</a></li>
                        </ul>
                    </div>
  
                    <button class="joinbutton" style="margin-right: 20px;" onclick="window.location.href='../joinus.php'">Join Us!</button>
  
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
  
                </div>
            </div>
        </nav>
    </header>

    <main>
        <br>
        <div style="padding-left: 40px; padding-right: 40px;">
            <!-- Intro -->
            <div>     
                <h2 class="subheading">WHAT IS SHODH YATRA?</h2>
                <br>
                <div style="display: flex; align-items: center; align-content: center; justify-self: center; gap: 40px">
                    <div style="width: 50%;">
                        <br>
                        <h3 class="para3">
                        <b> We are a global network dedicated to empowering grassroots innovators and traditional knowledge holders.</b>
                        </h3>
                        <br>
                        <h3 class="para3">
                            The Honey Bee Network (HBN), backed by dedicated volunteers, has pioneered open innovation since 1989, long before its popularization. For over 35 years, it has championed the safeguarding of knowledge, resources, and rights of knowledge-rich yet economically disadvantaged individuals. Focused on cross-pollinating ideas, eliminating grassroots innovator anonymity, ensuring local language communication, and advocating fair profit-sharing, it nurtures green grassroots ingenuity globally. Globally, Honey Bee volunteers unite with diverse stakeholders to acknowledge, appreciate, and reward grassroots innovations.
                            The Honey Bee Network (HBN), backed by dedicated volunteers, has pioneered open innovation since 1989, long before its popularization. For over 35 years, it has championed the safeguarding of knowledge, resources, and rights of knowledge-rich yet economically disadvantaged individuals.Focused on cross-pollinating ideas, eliminating grassroots innovator anonymity, ensuring local language communication, and advocating fair profit-sharing, it nurtures green grassroots ingenuity globally. Globally, Honey Bee volunteers unite with diverse stakeholders to acknowledge, appreciate, and reward grassroots innovations.

                        </h3>

                    </div>
                    <div style="width: 50%;">
                        <img src="../../assets/car.jpg" width="90%" height="auto">
                    </div>
                </div>
            </div>    

            <br>
            <center><hr style="color: #2E2E2E; width: 80%;"></center>
            <br>

            <!-- Past Yatras -->
            <div>
                <h2 class="subheading">PAST YATRAS</h2>
                <br>
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div style="background-color: beige; display: flex; gap: 20px;">
                            <img src="../../assets/car.jpg" width="40%" height="auto">
                            <div style="width: 60%; padding: 20px;">
                                    <center>
                                    <h3 class="name" style="font-size: 22px;">Shodhyatra May 2024-Kerala</h3>
                                    </center>
                                    <br>
                                    <p class="para3">
                                        The Honey Bee Network (HBN), backed by dedicated volunteers, has pioneered open innovation since 1989, long before its popularization. For over 35 years, it has championed the safeguarding of knowledge, resources, and rights of knowledge-rich yet economically disadvantaged individuals. Focused on cross-pollinating ideas, eliminating grassroots innovator anonymity, ensuring local language communication, and advocating fair profit-sharing, it nurtures green grassroots ingenuity globally. Globally, Honey Bee volunteers unite with diverse stakeholders to acknowledge, appreciate, and reward grassroots innovations.
                                        Globally, Honey Bee volunteers unite with diverse stakeholders to acknowledge, appreciate, and reward grassroots innovations.
                                    </p>
                                    <p class="readmore2">Read more →</p>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div style="background-color: beige; display: flex; gap: 20px;">
                            <img src="../../assets/car.jpg" width="40%" height="auto">
                            <div style="width: 60%; padding: 20px;">
                                    <center>
                                    <h3 class="name" style="font-size: 22px;">Shodhyatra May 2024-Kerala</h3>
                                    </center>
                                    <br>
                                    <p class="para3">
                                        The Honey Bee Network (HBN), backed by dedicated volunteers, has pioneered open innovation since 1989, long before its popularization. For over 35 years, it has championed the safeguarding of knowledge, resources, and rights of knowledge-rich yet economically disadvantaged individuals. Focused on cross-pollinating ideas, eliminating grassroots innovator anonymity, ensuring local language communication, and advocating fair profit-sharing, it nurtures green grassroots ingenuity globally. Globally, Honey Bee volunteers unite with diverse stakeholders to acknowledge, appreciate, and reward grassroots innovations.
                                        Globally, Honey Bee volunteers unite with diverse stakeholders to acknowledge, appreciate, and reward grassroots innovations.
                                    </p>
                                    <p class="readmore2">Read more →</p>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div style="background-color: beige; display: flex; gap: 20px;">
                            <img src="../../assets/car.jpg" width="40%" height="auto">
                            <div style="width: 60%; padding: 20px;">
                                    <center>
                                    <h3 class="name" style="font-size: 22px;">Shodhyatra May 2024-Kerala</h3>
                                    </center>
                                    <br>
                                    <p class="para3">
                                        The Honey Bee Network (HBN), backed by dedicated volunteers, has pioneered open innovation since 1989, long before its popularization. For over 35 years, it has championed the safeguarding of knowledge, resources, and rights of knowledge-rich yet economically disadvantaged individuals. Focused on cross-pollinating ideas, eliminating grassroots innovator anonymity, ensuring local language communication, and advocating fair profit-sharing, it nurtures green grassroots ingenuity globally. Globally, Honey Bee volunteers unite with diverse stakeholders to acknowledge, appreciate, and reward grassroots innovations.
                                        Globally, Honey Bee volunteers unite with diverse stakeholders to acknowledge, appreciate, and reward grassroots innovations.
                                    </p>
                                    <p class="readmore2">Read more →</p>
                            </div>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" >
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            
            <br>
            <center><hr style="color: #2E2E2E; width: 80%;"></center>
            <br>

            <!-- Upcoming Yatras -->
            <div>
                <h2 class="subheading">PAST YATRAS</h2>
                <br>
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div style="background-color: beige; display: flex; gap: 20px;">
                            <img src="../../assets/car.jpg" width="40%" height="auto">
                            <div style="width: 60%; padding: 20px;">
                                    <center>
                                    <h3 class="name" style="font-size: 22px;">Shodhyatra May 2024-Kerala</h3>
                                    </center>
                                    <br>
                                    <p class="para3">
                                        The Honey Bee Network (HBN), backed by dedicated volunteers, has pioneered open innovation since 1989, long before its popularization. For over 35 years, it has championed the safeguarding of knowledge, resources, and rights of knowledge-rich yet economically disadvantaged individuals. Focused on cross-pollinating ideas, eliminating grassroots innovator anonymity, ensuring local language communication, and advocating fair profit-sharing, it nurtures green grassroots ingenuity globally. Globally, Honey Bee volunteers unite with diverse stakeholders to acknowledge, appreciate, and reward grassroots innovations.
                                        Globally, Honey Bee volunteers unite with diverse stakeholders to acknowledge, appreciate, and reward grassroots innovations.
                                    </p>
                                    <p class="readmore2">Read more →</p>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div style="background-color: beige; display: flex; gap: 20px;">
                            <img src="../../assets/car.jpg" width="40%" height="auto">
                            <div style="width: 60%; padding: 20px;">
                                    <center>
                                    <h3 class="name" style="font-size: 22px;">Shodhyatra May 2024-Kerala</h3>
                                    </center>
                                    <br>
                                    <p class="para3">
                                        The Honey Bee Network (HBN), backed by dedicated volunteers, has pioneered open innovation since 1989, long before its popularization. For over 35 years, it has championed the safeguarding of knowledge, resources, and rights of knowledge-rich yet economically disadvantaged individuals. Focused on cross-pollinating ideas, eliminating grassroots innovator anonymity, ensuring local language communication, and advocating fair profit-sharing, it nurtures green grassroots ingenuity globally. Globally, Honey Bee volunteers unite with diverse stakeholders to acknowledge, appreciate, and reward grassroots innovations.
                                        Globally, Honey Bee volunteers unite with diverse stakeholders to acknowledge, appreciate, and reward grassroots innovations.
                                    </p>
                                    <p class="readmore2">Read more →</p>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div style="background-color: beige; display: flex; gap: 20px;">
                            <img src="../../assets/car.jpg" width="40%" height="auto">
                            <div style="width: 60%; padding: 20px;">
                                    <center>
                                    <h3 class="name" style="font-size: 22px;">Shodhyatra May 2024-Kerala</h3>
                                    </center>
                                    <br>
                                    <p class="para3">
                                        The Honey Bee Network (HBN), backed by dedicated volunteers, has pioneered open innovation since 1989, long before its popularization. For over 35 years, it has championed the safeguarding of knowledge, resources, and rights of knowledge-rich yet economically disadvantaged individuals. Focused on cross-pollinating ideas, eliminating grassroots innovator anonymity, ensuring local language communication, and advocating fair profit-sharing, it nurtures green grassroots ingenuity globally. Globally, Honey Bee volunteers unite with diverse stakeholders to acknowledge, appreciate, and reward grassroots innovations.
                                        Globally, Honey Bee volunteers unite with diverse stakeholders to acknowledge, appreciate, and reward grassroots innovations.
                                    </p>
                                    <p class="readmore2">Read more →</p>
                            </div>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" >
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>

            <br>
            <center><hr style="color: #2E2E2E; width: 80%;"></center>
            <br>

            <!-- Volunteer Form -->
            <div>
                <h2 class="subheading">REGISTRATION FORM</h2>
                <br>
                <center>
                <form method="post" action="shodhyatra.php">
                    <input class="textar2" name="name" placeholder="Your Full Name" required/>
                    <br>
                    <br>
                    <input class="textar2" name="age" placeholder="Your Age" required/>
                    <br>
                    <br>
                    <input class="textar2" name="email" placeholder="Your Email" type="email" required/>
                    <br>
                    <br>
                    <input class="textar2" name="number" placeholder="Your Phone Number" required/>
                    <br>
                    <br>
                    <select name="shodhyatra" class="textar2" style="color: gray;" required>
                        <option value="" disabled selected>Choose which Yatra you would like to attend</option>
                        <option value="August2024-Rajasthan">August 2024-Rajasthan</option>
                        <option value="December2024-Ladakh">December 2024-Ladakh</option>
                        <option value="April2025-Tamil Nadu">April 2025-Tamil Nadu</option>
                        <option value="August2025-Meghalaya">August 2025-Meghalaya</option>
                    </select>
                    <br>
                    <br>
                    <textarea class="textar3" name="reason" placeholder="Reason for Volunteering" required></textarea>
                    <br>
                    <br>
                    <input type="submit" name="submit" value="Join Us!" class="joinbutton" style="padding-top: 10px; padding-bottom: 10px; padding-right: 50px; padding-left: 50px; font-size: 18px;"/>
                </form>
                </center>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="mainfooter">
        <div class="footer">
          <div>
            <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
              <img src="../../assets/hbn2.png" height="100px" width="auto">
              <h2 class="logotext2">HONEYBEE <br> NETWORK</h2>
            </div>
            <p class="para2">
              Empowering Innovation through Traditional Knowledge
            </p>
            <br>
            <center>
            <div class="social-buttons">
              <a href="#" class="social-button" title="Facebook">
                  <img src="../../assets/social/fb.png" width="100%" height="auto">
              </a>
              <a href="#" class="social-button" title="Twitter">
                <img src="../../assets/social/tw.png" width="100%" height="auto">
              </a>
              <a href="#" class="social-button" title="LinkedIn">
                <img src="../../assets/social/ln.png" width="100%" height="auto">
              </a>
              <a href="#" class="social-button" title="YouTube">
                  <img src="../../assets/social/yt.png" width="100%" height="auto">
              </a>
            </div>
            </center>
          </div>
  
          <div>
            <h3 class="subheadingsmall2">Navigation</h3>
            <br>
            <h5><a class="footerlist" href="../../index.html"><b> Home</b></a></h5>
            <h5><a class="footerlist" href="./../aboutus.html">About Us</a></h5>
            <h5><a class="footerlist" href="./../innovators.html">Innovators</a></h5>
            <h5><a class="footerlist" href="./competitions.php">Competitons</a></h5>
            <h5><a class="footerlist" href="#">Shodhyatra</a></h5>
            <h5><a class="footerlist" href="../contact.html">Contact Us</a></h5>
          </div>
  
          <div>
            <h3 class="subheadingsmall2">Actions</h3>
            <br>
            <h5><a class="footerlist" href="./../joinus.php">Get involved</a></h5>
            <br>
            <h5><a class="footerlist" href="./../newsletter.php">Subscribe to our Newsletter</a></h5>
            <br>
          </div>
  
          <div>
            <h3 class="subheadingsmall">PARTNERS</h3>
            <br>
            <center>
              <div style="display: flex; gap: 40px; align-content: center; align-items: center; margin-left: -80px;">
                <img src="../../assets/sristi.png" height="100px" width="auto">
                <img src="../../assets/gian2.png" height="100px" width="auto">
              </div>
            </center>
          </div>
        </div>
        <br>
        <hr style="color: white;">
        <br>
        <center><p class="tnc">Copyright © 2024 Honey Bee Network. | All Rights Reserved | <a href="#" class="tnc2">Terms and Conditions</a> | <a href="#" class="tnc2">Privacy Policy</a></p></center>
    </footer>
</body>
</html>

<?php
    $con = mysqli_connect("localhost", "root", "", "hbn");
    if(!$con){
        die("Error: ".mysqli_error($con));
    }
    if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $number = $_POST['number']; 
      $age = $_POST['age']; 
      $shodhyatra = $_POST['shodhyatra'];
      $reason = $_POST['reason'];

      $sql = "insert into shodhyatra(name,email,number,age,shodhyatra2,reason) values('$name','$email','$number','$age','$shodhyatra','$reason')";
      if(mysqli_query($con, $sql)){
          echo "<script>alert('Joined Sucessfully! You will recieve a follow up email shortly!')</script>";
      }
      else{
          echo "error:".mysqli_error($con) ;
      }
      mysqli_close($con);
  }
?>