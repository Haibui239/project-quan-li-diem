<!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="style.css">
    </head>
        <body>
                <h1>CHI TIẾT KẾT QUẢ</h1>
                    <div class="table">
                        <table class="table-striped">
                            <thead>
                                <tr>
                    <th class="col">STT</th>
                    <th class="col">MÃ KẾT QUẢ</th>
                    <th class="col">MÃ SINH VIÊN</th>
                    <th class="col">ĐIỂM LÝ THUYẾT</th>
                    <th class="col">ĐIỂM THỰC HÀNH</th>
                    <th class="col">NHẬN XÉT</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'config.php';

                    // read all row from database table
                    $sql = "SELECT * FROM CHITIETKETQUA";
                    $result = $conn->query($sql);

                    if (!$result) {
                        die("Invalid query: " . $conn->error);
                    }

                    // read data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["makq"] . "</td>
                            <td>" . $row["masv"] . "</td>
                            <td>" . $row["dlt"] . "</td>
                            <td>" . $row["dth"] . "</td>
                            <td>" . $row["nhanxet"] . "</td>
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