<div class="about part">
  <h2 class="title res-txt-blue"><?php echo $the_team['title']; ?></h2>
  <div class="res-container">
    <div class="member res-row">
      <div class="image res-col sm-3">
        <img src="assets/images/me.jpg" alt="" class="res-circle-img res-thumbnail-img">
      </div>
      <div class="info res-col sm-9 res-bg-white">
        <div class="me res-row">
          <h6 class="res-txt-light-blue"><?php echo $the_team['my_name']; ?></h6>
          <ul class="social res-inline-list">
            <li>
              <a href="https://www.facebook.com/elhoube.brahim" class="res-muted-link">
                <i class="ri-facebook-fill"></i>
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/elhoube.brahim" class="res-muted-link">
                <i class="ri-github-fill"></i>
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/elhoube.brahim" class="res-muted-link">
                <i class="ri-slideshow-4-fill"></i>
              </a>
            </li>
          </ul>
        </div>
        <p>
          <?php echo $the_team['about_me']; ?>
        </p>
      </div>
    </div>
    <div class="res-alert res-bg-light-green res-txt-white res-col-12" id="alert">
      <span class="res-close" data-close="alert" data-item="alert">
        <div class="ri-close-line"></div>
      </span>
      <?php echo $the_team['alert']; ?>
    </div>
  </div>
</div>