<?php 
	/*
	*get Post
	*/

	function getRecord(){
		global $conn;
		$sql = "SELECT * from record LIMIT 1";
		$result = mysqli_query($conn, $sql);
		$records = mysqli_fetch_all($result, MYSQLI_ASSOC); // MYSQLI_ASSOC lấy data dưới dạng tên key
		return $records;
	}

	function pageNotFound(){
		header("Location: ".BASE_URL.'404.php');
		die();
	}

	function getDisplayInfo(){
		$displayInfo = array();
		global $conn;
		$sql = "SELECT * from record LIMIT 1";
		$result = mysqli_query($conn, $sql);
		$record = mysqli_fetch_assoc($result);
		$co = $record['co'];
		$co2 = $record['co2'];
		//$api;
		if ($co > $co2) {
			$api =  ROUND($co);
		}else{
			$api = ROUND($co2);
		}
		$warning = getDescription($api);

		array_push($displayInfo, $api);
		array_push($displayInfo, $warning);
		array_push($displayInfo, "pinIcon");
		array_push($displayInfo, $record['time_record']);
		array_push($displayInfo, $record['co']);
		array_push($displayInfo, $record['temp']);
		array_push($displayInfo, $record['humi']);
		array_push($displayInfo, $record['co']);
		array_push($displayInfo, $record['co2']);
		array_push($displayInfo, $record['ethanol']);
		array_push($displayInfo, $record['toluene']);
		array_push($displayInfo, $record['acetone']);

		return $displayInfo;
	}
	/*
	 * Phương thức đưa ra cảnh báo cho người dùng khi biết aqi
	 * 
	 * @return List<String>
	 */
	function getDescription($data) {
		
		$warning =  array();
		if ($data <= 50) {
			$title = "Tốt";
			$des = "Chất lượng không khí tốt.";
			$pinIcon = "/icon_detail_green.png";
			$color = "green";
			$colorAQI = "#00e400";
		}
		if ($data > 50 && data <= 100) {
			$title = "Trung bình";
			$des = "Nhóm nhạy cảm nên hạn chế ở bên ngoài.";
			$pinIcon = "/icon_detail_yellow.png";
			$color = "yellow";
			$colorAQI = "#ffff02";
		}
		if ($data > 100 && data <= 200) {
			$title = "Kém";
			$des = "Nhóm nhạy cảm cần hạn chế thời gian ở bên ngoài.";
			$pinIcon = "/icon_detail_orange.png";
			$color = "orange";
			$colorAQI = "#ff7e00";
		}
		if ($data > 200 && data <= 300) {
			$title = "Xấu";
			$des = "Nhóm nhạy cảm tránh ra ngoài. Những người khác hạn chế ở bên ngoài.";
			$pinIcon = "/icon_detail_red.png";
			$color = "red";
			$colorAQI = "#ff0000";
		}
		if ($data > 300) {
			$title = "Nguy hiểm";
			$des = "Mọi người nên ở trong nhà.";
			$pinIcon = "/icon_detail_brown.png";
			$color = "brown";
			$colorAQI = "#7f0023";
		}
		array_push($warning, $title);
		array_push($warning, $des);
		array_push($warning, $pinIcon);
		array_push($warning, $color);
		array_push($warning, $colorAQI);
		return $warning;
	}

	function getTypeDateStatistic(){
		$typeDateStat = isset($_GET['typeDateStatistic']) ? $_GET['typeDateStatistic'] : null;
		$selDate = isset($_GET['selDate']) ? $_GET['selDate'] : date('Y-m-d'); 

		$listStatDate = array();
		for ($hourStat=0; $hourStat < 24; $hourStat++) { 
			if (!$selDate) {
				global $conn;
				$sql = ("SELECT " + $typeDateStat + " FROM record WHERE "
					+ " (time_record >='" + $selDate + ":00:00'AND time_record <'" + $hourStat
					+ ":59:59');");
				$result = mysqli_query($conn, $sql);
				$recordHour = mysqli_fetch_all($result, MYSQLI_ASSOC); // MYSQLI_ASSOC lấy data dưới dạng tên key
				if ($recordHour != 0) {
					$variable = array_sum($recordHour)/count($recordHour);
					array_push($variable);
				}
		}

	}
	return $listStatDate;
}

?>

