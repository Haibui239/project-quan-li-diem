<script>
function myFunction()
{
alert("Cập nhập thành công!"); // this is the message in ""
}
</script>
<?php

include "config.php";

    // if the form's update button is clicked, we need to procss the form
    	if (isset($_POST['update'])) {
		$mamh = $_POST['mamh'];
		$user_id = $_POST['user_id'];
		$tenmh = $_POST['tenmh'];
		$stlt = $_POST['stlt'];
		$stth = $_POST['stth'];
		$sglt = $_POST['sglt'];
		$sgth = $_POST['sgth'];
		$magv = $_POST['magv'];

		// write the update query
		$sql = "UPDATE `monhoc` SET `mamh`='$mamh',`tenmh`='$tenmh',`stlt`='$stlt',`stth`='$stth',`sglt`='$sglt' ,`sgth`='$sgth',`magv`='$magv' WHERE `id`='$user_id'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo '<script>myfunction()</script>';
			header('Location: view.php');
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}
    

    // if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `monhoc` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$mamh = $row['mamh'];
			$tenmh = $row['tenmh'];
			$stlt = $row['stlt'];
			$stth  = $row['stth'];
			$sglt = $row['sglt'];
			$sgth  = $row['sgth'];
			$magv = $row['magv'];
			$id = $row['id'];
		}

	?>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
		<div class="container">
    <div class="title">Update</div>
    <div class="content">
      <form action="" method="post">
		  <fieldset>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Mã Môn Học</span>
            <input type="text" name="mamh" placeholder="Mã Môn Học" value="<?php echo $mamh; ?>">
			<input type="hidden" name="user_id" value="<?php echo $id; ?>">
          </div>
          <div class="input-box">
            <span class="details">Tên Môn Học</span>
            <input type="text" name="tenmh" placeholder="Tên Môn Học" value="<?php echo $tenmh; ?>">
          </div>
          <div class="input-box">
            <span class="details">Số Tiết Lý Thuyết</span>
            <input type="text" name="stlt" placeholder="Số Tiết Lý Thuyết" value="<?php echo $stlt; ?>">
          </div>
          <div class="input-box">
		  <span class="details">Số Tiết Thực Hành</span>
            <input type="text" name="stth" placeholder="Số Tiết Thực Hành" value="<?php echo $stth; ?>">
          </div>
		  
          <div class="input-box">
		  <span class="details">Số Giờ Lý Thuyết</span>
            <input type="text" name="sglt" placeholder="Số Giờ Lý Thuyết" value="<?php echo $sglt; ?>">
          </div>
          <div class="input-box">
		  <span class="details">Số Giờ Thực Hành</span>
            <input type="text" name="sgth" placeholder="Số Giờ Thực Hành" value="<?php echo $sgth; ?>">
          </div>
		  <div class="input-box">
		  <span class="details">Mã Giáo Viên</span>
            <input type="text" name="magv" placeholder="Mã Giáo Viên" value="<?php echo $magv; ?>">
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Cập Nhật" name="update">
        </div>
	</fieldset>
      </form>
    </div>
  </div>
		</body>
		</html>




	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: view.php');
	}

}
?>