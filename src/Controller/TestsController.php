<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use RuntimeException;

class TestsController extends AppController {

  #public $autoRender = false;

  public function initialize()
  {
    parent::initialize();

    $this->loadComponent('Flash'); //Include the FlashComponent
  }

  public function index() {
    $tests = $this->Tests->find('all');
    $this->set(compact('tests',$tests));
  }

  public function add()
  {
    $user = $this->Tests->newEntity();
    if ($this->request->is('post','file')) {
        //app_name/logs/error へエラー内容を吐き出す
        $this->log($this->request->getData(),LOG_DEBUG);
        //格納先の指定
        // 3.4.0 より前は $this->request->data() が使われました。
        $user = $this->Tests->patchEntity($test, $this->request->getData());
        if ($this->Tests->save($test)) {
            $this->Flash->success(__('Your Account has been saved.'));
            return $this->redirect(['action' => 'index']);
        }
        #debug($article);
        $this->Flash->error(__('Unable to add your Account.'));
    }
  }

}
