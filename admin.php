<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
require 'db_connection.php';
include_once "navbar.php";  // Ensure this navbar provides a meaningful navigation
?>

<div class="container-fluid mt-5">
    <h1 class="mb-4">Admin Dashboard</h1>

    <div class="row">
        <div class="col-md-2 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Actions</h5>
                    <p class="card-text">Manage your products efficiently.</p>
                    <a href="addProduct.php" class="btn btn-primary">Add new product</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <form class="mb-3">
                <div class="mb-3">
                    <label for="product" class="form-label">View:</label>
                    <select name="product" id="product" class="form-select">
                        <option value="all">all</option>
                        <option value="shirt">Shirt</option>
                        <option value="trouser">Trouser</option>
                    </select>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr class="table-primary">
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Color</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    require 'db_connection.php';
                    $sql = "SELECT id, title, description, price, color FROM product";
                    $r = @mysqli_query($link, $sql);
                    if (mysqli_num_rows($r) != 0);

                    while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                        echo '<tr>
      <th scope="row">'.$row['id'].'</th>
      <td>'.$row['title'].'</td>
      <td>'.substr($row['description'], 0, 50).'</td>
      <td>£ '.$row['price'].'</td>
      <td>'.$row['color'].'</td>
      <td>
          <a href="update.php?id='.$row['id'].'&title='.urlencode($row['title']).'&description='.urlencode($row['description']).'&price='.urlencode($row['price']).'&color='.urlencode($row['color']).'" class="btn btn-sm btn-outline-primary me-2">Update</a>
          <a href="delete.php?id='.$row['id'].'" class="btn btn-sm btn-outline-danger">Delete</a>
      </td>
    </tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Information</h5>
                    <p class="card-text">Additional details or actions.</p>
                    <!-- Add more content here as needed -->
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
