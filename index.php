<?php

$conn = mysqli_connect('localhost','root','','Zold_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> musée Website </title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contact">contact</a>
   </nav>
</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/ME.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">M.Munajat Fathur Rahim Ali</h3>
      <p data-aos="fade-up">so here I want to tell you about painters and their art</p>
      <a data-aos="fade-up" href="#about" class="btn">Lets'go </a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

            <div class="bio">
            <h3 data-aos="zoom-in"> <span>Name : </span> Salvador Damingo </h3>
            <h3 data-aos="zoom-in"> <span>Name : </span> Vincent Willem van Gogh </h3>
            <h3 data-aos="zoom-in"> <span>Name : </span> Saleh Sjarif Boestaman (Raden Saleh) </h3>
            <br>

         </div>
   </div>
   


   </div>

<!-- about section ends -->

<!-- services section starts  -->
<section class="services" id="services">

      <h1 class="heading" data-aos="fade-up"> <span>Page</span> </h1>

      <div class="box-container">

      <div class="box" data-aos="zoom-in">
            <h3><a data-aos="fade-up" href="Salvador.php" class="btn">Salvador Damingo Felipe</a></h3>
         </div>

         <div class="box" data-aos="zoom-in">
            <h3><a data-aos="fade-up" href="vanGogh.php" class="btn">Vincent Willem van Gogh</a></h3>
         </div>

         <div class="box" data-aos="zoom-in">
            <h3><a data-aos="fade-up" href="RadenSaleh.php" class="btn">Saleh Sjarif Boestaman (Raden Saleh)</a></h3>
         </div>

      </div>

   </section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

      <h1 class="heading" data-aos="fade-up"> <span>Most Popular Painting</span> </h1>

      <div class="box-container">

         <div class="box" data-aos="zoom-in">
            <img src="images/POM.jpg" alt="">
            <h3>Salvador dali</h3>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/STN.jpg" alt="">
            <h3>Vincent Van Gogh</h3>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/R1.jpg" alt="">
            <h3>Raden Saleh</h3>
         </div>
   </section>
<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>Sosial Media</span> </h1>

   <form action="" method="post">
 
   <div class="box" data-aos="zoom-in">
            <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <a href="https://wa.me/+6282123805609">Send</a>
         </div>

         <div class="box" data-aos="zoom-in">
            <i class='fab fa-instagram'></i>
            <h3>Instagram</h3>
            <a href="https://www.instagram.com/fathurmunajat/">Send</a>
         </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>ZOLD</span> </div>












<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>