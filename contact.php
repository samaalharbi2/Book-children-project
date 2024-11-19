<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'header.php'; ?>

   <div class="heading">
      <h3>Contact Us</h3>
   </div>

   <section class="contact">

      <form action="" method="post">
         <h3>Give your opinion, advice or suggestion</h3>
         <input type="text" name="name" placeholder="Your Name" class="box">
         <input type="email" name="email" placeholder="Email" class="box">
         <input type="number" name="number" placeholder="phone number" class="box">
         <textarea name="message" class="box"header-1=" your message content" id="" cols="30" rows="10"></textarea>
         <input type="submit" value="send" name="send" class="btn">
      </form>

   </section>

   <section class="products">

      <h1 class="title">Favorite Kids Books From DB</h1>

      <div class="box-container">
         <table>
         <?php
         $conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');
         $select_products = mysqli_query($conn, "SELECT * FROM `products` ") or die('query failed');
         if (mysqli_num_rows($select_products) > 0) {
            $index = 0;
            while ($fetch_products = mysqli_fetch_assoc($select_products)) {
               if($index == 0) 
               {
                  echo "<tr>";
                  $index++;
               }
               else
               $index++;
               ?>
               <td>
               <div class="box">
               <div class="name1"><?php echo $fetch_products['id'];?></div>
                  <div class="name1"><?php echo $fetch_products['name'];?></div>
                  <div class="price"><?php echo $fetch_products['date'];?> </div>
               </div>
               </td>
               <?php if($index == 3) 
               {
                  echo "</tr>";
                  $index = 0;
                  
               }}}?>
         </table>
      </div>
   </section>



</body>

</html>