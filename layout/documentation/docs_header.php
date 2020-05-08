<div class="docs_header">
  <div class="res-container res-flex">
    <div class="toggle-index">
      <button class="res-transparent-btn res-txt-grey res-toggle-sidebar-btn" data-sidebar="docs_index">
        <i class="ri-menu-line"></i>
      </button>
    </div>
    <div class="res-col-11 title">
      <div class="top-side">
        <h2 class="res-txt-blue"><?php echo $doc->get_doc_title(); // Dynamic title ?></h2>
      </div>
      <div class="bottom-side res-flex">
        <a href="<?php echo $doc->get_prev_doc_link(); // Dynamic link ?>"><?php echo $dict['prev'] ?></a>
        <a href="<?php echo $doc->get_next_doc_link(); // Dynamic link ?>"><?php echo $dict['next'] ?></a>
      </div>
    </div>
  </div>
</div>
