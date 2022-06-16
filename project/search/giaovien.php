<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>TÌM KIẾM GIÁO VIÊN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>TÌM KIẾM GIÁO VIÊN</h4>
                    </div>
                    <div class="card-body">
                        <div class="row" style="justify-content:center;">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>magv</th>
                                    <th>tengv</th>
                                    <th>mamon</th>
                                    <th>tenmon</th>
                                    <th>sodt</th>
                                    <th>makhoa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                
                                    $con = mysqli_connect("localhost","root","","thuctap");
                                    mysqli_set_charset($con, 'UTF8');
                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM giaovien WHERE CONCAT(magv,tengv,mamon,tenmon,sodt,makhoa) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['magv']; ?></td>
                                                    <td><?= $items['tengv']; ?></td>
                                                    <td><?= $items['mamon']; ?></td>
                                                    <td><?= $items['tenmon']; ?></td>
                                                    <td><?= $items['sodt']; ?></td>
                                                    <td><?= $items['makhoa']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>