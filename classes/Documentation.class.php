<?php

/**
 * This Class Allows You To Manage Documentation Papers By Setting Their Titles
  & prev/next Documentation Paper Links
 
 * To Work With That Class, You Should Instatiate From it At The Beggining of Your Doc Paper
  After Calling The Control File, & Give it Enough Args To Work
    ar_title  => The Arabic Title Of This Doc Paper
    en_title  => The English Title Of This Doc Paper
    next      => The Link Of The Next Doc Paper
    prev      => The Link Of The Previous Doc Paper

*/

class Documentation {
  private $title;       // The Title of This Doc Paper
  private $next;        // The Next Doc Paper link
  private $previous;    // The Previous Doc Paper link

  public function __construct($ar_title, $en_title, $next, $prev) {
    
    // Check The Chosen Language
    switch ($_SESSION['language']) {
      case 'ar':
        $this->title = $ar_title;
        break;
      case 'en':
        $this->title = $en_title;
        break;

      default:
        $this->title = $ar_title;
        break;
    }

    $this->next     = 'http://localhost/www.responsive-me.com/documentation/' . $next;
    $this->previous = 'http://localhost/www.responsive-me.com/documentation/' . $prev;
  }

  // return The Title Of This Doc Paper
  public function get_doc_title() {
    return $this->title;
  }

  // return The Next Doc Paper link
  public function get_next_doc_link() {
    return $this->next;
  }

  // return The Previous Doc Paper link
  public function get_prev_doc_link() {
    return $this->previous;
  }

  /**
   * This Function Allows You To Generate Dynamic Documentation Index
   * By Giving The Title & The Link If There is No Children <?php $doc->generate_index(arabic title, english title, link) ?>
   * But If There Is Children It Will Be <?php $doc->generate_index(arabic title, english title, '', true, ['ar' => ['Child' => 'link'], 'en' => 'Child' => 'link']) ?>
   * To Grasp It Go To Documentation & Toggle index side bar
   * The Blue Link Has No Children, But The Others -grey- Has Children Which Are Shown When You Click Them
   *
   * @param string $ar_title, $en_title
   * @param string $link
   * @param boolean $has_children
   * @param array $children
   */
  public function generate_index($ar_title, $en_title, $link = '', $has_children = false, $children = []) {

    $link = 'http://localhost/www.responsive-me.com/documentation/' . $link;

    if($has_children) {
        switch ($_SESSION['language']) {
          case 'ar':
            $title = $ar_title;
            $children = $children['ar'];
            break;

          case 'en':
            $title = $en_title;
            $children = $children['en'];
            break;
          
          default:
            $title = $ar_title;
            $children = $children['ar'];
            break;
        }
        $html = '<div class="section">';
          $html .= '<div class="acc-header">' . $title . '</div>';
          $html .= '<div class="acc-content">';
            $html .= '<ul class="res-hoverable-list">';
              foreach ($children as $child => $child_link) {
                $child_link = 'http://localhost/www.responsive-me.com/documentation/' . $child_link;
                $html .= '<a href="' . $child_link . '" class="list-item">' . $child . '</a>';
              }
            $html .= '</ul>';
          $html .= '</div>';
        $html .= '</div>';
    } else {
      switch ($_SESSION['language']) {
        case 'ar':
          $title = $ar_title;
          break;

        case 'en':
          $title = $en_title;
          break;
        
        default:
          $title = $ar_title;
          break;
      }
      $html  = '<div class="section">';
        $html .= '<a href="' . $link . '" class="acc-header">' . $title . '</a>';
      $html .= '</div>';
    }

    // Return Generated Index
    return $html;

  }

}
