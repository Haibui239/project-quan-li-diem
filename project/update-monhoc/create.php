<?php
    include "config.php";

if (isset($_POST['submit'])) {

  $mamh = $_POST['mamh'];
  $tenmh = $_POST['tenmh'];
  $stlt = $_POST['stlt'];
  $stth = $_POST['stth'];
  $sglt = $_POST['sglt'];
  $sgth = $_POST['sgth'];
  $magv = $_POST['magv'];

  //write sql query
  $sql = "INSERT INTO `monhoc`(`mamh`, `tenmh`, `stlt`, `stth`, `sglt`, `sgth`, `magv`) VALUES ('$mamh','$tenmh','$stlt','$stth','$sglt','$sgth','$magv')";
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
            <span class="details">Mã Môn Học</span>
            <input type="text" name="mamh" placeholder="Mã Môn Học">
			<input type="hidden" name="user_id" value="<?php echo $id; ?>">
          </div>
          <div class="input-box">
            <span class="details">Tên Môn Học</span>
            <input type="text" name="tenmh" placeholder="Tên Môn Học">
          </div>
          <div class="input-box">
            <span class="details">Số Tiết Lý Thuyết</span>
            <input type="text" name="stlt" placeholder="Số Tiết Lý Thuyết">
          </div>
          <div class="input-box">
            <span class="details">Số Tiết Thực Hành</span>
            <input type="text" name="stth" placeholder="Số Tiết Thực Hành">
          </div>
		  
          <div class="input-box">
            <span class="details">Số Giờ Lý Thuyết</span>
            <input type="text" name="sglt" placeholder="Số Giờ Lý Thuyết">
          </div>
          <div class="input-box">
            <span class="details">Số Giờ Thực Hành</span>
            <input type="text" name="sgth" placeholder="Số Giờ Thực Hành">
          </div>
          <div class="input-box">
            <span class="details">Mã Giáo Viên</span>
            <input type="text" name="magv" placeholder="Mã Giáo Viên">
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