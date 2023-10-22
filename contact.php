<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg'];
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_message->execute([$name, $email, $number, $msg]);

   if($select_message->rowCount() > 0){
      $message[] = 'already sent message!';
   }else{

      $insert_message = $conn->prepare("INSERT INTO `messages`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
      $insert_message->execute([$user_id, $name, $email, $number, $msg]);

      $message[] = 'sent message successfully!';

   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->
    <?php include 'components/user_header.php'; ?>
    <!-- header section ends -->

    <div class="heading-contact">
        <h3>CONTACT US</h3>
        <p><a href="index.php">home</a> <span> / contact</span></p>
    </div>

    <!-- contact section starts  -->

    <div class="contact">

        <div class="row">
            <div class="contact-cont">

                <form action="" method="post">
                    <h3>tell us something!</h3>
                    <h2>Name</h2>
                    <input type="text" name="name" maxlength="50" class="box" placeholder="enter your name" required>
                    <h2>Phone Number</h2>
                    <input type="number" name="number" min="0" max="9999999999" class="box"
                        placeholder="enter your number" required maxlength="10">
                    <h2>Email</h2>
                    <input type="email" name="email" maxlength="50" class="box" placeholder="enter your email" required>
                    <h2>Message</h2>
                    <textarea name="msg" class="box" required placeholder="enter your message" maxlength="500" cols="30"
                        rows="10"></textarea>
                    <input type="submit" value="send message" name="send" class="btn">
                </form>

            </div>

            <div class="text">
                <h4>Welcome to GoldenPR</h4>
                <h2>Explore our restaurant's location on the map for a delightful dining experience.</h2>
                <div class="peta">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0570242064005!2d106.61598747331014!3d-6.25621846124944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb56b25975f9%3A0x50c7d605ba8542f5!2sMultimedia%20Nusantara%20University!5e0!3m2!1sen!2sid!4v1697359295824!5m2!1sen!2sid&key=AIzaSyDSnFFUMBLqoaU7gfQeKET9YUhsl49fLc"
                            width="600" height="500" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

</div>

    <!-- contact section ends -->










    <!-- footer section starts  -->
    <?php include 'components/footer.php'; ?>
    <!-- footer section ends -->








    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>