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
        <form action="upload.php" method="POST" enctype="multipart/form-data" class="w-25">
            <div class=" form-group my-4">

                <input type="text" placeholder="Product Name" name="ProductName" class="form-control">
            </div>
            <div class=" form-group my-4">

                <input type="number" placeholder="Price" min="0.00" max="10000.00" step="0.01" name="Price"
                    class="form-control">
            </div>
            <div class=" form-group my-4">

                <input type="number" placeholder="Qty" min="0" max="10000" name="Qty" class="form-control">
            </div>
            <div class=" form-group my-4">

                <input type="textarea" placeholder="Description" name="Productdes" class="form-control">
            </div>
            <div class=" form-group my-4">

                <input type="file" name="files" class="form-control">
            </div>
            <input class="btn btn-info" class="g-col-2" type="submit" name="submit" value="Upload">
            <button class="btn btn-danger" class="g-col-2" type="button" name="done">Done</button>

        </form>
    </div>



</body>

</html>