<?php require_once('config.php') ?>

<?php require_once(ROOT_PATH .'/includes/header.php'
  ) ?>
<?php require_once(ROOT_PATH .'/includes/public_functions.php') ?>
<?php $posts = getPosts();  ?>
<!-- <?php $user = $_SESSION['user'];?> --> 
 <body>
  <!-- Navigation -->
  <?php require_once(ROOT_PATH .'/includes/nav.php') ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Stephen Trung
      <small>Trang cá nhân</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo BASE_URL ?>">Hello <?php echo $user['name']?></a>
      </li>
      <li class="breadcrumb-item active">Blog Home 1</li>
    </ol>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">


<?php foreach ($posts as $key => $post) { ?>
  <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="public/images/750_300.png" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"><?php echo $post['title'] ?></h2>
            <p class="card-text"><?php echo $post['content'] ?></p>
            <a href="<?php echo BASE_URL.'post.php?slug='.$post['slug'] ?>" class="btn btn-primary">Read More →</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="<?php echo BASE_URL ?>">Start Bootstrap</a>
          </div>
        </div>
<?php } ?>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="https://blackrockdigital.github.io/startbootstrap-modern-business/blog-home-1.html#">← Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="https://blackrockdigital.github.io/startbootstrap-modern-business/blog-home-1.html#">Newer →</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Categories Widget -->
        <?php require_once(ROOT_PATH .'/includes/categories.php')?>

        <!-- Side Widget -->
       <?php require_once(ROOT_PATH .'\includes\side_widget.php') ?>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
 <?php require_once(ROOT_PATH .'/includes/footer.php') ?>

