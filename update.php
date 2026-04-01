<?php
include 'config.php';

$id = intval($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
     $full_name = $_POST['full_name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];

    $sql = "UPDATE students SET full_ name='$name', cost='$cost' WHERE id=$id";
    if ($conn->query($sql)) {
        header("Location: read.php"); 
        exit();
    } else {
        $error = "Xatolik yuz berdi!";
    }
}

$sql = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UPDATE student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <h1 class="text-center mb-4">Update student</h1>

    <?php if(isset($error)) { ?>
        <div class="alert alert-danger text-center"><?php echo $error; ?></div>
    <?php } ?>

    <form method="POST" class="w-50 mx-auto">
        <div class="container my-5">
    <h1 class="text-center mb-4">Add Product</h1>

<form method="POST" class="w-50 mx-auto">
      <div class="mb-3">
            <label class="form-label">Student name:</label>
            <input type="text" name="full_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone number:</label>
            <input type="text" name="phone_number" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Address:</label>
            <input type="text" name="address" class="form-control" required>
        </div>

        <div class="text-center">
            <input type="submit" value="Create" class="btn btn-success">
            <a href="read.php" class="btn btn-secondary ms-2">Back</a>
        </div>
    </form>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>