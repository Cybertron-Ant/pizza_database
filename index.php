<?php

include('configurations/database_connection.php');

//write query for what I want
$sql = 'SELECT title, ingredients, id FROM soups ORDER BY created_at';

//run query and get result
$result = mysqli_query($conn, $sql
                      );

//fetch resulting rows as an associative array
$dishes = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free results from memory
mysqli_free_result($result);

//close database connection
mysqli_close($conn);



?>




<!DOCTYPE html>
<html lang="en">

<?php  include "templates/header.php";   ?>

<h4 class= "center grey-text">Soups</h4>

<div class = "center">
  <div class= "row">

    <?php foreach ($dishes as $dish):  ?>
      <!-- on small screens, take up 6 columns of width out of 12.
      On medium screens, that up 3 columns of width out of 12. -->
      <div class= "container">
        <div class = "card center z-depth-80">
          <img src = "images/fresh_soup.jpeg" class = "style_soup" >
          <div class = "card-content center">
            <h6><?php echo htmlspecialchars($dish['title']); ?></h6>
            <ul>
              <?php foreach (explode(',', $dish['ingredients']) as $myIngredient): ?>
                <!-- Output each ingredient in a list -->
                <li><?php echo htmlspecialchars($myIngredient); ?></li>
              <?php endforeach; ?>

            </ul>
          </div>
          <div class = "card-action right-align">
            <a class = "brand-text" href = "details.php?id=<?php echo $dish['id'] ?>">more info</a>
          </div>
        </div>
      </div>

  </div>

    <?php endforeach; ?>

    <?php if (count($dishes) > 1): ?>
      <p>There are <?php echo count($dishes); ?> soups available</p>
    <?php else: ?>
      <p>There is only one or less soups remaining</p>
    <?php endif; ?>

</div>




<?php  include "templates/footer.php";   ?>



  </html>