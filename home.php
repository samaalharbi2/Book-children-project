<?php

$conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');


?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

  
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   
</head>

<body>

   <?php include 'header.php'; ?>

   <section class="home">

      <div class="content">
         <h3>My Library is Your Bright Way</h3>
         <p>A collection of modern and distinguished books in various fields</p>
         <a href="https://bookroo.com/explore/books/topics/the-library" class="white-btn">Discover From OutSide</a>
      </div>

   </section>


   <section class="products">

      <h1 class="title">Favorite Kids Books</h1>

      <div class="box-container">
         <table>
            <tr>
               <td>
               <div action="" method="post" class="box">
                  <img class="image" id="img"  src="uploaded_img/1.jpeg">
                  <div id="prev1"  class="c1">
                   <h3>Description</h3>
                   <br/><ul>
                    <li>This book is written from the perspective of a middle school boy named Greg Heffley</li><li>follows his average everyday life.</li><br><li><b>2007/3/20</b></li>
                    </ul>
                  </div>
                  <div class="name">A NOVEL IN CARTOONS</div>
                  <div class="price">20 $ </div>
                  <input type="submit" value="preview" id="preview" class="btn" onclick='fun("prev1")'>
               </div>
               </td>
             
               <td>
               <div action="" method="post" class="box">
                  <img class="image" id="img"  src="uploaded_img/2.jpeg">
                  <div id="prev2"  class="c1">
                   <h3>Description</h3>
                   <br/><ul>
                    <li>This book is written from the perspective of a middle school boy named Greg Heffley</li><li>follows his average everyday life.</li><br><li><b>2007/3/20</b></li>
                    </ul>
                  </div>
                  <div class="name">RODRICK RULES</div>
                  <div class="price">10 $ </div>
                  <input type="submit" value="preview" id="preview" class="btn" onclick='fun("prev2")'>
               </div>
               </td>

               <td>
               <div action="" method="post" class="box">
                  <img class="image" id="img" src="uploaded_img/3.jpeg">
                  <div id="prev3"  class="c1">
                   <h3>Description</h3>
                   <br/><ul>
                    <li>This book is written from the perspective of a middle school boy named Greg Heffley</li><li>follows his average everyday life.</li><br><li><b>2007/3/20</b></li>
                    </ul>
                  </div>
                  <div class="name">THE LAST STRAW</div>
                  <div class="price">8 $ </div>
                  <input type="submit" value="preview" id="preview" class="btn" onclick="fun('prev3')">
               </div>
               </td>
            </tr>

            <tr>
               <td>
               <div action="" method="post" class="box">
                  <img class="image" id="img" src="uploaded_img/4.jpeg">
                  <div id="prev4"  class="c1">
                   <h3>Description</h3>
                   <br/><ul>
                    <li>This book is written from the perspective of a middle school boy named Greg Heffley</li><li>follows his average everyday life.</li><br><li><b>2007/3/20</b></li>
                    </ul>
                  </div>
                  <div class="name">OLD SCHOOL</div>
                  <div class="price">13 $ </div>
                  <input type="submit" value="preview" id="preview" class="btn" onclick="fun('prev4')">
               </div>
               </td>
               
               <td>
               <div action="" method="post" class="box">
                  <img class="image" id="img" src="uploaded_img/5.jpeg">
                  <div id="prev5"  class="c1">
                   <h3>Description</h3>
                   <br/><ul>
                    <li>This book is written from the perspective of a middle school boy named Greg Heffley</li><li>follows his average everyday life.</li><br><li><b>2007/3/20</b></li>
                    </ul>
                  </div>
                  <div class="name">DOG DAYS</div>
                  <div class="price">19$ </div>
                  <input type="submit" value="preview" id="preview" class="btn" onclick="fun('prev5')">
               </div>
               </td>
               
               <td>
               <div action="" method="post" class="box">
                  <img class="image" id="img" src="uploaded_img/6.jpeg">
                  <div id="prev6"  class="c1">
                   <h3>Description</h3>
                   <br/><ul>
                    <li>This book is written from the perspective of a middle school boy named Greg Heffley</li><li>follows his average everyday life.</li><br><li><b>2007/3/20</b></li>
                    </ul>
                  </div>
                  <div class="name">THE MELTDOWN</div>
                  <div class="price">29$ </div>
                  <input type="submit" value="preview" id="preview" class="btn" onclick="fun('prev6')">
               </div>
               </td>
            </tr>

            <tr>
               <td>
               <div action="" method="post" class="box">
                  <img class="image" id="img" src="uploaded_img/7.jpeg">
                  <div id="prev7"  class="c1">
                   <h3>Description</h3>
                   <br/><ul>
                    <li>This book is written from the perspective of a middle school boy named Greg Heffley</li><li>follows his average everyday life.</li><br><li><b>2007/3/20</b></li>
                    </ul>
                  </div>
                  <div class="name">THE LONG HAUL</div>
                  <div class="price">30 $ </div>
                  <input type="submit" value="preview" id="preview" class="btn" onclick="fun('prev7')">
               </div>
               </td>
               
               <td>
               <div action="" method="post" class="box">
                  <img class="image" id="img" src="uploaded_img/p8_.jpg" >
                  <div id="prev8"  class="c1">
                   <h3>Description</h3>
                   <br/><ul>
                    <li>This book is written from the perspective of a middle school boy named Greg Heffley</li><li>follows his average everyday life.</li><br><li><b>2007/3/20</b></li>
                    </ul>
                  </div>
                  <div class="name">HARD LUCK</div>
                  <div class="price">37$ </div>
                  <input type="submit" value="preview" id="preview" class="btn" onclick="fun('prev8')">
               </div>
               </td>
               
               <td>
               <div action="" method="post" class="box">
                  <img class="image" id="img" src="uploaded_img/p9jpg.jpg">
                  <div id="prev9"  class="c1">
                   <h3>Description</h3>
                   <br/><ul>
                    <li>This book is written from the perspective of a middle school boy named Greg Heffley</li><li>follows his average everyday life.</li><br><li><b>2007/3/20</b></li>
                    </ul>
                  </div>
                  <div class="name">THE DEEP END</div>
                  <div class="price">28 $ </div>
                  <input type="submit" value="preview" id="preview" class="btn" onclick="fun('prev9')">
               </div>
               </td>
            </tr>

            <tr>
               <td>
               <div action="" method="post" class="box">
                  <img class="image" id="img" src="uploaded_img/9.jpeg">
                  <div id="prev10"  class="c1">
                   <h3>Description</h3>
                   <br/><ul>
                    <li>This book is written from the perspective of a middle school boy named Greg Heffley</li><li>follows his average everyday life.</li><br><li><b>2007/3/20</b></li>
                    </ul>
                  </div>
                  <div class="name">HARRY POTER</div>
                  <div class="price">35 $ </div>
                  <input type="submit" value="preview" id="preview" class="btn" onclick="fun('prev10')">
               </div>
               </td>

               <td>
               <div action="" method="post" class="box">
                  <img class="image" id="img" src="uploaded_img/11.jpeg">
                  <div id="prev11"  class="c1">
                   <h3>Description</h3>
                   <br/><ul>
                    <li>This book is written from the perspective of a middle school boy named Greg Heffley</li><li>follows his average everyday life.</li><br><li><b>2007/3/20</b></li>
                    </ul>
                  </div>
                  <div class="name">HARRY POTER</div>
                  <div class="price">35 $ </div>
                  <input type="submit" value="preview" id="preview" class="btn" onclick="fun('prev11')">
               </div>
               </td>

               <td>
               <div action="" method="post" class="box">
                  <img class="image" id="img" src="uploaded_img/12.jpeg">
                  <div id="prev12"  class="c1">
                   <h3>Description</h3>
                   <br/><ul>
                    <li>This book is written from the perspective of a middle school boy named Greg Heffley</li><li>follows his average everyday life.</li><br><li><b>2007/3/20</b></li>
                    </ul>
                  </div>
                  <div class="name">THE FROZEN</div>
                  <div class="price">25 $ </div>
                  <input type="submit" value="preview" id="preview" class="btn" onclick="fun('prev12')">
               </div>
               </td>
            </tr>

         </table>
      </div>

  <br><br><br>
   </section>

   <section class="about">

      <div class="flex">

         <div class="image">
            <video width="520" height="310" controls>
               <source src="uploaded_img/about.mp4" type="video/mp4">
               Your browser does not support the video tag.
            </video>
         </div>



         <div class="content">
            <h3>who are we?</h3>
            <p>Lovers of science and culture, we aspire to spread high-end ideas among the people of society in distinctive ways and attract readers</p>
            <a href="about.php" class="btn">Read more about us</a>
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
         <!-- <div id="caption"></div> -->
      </div>
   </section>

   <?php include 'footer.php'; ?>
   <script src="js/script.js"></script>

 
</body>

</html>