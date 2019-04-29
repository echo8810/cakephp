<!-- File: src/Template/Articles/add.ctp -->

<h1>Add Article</h1>
<?php
  //<form method="post" action="/articles/add">を作るForm create
  echo $this->Form->create($article);
  echo $this->Form->control('title');
  echo $this->Form->control('body', ['rows' => '3']);
  echo $this->Form->button(__('Save Article'));
  echo $this->Form->end();
?>
