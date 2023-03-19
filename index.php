<?php
// if (!isset($_GET['number1'])) {
//     $_GET['number1'] = 0;
// }
if (
    isset($_GET['number1']) && is_numeric($_GET['number1'])
    && isset($_GET['number2']) && is_numeric($_GET['number2'])
    && isset($_GET['operator'])
) {
    switch ($_GET['operator']) {
        case '+':
            $result = $_GET['number1'] + $_GET['number2'];
            break;
        case '-':
            $result = $_GET['number1'] - $_GET['number2'];
            break;
        case '*':
            $result = $_GET['number1'] * $_GET['number2'];
            break;
        case '/':
            if ($_GET['number2'] != 0) {
                $result = $_GET['number1'] / $_GET['number2'];
            } else {
                $result = 'Error: Division by zero';
            }
            break;
        case '**':
            $result = $_GET['number1'] ** $_GET['number2']; // Степень
            break;
        case '%':
            if ($_GET['number1'] != 0) {
                $result = $_GET['number2'] * 100 / $_GET['number1']; // Пропорция
            } else {
                $result = 'Error: Division by zero';
            }
            break;
    }
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
        <div class="row">
            <div class="col-12">
                <form action="">
                    <div class="mb-3">
                        <label for="number1" class="form-label">Number1</label>
                        <input type="number" class="form-control" id="number1" name="number1" value="<?= $_GET['number1'] ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="operator" class="form-label">Operator</label>
                        <select class="form-select" id="operator" name="operator">
                            <option <?= isset($_GET['operator']) && $_GET['operator'] == '+' ? 'selected' : '' ?>>+</option>
                            <option <?= isset($_GET['operator']) && $_GET['operator'] == '-' ? 'selected' : '' ?>>-</option>
                            <option <?= isset($_GET['operator']) && $_GET['operator'] == '*' ? 'selected' : '' ?>>*</option>
                            <option <?= isset($_GET['operator']) && $_GET['operator'] == '/' ? 'selected' : '' ?>>/</option>
                            <option <?= isset($_GET['operator']) && $_GET['operator'] == '%' ? 'selected' : '' ?>>%</option>
                            <option <?= isset($_GET['operator']) && $_GET['operator'] == '**' ? 'selected' : '' ?>>**</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="number2" class="form-label">Number2</label>
                        <input type="number" class="form-control" id="number2" name="number2" value="<?= $_GET['number2'] ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Result</button>
                    </div>
                    <?php if (isset($result)) : ?>
                        <div class="mb-3">
                            <label for="result" class="form-label">Result</label>
                            <input type="text" class="form-control" id="result" readonly value="<?= $result ?>">
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>