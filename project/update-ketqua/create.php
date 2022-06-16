<?php
    include "config.php";

if (isset($_POST['submit'])) {

  $masv = $_POST['makq'];
  $hoten = $_POST['mamh'];
  $ngaysinh = $_POST['kihoc'];
  $diachi = $_POST['namhoc'];

  //write sql query
  $sql = "INSERT INTO `ketqua`(`makq`, `mamh`, `kihoc`, `namhoc`) VALUES ('$makq','$mamh','$kihoc','$namhoc')";
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
            <span class="details">Mã Kết Quả</span>
            <input type="text" name="makq" placeholder="Mã Kết Quả">
			<input type="hidden" name="user_id" value="<?php echo $id; ?>">
          </div>
          <div class="input-box">
            <span class="details">Mã Môn Học</span>
            <input type="text" name="mamh" placeholder="Mã Môn Học">
          </div>
          <div class="input-box">
            <span class="details">Kì Học</span>
            <input type="text" name="kihoc" placeholder="Kì Học">
          </div>
          <div class="input-box">
            <span class="details">Năm Học</span>
            <input type="text" name="namhoc" placeholder="Năm Học">
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