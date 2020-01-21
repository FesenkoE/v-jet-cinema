<p>Main page</p>
<?php foreach ($movies as $val) : ?>
    <h3><?= $val['name'] ?></h3>
    <p><?= $val['show_time'] ?></p>
    <hr>
<?php endforeach; ?>
