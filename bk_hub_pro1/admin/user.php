<?php include('../config.php') ?>
<?php require_once(ROOT_PATH .'/admin/auth.php') ?>
<?php require_once(ROOT_PATH .'/includes/header.php') ?>
<?php require_once(ROOT_PATH .'/admin/database_query.php') ?>
<?php $users = getUsers();  ?>
<body>

  <!-- Navigation -->
  <?php require_once(ROOT_PATH .'/includes/nav.php') ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">User Management
      <small>Subheading</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="https://blackrockdigital.github.io/startbootstrap-modern-business/index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Blog Home 1</li>
    </ol>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">
        <!-- Content here -->
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Edit</th>
            </tr>
          </thead>
          <tbody>
           <?php foreach($users as $user) {?>
            <tr>
              <th scope="row"><?php echo $user['id']?></th>
              <td><?php echo $user['name']?></td>
              <td><?php echo $user['email']?></td>
              <td><a href="<?php echo BASE_URL.'admin/user_detail.php?id='.$user['id'] ?>" type="button" class="btn btn-info">Detail</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

      <!-- Categories Widget -->
      <?php require_once(ROOT_PATH .'/includes/categories.php')?>

      <!-- Side Widget -->
      <?php require_once(ROOT_PATH .'/includes/side_wiget.php') ?>

    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<?php require_once(ROOT_PATH .'/includes/footer.php') ?>

