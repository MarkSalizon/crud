<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CRUD</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>USER LIST</h2>
    <a href="create.php" class="btn">+ Add User</a>
    <table>
      <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Date - Time</th><th>Action</th>
      </tr>
      <?php
      $result = $conn->query("SELECT * FROM users");
      while($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['name']}</td>
                  <td>{$row['email']}</td>
                  <td>{$row['created_at']}</td>
                  <td>
                    <a href='update.php?id={$row['id']}' class='edit'>Edit</a>
                    <a href='delete.php?id={$row['id']}' class='delete'>Delete</a>
                  </td>
                </tr>";
      }
      ?>
    </table>
  </div>
</body>
</html>
