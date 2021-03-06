<?php
namespace App\Controller;

class ArticlesController extends AppController
{
  public function initialize()
  {
    parent::initialize();

    $this->loadComponent('Flash'); //Include the FlashComponent
  }

  public function index()
  {
    $articles = $this->Articles->find('all');
    $this->set(compact('articles'));
  }

  //$idの値がなければnull、それ以外は引数の値を参照して渡す
  public function view($id = null)
  {
    $article = $this->Articles->get($id);
    $this->set(compact('article'));
  }

  public function add()
  {
    $article = $this->Articles->newEntity();
    if ($this->request->is('post')) {
        // 3.4.0 より前は $this->request->data() が使われました。
        $article = $this->Articles->patchEntity($article, $this->request->getData());
        if ($this->Articles->save($article)) {
            $this->Flash->success(__('Your article has been saved.'));
            return $this->redirect(['action' => 'index']);
          }
          #debug($article);
          $this->Flash->error(__('Unable to add your article.'));
      }
      $this->set('article', $article);
  }

  public function edit($id = null)
  {
    $article = $this->Articles->get($id);
    if ($this->request->is(['post', 'put'])) {
      // 3.4.0 より前は $this->request->data() が使われました。
      $this->Articles->patchEntity($article, $this->request->getData());
      if ($this->Articles->save($article)) {
          $this->Flash->success(__('You article has been updated.'));
          return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Unable to update your article.'));
    }

    $this->set('article', $article);
  }

  public function delete($id)
  {
    $this->request->allowMethod(['post','delete']);

    $article = $this->Articles->get($id);
    if ($this->Articles->delete($article)) {
      $this->Flash->success(__('The article with id: {0} has been deleted.', h($id)));
      return $this->redirect(['action' => 'index' ]);
    }
  }
}
?>
