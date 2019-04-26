<?php require_once('config.php') ?>

<?php require_once(ROOT_PATH .'/includes/header.php') ?>

<body>

  <!-- Navigation -->
  <?php require_once(ROOT_PATH .'/includes/nav.php') ?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="error-template">
          <h1>
          Oops!</h1>
          <h2>
          404 Not Found</h2>
          <div class="error-details">
            Sorry, an error has occured, Requested page not found!
          </div>
          <div class="error-actions">
            <a href="<?php echo BASE_URL; ?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
            Take Me Home </a>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php require_once(ROOT_PATH .'/includes/footer.php') ?>
