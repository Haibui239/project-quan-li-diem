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
		$makq = $_POST['makq'];
		$user_id = $_POST['user_id'];
		$mamh = $_POST['mamh'];
		$kihoc = $_POST['kihoc'];
		$namhoc = $_POST['namhoc'];

		// write the update query
		$sql = "UPDATE `ketqua` SET `makq`='$makq',`mamh`='$kihoc',`kihoc`='$kihoc',`namhoc`='$namhoc' WHERE `id`='$user_id'";

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
	$sql = "SELECT * FROM `ketqua` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$makq = $row['makq'];
			$mamh = $row['mamh'];
			$kihoc = $row['kihoc'];
			$namhoc  = $row['namhoc'];
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
            <span class="details">Mã Kết Quả</span>
            <input type="text" name="makq" placeholder="Mã Kết Quả" value="<?php echo $makq; ?>">
			<input type="hidden" name="user_id" value="<?php echo $id; ?>">
          </div>
          <div class="input-box">
            <span class="details">Mã Môn Học</span>
            <input type="text" name="mamh" placeholder="Mã Môn Học" value="<?php echo $mamh; ?>">
          </div>
          <div class="input-box">
            <span class="details">Kì Học</span>
            <input type="number" name="kihoc" placeholder="Kì Học" value="<?php echo $kihoc; ?>">
          </div>
          <div class="input-box">
            <span class="details">Năm Học</span>
            <input type="number" name="namhoc" placeholder="Năm Học" value="<?php echo $namhoc; ?>">
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