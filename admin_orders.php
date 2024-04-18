<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="orders">

   <h1 class="title">placed orders</h1>

   <div class="box-container">
      <div class="box">
         <p> user id : <span>1</span> </p>
         <p> placed on : <span>Dokey></span> </p>
         <p> name : <span>User</span> </p>
         <p> number : <span>01239374659</span> </p>
         <p> email : <span>user@123</span> </p>
         <p> address : <span>Dokey Street</span> </p>
         <p> total products : <span>1</span> </p>
         <p> total price : <span>$1500/-</span> </p>
         <p> payment method : <span>paypal</span> </p>
         <form action="" method="post">
            <input type="hidden" name="order_id" value="1">
            <select name="update_payment">
               <option value="" selected disabled>paypal</option>
               <option value="pending">pending</option>
               <option value="completed">completed</option>
            </select>
            <input type="submit" value="update" name="update_order" class="option-btn">
            <a href="admin_orders.php" onclick="return confirm('delete this order?');" class="delete-btn">delete</a>
         </form>
      </div>
   </div>

</section>










<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>