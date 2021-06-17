<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Admin Page</title>
    <link rel="stylesheet" href="index.css">
</head>

<body class="">
    <?php include('header.php'); ?>
    <div class="content ">
        <div class="students shadow">
                <div class="card-header bg-info text-light">
                    <h6 class=''>STUDENTS LIST</h6>
                </div>
                <div class='buttons m-3'>
                    <a href="registration.php"><button class="btn btn-success">Add Student</button></a>
                    <button class="btn btn-primary "disabled>Remove Student</button>
                </div>
            <div class="student-list">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "trial";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT mat_no, first_name, last_name, email, phone_number, 'level', sex FROM students";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "
                    <table class='table'>
                        <tr>
                            <th>Mat No</th>
                            <th>Name</th>
                        </tr>";
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "
                        <tr>
                            <td>" . $row["mat_no"]. "</td>
                            <td>" . $row["first_name"]. " " . $row["last_name"]. "</td>
                            <td>" . $row["email"]. "</td>
                            <td>" . $row["phone_number"]. "</td>
                            <td>" . $row["level"]. "</td>
                            <td>" . $row["sex"]. "</td>
                        </tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No Student Found";
                }

                $conn->close();
                ?>

                
                </div>
            </div>



    
        </div>
    </div>
</body>

</html>