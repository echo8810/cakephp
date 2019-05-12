<?php
  //<form method="post" action="/users/add">を作るForm create
  echo $this->Form->create('Tests', ['type' => 'file', 'url' => ['controller' => 'Tests', 'action' => 'add']]);
  echo $this->Form->control('name');


  
  #echo $this->Form->control('hello_text', ['rows' => '3']);
  echo $this->Form->control('face_picture', ['type' => 'file']);
  #echo $this->Form->button('Upload this picture?.')
  #echo $this->Form->control('background_picture', ['type' => 'file']);
  #echo $this->Form->button('Upload this picture?.')
  #echo $this->Form->control('password');
  #echo $this->Form->control('password_confirmation',['type' => 'password']);
  echo $this->Form->button(__('Save Account'));
  echo $this->Form->end();
?>
