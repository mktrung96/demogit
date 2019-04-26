<?php 
function getUsers(){
	global $conn;
	$sql = "SELECT * from users";
	$result = mysqli_query($conn, $sql);
		$users = mysqli_fetch_all($result, MYSQLI_ASSOC); // MYSQLI_ASSOC lấy data dưới dạng tên key
		return $users;
	}

	function getUserById($id){
		global $conn;
		$sql = "SELECT * from users WHERE id = '$id'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result); 
		return $user;
	}

	function updateUser($data = array(),$file = array()){
		$id = $data['id'];
		$name = $data['name'];
		$email = $data['email'];

		// get image request
		// get image.png
		//tmp
		// move tmp to /public/images
		$error = array();
		if (isset($file['image'])) {
			$image = $file['image'];
			$image_name = $image['name'];
			$image_tmp = $image['tmp_name'];
			move_uploaded_file($image_tmp, BASE_IMAGE."/admin/images".$image_name);
		}else{
			array().push($error,"Image not found");
		}

		global $conn;
		$sql = "UPDATE users SET name = '$name' , email = '$email', avatar = $'image_name' WHERE id = '$id' ";
		$result = mysqli_query($conn, $sql);
		return $result;
	}

	function getPosts(){
		global $conn;
		$sql = "SELECT * from posts";
		$result = mysqli_query($conn, $sql);
		$posts = mysqli_fetch_all($result, MYSQLI_ASSOC); // MYSQLI_ASSOC lấy data dưới dạng tên key
		return $posts;
	}
	function getPostById($id){
		global $conn;
		$sql = "SELECT * from posts WHERE id = '$id'";
		$result = mysqli_query($conn, $sql);
		$post = mysqli_fetch_assoc($result); 
		return $post;
	}
	function updatePost($data = array()){
		$id = $data['id'];
		$title = $data['title'];
		$slug = $data['slug'];
		$image = $data['image'];
		$user_id = $data['user_id'];
		$categories_id = $data['categories_id'];
		$content = $data['content'];

		global $conn;
		$sql = "UPDATE posts SET slug = '$slug' , title = '$title' ,image = '$image', content = '$content' , user_id = '$user_id', categories_id = '$categories_id' WHERE id = '$id' ";
		$result = mysqli_query($conn, $sql);
		return $result;
	}
?>