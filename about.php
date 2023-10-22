<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

    <!-- Add the Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- Add the Slick theme CSS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />


</head>

<body>

    <?php include 'components/user_header.php'; 

?>

    <div class="heading-about">
        <h3>ABOUT US</h3>
        <p><a href="index.php">home</a> <span> / about</span></p>
    </div>

    <p class="ctt">Our Team</p>
    <h1 class="title">Get To Know Our Team Members</h1>

    <div class="ourself">
        <div class="row-our">
            <div class="ourselfcont">
                <div class="our-team">
                    <div class="picture">
                        <img class="img-fluid" src="images/tia.jpg">
                    </div>

                    <div class="team-content">
                        <h3 class="name">Chyntia Irawan</h3>
                        <h4 class="title">00000067992</h4>
                    </div>
                    <ul class="social">
                        <li><a href="https://www.instagram.com/chyntiairawann" class="fab fa-instagram"
                                aria-hidden="true"></a></li>
                        <li><a href="https://www.umn.ac.id/" class="fab fa-twitter"
                                aria-hidden="true"></a></li>
                        <li><a href="https://www.umn.ac.id/" class="fab fa-google-plus"
                                aria-hidden="true"></a></li>
                        <li><a href="https://www.umn.ac.id/" class="fab fa-linkedin"
                                aria-hidden="true"></a></li>
                    </ul>
                </div>
            </div>
            <div class="ourselfcont">
                <div class="our-team">
                    <div class="picture">
                        <img class="img-fluid" src="images/joi.jpg">
                    </div>
                    <div class="team-content">
                        <h3 class="name">Joicelyn Naradiska</h3>
                        <h4 class="title">00000068688</h4>
                    </div>
                    <ul class="social">
                        <li><a href="https://www.instagram.com/joicelynee_" class="fab fa-instagram"
                                aria-hidden="true"></a></li>
                        <li><a href="https://www.umn.ac.id/" class="fab fa-twitter"
                                aria-hidden="true"></a></li>
                        <li><a href="https://www.umn.ac.id/" class="fab fa-google-plus"
                                aria-hidden="true"></a></li>
                        <li><a href="https://www.umn.ac.id/" class="fab fa-linkedin"
                                aria-hidden="true"></a></li>
                    </ul>
                </div>
            </div>
            <div class="ourselfcont">
                <div class="our-team">
                    <div class="picture">
                        <img class="img-fluid" src="images/gaby.jpg">
                    </div>
                    <div class="team-content">
                        <h3 class="name">Dominique Gabriella</h3>
                        <h4 class="title">00000068298</h4>
                    </div>
                    <ul class="social">
                        <li><a href="https://www.instagram.com/gabriella_dasilvaaa" class="fab fa-instagram"
                                aria-hidden="true"></a></li>
                        <li><a href="https://www.umn.ac.id/" class="fab fa-twitter"
                                aria-hidden="true"></a></li>
                        <li><a href="https://www.umn.ac.id/" class="fab fa-google-plus"
                                aria-hidden="true"></a></li>
                        <li><a href="https://www.umn.ac.id/" class="fab fa-linkedin"
                                aria-hidden="true"></a></li>
                    </ul>
                </div>
            </div>
            <div class="ourselfcont">
                <div class="our-team">
                    <div class="picture">
                        <img class="img-fluid" src="images/tepie.jpg">
                    </div>
                    <div class="team-content">
                        <h3 class="name">Stefanie Veronica Wijaya</h3>
                        <h4 class="title">00000068054</h4>
                    </div>
                    <ul class="social">
                        <li><a href="https://www.instagram.com/stefaniiiee.e" class="fab fa-instagram"
                                aria-hidden="true"></a></li>
                        <li><a href="https://www.umn.ac.id/" class="fab fa-twitter"
                                aria-hidden="true"></a></li>
                        <li><a href="https://www.umn.ac.id/" class="fab fa-google-plus"
                                aria-hidden="true"></a></li>
                        <li><a href="https://www.umn.ac.id/" class="fab fa-linkedin"
                                aria-hidden="true"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="about">

        <div class="row">

            <div class="content">
                <h4>Welcome to GoldenPR</h4><br>
                <h3>Golden PR: A Gastronomic Haven Redefining Fine Dining</h3>
                <p>Golden PR is a culinary haven meticulously crafted for the discerning food enthusiast, designed to be
                    the epitome of gastronomic delight.
                    Imbued with a rich tapestry of flavors and an ambiance that exudes warmth and elegance, Golden PR is
                    more than just a restaurant;
                    it is an experience that celebrates the art of fine dining.</p>
                <p style="font-style: italic">"Two key ingredients in any successful chef: a quick learner and someone
                    with a sharp brain."</p>
                <h2>Gordon Ramsay</h2>
            </div>

            <div class="image">
                <img src="images/about2.jpeg" alt="about2">
            </div>

        </div>

    </div>

    <div class="about">

        <div class="row">

            <div class="image">
                <img src="images/about3.jpeg" alt="about2">
            </div>

            <div class="content">
                <h4>Welcome to GoldenPR</h4><br>
                <h3>You will Find Food and Happiness Here.</h3>
                <p>Experience a culinary journey like no other, where each bite tells a delicious story. Join us at
                    GoldenPR and savor the flavors of unforgettable moments!</p>
                <a href="menu.php" class="btn">our menu</a>
            </div>

        </div>

    </div>

    <div class="reviews">

        <h1 class="titleabout">customer's review</h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <img src="images/pic-1.png" alt="">
                    <p>My dining experience at GoldenPR was nothing short of extraordinary. The food was a symphony of
                        flavors, and the presentation was a work of art. I can't wait to return for another culinary
                        journey!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Sam John</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-2.png" alt="">
                    <p>I stumbled upon GoldenPR and what a delightful surprise it was! The cozy ambiance, friendly
                        staff, and the most delectable dishes made it an unforgettable evening. I'm already planning my
                        next visit.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Eleonor Pierce</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-3.png" alt="">
                    <p>If you're a food enthusiast, GoldenPR is a must-visit. The chef's expertise is evident in every
                        dish. From appetizers to dessert, each course was a delightful surprise. The attention to detail
                        is remarkable..</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Andrew Collins</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-4.png" alt="">
                    <p>The service at GoldenPR is top-notch. The staff was attentive, knowledgeable, and went above and
                        beyond to ensure our dining experience was perfect. It's rare to find such exceptional service.
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Cellyne Viollet</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-5.png" alt="">
                    <p>I chose GoldenPR for a romantic dinner, and it didn't disappoint. The dim lighting, a wide
                        selection of wines, and a menu that caters to all tastes made it an ideal spot for a date night.
                        Highly recommended!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Andy Summer</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-6.png" alt="">
                    <p>Save room for dessert at GoldenPR! The dessert menu is a paradise for anyone with a sweet tooth.
                        The homemade pastries and creative concoctions are simply irresistible. I'll be dreaming about
                        the chocolate lava cake.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Liza Qwestuv</h3>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </div>

    <?php include 'components/footer.php'; ?>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

    <script>
    var swiper = new Swiper(".reviews-slider", {
        loop: true,
        grabCursor: true,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            700: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
    </script>

</body>

</html>