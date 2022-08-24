<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="assets/flexslider.css">
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

  <?php

    $menuArray = array(
      "https://google.com" => "Home" ,
      "aboutus.php" => "About Us",
      "contactus.php" => "Contact Us",
      "blog.php" => "Blog"
    );

   ?>

<div class="container">
  <header>
    <div id="menu">
      <div class="left">
        <img src="images/logo.png">
      </div>

      <div class="right">
        <div class="table">
          <div class="table-cell">
        <ul>
          <?php

            foreach($menuArray as $url => $menuItem){

              ?>

              <li><a href="<?php echo $url; ?>"><?php echo $menuItem; ?></a></li>

              <?php

            }

           ?>
          
          
        </ul>
      </div>
    </div>
      </div>
    </div>
    <div id="banner">
      <div class="banner-wrapper">

        <?php


        $slides = array(
          array(
             'label' => 'slide1',
             'img_url' => 'images/slide1.jpg',
             'caption' => 'Adventurer Cheesecake Brownie' 
          ),
          array(
             'label' => 'slide2',
             'img_url' => 'images/slide2.jpg',
             'caption' => 'Adventurer Lemon' 
          )
          ,
          array(
             'label' => 'slide3',
             'img_url' => 'images/slide3.jpg',
             'caption' => 'Adventurer Donut' 
          )
          ,
          array(
             'label' => 'slide4',
             'img_url' => 'images/slide4.jpg',
             'caption' => 'Adventurer Caramel' 
          ),

          array(
             'label' => 'slide1',
             'img_url' => 'images/slide1.jpg',
             'caption' => 'Adventurer Caramel' 
          ),

          array(
             'label' => 'slide2',
             'img_url' => 'images/slide2.jpg',
             'caption' => 'Adventurer Caramel' 
          ),

          array(
             'label' => 'slide3',
             'img_url' => 'images/slide3.jpg',
             'caption' => 'Adventurer Caramel' 
          ),
        );

         ?>


        <!-- Place somewhere in the <body> of your page -->
        <div class="flexslider">
          <ul class="slides">
            <?php
              foreach($slides as $slide){
                ?>

                <li>
              <img src="<?php echo $slide['img_url']; ?>" />
              <p class="flex-caption"><?php echo $slide['caption']; ?></p>
            </li>

                <?php
                

              }
             ?>
            
            
          </ul>
        </div>

        <div class="table">
          <div class="table-cell">

            <h1>Best Dynamic Website</h1>
        </div>
      </div>


      </div>
    </div>
  </header>
  <section></section>
  <section></section>
  <footer>
    
  </footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/jquery.flexslider.js"></script>
<script type="text/javascript">
  // Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});

</script>
</body>
</html>