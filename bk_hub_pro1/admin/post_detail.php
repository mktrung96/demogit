<?php include('../config.php') ?>
<?php require_once( ROOT_PATH . '/admin/auth.php') ?>
<?php require_once(ROOT_PATH .'/includes/header.php') ?>
<?php require_once( ROOT_PATH .'/admin/database_query.php') ?>

<?php
  $errors = array();
  
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $result = updatePost($_POST);
    if ($result) {
      $message_msg = "Success";
      
    }else{

    }

  }
  if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = isset($_GET['id']) ? $_GET['id'] : null;  
    $post = getPostById($id);
    
  }
?>
<body>

  <!-- Navigation -->

  <?php require_once(ROOT_PATH .'/includes/nav.php') ?>
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Edit Posts</h1>

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
        <form class="col-lg-12 " method="POST" action="" style="padding-bottom: 20%"> 
          <h4 class="mt-4 mb-3">Edit Post</h4>
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
            <input type="hidden" name="id" value="<?php echo $post['id'] ?>">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title"  placeholder="title post" name="title" value="<?php echo $post['title'] ?>">
          </div>
          <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug"  placeholder="slug post" name="slug" value="<?php echo $post['slug'] ?>">
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" id="image"  placeholder="image post" name="image" value="<?php echo $post['image'] ?>">
          </div>
          <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" style="height: 250px" name="content"><?php echo $post['content'] ?>
            </textarea>
           <!--  <input type="text" class="form-control" id="content" placeholder="" name="content" value="<?php echo $post['content'] ?>" > -->
          </div>
          <div class="form-group">
             <label for="categories_id"> ID</label>
            <input type="text" class="form-control" id="user_id"  placeholder="user_id post" name="user_id" value="<?php echo $post['user_id'] ?>">
          </div>
          <div class="form-group">  
            <label for="categories_id">Categories ID</label>
            <input type="text" class="form-control" id="categories_id"  placeholder="categories_id post" name="categories_id" value="<?php echo $post['categories_id'] ?>">
          </div>
          <button type="submit" class="btn btn-primary" style="">Update</button>
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