<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="ajax.js"></script>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <form action="handler.php" method="POST" id="numberForm">
                    <div class="mb-3">
                        <label for="number" class="form-label">Number</label>
                        <input type="number" class="form-control" id="number" name="number">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>Result: <span id="result"></span></h3>
            </div>
        </div>
    </div>
</body>

</html>