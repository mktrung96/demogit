<?php include('../config.php') ?>
<?php require_once( ROOT_PATH . '/admin/auth.php') ?>
<?php require_once(ROOT_PATH .'/includes/header.php') ?>
<?php require_once( ROOT_PATH .'/admin/database_query.php') ?>

<?php
  $errors = array();
  if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $user = getUserById($id);
  }
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $result = updateUser($_POST, $_FILES);
    if ($result) {
      $message_msg = "Success";
    }else{
    }

  }
?>
<body>

  <!-- Navigation -->

  <?php require_once(ROOT_PATH .'/includes/nav.php') ?>
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">User Management</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo BASE_URL ?>">Home</a>
      </li>
      <li class="breadcrumb-item active">Blog Home 1</li>
    </ol>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- content here -->
        <form class="col-lg-6 offset-lg-3" method="POST" action="" enctype="multipart/form-data">
          <h4 class="mt-4 mb-3">Edit User</h4>
          <?php if(count($errors)) {?>
            <?php foreach($errors as $error) {?>
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
            <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name"  placeholder="Enter name" name="name" value="<?php echo $user['name'] ?>">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="email" name="email" value="<?php echo $user['email'] ?>" >
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" placeholder="Upload Image" name="image" value="<?php echo $user['image'] ?>" >
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Categories Widget -->
      <?php require_once(ROOT_PATH .'/includes/categories.php') ?>


      <?php require_once(ROOT_PATH .'/includes/side_widget.php') ?>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<?php require_once(ROOT_PATH .'/includes/footer.php') ?>