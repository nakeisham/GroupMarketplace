<?php


if (isset($_POST['submit']) && isset($_FILES['files']) && isset($_POST['Price']) && isset($_POST['ProductName']) && isset($_POST['Productdes']) && isset($_POST['Qty'])) {

    echo "<pre>";
    print_r($_FILES['files']);
    echo "</pre>";

    include "regdatabase.php";
    $price = $_POST['Price'];
    $productname = $_POST['ProductName'];
    $productdes = $_POST['Productdes'];
    $qty = $_POST['Qty'];
    $img_name = $_FILES['files']['name'];
    $img_size = $_FILES['files']['size'];
    $tmp_name = $_FILES['files']['tmp_name'];
    $error = $_FILES['files']['error'];
    $success = $_FILES['files']['success'];

    if ($error === 0) {
        if ($img_size > 125000) {
            $em = "Sorry, your file is too large.";
            header("Location: index.php?error=$em");
        } else {

            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert into Database
                $sql = "INSERT INTO product(img,productname,qty,price,productdesc) 
    		        VALUES('$new_img_name',$productname,$qty,$price,$productdes)";
                mysqli_query($conn, $sql);
                $su = "files has been uploaded";
                header("Location: index.php?success=$su");

            } else {
                $em = "You can't upload files of this type";
                header("Location: index.php?error=$em");
            }
        }
    } else {
        $em = "unknown error occurred!";
        header("Location: index.php?error=$em");
    }

} else {
    header("Location: index.php");
}

// ?>