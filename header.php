<?php
    $array = scandir(__DIR__);
    unset($array[0], $array[1]);
?>
<div class="row mb-3">
    <div class="col-12">
        <ul class="list-group">
            <?php foreach($array as $item): ?>
                <?php if(is_file($item) && str_ends_with($item, '.php') && $item != 'header.php'): ?>
                    <li class="list-group-item">
                        <a href="<?= $item ?>"><?= $item ?></a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</div>