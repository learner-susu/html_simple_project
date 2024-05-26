<?php
include_once("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">


    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row ">
            <div class="col-md-6 panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Registration Form</h1>
                </div>
                <div class=" panel-body">
                    <form action="connect.php" method="post">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName">
                        </div>
                        
                        <div class="form-group">
                            <label for="firstName">Gender</label>
                            <div>
                            <label for="male" class="radio-inline"><input type="radio" name="gender" value="m" id="male">Male</label>
                            <label for="female" class="radio-inline"><input type="radio" name="gender" value="f" id="female">Female</label>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email"/>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" name="password"/>
                        </div>
                        <div class="form-group">
                            <label for="number">Phone Number</label>
                            <input type="text" class="form-control" id="number" name="number"/>
                        </div>
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
                
            </div>
            <div class="col-md-6">
                <h2>Records in our Database</h2>
                
                <table>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>
                    <?php
                    $query_read = "SELECT firstNAme, lastName, gender, email, number from `registration`;";
                    // echo $query_read;
                    $res = $conn->query($query_read);
                    if($res){
                        echo "Returned rows are: ". $res->num_rows;

                        while($row = $res->fetch_assoc()) 
                        { 
                    ?>
                        <tr>
                            <td><?php echo $row["firstNAme"]; ?></td> 
                            <td><?php echo $row["lastName"]; ?></td> 
                            <td><?php echo $row["gender"]; ?></td> 
                            <td><?php echo $row["number"]; ?></td> 
                            <td><?php echo $row["email"]; ?></td> 
                            
                        </tr>
                            <?php





                        }                         
                    }
                    ?>
                   
                </table>
            </div>

            <h2>
            <a href="./Age_calcutater/index.html">Age Calculator</a>
            </h2>
        </div>
        <div class=" panel-footer text-right">
                     <small>&copy; LearnerSusu</small>
                </div>
    </div>
</body>
</html>