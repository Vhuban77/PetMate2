<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/doclist2.png" alt="">
      </div>
      <div class="content">
         <h3>Need a cat doctor ?</h3>
         <p>Very easy to use. User friendly application. Fast and smooth application.</p>
         <a href="contact.html" class="inline-btn">contact us</a>
      </div>
   </div>

</section>

<!-- about section ends -->



<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading">Best Animal Doctors in Bangladesh</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
               <h3>Dr. Mohammad Mamunur Rashid</h3>
               
            </div>
         </div>
         <p>Central Veterinary Hospital <br> 01725808534 </p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
               <h3>Dr. Arifur Rabbi</h3>
               
            </div>
         </div>
         <p>Ta 173/2 Lake view road, Dhaka 1212 <br> 01785636036 </p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
               <h3>Dr. Sagir Uddin Ahmed</h3>
               
            </div>
         </div>
         <p>Dhanmondi Chamber/Clinic<br> 01912251312 </p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
               <h3>Dr. Mohammad Mamunur Rashid</h3>
               
            </div>
         </div>
         <p>Central Veterinary Hospital <br> 01725808534 </p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
               <h3>Dr. Mohammad Mamunur Rashid</h3>
               
            </div>
         </div>
         <p>Central Veterinary Hospital <br> 01725808534 </p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
               <h3>Dr. Mohammad Mamunur Rashid</h3>
               
            </div>
         </div>
         <p>Central Veterinary Hospital <br> 01725808534 </p>
      </div>

   </div>

</section>

<!-- review section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>