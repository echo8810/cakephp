<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * Imageuploader component
 */

define('IMAGES_DIR', WWW_ROOT . 'upload_img');
define('THUMBNAIL_DIR', WWW_ROOT . 'upload_img');

class ImageuploaderComponent extends Component
{
  private $_imageFileName;

  public function upload() {
    try {
      //error check
      $this->_validateUpload();
      //type check
      $ext = $this->_validateImageType();
      //var_dump($ext);
      //save
      $getSavePath = $this->_save($ext);
      //create thumnail
    } catch (\Exception $e) {
      echo $e->getMessage();
      exit;
    }
    //redirect
    #header('Location: http://' . $_SERVER['HTTP_HOST' . '/index']);
    #exit;
    return $getSavePath;
  }

  private function _validateUpload() {
    //var_dump($_FILES);
    //exit;

    if(!isset($_FILES['face_picture']) || !isset($_FILES['face_picture']['error'])) {
      throw new \Exception("Upload Error!");

      switch ($_FILES['image']['error']) {
        case UPLOAD_ERR_OK:
          return true;
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
          throw new \Exception("File too large!");
        default:
          throw new \Exception("ERROR!");
      }
    }
  }

  private function _validateImageType(){
    $imageType = exif_imagetype($_FILES['face_picture']['tmp_name']);
    switch ($imageType) {
      case IMAGETYPE_GIF:
        return 'gif';
      case IMAGETYPE_JPEG:
        return 'jpeg';
      case IMAGETYPE_PNG:
        return 'png';
      default:
        throw new \Exception("PNG/JPEG/GIF only!");
    }
  }

  private function _save($ext){
      $this->_imageFileName = sprintf(
         '%s_%s.%s',
         time(),
         sha1(uniqid(mt_rand(),true)),
         $ext
      );
      $savePath = IMAGES_DIR . '/' . $this->_imageFileName;
      $res = move_uploaded_file($_FILES['face_picture']['tmp_name'],$savePath);
      if($res === false){
        throw new \Exception('Could not upload!');
      }
      return $savePath;
  }
}


?>
