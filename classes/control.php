<?php

// Start Session To Store Language Variable
session_start();

// You Will Need It To Link Libruaries & css/js Files
$website_url = 'http://localhost/www.responsive-me.com/';

// Get The Absolute Path of Important Directories In Website
$path_to = array(
  'root'      => $_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/',
  'classes'   => $_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/classes/',
  'languages' => $_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/languages/',
  'layout'    => $_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/layout/',
  'examples'  => $_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com/examples/'
);

// Get All Classes
spl_autoload_register(function ($class) {
  require $class . '.class.php';
});

// Instantiate From The Language Detected Class
$lang = new Language();

// Once Language Is Detected, Get The Language File => (ar.php || en.php)
$lang_file = $lang->get_language_file();
require ($path_to['languages'] . $lang_file);
