<!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="style.css">
    </head>
        <body>
                <h1>BẢNG KẾT QUẢ</h1>
                    <div class="table">
                        <table class="table-striped">
                            <thead>
                                <tr>
                                <th class="col">STT</th>
                                <th class="col">MÃ KẾT QUẢ</th>
                                <th class="col">MÃ MÔN HỌC</th>
                                <th class="col">KỲ HỌC</th>
                                <th class="col">NĂM HỌC</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'config.php';

                    // read all row from database table
                    $sql = "SELECT * FROM KETQUA";
                    $result = $conn->query($sql);

                    if (!$result) {
                        die("Invalid query: " . $conn->error);
                    }

                    // read data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["makq"] . "</td>
                            <td>" . $row["mamh"] . "</td>
                            <td>" . $row["kihoc"] . "</td>
                            <td>" . $row["namhoc"] . "</td>
                        </tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
                </div>
        </body>
        </html>