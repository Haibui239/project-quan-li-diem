<?php 
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM sinhvien";

//execute the query

$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html>
<head>
    
    <title>TÌM KIẾM SINH VIÊN</title>
    <!-- to make it looking good in using bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesv1.css?v=<?php echo time();?>">

</head>
<body>
<h1>Cập nhật sinh viên</h1>
<div style="width:80%;">
    <button class="btn btn-info">
        <a href="../home/capnhat.php" style="color:white;" >Home</a>
      </button>
    </div>
    <div class="table">     
        <table class="table-striped">
            <thead>
                <tr>
                    <th class="col">SỐ THỨ TỰ</th>
                    <th class="col">MÃ SINH VIÊN</th>
                    <th class="col">HỌ TÊN</th>
                    <th class="col">NGÀY SINH</th>
                    <th class="col">ĐỊA CHỈ</th>
                    <th class="col">GIỚI TÍNH</th>
                    <th class="col">LỚP</th>
                    <th class="col">MÃ KHOA</th>
                    <th class="col">TÙY CHỌN</th>


                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {

                      while ($row = $result->fetch_assoc()) {
                          ?>
                            <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['masv']; ?></td>
                    <td><?php echo $row['hoten']; ?></td>
                    <td><?php echo $row['ngaysinh']; ?></td>
                    <td><?php echo $row['diachi']; ?></td>
                    <td><?php echo $row['gioitinh']; ?></td>
                    <td><?php echo $row['lop']; ?></td>
                    <td><?php echo $row['makhoa']; ?></td>
                   	<td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>


              


                </tr>
               
                   <?php     
              
                      }
                  
                    
                    }
                ?>
           
            </tbody>
        </table>
    </div>
    
</body>
</html>