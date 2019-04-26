<?php require_once(ROOT_PATH .'/includes/public_functions.php') ?>
<?php $categories = getCategories() ?>
<!-- Categories Widget -->
<div class="card my-4">
  <h5 class="card-header">Categories</h5>
  <div class="card-body">
    <?php foreach ($categories as $key => $category) { ?>
    <div class="row">
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
          <li>
            <a href="<?php echo BASE_URL.'post.php?categoriesID='.$category['id'] ?>"><?php echo $category['name'] ?></a>
          </li>
        </ul>
      </div>
    </div>
  <?php } ?>
  </div>
</div>
