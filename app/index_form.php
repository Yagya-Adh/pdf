<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <div class="container">
        <div class="card mt-4">

            <div class="card-header">
                <span class="fs-5 fw-bold">Add Items</span>
            </div>
            <div class="card-body d-flex justify-content-around d-lg-6 d-md-7">


                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Item Name" />
                </div>

                <div class="col-2">
                    <input type="text" class="form-control" placeholder="Item Price" />
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" placeholder="Item Quantity" />
                </div>


                <input type="button" class="btn btn-success" value="Add More" />

            </div>
            <div class="card-footer">
                <button class="btn btn-primary w-25">Add</button>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>