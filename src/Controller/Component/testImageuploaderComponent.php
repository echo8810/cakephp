<?php
namespace App\Controller\Component;
namespace App\Error;

use Cake\Controller\Component;
use Cake\Error\ExceptionRenderer;

class ImageuploaderComponent extends Component {

  public function upload() {
    try {
      //error check
      $this->_validateupload;
      //type check
      //save
      //create thumnail
    } catch (\Exception $e) {
      echo $e->getMessage();
      exit;
    }
    //redirect
    header('Location: http://' . $_SERVER['HTTP_HOST']);
    exit;
  }

  private function _validateupload (){
    var_dump($_FILES);
    exit;

  }
}

 ?>
