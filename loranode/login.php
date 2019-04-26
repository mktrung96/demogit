<?php require_once('config.php') ?>

<?php require_once(ROOT_PATH .'/includes/header.php') ?>

<?php 
    $errors = array();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $email  = isset($_POST['email']) ? $_POST['email'] : null;
     $password  = isset($_POST['password']) ? $_POST['password'] : null;

     if (empty($email)) {
      array_push($errors, "Email is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }

    $password = md5($password);
    global $conn;
    $sql = "SELECT * FROM users WHERE password = '$password' AND email = '$email' LIMIT 1";
    $result = mysqli_query($conn,$sql);
    $user = mysqli_fetch_assoc($result);

    if($user) {
     $message_msg = "You login successfully!!!";
     $_SESSION['user'] = $user;
         header('location: '.BASE_URL.'admin/user.php');
    }
    else{
      array_push($errors, "Login fail!");
    }
}
?>

<body>

  <!-- Page Content -->
  <div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
      <div class="col-lg-12">
        <form class="col-lg-6 offset-lg-3" method="POST" action="">
         <h4 class="mt-4 mb-3"> </h4>
         <?php if(count($errors)) { ?>
          <?php foreach ($errors as $error) { ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $error; ?>
            </div>
          <?php } ?>
        <?php } ?>

        <?php if(isset($message_msg)) {?>
          <div class="alert alert-success" role="alert">
            <?php echo $message_msg; ?>
          </div>
        <?php } ?>

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">

        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
<!-- /.container -->
