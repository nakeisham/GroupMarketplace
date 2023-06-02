<?php


if (isset($_POST['submit']) && isset($_FILES['files']) && isset($_POST['Price']) && isset($_POST['ProductName']) && isset($_POST['Productdes']) && isset($_POST['Qty'])) {

    // echo "<pre>";
    // print_r($_FILES['files']);
    // echo "</pre>";

    include "regdatabase.php";
    $targetDir = "img/";
    $statusMsg = '';
    $price = $_POST['Price'];
    $fileName = basename($_FILES["files"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    $productname = $_POST['ProductName'];
    $productdes = $_POST['Productdes'];
    $qty = $_POST['Qty'];

    if (isset($_POST['submit']) && !empty($_FILES['files']['name'])) {
        // Allow certain file formats
        $types = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (in_array($fileType, $types)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["files"]["tmp_name"], $targetFilePath)) {
                
                // Insert image file name into database
                
                                $insert = $conn->query("INSERT INTO product(image, productname, productQty, price, productdesc) 
                                VALUES('$fileName', '$productname', '$qty', '$price', '$productdes')");
         
                // $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('" . $fileName . "', NOW())");
                if ($insert) {
                    $statusMsg = "The file " . $fileName . " has been uploaded successfully.";

                    // Add the success message as a query parameter in the URL
                    header("Location: index.php?success=" . urlencode($statusMsg));
                    exit();
                } else {
                    $statusMsg = "File upload failed, please try again.";
                    header("Location: index.php?error=" . urlencode($statusMsg));
                    exit();
                }
            } else {
                $statusMsg = "Sorry, there was an error uploading your file.";
                header("Location: index.php?error=" . urlencode($statusMsg));
                exit();
            }
           
        } else {
            $statusMsg = "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.";
            header("Location: index.php?error=" . urlencode($statusMsg));
            exit();
        }
    } else {
        $statusMsg = "Please select a file to upload.";
        header("Location: index.php?error=" . urlencode($statusMsg));
        exit();
    }
   
}


?>