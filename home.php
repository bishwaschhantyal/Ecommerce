<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ecommerce</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/home.css">
   <link rel="stylesheet" href="css/header.css">
   <link rel="stylesheet" href="css/footer.css">
   <!-- <script src="./js/script.js"></script> -->
</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <section class="main">

      <!-- Sidebar Category List -->
      <div class="cats">
         <div class="cat">
            <a href="#">Smartphones & Accessories</a>
            <i class="fa-solid fa-angle-right"></i>
         </div>

         <div class="cat">
            <a href="#">Laptops & Computers</a>
            <i class="fa-solid fa-angle-right"></i>
         </div>

         <div class="cat">
            <a href="#">Headphones & Earbuds</a>
            <i class="fa-solid fa-angle-right"></i>
         </div>


         <div class="cat">
            <a href="#">Smart Watches</a>
            <i class="fa-solid fa-angle-right"></i>
         </div>

         <div class="cat">
            <a href="#">TVs & Home Entertainment</a>
            <i class="fa-solid fa-angle-right"></i>
         </div>

         <div class="cat">
            <a href="#">Computer Accessories</a>
            <i class="fa-solid fa-angle-right"></i>
         </div>

         <div class="cat">
            <a href="#">Storage Devices</a>
            <i class="fa-solid fa-angle-right"></i>
         </div>

         <div class="cat">
            <a href="#">Home Appliances</a>
            <i class="fa-solid fa-angle-right"></i>
         </div>

         <div class="cat">
            <a href="#">Power Banks & Chargers</a>
            <i class="fa-solid fa-angle-right"></i>
         </div>
      </div>

      <!-- Swiper Banner Section -->
      <div class="swiper home-slider">
         <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide slide hero-slide">
               <div class="image">
                  <img src="images/iphone.png" alt="iPhone">
               </div>
               <div class="content">
                  <span>iPhone 14 Series</span>
                  <h3>Up to 10% <br>off Voucher</h3>
                  <a href="category.php?category=smartphone" class="btn">Shop Now</a>
               </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide slide hero-slide">
               <div class="image">
                  <img src="images/home-img-2.png" alt="Watches">
               </div>
               <div class="content">
                  <span>Latest Watches</span>
                  <h3>Up to 50% <br>off Voucher</h3>
                  <a href="category.php?category=watch" class="btn">Shop Now</a>
               </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide slide hero-slide">
               <div class="image">
                  <img src="images/home-img-3.png" alt="Headsets">
               </div>
               <div class="content">
                  <span>upto 50% off</span>
                  <h3>Latest headsets</h3>
                  <a href="shop.php" class="btn">Shop Now</a>
               </div>
            </div>

         </div>
         <div class="swiper-pagination"></div>
      </div>

   </section>

   </div>

   <!-- Browse By Category -->

   <section class="category">
      <!-- <div class="category-top">
         <div class="category-box"></div>
         <p>Categories</p>
      </div> -->
      <h1 class="heading">Browse by Category</h1>

      <div class="swiper category-slider">

         <div class="swiper-wrapper categorys">

            <a href="category.php?cartegory=laptop" class="swiper-slide slide">
               <img src="images/laptop.png" alt="">
               <h3>Laptop</h3>
            </a>

            <a href="category.php?cartegory=tv" class="swiper-slide slide">
               <img src="images/tv.png" alt="">
               <h3>Television</h3>
            </a>

            <a href="category.php?cartegory=camera" class="swiper-slide slide">
               <img src="images/camera.png" alt="">
               <h3>Camera</h3>
            </a>

            <a href="category.php?cartegory=mouse" class="swiper-slide slide">
               <img src="images/mouse.png" alt="">
               <h3>Mouse</h3>
            </a>

            <a href="category.php?cartegory=fridge" class="swiper-slide slide">
               <img src="images/frigde.png" alt="">
               <h3>Fridge</h3>
            </a>

            <a href="category.php?cartegory=washing" class="swiper-slide slide">
               <img src="images/dishwasher.png" alt="">
               <h3>Washing machine</h3>
            </a>

            <a href="category.php?cartegory=smartphone" class="swiper-slide slide">
               <img src="images/phone.png" alt="">
               <h3>Smartphone</h3>
            </a>

            <a href="category.php?cartegory=watch" class="swiper-slide slide">
               <img src="images/watch.png" alt="">
               <h3>Watch</h3>
            </a>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>
   <section class="home-products">

      <h1 class="heading">Latest products</h1>

      <div class="swiper products-slider">

         <div class="swiper-wrapper latest-products">

            <?php
            $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 9");
            $select_products->execute();
            if ($select_products->rowCount() > 0) {
               while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
            ?>
                  <form action="" method="post" class="swiper-slide slide products">
                     <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
                     <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
                     <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
                     <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">

                     <div class="product-img">
                        <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
                        <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
                        <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="quick-view fas fa-eye"></a>
                     </div>
                     <div class="product-content">
                        <div class="name"><?= $fetch_product['name']; ?></div>
                        <div class="flex">
                           <div class="price"><span>Rs.</span><?= $fetch_product['price']; ?><span> </span></div>
                           <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
                        </div>
                        <input type="submit" value="add to cart" class="btn" name="add_to_cart">
                     </div>
                  </form>
            <?php
               }
            } else {
               echo '<p class="empty">no products added yet!</p>';
            }
            ?>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>


   <!-- New Arrivals -->
   <section class="new-arrival">
      <h2>New Arrival</h2>
      <div class="grid-container">
         <div class="item large">
            <img src="images/playstation.jpg" alt="PlayStation 5">
            <div class="info">
               <h3>PlayStation 5</h3>
               <p>Black and White version of the PS5 coming out on sale.</p>
               <a href="#">Shop Now</a>
            </div>
         </div>

         <div class="item">
            <img src="images/smartwatch.avif" alt="Smart Watch">
            <div class="info">
               <h3>Smart Watch</h3>
               <p>Featured Smart Watch that give you another vibe.</p>
               <a href="#">Shop Now</a>
            </div>
         </div>

         <div class="item">
            <img src="images/speaker.avif" alt="Speakers">
            <div class="info">
               <h3>Speakers</h3>
               <p>Amazon wireless speakers</p>
               <a href="#">Shop Now</a>
            </div>
         </div>

         <div class="item wide">
            <img src="images/cameradslr.jpg" alt="Camera">
            <div class="info">
               <h3>DSLR Camera</h3>
               <p>Best Dslr Camera </p>
               <a href="#">Shop Now</a>
            </div>
         </div>
      </div>
   </section>

   <!-- Our Service -->

   <section class="info-section">
      <div class="info-box">
         <div class="icon">
            <i class="fas fa-truck"></i>
         </div>
         <h3>FREE AND FAST DELIVERY</h3>
         <p>Free delivery for all orders over $140</p>
      </div>

      <div class="info-box">
         <div class="icon">
            <i class="fas fa-headset"></i>
         </div>
         <h3>24/7 CUSTOMER SERVICE</h3>
         <p>Friendly 24/7 customer support</p>
      </div>

      <div class="info-box">
         <div class="icon">
            <i class="fas fa-check-circle"></i>
         </div>
         <h3>MONEY BACK GUARANTEE</h3>
         <p>We return money within 30 days</p>
      </div>
   </section>

   <?php
   // Step 1: Extract distinct product names from orders
   $ordered_products = $conn->prepare("SELECT total_products FROM `orders`");
   $ordered_products->execute();

   $product_names = [];

   if ($ordered_products->rowCount() > 0) {
      while ($order = $ordered_products->fetch(PDO::FETCH_ASSOC)) {
         preg_match_all('/([a-zA-Z\s]+)\s\(\d+/', $order['total_products'], $matches);
         foreach ($matches[1] as $name) {
            $clean_name = trim($name);
            if (!in_array($clean_name, $product_names)) {
               $product_names[] = $clean_name;
            }
         }
      }
   }

   // Step 2: Fetch product details based on those names
   $placeholders = rtrim(str_repeat('?,', count($product_names)), ',');
   $select_products = $conn->prepare("SELECT * FROM `products` WHERE name IN ($placeholders) LIMIT 6");
   $select_products->execute($product_names);
   ?>

   <section class="home-products">
      <h1 class="heading">Popular Products</h1>
      <div class="swiper products-slider">
         <div class="swiper-wrapper latest-products">
            <?php
            if ($select_products->rowCount() > 0) {
               while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
            ?>
                  <form action="" method="post" class="swiper-slide slide products">
                     <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
                     <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
                     <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
                     <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">

                     <div class="product-img">
                        <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
                        <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
                        <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="quick-view fas fa-eye"></a>
                     </div>
                     <div class="product-content">
                        <div class="name"><?= $fetch_product['name']; ?></div>
                        <div class="flex">
                           <div class="price"><span>Rs.</span><?= $fetch_product['price']; ?><span> </span></div>
                           <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
                        </div>
                        <input type="submit" value="add to cart" class="btn" name="add_to_cart">
                     </div>
                  </form>
            <?php
               }
            } else {
               echo '<p class="empty">No ordered products found!</p>';
            }
            ?>
         </div>
         <div class="swiper-pagination"></div>
      </div>
   </section>





   <?php include 'components/footer.php'; ?>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


   <script>
      var swiper = new Swiper(".home-slider", {
         loop: true,
         spaceBetween: 0,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
      });

      var swiper = new Swiper(".category-slider", {
         loop: true,
         spaceBetween: 25,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 2,
            },
            650: {
               slidesPerView: 3,
            },
            768: {
               slidesPerView: 4,
            },
            1024: {
               slidesPerView: 5,
            },
         },
      });

      var swiper = new Swiper(".products-slider", {
         loop: true,
         spaceBetween: 40,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            550: {
               slidesPerView: 2,
            },
            768: {
               slidesPerView: 2,
            },
            1024: {
               slidesPerView: 3,
            },
         },
      });

      document.querySelector('.top button').onclick = function() {
         document.querySelector('.top').style.display = 'none';
      };
   </script>

</body>

</html>