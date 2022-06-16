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
		$magv = $_POST['magv'];
		$user_id = $_POST['user_id'];
		$tengv = $_POST['tengv'];
		$mamon = $_POST['mamon'];
		$tenmon = $_POST['tenmon'];
		$sodt = $_POST['sodt'];
		$makhoa = $_POST['makhoa'];

		// write the update query
		$sql = "UPDATE `giaovien` SET `magv`='$magv',`tengv`='$tengv',`mamon`='$mamon',`tenmon`='$tenmon',`sodt`='$sodt' ,`makhoa`='$makhoa' WHERE `id`='$user_id'";

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
	$sql = "SELECT * FROM `giaovien` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$magv = $row['magv'];
			$tengv = $row['tengv'];
			$mamon = $row['mamon'];
			$tenmon  = $row['tenmon'];
			$sodt = $row['sodt'];
			$makhoa = $row['makhoa'];
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
            <span class="details">Mã Giáo Viên</span>
            <input type="text" name="magv" placeholder="Mã Giáo Viên" value="<?php echo $magv; ?>">
			<input type="hidden" name="user_id" value="<?php echo $id; ?>">
          </div>
          <div class="input-box">
            <span class="details">Tên Giáo Viên</span>
            <input type="text" name="tengv" placeholder="Tên Giáo Viên" value="<?php echo $tengv; ?>">
          </div>
          <div class="input-box">
            <span class="details">Mã Môn</span>
            <input type="text" name="mamon" value="<?php echo $mamon; ?>">
          </div>
          <div class="input-box">
            <span class="details">Tên Môn</span>
            <input type="text" name="tenmon" placeholder="Tên Môn" value="<?php echo $tenmon; ?>">
          </div>
          <div class="input-box">
            <span class="details">Số Điện Thoại</span>
            <input type="tel" placeholder="Số Điện Thoại" name="sodt" value="<?php echo $sodt; ?>">
          </div>
		  <div class="input-box">
            <span class="details">Mã Khoa</span>
            <input type="text" placeholder="Mã Khoa" name="makhoa" value="<?php echo $makhoa; ?>">
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