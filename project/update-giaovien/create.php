<?php
    include "config.php";

if (isset($_POST['submit'])) {

  $magv = $_POST['magv'];
  $tengv = $_POST['tengv'];
  $mamon = $_POST['mamon'];
  $tenmon = $_POST['tenmon'];
  $sodt = $_POST['sodt'];
  $makhoa = $_POST['makhoa'];

  //write sql query
  $sql = "INSERT INTO `giaovien`(`magv`, `tengv`, `mamon`, `tenmon`, `sodt`, `makhoa`) VALUES ('$magv','$tengv','$mamon','$tenmon','$sodt','$makhoa')";
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
            <span class="details">Mã Giáo Viên</span>
            <input type="text" name="magv" placeholder="Mã Giáo Viên">
			<input type="hidden" name="user_id" value="<?php echo $id; ?>">
          </div>
          <div class="input-box">
            <span class="details">Tên Giáo Viên</span>
            <input type="text" name="tengv" placeholder="Tên Giáo Viên">
          </div>
          <div class="input-box">
            <span class="details">Mã Môn</span>
            <input type="text" name="mamon" placeholder="Mã Môn">
          </div>
          <div class="input-box">
            <span class="details">Tên Môn</span>
            <input type="text" name="tenmon" placeholder="Tên Môn">
          </div>
		  
          <div class="input-box">
            <span class="details">Số Điện Thoại</span>
            <input type="tel" name="sodt" placeholder="Số Điện Thoại">
          </div>
          <div class="input-box">
            <span class="details">Mã Khoa</span>
            <input type="text" name="makhoa" placeholder="Mã khoa">
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