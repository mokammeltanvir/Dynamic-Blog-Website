<?php include 'inc/header.php';?>
      <div class="col-xxl-9">
        <a href="add-user.php" class="btn btn-primary mb-3">Add New user</a>
        <hr/>
      <table class="table table-border">
        <tr>
          <th>SL No.</th>
          <th>Full Name</th>
          <th>Username</th>
          <th>Email</th>
          <th>Role</th>
          <th>Action</th>
        </tr>

          <?php
$user = "SELECT * FROM users";
$user_query = mysqli_query($conn, $user);
$sl = 0;
while ($row = mysqli_fetch_assoc($user_query)) {
    $sl++;
    $name = $row['name'];
    $username = $row['username'];
    $email = $row['email'];
    $role = $row['role'];

    ?>
          <tr>
          <td><?php echo $sl; ?></td>
          <td><?php echo $name; ?></td>
          <td><?php echo $username; ?></td>
          <td><?php echo $email; ?></td>
          <td><?php if ($row['role'] == 0) {echo 'Admin';} else {echo 'Moderator';}?></td>
          <td>
            <a class="btn btn-primary" href="edit-user.php?<?php echo $row['id'];
    ?>">Edit</a>
            <a class="btn btn-danger" href="delete-user.php">Delete</a>
          </td>
        </tr>
        <?php }?>
      </table>
      </div>

<?php include 'inc/footer.php';?>