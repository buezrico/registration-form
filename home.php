<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login Page</title>
    <link rel="stylesheet" href="index.css">
</head>

<body class="">
    <div class="body-title">
        <small class="text-uppercase"><strong>Group 12 Admin Dashboard</strong></small>
    </div>
    <div class="body-nav">
        <ul class="nav">
            <li class="active"><a>Admin</a></li>
            <li><a>Student</a></li>
            <li><a>Courses</a></li>
            <li><a>Results</a></li>
        </ul>
    </div>
    <div class="content ">
        <div class="students card shadow">
                <div class="card-header bg-info text-light">
                    <h4 class=''>STUDENTS LIST</h4>
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

                $sql = "SELECT mat_no, first_name, last_name FROM students";
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
                        echo "<tr><td>" . $row["mat_no"]. "</td><td>" . $row["first_name"]. " " . $row["last_name"]. "</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>
                </div>
            </div>


        <?php
    $mat_no = $_POST['mat_no'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $level = $_POST['level'];
    $sex = $_POST['sex'];

     $conn2 = new mysqli('localhost', 'root', '', 'trial');
     if ($conn2->connect_error){
         die('Connection Failed : '.$conn2->connect_error);
     }else{
         $stmt = $conn2->prepare("insert into students(mat_no, first_name, last_name, email, phone_number, level, sex) values(?,?,?,?,?,?,?)"); 
         $stmt->bind_param("ssssiis", $mat_no, $first_name, $last_name, $email, $phone_number, $level, $sex);
         $stmt->execute();
        //  echo 'YOU HAVE SUCCESSFULLY REGISTERED '. $first_name . ' AS A STUDENT, Go back and Refresh to view Students List View Student List';
        // echo confirm("You have created a new batch");
        $conn2->close();
        $stmt->close();
     }
?>


        <div class="student-registration">
            <div class="container px-5">
        <div class="row">
            <div class="card shadow">
                <div class="card-header text-center bg-info text-light w-100">
                   <h4>STUDENT REGISTRATION FORM</h2>
                </div>
                <div class="card-body">
                    <form action="home.php" method='post' class="row">

                        <div class="form-group mb-3 col-md-4">
                            <label for='mat_no'>Mat No</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">DE</span>
                                <input type="text" class="form-control" placeholder="0000/1234" aria-label="mat_no" id='mat_no' name='mat_no'
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>

                        <div class="form-group mb-3 col-md-4">
                            <label for='first_name'>First Name</label>
                            <input type="text" id='first_name' class="form-control" name=first_name required/>
                        </div>

                        <div class="form-group mb-3 col-md-4">
                            <label for='last_name'>Last Name</label>
                            <input type="text" id='last_name' class="form-control" name=last_name required />
                        </div>

                       

                        <div class="form-group mb-3 col-md-12">
                            <label for='email'>Email Address</label>
                            <input type="text" id='email' class="form-control" name=email required />
                        </div>

                        

                        <div class="form-group mb-3 col-md-6">
                            <label for='phone_number'>Phone Number</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">+234</span>
                                <input type="tel" class="form-control" placeholder="81234567890" name='phone_number' aria-label="phone_number" id='phone_number'
                                    aria-describedby="basic-addon1">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="level" class="">Level</label>
                            <select id="level" class="form-select" name="level">
                                <option selected>Choose level...</option>
                                <option>100</option>
                                <option>200</option>
                                <option>300</option>
                                <option>400</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label for='male' class='male'><input class='' type="radio" id='male'  name='sex' value="m"/>Male</label>
                            <label for='female' class=''><input type="radio" id='female'  name='sex' value="f"/>Female</label>
                        </div>
                        <input type="submit" class="btn btn-primary mb-3 w-100" value="Sign Up">
                    </form>
                </div>
                <div class="card-footer text-center">
                    <small>
                        &copy; Group 12 CMS 445
                    </small>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</body>

</html>