  <section>
   
      
      <h1>something</h1>

      <form method="POST">

     



          <input type="text" name="id" value="<?php echo $row['id']; ; ?>" disabled>
          <input type="text" name="title" value="<?php echo $row['title']; ?>">
          <input type="text" name="ingredient" value="<?php echo $row['ingredients']; ?>">
          <input type="text" name="price" value="<?php echo $row['price']; ?>">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <input type="submit" value="submit" />

      </form>

  </section>
  