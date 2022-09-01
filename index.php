<?php

   include_once('db.php');


 ?>
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
             'caption' => 'Adventurer Cheesecake Brownie', 
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

 


  <section id="menutable">



    <?php


    if(!empty($_POST)){

    $title = $_POST['title'];
    $desc = $_POST['ingredient'];
    $price = $_POST['price'];
    $id = $_POST['id'];
    


    $sql = "update tbl_food_menu set title='".$title."', ingredients = '".$desc."', price ='".$price."'
    where id=". $id;

    $result = $conn->query($sql);;
    if($result){
      unset($_GET);
      ?>
      <script type="text/javascript">
        alert('Your record is updated');
      </script>
      <?php
    }
    else{
      ?>
      <script type="text/javascript">
        alert('Could not update');
      </script>
      <?php
    }


 header('Location: http://localhost/phpweb');

}

  if(!empty($_GET['del'])){
    $food_menu['categories'][$_GET['cat']]['contents'][$_GET['id']]['delete'] = 1;
      
  }





  $sql = "SELECT c.id as cat_id, c.label, m.id as dish_id, m.title, m.ingredients, m.price from tbl_categories c INNER JOIN tbl_food_menu m ON c.id = m.category_id";
  $result = $conn->query($sql);

  $table = "<table>";
  $tr = '<tr>
  <th>Category ID</th>
  <th>Category Name</th>
  <th>Dish ID</th>
  <th>Title</th>
  <th>Ingredients</th>
  <th>Price</th>
  <th>Edit</th>
  <th>Delete</th>
  </tr>';
  if($result->num_rows > 0){
    while( $row = $result->fetch_assoc()){
      $tr .= '<tr>
      <td>'.$row['cat_id'].'</td>
      <td>'.$row['label'].'</td>
      <td>'.$row['dish_id'].'</td>
      <td>'.$row['title'].'</td>
      <td>'.$row['ingredients'].'</td>
      <td>'.$row['price'].'</td>
      <td><a href="index.php?dish='.$row['dish_id'].'&edit=1">Edit</a></td>
      <td><a href="#">Delete</a></td>
      </tr>';
    }
  }
  $table .= $tr.'</table>';

  echo $table;


    

   ?>
    

  </section>


  <?php 

  $row = '';
  if(isset($_GET['edit'])){
    $dish_id = $_GET['dish'];
    $sql = "select * from tbl_food_menu where id=".$dish_id;
    $result = $conn->query($sql);

    if($result->num_rows >  0){
      $row = $result->fetch_assoc();
    }


    
    include_once 'editmenu.php';   
  }



  

  ?>
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