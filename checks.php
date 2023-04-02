<?php
$array = $_GET;
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
                    <h3>Position:</h3>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="position[]" value="student" id="position_student" <?= isset($_GET['position']) && in_array('student', $_GET['position']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="position_student">
                            Student
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="position[]" value="worker" id="position_worker" <?= isset($_GET['position']) && in_array('worker', $_GET['position']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="position_worker">
                            Worker
                        </label>
                    </div>
                    <!-- <h3>Position:</h3>
                    <div class="mb-3">
                        <select class="form-select" multiple name="position[]">
                            <option value="student">Student</option>
                            <option value="worker">Worker</option>
                        </select>
                    </div> -->
                    <h3>Gender:</h3>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="gender" value="male" id="male" <?= isset($_GET['gender']) && $_GET["gender"] == 'male' ? "checked" : "" ?>>
                        <label class="form-check-label" for="male">
                            Male
                        </label>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="gender" value="female" id="female" <?= isset($_GET['gender']) && $_GET["gender"] == 'female' ? "checked" : "" ?>>
                        <label class="form-check-label" for="female">
                            Female
                        </label>
                    </div>
                    <!-- <h3>Gender:</h3>
                    <div class="mb-3">
                        <select class="form-select" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div> -->
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