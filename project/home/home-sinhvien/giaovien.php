<!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
            <h1>DANH SÁCH GIÁO VIÊN</h1>
                <div class="table">
                    <table class="table-striped">
                        <thead>
                            <tr>
                            <th class="col">STT</th>
                            <th class="col">MÃ GIÁO VIÊN</th>
                            <th class="col">TÊN GIÁO VIÊN</th>
                            <th class="col">MÃ MÔN HỌC</th>
                            <th class="col">TÊN MÔN HỌC</th>
                            <th class="col">SỐ ĐIỆN THOẠI</th>
                            <th class="col">MÃ KHOA</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';

                // read all row from database table
                $sql = "SELECT * FROM GIAOVIEN";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid query: " . $conn->error);
                }

                // read data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["magv"] . "</td>
                        <td>" . $row["tengv"] . "</td>
                        <td>" . $row["mamon"] . "</td>
                        <td>" . $row["tenmon"] . "</td>
                        <td>" . $row["sodt"] . "</td>
                        <td>" .$row["makhoa"]. "</td>
                    </tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
            </div>
            </div>
    </body>
    </html>