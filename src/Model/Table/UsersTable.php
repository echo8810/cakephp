<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
  #public function initialize(array $config)
  #{
  #  $this->addBehavior('Timestamp');
  #}

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
}

?>
