


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registaion form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="reg.css">
</head>

<body>
    <div>
        <?php
        if (isset($_POST["submit"])) {
            $username = $_POST["username"];
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
            $studentid = $_POST["StudentId"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["Repeatpassword"];
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $errors = array();
            // if (empty($username) or empty($firstname) or empty($lastname) or empty($email) or empty($password) or empty($passwordRepeat) or empty($StudentId)) {
            //     array_push($errors, "All fileds are required");
            // }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not vaild");
            }
            if (strlen($password) < 8) {
                array_push($errors, "Password must be at least 8 charactes long");
            }
            if ($password !== $passwordRepeat) {
                array_push($errors, "Password does not match");
            }
            require_once "regdatabase.php";
            $sql = "SELECT * FROM user WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount > 0) {
                array_push($errors, "Email already exists!");
            }
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            } else {
                $sql = "INSERT INTO user (username, firstname, lastname, email, password, studentid) VALUES ( ?, ?, ?, ?, ?, ?)"; //
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt, "ssssss", $username,$firstname,$lastname, $email,$passwordHash, $studentid);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                } else {
                    die("Something went wrong"); 
                }
            }
        }

        ?>
        <form action="registration.php" method="post">
            <h1> Registration</h1>
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="firstname" placeholder="First name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="lastname" placeholder="Last name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="StudentId" placeholder="StudentId">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="Repeatpassword" placeholder="Repeat Password">
            </div>

            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
        <div>
            <p>Already login? <a href="login.php">Click Here</a></p>
        </div>
    </div>
    </div>
</body>

</html>