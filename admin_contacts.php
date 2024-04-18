<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>messages</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="messages">

   <h1 class="title"> messages </h1>

   <div class="box-container">
   <div class="box">
      <p> user id : <span>1</span> </p>
      <p> name : <span>ziad</span> </p>
      <p> number : <span>01237485957</span> </p>
      <p> email : <span>user@123</span> </p>
      <p> message : <span>Thanks for Mouse</span> </p>
      <a href="admin_contacts.php" onclick="return confirm('delete this message?');" class="delete-btn">delete message</a>
   </div>
   </div>

</section>









<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>