<!-- File: src/Controller/UsersController.php -->

<h1>Users</h1>

<?= $this->Html->link('Add Users', ['action' => 'add']) ?>

<table>
    <tr>
        <th>name</th>
        <th>hello_text</th>
        <th>face_picture</th>
        <th>background_picture</th>
        <th>activated_status</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user->name ?></td>
        <td><?= $user->hello_text ?></td>
        <td><?= $user->face_picture ?></td>
        <td><?= $user->background_picture ?></td>
        <td><?= $user->activated_status ?></td>
<!--
*        <td>
*            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
*        </td>
-->
        <td>
            <?= $user->CREATED_TIME->format(DATE_RFC850) ?>
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
