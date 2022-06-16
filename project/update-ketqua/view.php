<?php 
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM ketqua";

//execute the query

$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html>
<head>
    
    <title>TÌM KIẾM KẾT QUẢ</title>
    <!-- to make it looking good in using bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylekq1.css?v=<?php echo time();?>">

</head>
<body>
<h1>CẬP NHẬT KẾT QUẢ SINH VIÊN</h1>
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
                    <th class="col">MÃ KẾT QUẢ</th>
                    <th class="col">MÃ MÔN HỌC</th>
                    <th class="col">KÌ HỌC</th>
                    <th class="col">NĂM HỌC</th>
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
                    <td><?php echo $row['makq']; ?></td>
                    <td><?php echo $row['mamh']; ?></td>
                    <td><?php echo $row['kihoc']; ?></td>
                    <td><?php echo $row['namhoc']; ?></td>
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