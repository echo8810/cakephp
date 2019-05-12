<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use RuntimeException;

class UsersController extends AppController {

  #public $autoRender = false;

  public function initialize()
  {
    parent::initialize();

    $this->layout = false;
    $this->loadComponent('Flash'); //Include the FlashComponent

    $this->loadComponent('Imageuploader');
  }

  public function index() {
    $users = $this->Users->find('all');
    $this->set(compact('users',$users));
  }

  public function add()
  {
    $user = $this->Users->newEntity();
    if ($this->request->is('post','file')) {
      $uploader = $this->Imageuploader->upload();
      $user = $this->Users->patchEntity($user, $this->request->getData());
      $user['face_picture'] = $uploader;
        if ($this->Users->save($user)) {
            $this->Flash->success(__('Your Account has been saved.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Unable to add your Account.'));
    }
  }
}
