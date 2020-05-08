<?php

class Examples {

  private $examples; // Array

  public function __construct($path) {
    $this->examples = scandir($path);
  }

  // Get Examples Files Into Array
  public function get_examples() {
    return $this->examples;
  }

  // Check If The Important Files Exists In The Example Folder
  public function check_example_files($example) {
    if( file_exists('examples/'. $example .'/screenshot.PNG') &&
        file_exists('examples/'. $example .'/download.rar')   &&
        file_exists('examples/'. $example .'/index.html')
      ) {
        return true;
      } else {
        return false;
      }
  }

  // Get The Title
  public function get_example_title($example) {
    echo str_replace('_' ,' ' ,$example);
  }

  // Get The Picture
  public function get_example_picture($example) {
    echo '<img class="res-img" src="examples/'. $example .'/screenshot.PNG" alt="">';
  }

  // Get demo Link
  public function get_example_demo_link($example) {
    echo '<a href="examples/'. $example .'" target="_blank" class="res-light-green-btn res-muted-link res-txt-white shadow">
            <i class="ri-slideshow-3-line"></i>
            Demo
          </a>';
  }

  // Get Download Link
  public function get_example_download_link($example) {
    echo '<a href="examples/'. $example .'/download.rar" class="res-purple-btn res-muted-link res-txt-white shadow">
            <i class="ri-download-line"></i>
            Download
          </a>';
  }
  
}