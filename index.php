<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php include 'components/user_header.php'; ?>

    <div class="coba">
        <div class="titlehome">
            <div class="hometitle">
                <p>welcome to our delicous diner</p>
                <h1>BEHIND THE DISHES</h1>
                <div class="desc">
                    <h2>Indulge in a tantalizing array of exquisite flavors and impeccable service,
                        ensuring an unforgettable dining experience at our restaurant</h2>
                </div>
                <input type="button" class="btn" value="SEE MENU" onclick="window.location.href='menu.php'">
            </div>
        </div>
        <div class="slideshow-container">
            <div class="overlay">
                <div class="mySlides">
                    <img src="images/home.jpg" alt="Slide 1">
                </div>

                <div class="mySlides">
                    <img src="images/home2.jpg" alt="Slide 2">
                </div>

                <div class="mySlides">
                    <img src="images/home3.jpg" alt="Slide 3">
                </div>
            </div>
        </div>
    </div>

    <div class="aboutus">

        <div class="abouttitle">
            <p style="display:flex; justify-content: center">Special moments</p>
            <h1 class="title">ABOUT US</h1>
        </div>
        <div class="abtus">
            <div class="abtusleft">
                <img src="images/abtus1.jpg" alt="">
            </div>
            <div class="abtuscentre">
                <div>
                    <p>golden taste</p>
                    <h1>FANCY WESTERN</h1>
                    <h2>we will provide you with the best taste and memory</h2>
                    <input type="button" class="btn" value="SEE MORE" onclick="window.location.href='about.php'">
                </div>
            </div>
            <div class="abtusright">
                <img src="images/abtus2.jpg" alt="">
            </div>
        </div>

    </div>

    <div class="spccont">
        <div class="special">
            <div class="spc">
                <div class="abtusleft">
                    <img src="images/products/steak.jpg" alt="">
                </div>
                <div class="specialright">
                    <div>
                        <p>our golden palate</p>
                        <h1>OUR SPECIAL</h1>
                        <?php
         $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 5");
         $select_products->execute();
         if($select_products->rowCount() > 0){
            while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
      ?>
                        <form action="" method="post" class="box">
                            <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
                            <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
                            <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
                            <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>"
                                class="product-link"><?= $fetch_products['name']; ?></a>
                            <span class="divider"></span>
                            <div class="price"><span>$</span><?= $fetch_products['price']; ?></div>
                        </form>
                        <?php
            }
         }else{
            echo '<p class="empty">no products added yet!</p>';
         }
      ?>
                        <button class="btn" onclick="window.location.href='about.php'">ORDER NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="category">

        <p class="ctt">Our Menu</p>
        <h1 class="title">Choose & Taste What You Like</h1>

        <div class="catcont">
            <div class="box-container">

                <a href="category.php" class="box">
                    <img src="images/cat-5.png" alt="">
                    <h3>ALL</h3>
                </a>

                <a href="category.php?category=main dish" class="box">
                    <img src="images/cat-1.png" alt="">
                    <h3>MAIN COURSE</h3>
                </a>

                <a href="category.php?category=appetizer" class="box">
                    <img src="images/cat-2.png" alt="">
                    <h3>APPATIZER</h3>
                </a>

                <a href="category.php?category=drinks" class="box">
                    <img src="images/cat-3.png" alt="">
                    <h3>DRINKS</h3>
                </a>

                <a href="category.php?category=desserts" class="box">
                    <img src="images/cat-4.png" alt="">
                    <h3>DESSERT</h3>
                </a>
                
            </div>
        </div>

    </div>



    <?php include 'components/footer.php'; ?>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 3000);
    }
    
    </script>

</body>

</html>