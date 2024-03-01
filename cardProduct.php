<div class="container-fluid bg-secondary-subtle">
    <h1>Products</h1>
    <div class="row d-flex justify-content-center">
<?php
require 'db_connection.php';
$sql = "SELECT id, title, description, price, color FROM product";
$r = @mysqli_query($link, $sql);
if (mysqli_num_rows($r) != 0);

while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
{
    echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 m-2 d-flex justify-content-center">
<div class="card m-2 products" style="width: 18rem;">
  <img src="./statics/images/' . $row['color'] . $row['title'] . '.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">' . $row['color'] . $row['title'] . '</h5>
    <p class="card-text">'.$row['description'].'</p>
    <h5 class="card-title">£ '.$row['price'].'</h5>
    <div class="card-body">
        <a href="update.php?id='.$row['id'].'" class="btn btn-light">See Product</a>
    </div>
  </div>
</div>
</div>';
}
?>
    </div>
</div>
