<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['send'])){

   $msg_id = create_unique_id();
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $message = $_POST['message'];
   $message = filter_var($message, FILTER_SANITIZE_STRING);

   $verify_contact = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $verify_contact->execute([$name, $email, $number, $message]);

   if($verify_contact->rowCount() > 0){
      $warning_msg[] = 'message sent already!';
   }else{
      $send_message = $conn->prepare("INSERT INTO `messages`(id, name, email, number, message) VALUES(?,?,?,?,?)");
      $send_message->execute([$msg_id, $name, $email, $number, $message]);
      $success_msg[] = 'message send successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- contact section starts  -->

<section class="contact">

   <div class="row">
      <div class="image">
         <img src="images/contact-img.jpg" alt="">
      </div>
      <form action="" method="post">
         <h3>get in touch</h3>
         <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
         <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
         <input type="number" name="number" required maxlength="10" max="9999999999" min="0" placeholder="enter your number" class="box">
         <textarea name="message" placeholder="enter your message" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>
   </div>

</section>

<!-- contact section ends -->

<!-- faq section starts  -->

<section class="faq" id="faq">

   <h1 class="heading">FAQ</h1>

   <div class="box-container">

      <div class="box active">
         <h3><span>What types of pets are available for sale on your website?</span><i class="fas fa-angle-down"></i></h3>
         <p>We offer a variety of pets, including dogs, cats, birds, small mammals, reptiles, and more. Our selection may vary based on the sellers in your area.</p>
      </div>

      <div class="box active">
         <h3><span>Are the pets on your website healthy and vaccinated?</span><i class="fas fa-angle-down"></i></h3>
         <p>We strongly encourage our sellers to provide health records and vaccination history for the pets they list. However, we recommend discussing this directly with the seller to ensure you have all the necessary information.</p>
      </div>

      <div class="box">
         <h3><span>How do I contact a seller about a pet I'm interested in?</span><i class="fas fa-angle-down"></i></h3>
         <p>To contact a seller, simply click on the pet listing you're interested in and use the contact details provided by the seller. You can send them a message or give them a call.</p>
      </div>

      <div class="box">
         <h3><span>Can I trust the sellers on your platform?</span><i class="fas fa-angle-down"></i></h3>
         <p>We do our best to ensure the credibility of our sellers, but we advise doing your due diligence. You can check reviews and ratings on the seller's profile and meet the seller in person before making any decisions.</p>
      </div>

      <div class="box">
         <h3><span>What should I consider when buying a pet online?</span><i class="fas fa-angle-down"></i></h3>
         <p>When purchasing a pet online, it's important to research the breed, ask for health records, and ensure the pet's environment is clean and well-cared for. Also, make sure the seller is reputable and can provide references.</p>
      </div>

      <div class="box">
         <h3><span>What should I know about pet ownership responsibilities?</span><i class="fas fa-angle-down"></i></h3>
         <p>Pet ownership comes with responsibilities such as providing food, shelter, healthcare, and love. Make sure you are prepared for the long-term commitment and expenses associated with pet ownership.</p>
      </div>

   </div>

</section>

<!-- faq section ends -->










<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

</body>
</html>