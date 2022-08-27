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
             'img_url' => 'images/1.jpg',
             'caption' => 'Adventurer Cheesecake Brownie' 
          ),
          array(
             'label' => 'slide2',
             'img_url' => 'images/2.jpg',
             'caption' => 'Adventurer Lemon' 
          )
          ,
          array(
             'label' => 'slide3',
             'img_url' => 'images/3.jpg',
             'caption' => 'Adventurer Donut' 
          )
          ,
          array(
             'label' => 'slide4',
             'img_url' => 'images/4.jpg',
             'caption' => 'Adventurer Caramel' 
          ),

       
        );

         ?>


        <!-- Place somewhere in the <body> of your page -->
        <div class="slider">  
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

  <!--       <div class="table">
          <div class="table-cell">

            <h1>Best Dynamic Website</h1>
        </div>
      </div> -->


      </div>
    </div>
  </div>
  </header>
  <section>
    <?php
$food_menu = array(

      'categories' => array(
        array(
          'label' => 'Soups And Salads',
          'slug' => 'soups_and_salads',
          'contents' => array(
            array(
              'title' => 'That Salads',
              'price' => 10,
              'ingredient' => 'Lorem Ipsum dummy text'
            ),
            array(
              'title' => 'Spinach Salads',
              'price' => 10,
              'ingredient' => 'Lorem Ipsum dummy text'
            ),
            array(
              'title' => 'Grilled Romaine',
              'price' => 30,
              'ingredient' => 'Lorem Ipsum dummy text'
            ), 
          )
        ),


        array(
          'label' => 'Vegan',
          'slug' => 'vegan',
          'contents' => array(
            array(
              'title' => 'Spinach & Ricotta',
              'price' => 10,
              'ingredient' => 'Lorem Ipsum dummy text'
            ),
            array(
              'title' => 'Purle Basil Pesto',
              'price' => 10,
              'ingredient' => 'Lorem Ipsum dummy text'
            ),
            array(
              'title' => 'Spagheti al Pomodoro',
              'price' => 10,
              'ingredient' => 'Lorem Ipsum dummy text'
            ), 
          )
        ),




        array(
          'label' => 'Mains',
          'slug' => 'mains',
          'contents' => array(
            array(
              'title' => 'Beefsteak',
              'price' => 10,
              'ingredient' => 'Lorem Ipsum dummy text'
            ),
            array(
              'title' => 'Steak with chips',
              'price' => 10,
              'ingredient' => 'Lorem Ipsum dummy text'
            ),
            array(
              'title' => 'Checken with Spinach',
              'price' => 10,
              'ingredient' => 'Lorem Ipsum dummy text'
            ), 
          )
        ),


      )

    );

    ?>
      
      <h1>something</h1>

      <form>

        <?php

         $data = $food_menu['categories'][$_GET['cat']]['contents'][$_GET['id']];

         // echo "<pre>";
         // print_r($food_menu['categories'][$_GET['cat']]['contents'][$_GET['id']]);
         // exit;
         ?>
          
          <input type="text" name="tile" value="<?php echo $data['title']; ?>">
          <input type="text" name="ingredient" value="<?php echo $data['ingredient']; ?>">
          <input type="text" name="price" value="<?php echo $data['price']; ?>">
          <input type="submit" value="Update">

      </form>

  </section>
  <section id="menutable">
    <?php

    


    foreach($food_menu['categories'] as $cat_key => $category ){

    ?>

    <div class="category-title">
      <h1><?php echo $category['label']; ?></h1>
    </div>  

    <table>
      
      <?php

      foreach($category['contents'] as $key=> $dish):

          $query_string = 'id='.$key.'&cat='.$cat_key;


        ?>

        <tr>
          <td><?php echo $key+1; ?></td>
          <td><?php echo $dish['title']; ?></td>
          <td><?php echo $dish['ingredient']; ?></td>
          <td> &#36; <?php echo $dish['price'].'.00'; ?></td>
          <td> <a href="editmenu.php?<?php echo $query_string; ?>">Edit</a></td>
          <td> <a href="#">Delete</a></td>



        </tr>


        <?php
          endforeach; 
      ?>

    </table>
    <?php  } ?>

    
    

  </section>
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