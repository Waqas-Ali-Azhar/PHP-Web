  <section>
   
      
      <h1>something</h1>

      <form method="POST">

        <?php

         $data = $food_menu['categories'][$_GET['cat']]['contents'][$_GET['id']];

         // echo "<pre>";
         // print_r($food_menu['categories'][$_GET['cat']]['contents'][$_GET['id']]);
         // exit;
         ?>
          
          <input type="text" name="id" value="<?php echo ($_GET['id'] + 1) ; ?>" disabled>
          <input type="text" name="title" value="<?php echo $data['title']; ?>">
          <input type="text" name="ingredient" value="<?php echo $data['ingredient']; ?>">
          <input type="text" name="price" value="<?php echo $data['price']; ?>">
          <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

          <input type="hidden" name="cat" value="<?php echo $_GET['cat']; ?>">
          <input type="submit" value="submit" />

      </form>

  </section>
  