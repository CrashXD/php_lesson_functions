<?php
    if (
        isset($_GET['string1'])
    ) {
        // $result = $_GET['string1'][0];
        // $result = strlen($_GET['string1']);
        // $result = mb_strlen($_GET['string1']);
        $string = str_replace(";", ",", $_GET['string1']);
        $array = explode(",", $string);
        foreach($array as $key => $item) {
            $array[$key] = trim($item);
        }
        // $array = array_reverse($array);
        // $result = implode("; ", $array);
        // $result = (integer)str_contains($_GET['string1'], 'Max');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <?php include('header.php'); ?>
        <div class="row">
            <div class="col-12">
                <form action="">
                    <div class="mb-3">
                        <label for="string1" class="form-label">String 1</label>
                        <!-- <input type="text" class="form-control" id="string1" name="string1" value="<?= $_GET['string1'] ?? '' ?>"> -->
                        <textarea class="form-control" id="string1" name="string1"><?= $_GET['string1'] ?? '' ?></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Result</button>
                    </div>
                    <?php if (isset($result)) : ?>
                        <div class="mb-3">
                            <label for="result" class="form-label">Result</label>
                            <!-- <input type="text" class="form-control" id="result" readonly value="<?= $result ?>"> -->
                            <textarea class="form-control" id="result"><?= $result ?></textarea>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($array)) : ?>
                        <pre><?php print_r($array); ?></pre>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>