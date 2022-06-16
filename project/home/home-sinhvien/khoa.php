<!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="style.css">
    </head>
        <body>
                <h1>KHOA</h1>
                    <div class="table">
                        <table class="table-striped">
                            <thead>
                                <tr>
                                <th class="col">STT</th>
                                <th class="col">MÃ KHOA</th>
                                <th class="col">TÊN KHOA</th>
                                <th class="col">MÃ GIÁO VIÊN</th>
                                <th class="col">SỐ ĐIỆN THOẠI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'config.php';

                    // read all row from database table
                    $sql = "SELECT * FROM KHOA";
                    $result = $conn->query($sql);

                    if (!$result) {
                        die("Invalid query: " . $conn->error);
                    }

                    // read data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["makhoa"] . "</td>
                            <td>" . $row["tenkhoa"] . "</td>
                            <td>" . $row["magv"] . "</td>
                            <td>" . $row["sdt"] . "</td>
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