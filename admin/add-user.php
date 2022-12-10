<?php include 'inc/header.php';?>
<!-- Add User form  -->
 <?php
// Add User
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];

    $user_check = "SELECT username, email FROM users WHERE username = '$username' OR email = '$email'";
    $user_query = mysqli_query($conn, $user_check);
    $user_count = mysqli_num_rows($user_query);

    if ($user_count > 0) {
        $error = "<p style='color:red'>User Already Exists</p>";
    } else {
        $sql = "INSERT INTO users (name, username, email, password, role) VALUES ('$name', '$username', '$email', '$password', '$role')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location:index.php");
        }
    }

}
?>
<div class="col-xxl-9">
  <?php if (isset($error)) {echo $error;}?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="mb-3">
  <div class="form-group mb-3">
    <label for="full_name">Full Name</label>
    <input type="text" name="name" class="form-control" id="full_name" placeholder="Enter Full Name">
  </div>
  <div class="form-group mb-3">
    <label for="username">Username</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
  </div>
  <div class="form-group mb-3">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
  </div>
  <div class="form-group mb-3">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group mb-3">
    <label for="role">Role</label>
    <select name="role" class="form-control" id="role">
      <option value="0">Admin</option>
      <option value="1">Moderator</option>
    </select>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

</form>

</div>
<?php include 'inc/footer.php';?>