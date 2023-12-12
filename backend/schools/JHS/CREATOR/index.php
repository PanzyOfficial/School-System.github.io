<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATOR SCHOOLS</title>
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon" class="top-logo">
    <link rel="stylesheet" href="css/style.css">
    <link href="assets/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/font-awesome.css" rel="stylesheet" type="text/css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<header  class="header">
    <img src="images/logo.jpg" alt="" >
    <a href="index.php" class="logo"><label >CREATOR SCHOOLS.</label></a>

    <nav class="navbar">
        <div id="nav-close" class="fas fa-times"></div>
        <a href="index.php">Home</a> 
        <a href="#about">About</a>
        <a href="#Contact">Contact US</a>
        <a href="#" onclick="toggle()">Login</a>
    </nav>

    <div class="icons" >
        <div id="menu-btn" class="fas fa-bars"></div>
        <!-- <a href="#" class="fas fa-shopping-cart"></a> -->
        <div id="search-btn" class="fas fa-search" style="position:relative;left:10px;"></div>
    </div>
 
</header>

<body>
    <div class="search-form">
        <div id="close-search" class="fas fa-times"></div>

        <form action="">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    </div>

    <!-- home section starts  -->
   <section class="home" id="home" >

    <div class="swiper home-slider" >

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url(images/pic-1.JPG) no-repeat;">
                    <div class="content">
                        <span style="color:white;">TEXT PLACEHOLDER</span>
                        <h3>TEXT HERE</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit unde ex molestias soluta consequatur saepe aliquam, excepturi delectus consequuntur minus!</p>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box second" style="background: url(images/pic-2.JPG) no-repeat;">
                    <div class="content">
                        <span>TEXT PLACEHOLDER</span>
                        <h3>TEXT HERE</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit unde ex molestias soluta consequatur saepe aliquam, excepturi delectus consequuntur minus!</p>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(images/pic-3.JPG) no-repeat;">
                    <div class="content">
                    <span>TEXT PLACEHOLDER</span>
                        <h3>TEXT HERE</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit unde ex molestias soluta consequatur saepe aliquam, excepturi delectus consequuntur minus!</p>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

   </section>
    <!-- home section ends -->

    <!-- reviews section starts  -->
    <section class="reviews" id="reviews">
       <h1 class="heading">client's reviews</h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
                    <div class="user">
                        <img src="images/AvatarImage1.jpeg" alt="">
                        <div class="info">
                            <h3>john deo</h3>
                            <span>Batch: 2014</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
                    <div class="user">
                        <img src="images/AvatarImage2.jpeg" alt="">
                        <div class="info">
                            <h3>john deo</h3>
                            <span>Batch: 2011</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quidem laborum pariatur alias, culpa illum quaerat, aliquid laboriosam voluptatem nisi repellat obcaecati, adipisci esse ab delectus dolorum ut recusandae ipsam?</p>
                    <div class="user">
                        <img src="images/AvatarImage3.jpeg" alt="">
                        <div class="info">
                            <h3>john deo</h3>
                            <span>Batch: 2010</span>
                        </div>
                    </div>
                </div>

                

            </div>

        </div>
    </section>
    <!-- reviews section ends -->

    <!-- newsletter section  -->
    <section class="newsletter">

        <div class="content">
            <h1 class="heading">subscirbe now</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam ipsam repellat nostrum esse officiis unde quisquam corporis doloremque adipisci similique!</p>
            <form action="">
                <input type="email" name="" placeholder="enter your email" id="" class="email">
                <input type="submit" value="subscirbe" class="btn">
            </form>
        </div>

    </section>
    <!-- newsletter section  -->
    
    <!-- footer section starts  -->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#reviews">reviews</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#">my account</a>
                <a href="#">my application</a>
                <a href="#">my wishlist</a>
                <a href="#">ask questions</a>
                <a href="#">terms of use</a>
                <a href="#">privacy policy</a>
            </div>

            <div class="box" id="Contact">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +2345678908 </a>
                <a href="#"> <i class="fas fa-phone"></i> +11111114455 </a>
                <a href="#"> <i class="fas fa-envelope"></i> CompanyEmail@gmail.com </a>
                <a href="#"> <i class="fas fa-map"></i> COMMUNITY FOUR,TEMA . GHANA </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            
            </div>

        </div>

        <div class="credit">created by <span>JOB GROUP LIMITED</span> | all rights reserved!</div>
    </section>
<!-- footer section ends --><script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- Add this script tag to the end of your body before closing </body> tag -->
<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the reviews and clients sections
        var reviewsSection = document.querySelector('.reviews');
        var clientsSection = document.querySelector('.clients');

        // Add a scroll event listener
        window.addEventListener('scroll', function () {
            // Calculate the scroll position
            var scrollPosition = window.scrollY;

            // Adjust the transform property for the parallax effect
            reviewsSection.style.transform = 'translateX(' + scrollPosition /19 + 'px)';
            clientsSection.style.transform = 'translateX(' + -scrollPosition / 50 + 'px)';
        });
    });
</script> -->

</body>
</html>