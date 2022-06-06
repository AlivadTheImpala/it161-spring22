<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Brandon</title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8" />
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/portal.css" />
    <link rel="stylesheet" href="css/form.css" />
  </head>

  <body>
    <!-- START WRAPPER -->
    <main class="wrapper">
      <header>
        <h1>
          <a href="index.php">
            <i class="logo fa fa-home"></i> Brandons IT161 Portal
          </a>
        </h1>
        <nav>
          <ul class="topnav" id="myTopnav">
            <li><a href="index.php" class="selected">Welcome</a></li>
            <li><a href="elements.php">HTML Elements</a></li>
            <li><a href="aia.html">AIA</a></li>
            <li><a href="big/index.php">Big</a></li>
            <li><a href="http://w3schools.com">W3 School</a></li>
            <li>
              <a
                href="https://www.linkedin.com/learning/me/in-progress?u=95230001"
                >LinkedIn Learning</a
              >
            </li>
            <li><a href="flowchart.php">Flowchart/Layout</a></li>
            <li><a href="fp/index.php">Final Project</a></li>
            <li><a href="contactme.php">Contact Brandon</a></li>
            <li class="icon">
              <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
            </li>
          </ul>
        </nav>
      </header>

      <section>
          <h2 class="pageID">Contact Brandon</h2>
          <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "brandondavila315@outlook.com";  //place your/your client's email address here
        $toName = "Emily Shaffer"; //place your client's name here
        $website = "Tattered Meadows";  //place NAME of your client's website

        // echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
      </section>

      <!-- START Footer -->
      <footer>
        <p>
          <small>
            &copy; 2022-<?=date("Y")?>
            by <a href="contactme.php">Brandon Davila</a>, All Rights Reserved ~
            <a id="html-checker" href="#">Check HTML</a> ~
            <a id="css-checker" href="#">Check CSS</a>
          </small>
        </p>
      </footer>
      <!-- END Footer -->
    </main>
    <!-- END WRAPPER -->

    <script>
      //https://tinyurl.com/dynamic-html-checker
      document
        .getElementById("html-checker")
        .setAttribute(
          "href",
          "https://validator.w3.org/nu/?doc=" + location.href
        );
      document
        .getElementById("css-checker")
        .setAttribute(
          "href",
          "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href
        );

      //manages mobile nav - from W3Schools
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>
  </body>
</html>
