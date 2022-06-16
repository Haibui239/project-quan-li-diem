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
		$masv = $_POST['masv'];
		$user_id = $_POST['user_id'];
		$hoten = $_POST['hoten'];
		$ngaysinh = $_POST['ngaysinh'];
		$diachi = $_POST['diachi'];
		$gioitinh = $_POST['gioitinh'];
		$lop = $_POST['lop'];
		$makhoa = $_POST['makhoa'];

		// write the update query
		$sql = "UPDATE `sinhvien` SET `masv`='$masv',`hoten`='$hoten',`ngaysinh`='$ngaysinh',`diachi`='$diachi',`gioitinh`='$gioitinh' ,`lop`='$lop',`makhoa`='$makhoa' WHERE `id`='$user_id'";

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
	$sql = "SELECT * FROM `sinhvien` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$masv = $row['masv'];
			$hoten = $row['hoten'];
			$ngaysinh = $row['ngaysinh'];
			$diachi  = $row['diachi'];
			$gioitinh = $row['gioitinh'];
			$lop  = $row['lop'];
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
            <span class="details">Mã Sinh Viên</span>
            <input type="text" name="masv" placeholder="Mã sinh viên" value="<?php echo $masv; ?>">
			<input type="hidden" name="user_id" value="<?php echo $id; ?>">
          </div>
          <div class="input-box">
            <span class="details">Họ Tên</span>
            <input type="text" name="hoten" placeholder="Họ tên" value="<?php echo $hoten; ?>">
          </div>
          <div class="input-box">
            <span class="details">Ngày Sinh</span>
            <input type="date" name="ngaysinh" value="<?php echo $ngaysinh; ?>">
          </div>
          <div class="input-box">
            <span class="details">Địa Chỉ</span>
            <input type="text" name="diachi" placeholder="Địa chỉ" value="<?php echo $diachi; ?>">
          </div>
		  
          <div class="input-box">
            <span class="details">Lớp</span>
            <input type="text" placeholder="Lớp" name="lop" value="<?php echo $lop; ?>">
          </div>
          <div class="input-box">
            <span class="details">Mã Khoa</span>
            <input type="text" placeholder="Mã khoa" name="makhoa" value="<?php echo $makhoa; ?>">
          </div>
        </div>
		<div class="gender-details">
          <input type="radio" name="gioitinh" id="dot-1" value="Nam" <?php if($gioitinh == 'Nam'){ echo "checked";} ?>>
          <input type="radio" name="gioitinh" id="dot-2" value="Nữ" <?php if($gioitinh == 'Nữ'){ echo "checked";} ?>>
          <span class="gender-title">Giới tính</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Nam</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Nữ</span>
          </label>
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

  