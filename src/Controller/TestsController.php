<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

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
    $this->loadModel('Tests');
    $test = $this->Tests->newEntity();
    if ($this->request->is('post','file')) {
        //app_name/logs/error へエラー内容を吐き出す
        //$this->log($this->request->getData(),LOG_DEBUG);
        // 3.4.0 より前は $this->request->data() が使われました。
        $test = $this->Tests->patchEntity($test, $this->request->getData());
        //格納先の指定
        $dir = new Folder(WWW_ROOT.'upload_img', true, 0755);
        $info = pathinfo($test->face_picture["name"]);
        $newfilename = $info["filename"].'_'.time() . '.'. $info["extension"];
        move_uploaded_file($test->face_picture["tmp_name"], WWW_ROOT.'upload_img/' . $newfilename);
        $test->face_picture = '/upload_img/' . $newfilename;

        if ($this->Tests->save($test)) {
            $this->Flash->success(__('Your Account has been saved.'));
            return $this->redirect(['action' => 'index']);
        }

        $this->Flash->error(__('Unable to add your Account.'));
    }
  }

}
