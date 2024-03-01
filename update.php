<!doctype html>
<html lang="en">
<head>
    <title>CRUD Practice!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Update Product</h2>
    <div class="card p-4 bg-secondary-subtle">
    <form action="update.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="id" class="form-label">ID:  <?php if (isset($_GET['id'])) echo htmlspecialchars($_GET['id']); ?></label>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required value="<?php if (isset($_GET['title'])) echo htmlspecialchars($_GET['title']); ?>">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <input type="text" class="form-control" id="description" name="description" required value="<?php if (isset($_GET['description'])) echo htmlspecialchars($_GET['description']); ?>">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" required value="<?php if (isset($_GET['price'])) echo htmlspecialchars($_GET['price']); ?>">
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">Color:</label>
            <input type="text" class="form-control" id="color" name="color" required value="<?php if (isset($_GET['color'])) echo htmlspecialchars($_GET['color']); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
