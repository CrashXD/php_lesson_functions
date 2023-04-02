<?php
    $menu = scandir(__DIR__);
    unset($menu[0], $menu[1]);
    $except = [
        'header.php',
        'counter.php',
    ];
?>
<div class="row mb-3">
    <div class="col-12">
        <ul class="list-group">
            <?php foreach($menu as $item): ?>
                <?php if(is_file($item) && str_ends_with($item, '.php') && !in_array($item, $except)): ?>
                    <li class="list-group-item">
                        <a href="<?= $item ?>"><?= $item ?></a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</div>