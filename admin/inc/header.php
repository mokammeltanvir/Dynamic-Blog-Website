<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<section class="admin">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12 text-center">
        <div class="admin-title bg-secondary p-3 text-white">
          <h2>Admin Panel</h2>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-xxl-3">
        <div class="admin-menu mb-3">
          <ul class="list-group
          ">
          <li class="list-group-item active">Sidebar Menu</li>
          <li class="list-group-item"><a class="text-dark text-decoration-none" href="add-post.php">Add Post</a></li>
          <li class="list-group-item"><a class="text-dark text-decoration-none" href="add-category.php">Add Category</a></li>
          <li class="list-group-item"><a class="text-dark text-decoration-none" href="add-user.php">Add User</a></li>
          <li class="list-group-item"><a class="text-dark text-decoration-none" href="profile.php">Settings</a></li>
          </ul>

      </div>
    </div>
