<?php
    include "config.php";

if (isset($_POST['submit'])) {

  $masv = $_POST['masv'];
  $hoten = $_POST['hoten'];
  $ngaysinh = $_POST['ngaysinh'];
  $diachi = $_POST['diachi'];
  $gioitinh = $_POST['gioitinh'];
  $lop = $_POST['lop'];
  $makhoa = $_POST['makhoa'];

  //write sql query
  $sql = "INSERT INTO `sinhvien`(`masv`, `hoten`, `ngaysinh`, `diachi`, `gioitinh`, `lop`, `makhoa`) VALUES ('$masv','$hoten','$ngaysinh','$diachi','$gioitinh','$lop','$makhoa')";
//execute the query 
$result = $conn->query($sql);
if ($result == TRUE) {
    echo "new record created successfully.";

}else{
    echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();


}


?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
		<div class="container">
    <div class="title">Create</div>
    <div class="content">
      <form action="" method="post">
		  <fieldset>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Mã Sinh Viên</span>
            <input type="text" name="masv" placeholder="Mã sinh viên">
			<input type="hidden" name="user_id" value="<?php echo $id; ?>">
          </div>
          <div class="input-box">
            <span class="details">Họ Tên</span>
            <input type="text" name="hoten" placeholder="Họ tên">
          </div>
          <div class="input-box">
            <span class="details">Ngày Sinh</span>
            <input type="date" name="ngaysinh" placeholder="Ngày sinh">
          </div>
          <div class="input-box">
            <span class="details">Địa Chỉ</span>
            <input type="text" name="diachi" placeholder="Địa chỉ">
          </div>
		  
          <div class="input-box">
            <span class="details">Lớp</span>
            <input type="text" name="lop" placeholder="Lớp">
          </div>
          <div class="input-box">
            <span class="details">Mã Khoa</span>
            <input type="text" name="makhoa" placeholder="Mã khoa">
          </div>
        </div>
		<div class="gender-details">
          <input type="radio" name="gioitinh" id="dot-1" value="Nam">
          <input type="radio" name="gioitinh" id="dot-2" value="Nữ">
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
          <input type="submit" name="submit" value="Tạo Mới">
        </div>
	</fieldset>
      </form>
    </div>
  </div>
		</body>
		</html>