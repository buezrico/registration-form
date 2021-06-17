<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Registration Page</title>
    <link rel="stylesheet" href="reg.css">
</head>

<body class="reg-body">
    <?php include('header.php'); ?>
        <div class="student-registration">
            <div class="container ">
                <div class="inner row">
                    <div class="card shadow">
                        <div class="card-header text-center bg-info text-light">
                        <h6>STUDENT REGISTRATION FORM</h6>
                        </div>
                        <div class="card-body">
                            <form action="connect.php" method='post' class="row">

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
                <div class="d-flex justify-content-center mt-3">
                    <a href="home.php"><button class="btn btn-success">Go back</button></a>
                </div>
    </div>
        </div>
    </div>
</body>

</html>