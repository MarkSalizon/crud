<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$user = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    if ($conn->query($sql)) {
        header("Location: index.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit User</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Edit User</h2>
    <form method="post">
      <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
      <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
      <button type="submit" class="btn">Update</button>
    </form>
  </div>
</body>
</html>
