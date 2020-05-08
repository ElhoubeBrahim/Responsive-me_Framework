<?php

/**
 * This Class Allows You To Get The Choosen Language & Store it Into a Session Variable,
  & Get The File Correspond The Choosen Language
 */

class Language {
  private $language;
  private $file;
  private $direction;

  public function __construct() {
    // get The Language
    if(!isset($_SESSION['language'])) {

      $_SESSION['language'] = 'ar';

    } else if(isset($_GET['language']) && !empty($_GET['language'])) {

      if($_GET['language'] == 'en') {

        $_SESSION['language'] = 'en';

      } else {
        $_SESSION['language'] = 'ar';
      }
    }

    $this->language = $_SESSION['language'];
  }

  public function get_language() {
    return $this->language;
  }

  public function get_language_file() {
    switch ($this->language) {
      case 'ar':
        $this->file = 'ar.php';
        break;

      case 'en':
        $this->file = 'en.php';
        break;
      
      default:
        $this->file = 'ar.php';
        break;
    }

    return $this->file;
  }

  public function get_document_direction() {
    switch ($this->language) {
      case 'ar':
        $this->dir = 'rtl';
        break;

      case 'en':
        $this->dir = 'ltr';
        break;
      
      default:
        $this->dir = 'rtl';
        break;
    }

    return $this->dir;
  }
}
