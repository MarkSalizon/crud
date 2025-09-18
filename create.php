<?php include 'db.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add User</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Add User</h2>
    <form method="post">
      <input type="text" name="name" placeholder="Enter Name" required>
      <input type="email" name="email" placeholder="Enter Email" required>
      <button type="submit" class="btn">Save</button>
    </form>
  </div>
</body>
</html>
