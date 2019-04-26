<?php 
	/*
	*get Post
	*/

	function getPosts(){
		global $conn;
		$sql = "SELECT * from posts";
		$result = mysqli_query($conn, $sql);
		$posts = mysqli_fetch_all($result, MYSQLI_ASSOC); // MYSQLI_ASSOC lấy data dưới dạng tên key
		return $posts;
	}


	// more functions to come here
	function getPostById(){
		$slug = isset($_GET['slug']) ? $_GET['slug'] : null; // hàm isset để check tồn tại
		$categoriesID = isset($_GET['categoriesID']) ? $_GET['categoriesID'] : null;
		if ($slug || $categoriesID) {
			global $conn;
			$sql = "SELECT posts.*, categories.name as category FROM posts INNER JOIN categories ON posts.categories_id = categories.id ";
			if ($slug) {
				$sql = $sql." WHERE posts.slug = '$slug' ;";
			}
			if ($categoriesID) {
				$sql = $sql." WHERE posts.categories_id = '$categoriesID' ;";
			}

			$result = mysqli_query($conn, $sql);
			//
			$post = mysqli_fetch_assoc($result);
			return $post;	
		} else {
			
			pageNotFound();
		}

	}

	function pageNotFound(){
		header("Location: ".BASE_URL.'404.php');
		die();
	}

	function getCategories(){
		global $conn;
		$sql = "SELECT * from categories";
		$result = mysqli_query($conn, $sql);
		$categories = mysqli_fetch_all($result, MYSQLI_ASSOC); // MYSQLI_ASSOC lấy data dưới dạng tên key
		return $categories;
	}

	// more functions to come here
	function getCommentByPostId(){
		$slug = isset($_GET['slug']) ? $_GET['slug'] : null; // hàm isset để check tồn tại
		$categoriesID = isset($_GET['categoriesID']) ? $_GET['categoriesID'] : null;
		if ($slug || $categoriesID) {
			global $conn;
			$sql = "SELECT comments.* FROM comments INNER JOIN posts ON comments.post_id = posts.id  ";
			if ($slug) {
				$sql = $sql." WHERE posts.slug = '$slug' ;";
			}
			if ($categoriesID) {
				$sql = $sql." WHERE posts.categories_id = '$categoriesID' ;";
			}

			$result = mysqli_query($conn, $sql);	
			//
			$comments = mysqli_fetch_all($result,MYSQLI_ASSOC);
			return $comments;	
		} else {
			
			pageNotFound();
		}

	}

?>

