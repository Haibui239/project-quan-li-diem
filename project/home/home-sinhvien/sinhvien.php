    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>DANH SÁCH SINH VIÊN</h1>
            <div class="table">
                <table class="table-striped">
                    <thead>
                        <tr>
                            <th class="col">STT</th>
                            <th class="col">MÃ SV</th>
                            <th class="col">HỌ TÊN</th>
                            <th class="col">NGÀY SINH</th>
                            <th class="col">ĐỊA CHỈ</th>
                            <th class="col">GIỚI TÍNH</th>
                            <th class="col">LỚP</th>
                            <th class="col">MÃ KHOA</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                include 'config.php';

                // read all row from database table
                $sql = "SELECT * FROM SINHVIEN";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid query: " . $conn->error);
                }

                // read data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["masv"] . "</td>
                        <td>" . $row["hoten"] . "</td>
                        <td>" . $row["ngaysinh"] . "</td>
                        <td>" . $row["gioitinh"] . "</td>
                        <td>" . $row["diachi"] . "</td>
                        <td>" .$row["lop"]. "</td>
                        <td>" .$row["makhoa"] . "</td>
                    </tr>";
                }

                $conn->close();
                ?>
                </tbody>
                </table>
            </div>
        

    </body>

    </html>