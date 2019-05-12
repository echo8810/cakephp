<!-- File: src/Controller/UsersController.php -->

<!--<?php echo $this->Html->css(['test.css']); ?>-->

<h1>Tests</h1>

<?= $this->Html->link('Add Tests', ['action' => 'add']) ?>

<table>
    <tr>
        <th>name</th>
        <th>face_picture</th>
    </tr>

    <?php foreach ($tests as $test): ?>
    <tr>
        <td><?= $test->name ?></td>
        <td>
        <?=  $this->Html->image("$test->face_picture", array('alt' => '見せられないよ！')); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
