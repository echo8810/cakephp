<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

class SqlController extends AppController {

  function index() {
      //    SQL文
    $sql = "SELECT * FROM users";
    //    DB接続を取得
    $connection = ConnectionManager::get('default');
    //    SQLのログ出力を有効化
    $connection->logQueries(true);
    //    SQL文の設定
    $data = $connection->query($sql)->fetchAll('assoc');
    // SQLのログ出力を無効化
    $connection->logQueries(false);
    //    出力結果のデータを渡す
    $this->set('data', $data);
  }

}
