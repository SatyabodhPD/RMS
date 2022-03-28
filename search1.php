<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Search_info</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">            
                <div class="card mt-4">
                    <div class="card-header">
                        <h4> Search box  </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
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
                                
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>UploadCV</th>
                                <th>EmploymentDesired</th>
                                <th>Currentlyemployes</th>
                                <th>Startdate</th>
                                <th>Chooseskills</th>
                                <th>NoticePeriod</th>
                                <th>CurrentCTC</th>
                                <th>ExpectedCTC</th>
                                <th>Availability</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $con = mysqli_connect("localhost","root","","user registration");
                            if(isset($_GET['search']))
                            {
                                $filtervalues = $_GET['search'];
                                $query = "SELECT * FROM users_information WHERE CONCAT(FirstName,MiddleName,LastName,Email,UploadCv,EmploymentDesired,currentlyemployes,Startdate,Chooseskills,NoticePeriod,CurrentCTC,ExpectedCTC,Availability) LIKE '%$filtervalues%' ";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $items)
                                    {
                                        ?>
                                        <tr>
                                            
                                            <td><?= $items['FirstName']; ?></td>
                                            <td><?= $items['MiddleName']; ?></td>
                                            <td><?= $items['LastName']; ?></td>
                                            <td><?= $items['Email']; ?></td>
                                            <td><?= $items['UploadCv']; ?></td>
                                            <td><?= $items['EmploymentDesired']; ?></td>
                                            <td><?= $items['currentlyemployes']; ?></td>
                                            <td><?= $items['Startdate']; ?></td>
                                            <td><?= $items['Chooseskills']; ?></td>
                                            <td><?= $items['NoticePeriod']; ?></td>
                                            <td><?= $items['CurrentCTC']; ?></td>
                                            <td><?= $items['ExpectedCTC']; ?></td>
                                            <td><?= $items['Availability']; ?></td>
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


