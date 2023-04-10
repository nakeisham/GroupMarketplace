<?php 

require_once('./operation.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UFT-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Upload</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

<!-- <style>
    @import url('https://fonts.googleapis.com/css2?family=Tourney:ital,wght@1,200&display=swap');
</style> -->

</head>

<body>


    <h1 class="text-center my-3">Upload</h1>
    <div class="conatiner d-flex justify-content-center">
        <form action="" class="w-25">
            <!-- <div class=" form-group my-4">
                <label for="ProductName"></label>
                <input type="text" placeholder="Product Name" name="ProductName" class="form-control">
            </div>
            <div class=" form-group my-4">
                <label for="Price"> </label>
                <input type="number" placeholder="Price" min="0.00" max="10000.00" step="0.01" name="Price" class="form-control">
            </div>
            <div class=" form-group my-4">
                <label for="Productdes"></label >
                <input type="textarea"  placeholder="Description" name="Productdes" class="form-control">
            </div> -->

            <?php
            input("ProductName","","text",'Product Name')
            ?>
             <?php
            input("Price","","number",'Price')
            ?>
             <?php
            input("Productdes","","textarea",'Description')
            ?>
             <?php
            input("file","","file","")
            ?>
            <button class="btn btn-dark" type = "button" name="submit">Submit</button>

        </form>
    </div>










    <script src="script.js"></script>
    <!-- link to javascript file -->
</body>

</html>