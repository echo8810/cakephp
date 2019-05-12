<?php

ini_set('display_errors', 1);
define('MAX_FILE_SIZE', 1 * 1024 * 1024); //1MB
define('THUMBNAIL_WIDTH', 400);

if(!function_exists('imagecreatetruecolor')){
  echo 'GD not install';
  exit;
}
?>

<?php
  //<form method="post" action="/users/add">を作るForm create
  echo $this->Form->create('User', ['type' => 'file', 'url' => ['controller' => 'Users', 'action' => 'add']]);
  echo $this->Form->control('name');
  echo $this->Form->control('hello_text', ['rows' => '3']);
  echo $this->Form->hidden('MAX_FILE_SIZE',['value' => MAX_FILE_SIZE]);
  echo $this->Form->control('face_picture', ['type' => 'file']);
  #echo $this->Form->button('Upload this picture?.')
  #echo $this->Form->control('background_picture', ['type' => 'file']);
  #echo $this->Form->button('Upload this picture?.')
  echo $this->Form->control('password');
  echo $this->Form->control('password_confirmation',['type' => 'password']);
  echo $this->Form->button(__('Save Account'));
  echo $this->Form->end();
?>
