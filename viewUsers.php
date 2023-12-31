<?php include "sideBar.php"; ?>

<section id = "loader">
  <div id = "userDiv">
    <h1>Users</h1>
    <button id = "newUserButton" type = "button">&#43; Add User</button>
  </div>
  
  <table id="tableUser">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Role</th>
          <th>Created</th>
        </tr>
  <?php
    include 'setConnection.php';
      
    $stmt= $conn->query("SELECT * FROM users");
    $results= $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>
    <?php foreach($results as $row): ?>
        <tr>
          <td> <?= $name = $row["title"] . " " . $row["firstname"] . " " . $row["lastname"]; ?></td>
          <td> <?= $row["email"]; ?></td>
          <td> <?= $row["role"]; ?></td>
          <td> <?= $row["created_at"]; ?></td>
        </tr>
    <?php endforeach ?>
  </table>
</section>