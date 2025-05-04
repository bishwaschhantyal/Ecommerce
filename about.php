<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/header.css">
   <link rel="stylesheet" href="css/about.css">
   <link rel="stylesheet" href="css/footer.css">


</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="images/23.png" alt="">
         </div>

         <div class="content">
            <h3>Developer's Message:</h3>
            <p>Hey There ! I'm Salman Khan. A Student of BSc in Software Engineering Department . I love designing websites and exploring new things. Learning new things is my hobby.</p>

            <a href="contact.php" class="btn">Contact Us</a>
         </div>

      </div>

   </section>

   <section class="reviews">

      <h1 class="heading">Client's Reviews.</h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <img src="images/pic-1.jpeg" alt="">
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum nesciunt minima blanditiis quas accusantium ullam aperiam quo, et alias saepe similique obcaecati repellendus voluptatibus tenetur odio fuga natus magni. Et!</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3> <a href="" target="_blank">John</a></h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/pic-2.jpeg" alt="">
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio dolorem doloremque in deserunt reiciendis earum itaque, reprehenderit amet accusantium dolores qui atque ad inventore mollitia ratione corrupti eius, sed laborum.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3><a href="h" target="_blank">Hari</a></h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/pic-7.avif" alt="">
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab doloremque earum, cumque fugiat magnam fugit beatae molestiae velit! Sunt velit totam laudantium reiciendis minima obcaecati ducimus temporibus, quis consequatur quos?</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3><a href="" target="_blank">Ram</a></h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/pic-4.jpg" alt="">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam exercitationem odit modi nam soluta nihil perspiciatis ratione minima, repellendus, hic aliquid itaque, vitae maxime voluptatum delectus consectetur et! Odit, obcaecati.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3><a href="" target="_blank">Subash</a></h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/pic-1.avif" alt="">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ipsam labore at expedita odio deleniti similique. Non qui saepe ea. Praesentium dolores ex voluptatum animi incidunt. Maiores dolore neque quibusdam.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3><a href="" target="_blank">Ranjit</a></h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/pic-6.jpeg" alt="">
               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque assumenda voluptate officia tempore labore perferendis unde! Maxime hic magni molestiae animi illum et, facilis quasi neque aut nostrum commodi ut!</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3><a href="" target="_blank">Pranil</a></h3>
            </div>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>









   <?php include 'components/footer.php'; ?>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".reviews-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 1,
            },
            768: {
               slidesPerView: 2,
            },
            991: {
               slidesPerView: 3,
            },
         },
      });
   </script>

</body>

</html>