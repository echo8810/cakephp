<!-- File: src/Controller/UsersController.php -->

<!--<?php echo $this->Html->css(['test.css']); ?>-->

<h1>Tests</h1>

<?= $this->Html->link('Add Tests', ['action' => 'add']) ?>

<table>
    <tr>
        <th>name</th>
        <th>hello_text</th>
        <th>face_picture</th>
        <th>background_picture</th>
        <th>activated_status</th>
    </tr>

    <?php foreach ($tests as $test): ?>
    <tr>
        <td><?= $test->name ?></td>
        <td><?= $test->hello_text ?></td>
        <td><?= $test->face_picture ?>
        <?=  $this->Html->image($test->face_picture, array('alt' => '見せられないよ！')); ?>
        </td>
        <td><?= $test->background_picture ?></td>
        <td><?= $test->activated_status ?></td>
<!--
*        <td>
*            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
*        </td>
-->
        <td>
            <?= $test->CREATED_TIME->format(DATE_RFC850) ?>
        </td>
<!--
*        <td>
*            <?= $this->Html->link('Edit', ['action' => 'edit', $user->id]) ?>
*        </td>
-->
<!--
*        <td>
           <?= $this->Form->postLink('Delete',['action' => 'delete', $article->id],['confirm' => 'Are you sure?'])?>
        </td>
-->
    </tr>
    <?php endforeach; ?>
</table>
