<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarpanch:wght@400;700&family=Shojumaru&display=swap"
        rel="stylesheet">
    <title>Document</title>
    <style>
      .button3{
        display: inline-block;
      }

      .conatin a{
        padding-left: 20px;
      }

      
      footer{
            background-color: #99A98F;
        }
        .footer-nav {
            margin: 50px 5%;
        }

        .footer-nav li {
            display: inline-block;
            padding-left: 20px;

        }

        .footer-nav li a {
            text-decoration: none;
            color: #EEEEEE;
        }

        .footer-nav li a:hover{
            color: #A0D8B3;
        }

        .social-link{
            margin: 52px 0% 20px 60%;
        }

        .social-link li {
            display: inline-block;
            text-decoration: none;
            padding-left: 20px;

        }

        .social-link li a{
            color: #EEEEEE;
            
        }

        .social-link li a:hover{
            color: #A0D8B3;
        }
    </style>
</head>

<body>
    <?php include 'header.php' ?>
    <header id="home">
        <div class="header-box">
            <div class="header-box-text">
                <img src="./Images/carbon-footprint.png" alt="" class="main-img">
                <h1 style="color:#D2E9E9;">Carbon Tracker</h1><br>
                <hr>
                <div class="conatin">
                    <a style="text-decoration: none;" class="button3" href="#track" ;>
                        <button class="main-btn">
                            <span class="main-btnspan">Track <i class="fa-solid fa-earth-americas"></i></span>
                        </button>
                    </a>
                    <a style="text-decoration: none;" href="carbrandAdd.php" class="button3">
                        <button class="main-btn">
                            <span class="main-btnspan">Add Car <i class="fa-solid fa-car"></i></span>
                        </button>
                    </a>
                    <a style="text-decoration: none;" href="motorAdd.php" class="button3">
                        <button class="main-btn">
                            <span class="main-btnspan">Add Motor <i class="fa-sharp fa-solid fa-motorcycle"></i></span>
                        </button>
                    </a>
                </div>

            </div>
        </div>
    </header>


    <div class="calculate" id="track">
        <div class="container1">
            <h3>Car Carbon Calculator</h3>
            <img src="https://cdn.dribbble.com/users/227692/screenshots/2106943/flp-001.gif" alt="cargif" srcset=""
                width="300px" height="150px" class="container-img">
            <a class="nav-link motor bn54" href="carCalculate.php" style="font-weight: bold;">
                <button class="bn54">
                    <span class="bn54span"><i class="fa-solid fa-leaf"></i></span>
                </button>
            </a>
        </div>
        <div class="container2">
            <h3>Cycle Carbon Calculator</h3>
            <img src="https://cdn.dribbble.com/users/752550/screenshots/2161404/bike.gif" alt="cargif" srcset=""
                width="300px" height="150px" class="container-img">
            <a class="nav-link motor bn54" href="motorCalculate.php" style="font-weight: bold;">
                <button class="bn54">
                    <span class="bn54span"><i class="fa-solid fa-leaf"></i></span>
                </button>
            </a>

        </div>
    </div>
</body>

<footer>
    <div class="row">
        <div class="col span_1_of_2">
            <ul class="footer-nav">
                <li><a href="about.php">About us</a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#">Help & Support</a></li>
            </ul>
        </div>
        <div class="col span_1_of_2">
            <ul class="social-link">
                <li><a href="#"><i class="fab fa-facebook-f "></i></a></li>
                <li><a href="#"><i class="fab fa-twitter "></i></a></li>
                <li><a href="#"><i class="fab fa-instagram "></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g "></i></a></li>

            </ul>
        </div>
    </div>

    <div class="row">
        <p style="text-align: center; padding-bottom:50px; color:#EEEEEE;">
            This webpage has been created for educational purpose by heintothehtet aka hforhiphop.
        </p>

    </div>
</footer>

</html>