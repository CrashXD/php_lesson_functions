<?php

// $user = [
//     "name" => "John",
//     "age" => 53,
//     "position" => "admin",
//     "email" => "John@mail.ru",
//     "is_admin" => true,
// ];

// $json = json_encode($user);
// echo $json;

// $arr = json_decode($json, true);

// echo '<pre>';
// print_r($arr);
// echo '</pre>';

// $arr = json_decode($json);

// echo '<pre>';
// print_r($arr);
// echo '</pre>';

if (isset($_POST['comment']) && isset($_POST['name'])) {
    $comment = [
        'time' => time(),
        'name' => $_POST['name'],
        'comment' => $_POST['comment'],
    ];

    if (!file_exists('comments_json.txt')) {
        file_put_contents('comments_json.txt', json_encode([]));
    }

    $json_comments = file_get_contents('comments_json.txt');
    $comments = json_decode($json_comments, true);

    $comments[] = $comment;

    $json_comments = json_encode($comments);

    file_put_contents('comments_json.txt', $json_comments);
}

if (file_exists('comments_json.txt')) {
    $json_comments = file_get_contents('comments_json.txt');
    $comments = json_decode($json_comments, true);
} else {
    $comments = [];
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
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="comment" class="form-label">Comment</label>
                        <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <?php foreach($comments as $comment): ?>
                    <?php if($comment): ?>
                        <div class="alert alert-success">
                            <small><?= date("d.m.Y H:i:s", $comment['time']) ?></small><br>
                            <b><?= $comment['name'] ?></b><br>
                            <?= $comment['comment'] ?>
                        </div>
                    <?php endif; ?> 
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>