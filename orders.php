<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>your orders</h3>
   <p> <a href="home.php">home</a> / orders </p>
</div>

<section class="placed-orders">

   <h1 class="title">placed orders</h1>

   <div class="box-container">
      <div class="box">
         <p> placed on : <span>Dokey</span> </p>
         <p> name : <span>User</span> </p>
         <p> number : <span>01239123910 </span> </p>
         <p> email : <span>user</span> </p>
         <p> address : <span>dokey steet</span> </p>
         <p> payment method : <span>paypal</span> </p>
         <p> your orders : <span>Mouse</span> </p>
         <p> total price : <span>1500$/-</span> </p>
         <p> payment status : <span style="color:green"> The payment was made </span> </p>
         </div>
   </div>
   </div>
   <br>
   <div class="box-container">
   <div class="box">
         <p> placed on : <span>Dokey</span> </p>
         <p> name : <span>User</span> </p>
         <p> number : <span>01239123910 </span> </p>
         <p> email : <span>user</span> </p>
         <p> address : <span>dokey steet</span> </p>
         <p> payment method : <span>paypal</span> </p>
         <p> your orders : <span>keyboard</span> </p>
         <p> total price : <span>2000$/-</span> </p>
         <p> payment status : <span style="color:red"> The payment wasn't made </span> </p>
         </div>
   </div>

</section>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>