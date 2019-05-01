<!-- File: src/Template/Users/add.ctp -->

<h1>Add User</h1>
<?php
  //<form method="post" action="/users/add">を作るForm create
  echo $this->Form->create($user);
  echo $this->Form->control('name');
  echo $this->Form->control('hello_text', ['rows' => '3']);
  echo $this->Form->input('UploadData.face_picture', array('type'=>'file'));
  echo $this->Form->button('Upload this picture?.')
  echo $this->Form->input('UploadData.background_picture', array('type'=>'file'));
  echo $this->Form->button('Upload this picture?.')
  echo $this->Form->control('password');
  echo $this->Form->control('password_confirmation');
  echo $this->Form->button(__('Save Account'));
  echo $this->Form->end();
?>
