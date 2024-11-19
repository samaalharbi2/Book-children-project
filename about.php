<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> About Us</title>


   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

   <?php include 'header.php'; ?>

   <div class="heading">
      <h3>who we are?</h3>
   </div>

   <section class="about">

      <div class="flex">

         <div class="image">
            <img src="uploaded_img/about-img.jpg" alt="">
         </div>

         <div class="content">
            <h3>Why Us ?</h3>
            <p>We are a group of young people who love culture and science and work hard to attract all that is distinctive, new, enlightening to the mind and fulfilling the soul</p>
            <a href="contact.php" class="btn">Connect with us</a>
         </div>
      </div>
   </section><br>


   <section class="authors">

      <h1 class="title">Student Name</h1>

      <div class="box-container">

         <div class="box">
            <h3><strong>Student-1</strong> Ghadeer Alsaedi</h3><br>
            <h3><strong>Student-2</strong> Sama Alharbi</h3>
         </div>
      </div>

   </section>

   
   <section class="home-contact">

      <div class="content">
         <h3>Any Questions ? Contact us</h3>
         <p>We enjoy answering what's on your mind, and we receive all opinions with open arms</p>
         <a href="contact.php" class="white-btn">Tell us...don't hesitate</a>
      </div>
      <!-- The Modal -->
      <div id="myModal" class="modal">
         <span class="close">&times;</span>
         <img class="modal-content" id="img01">
      </div>
   </section>

   <?php include 'footer.php'; ?>
</body>

</html>