<!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="style.css">
    </head>
<body>
        <h1>MÔN HỌC</h1>
            <div class="table">
                <table class="table-striped">
                    <thead>
                        <tr>
				<th class="col">STT</th>
				<th class="col">MÃ MÔN HỌC</th>
				<th class="col">TÊN MÔN HỌC</th>
				<th class="col">SỐ TIẾT LÝ THUYẾT</th>
				<th class="col">SỐ TIẾT THỰC HÀNH</th>
				<th class="col">SỐ GIỜ LÝ THUYẾT</th>
				<th class="col">SỐ GIỜ THỰC HÀNH</th>
                <th class="col">MÃ GIÁO VIÊN</th>
			</tr>
		</thead>

        <tbody>
            <?php
            include 'config.php';

            // read all row from database table
			$sql = "SELECT * FROM MONHOC";
			$result = $conn->query($sql);

            if (!$result) {
				die("Invalid query: " . $conn->error);
			}

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["mamh"] . "</td>
                    <td>" . $row["tenmh"] . "</td>
                    <td>" . $row["stlt"] . "</td>
                    <td>" . $row["stth"] . "</td>
                    <td>" . $row["sglt"] . "</td>
                    <td>" .$row["sgth"]. "</td>
                    <td>" .$row["magv"] . "</td>
                </tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
        </div>
    
</body>
</html>