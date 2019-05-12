<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class TestsTable extends Table
{
  public function initialize(array $config)
  {
    $this->setTable('tests');
    $this->addBehavior('Timestamp');
/*
    // Upload Plugin
    $this->addBehavior('Josegonzalez/Upload.Upload', [
        //最小機能(アップロードのみ)
        'face_picture' => [],
        'background_picture' => [],
        //ファイル名自動作成
        'face_picture' => [
          'nameCallback' => function ($data, $settings) {
            return uniqid().'-'.strtolower($data['name']);
          }
        ],
        'background_picture' => [
          'nameCallback' => function ($data, $settings) {
             return uniqid().'-'.strtolower($data['name']);
          }
        ],
        //レコード削除時にファイルを削除
        'face_picture' => ['keepFilesOnDelete' => false],
        'backgroud_picture' => ['keepFilesOnDelete' => false]
    ]);

*/
  }
/*
  public function validationDefault(Validator $validator)
  {

      $validator
          ->notEmpty('name')
          ->requirePresence('name')
          ->notEmpty('hello_text')
          ->requirePresence('hello_text')
          ->notEmpty('password')
          ->requirePresence('password')
          ->notEmpty('password_confirmation')
          ->requirePresence('password_confirmation');

      return $validator;
  }
*/
}

?>
