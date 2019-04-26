
<?php require_once('config.php') ?>

<?php require_once(ROOT_PATH .'/includes/header.php') ?>

<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php $post = getPostById(); ?>
<?php $comments = getCommentByPostId() ?>

<body>

  <!-- Navigation -->

  <?php require_once(ROOT_PATH .'/includes/nav.php') ?>
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3"><?php echo $post['title']; ?></h1>  

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo BASE_URL.'index.php'?>">Home</a>
      </li>
      <li class="breadcrumb-item active"><?php echo $post['category']; ?></li>
    </ol>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-lg-8">

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="<?php echo BASE_IMAGE.$post['image'] ?>" alt="">

        <hr>

        <!-- Date/Time -->
        <p>Posted on <?php echo date( "F d, Y", strtotime($post['created_at'])) ?></p>

        <hr>

        <!-- Post Content -->
        <?php echo $post['content']; ?>

        <hr>
        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

<?php foreach ($comments as $key => $comment) { ?>
  <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0"><?php echo $comment['user_id'] ?></h5>
            <?php echo $comment['content'] ?>
          </div>
        </div>
<?php } ?>
        

        <!-- Comment with nested comments -->
       <!--  <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name2</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

          </div>
        </div> -->

      </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">
      <!-- Categories Widget -->
      <?php require_once(ROOT_PATH .'/includes/categories.php') ?>
      <?php require_once(ROOT_PATH .'/includes/side_widget.php') ?>
    </div>
    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

<?php require_once(ROOT_PATH .'/includes/footer.php') ?>