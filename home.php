<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3> computer accessories to your door.</h3>
      <p> your one-stop destination for cutting-edge computer accessories that seamlessly blend innovation and style.</p>
      <a href="about.php" class="white-btn">discover more</a>
   </div>

</section>

<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

     <form action="" method="post" class="box">
      <img class="image" src="images/mouse.jpg" alt="mouse">
      <div class="name">mouse</div>
      <div class="price">$1500/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="Mouse">
      <input type="hidden" name="product_price" value="1500 EGP">
      <input type="hidden" name="product_image" value="images/mouse.jpg">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
      
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">load more</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about_img.jpg" alt="">
      </div>

      <div class="content">
         <h3>about us</h3>
         <p>Elevate your digital experience with our online shop, your one-stop destination for cutting-edge computer accessories that seamlessly blend innovation and style.</p>
         <a href="about.php" class="btn">read more</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p> your one-stop destination for cutting-edge computer accessories that seamlessly blend innovation and style.</p>
      <a href="contact.php" class="white-btn">contact us</a>
   </div>

</section>





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>