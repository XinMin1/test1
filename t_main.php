<?php
global $DEFAULT_VIEW_MODE, $MODE_HTML, $MODE_FLASH, $host_url, $mode, $user, $SID, $locale, $page, $DEFAULT_PAGE, $SEARCH_PAGE;
include $_SERVER['DOCUMENT_ROOT'] . "/blocks/all_header.php";?>
<?php if (!isset($_SESSION['IsLogined'])) {?>
<!--<div id="preload">
  <img src="/files/img/logo-w.svg" alt="Beverly Bride" title="Beverly Bride">
</div>-->
<?php }?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php"; ?>
<main>
  <section class="main-slider slick">
    <div class="container-fluid">
      <?php html_block('gallery2', 'gallery2', 'gallery2'); ?>
    </div>
  </section>
  <section class="brand">
    <div class="container-cast">
      <?php html_block('main-gall-about', 'main-gall-about', 'main-gall-about'); ?>
    </div>
  </section>
  <section class="brand__accent-gray">
    <div class="container-cast">
      <?php html_block('main-gall-partner', 'main-gall-partner', 'main-gall-partner'); ?>
      <?php html_block('main-gall-bride', 'main-gall-bride', 'main-gall-bride'); ?>
    </div>
  </section>
  <section class="work"
           data-vide-bg="mp4: /contentimages/main/ocean-3.mp4, webm: /contentimages/main/ocean-1.webm, ogv: /contentimages/main/ocean-1.ogv, poster: /contentimages/main/work-bg.jpg"
           data-vide-options="posterType: jpg, loop: true, muted: true, position: 50% 50%">
    <div class="container-cast">
      <?php html_block('main-gall-ourworks', 'main-gall-ourworks', 'main-gall-ourworks'); ?>
    </div>
  </section>
  <section class="blog">
    <div class="container-cast">
      <div class="title-section"><span><?= BB_BLOG ?></span></div>
      <?php html_block('main-gall-blog', 'main-gall-blog', 'main-gall-blog'); ?>
    </div>
  </section>
  <section class="instagram">
    <div class="container-fluid">
      <div class="instagram-title">
        <span>Instagram</span>
      </div>
      <div class="instagram-subtitle">
        <span><?php html_block('main-capt-insta', 'none', 'main-capt-insta'); ?></span>
      </div>
    </div>
    <?php html_block('main-gall-insta', 'main-gall-insta', 'main-gall-insta'); ?>
  </section>
  <section class="feedback">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="feedback__img">
            <?php html_block('main-gall-feedback', 'main-gall-feedback', 'main-gall-feedback'); ?>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="feedback__form-block">
            <div class="feedback__form-block-title"><span><?= BB_FORM_ASC_QUSTION ?></span></div>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/blocks/contact_form.php"; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- FOOTER -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php"; ?>
<!-- -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/blocks/bottom.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/blocks/bottom_all.php"; ?>
</body>
</html>