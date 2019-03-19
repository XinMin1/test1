<?php global $DEFAULT_VIEW_MODE, $MODE_HTML, $MODE_FLASH, $host_url, $mode, $user, $SID, $locale, $page, $DEFAULT_PAGE, $SEARCH_PAGE;
include $_SERVER['DOCUMENT_ROOT'] . "/blocks/all_header.php";
?>

<!-- HEADER -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php"; ?>
<!-- -->


<?php if ('404' == id_to_symlink) {
  header('HTTP/1.1 404 Not Found');
  ?>
  <main>
    <section class="error">
      <div class="container-fluid">
        <div class="error-grid">
          <div class="error-grid-tit-block">
            <div class="error-grid-tit-block-title"><img src="/files/img/BEVERLY-404.png" alt="BEVERLY BRIDE"
                                                         title="BEVERLY BRIDE"></div>
            <div class="error-grid-tit-block-btn">
              <div class="btn-style">
                <a href="http://<?= $_SERVER["HTTP_HOST"] ?>/<?= $locale ?>/index.html" class="btn-1-2">На главную</a>
              </div>
            </div>
          </div>
          <div class="error-grid-tit-block-text">
            <?php echo error404; ?>
            <div class="error-grid-tit-block-text-footer">
              <div class="error-grid-tit-block-text-footer_nav">
                <?php html_block('menu-error-page', 'footer-simple-linkmenu', 'menu-error-page'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php
} elseif ('page_not_found' == id_to_symlink) {
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: " . $host_url . "/" . $locale . "/404.html");
  exit();
  //echo error404;
} else {
  ?>
  <?php switch (id_to_symlink) {
    case 'contacts':
      //include $_SERVER['DOCUMENT_ROOT']."/blocks/feedback.php";
      ?>
      <main>
      <section class="cont">
        <div class="cont-bg">
          <div class="container-cast">
            <div class="cont-bg-text">
              <div class="cont-bg-text-tit"><?php html_block('h1', 'none', ''); ?></div>
              <div class="cont-bg-text-logo-text">
                <span><?php html_block('contact_page_phone', 'none', ''); ?></span>
              </div>
              <div class="cont-bg-text-logo-decr">
                <?php html_block('contact_page_email', 'none', ''); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="cont-all-text">
          <div class="container-cast">
            <?php html_block('linkmenuGall', 'galllinkmenu', 'linkmenuGall'); ?>
          </div>
        </div>
      </section>
      </main><?php
      break;
    case 'where-to-buy':
      ?>
      <main>
      <section class="cont">
        <div class="cont-bg">
          <div class="container-cast">
            <div class="cont-bg-text">
              <div class="cont-bg-text-tit"><?php html_block('h1', 'none', ''); ?></div>
              <div class="cont-bg-text-logo-text">
                <span><?php html_block('contact_page_phone', 'none', ''); ?></span>
              </div>
              <div class="cont-bg-text-logo-img"><img src="/files/img/logo-w.svg" alt="Beverly Bride"
                                                      title="Beverly Bride"></div>
            </div>
          </div>
        </div>
        <div class="cont-all-text">
          <div class="container-cast">
            <?php html_block('linkmenuGall2', 'galllinkmenu', 'linkmenuGall2'); ?>
          </div>
        </div>
      </section>
      </main><?php
      break;
    case 'about-us':
      ?>
      <main>
      <section class="about">
        <div class="container-cast">
          <div class="title-section"><?php html_block('h1', 'none', ''); ?></div>
        </div>
        <div class="about-gray">
          <div class="container-cast">
            <div class="row">
              <div class="col-lg-7 mb">
                <div class="title-none-boreder">
                  <h2><?php html_block('about-caption-1', 'none', ''); ?></h2>
                </div>
                <div class="about-text">
                  <?php html_block('about-txt-1', 'textonly', ''); ?>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="title-none-boreder">
                  <h2><?php html_block('about-caption-2', 'none', ''); ?></h2>
                </div>
                <div class="about-text">
                  <?php html_block('about-txt-2', 'textonly', ''); ?>
                </div>
              </div>
              <div class="col-lg-6">
                <?php html_block('about-gall-1', 'about-gall-1', 'about-gall-1'); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="container-cast">
          <div class="about-video-text"><span><?php html_block('caption', 'none', ''); ?></span></div>
          <div class="about-video">
            <?php html_block('textarea', 'textonly', ''); ?>
          </div>
        </div>
      </section>
      </main><?php
      break;
    case 'collections':
      ?>
      <main>
      <section class="colectiom">
        <section class="main-slider">
          <div class="container-cast">
            <?php html_block('gall-collect-page', 'gall-collect-page', 'gall-collect-page'); ?>
          </div>
        </section>
      </section>
      </main><?php
      break;
    case 'for-partners':
      ?>
      <main>
      <section class="pairs">
        <div class="container-fluid">
          <?php html_block('partners-gall-1', 'partners-gall-1', 'partners-gall-1'); ?>
        </div>
        <div class="pairs-color-two">
          <div class="container-cast">
            <div class="title-section right-tit"><?php html_block('h1', 'none', ''); ?></div>
            <div class="row">
              <div class="col-lg-7">
                <div
                  class="title-section pairs-text-section"><?php html_block('partners-capt-1', 'none', ''); ?></div>
                <div class="pairs-text">
                  <div class="about-text">
                    <?php html_block('partners-text-1', 'textonly', ''); ?>
                    <div class="btn-style">
                      <a href="<?= $host_url ?>/<?= $locale ?>/cooperation.html"
                         class="btn-1-2"><?= BB_LEARN_MORE ?></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 offset-lg-6">
                <div
                  class="title-section pairs-text-section right"><?php html_block('partners-capt-2', 'none', ''); ?></div>
                <div class="about-text">
                  <?php html_block('partners-text-2', 'textonly', ''); ?>
                  <div class="btn-style">
                    <a href="<?= $host_url ?>/<?= $locale ?>/quality-assurance.html"
                       class="btn-1-2"><?= BB_LEARN_MORE ?></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div
                  class="title-section pairs-text-section"><?php html_block('partners-capt-3', 'none', ''); ?></div>
                <div class="about-text">
                  <?php html_block('partners-text-3', 'textonly', ''); ?>
                  <div class="btn-style">
                    <a href="<?= $host_url ?>/<?= $locale ?>/loyalty-programs.html"
                       class="btn-1-2"><?= BB_LEARN_MORE ?></a>
                  </div>
                </div>
              </div>
              <div class="col-my-col">
                <div class="pairs-img-absolut">
                  <?php html_block('partners-gall-2', 'partners-gall-2', 'partners-gall-2'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="feedback block-t">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="feedback__img">
                  <?php html_block('partners-gall-3', 'partners-gall-3', 'partners-gall-3'); ?>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="feedback__form-block">
                  <div
                    class="feedback__form-block-title"><?php html_block('partners-capt-4', 'none', 'partners-capt-4'); ?></div>
                  <?php include $_SERVER['DOCUMENT_ROOT'] . "/blocks/partners_form.php"; ?>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      </main><?php
      break;
    case 'for-brides':
      ?>
      <main>
      <section class="pairs">
        <div class="container-fluid">
          <?php html_block('brides-gall-1', 'brides-gall-1', 'brides-gall-1'); ?>
        </div>
        <div class="pairs-color-two">
          <div class="container-cast">
            <div class="title-section right-tit"><?php html_block('h1', 'none', ''); ?></div>
            <div class="row">
              <div class="col-lg-10">
                <div class="title-section pairs-text-section"><?php html_block('brides-capt-1', 'none', ''); ?></div>
                <div class="pairs-text">
                  <div class="about-text">
                    <?php html_block('brides-text-1', 'textonly', ''); ?>
                    <div class="btn-style">
                      <a href="<?= $host_url ?>/<?= $locale ?>/individual-tailoring.html"
                         class="btn-1-2"><?= BB_LEARN_MORE ?></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 offset-lg-6">
                <div
                  class="title-section pairs-text-section right"><?php html_block('brides-capt-2', 'none', ''); ?></div>
                <div class="about-text">
                  <?php html_block('brides-text-2', 'textonly', ''); ?>
                  <div class="btn-style">
                    <a href="<?= $host_url ?>/<?= $locale ?>/rental.html" class="btn-1-2"><?= BB_LEARN_MORE ?></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="title-section pairs-text-section"><?php html_block('brides-capt-3', 'none', ''); ?></div>
                <div class="about-text">
                  <?php html_block('brides-text-3', 'textonly', ''); ?>
                  <div class="btn-style">
                    <a href="<?= $host_url ?>/<?= $locale ?>/try-on-clothes.html"
                       class="btn-1-2"><?= BB_LEARN_MORE ?></a>
                  </div>
                </div>
              </div>
              <div class="col-my-col">
                <div class="pairs-img-absolut">
                  <?php html_block('brides-gall-2', 'brides-gall-2', 'brides-gall-2'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="feedback block-t">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="feedback__img">
                  <?php html_block('brides-gall-3', 'brides-gall-3', 'brides-gall-3'); ?>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="feedback__form-block">
                  <div class="feedback__form-block-title">
                    <?php html_block('brides-capt-4', 'none', ''); ?>
                  </div>
                  <?php include $_SERVER['DOCUMENT_ROOT'] . "/blocks/contact_form.php"; ?>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      </main><?php
      break;
    case 'our-bride':
      ?>
      <main>
      <section class="geleri bride">
        <div class="container-cast">
          <div class="title-section pairs-text-section">
            <?php html_block('h1', 'none', ''); ?>
          </div>
          <div class="isotope">
            <div class="isotope-items-wrap">
              <div class="grid-sizer"></div>
              <?php html_block('our-bride-gall', 'our-bride-gall', 'our-bride-gall'); ?>
            </div>
          </div>
        </div>
      </section>
      </main><?php
      break;
    case 'video':
      ?>
      <main>
      <section class="video">
        <div class="container-cast">
          <div class="video-tit">
            <h1><?php html_block('h1', 'none', ''); ?></h1>
          </div>
          <div class="video-main-block">
            <?php html_block('video-gall-1', 'video-gall-1', 'video-gall-1'); ?>
          </div>
          <div class="video-play-list-title"><span><?= BB_RELATED_VIDEOS ?></span></div>
          <?php html_block('video-gall-2', 'video-gall-2', 'video-gall-2'); ?>
        </div>
      </section>
      </main><?php
      break;
    case 'cooperation':
    case 'quality-assurance':
    case 'loyalty-programs':
      ?>
      <main>
      <section class="pairs all-text">
        <div class="container-fluid">
          <?php html_block('gallery-one-banner', 'gallery-one-banner-' . id_to_symlink, 'gallery-one-banner'); ?>
        </div>
        <div class="container-cast">
          <div class="title-section"><?php html_block('h1', 'none', ''); ?></div>
          <div class="about-text">
            <?php html_block('textarea', 'textonly', ''); ?>
          </div>
          <div class="btn-style">
            <a href="javascript:;" data-fancybox="" data-src="#part-form" class="btn-1-2"><?= BB_BECOME_PARTNER ?></a>
          </div>
          <div class="geleri" style="margin: 0px;">
            <div class="geleri-nav-fot">
              <div class="geleri-nav-fot-back"><a href="<?= $host_url ?>/<?= $locale ?>/for-partners.html"><i
                    class="fal fa-long-arrow-left"></i><?= BB_BACK ?></a></div>
            </div>
          </div>
        </div>
      </section>
      </main><?php
      break;
    default:
      ?>
      <main>
      <section class="pairs all-text">
        <div class="container-fluid">
          <?php html_block('gallery-one-banner', 'gallery-one-banner-' . id_to_symlink, 'gallery-one-banner'); ?>
        </div>
        <div class="container-cast">
          <div class="title-section"><span><?php html_block('h1', 'none', ''); ?></span></div>
          <div class="about-text">
            <?php html_block('textarea', 'textonly', ''); ?>
          </div>
        </div>
      </section>
      </main><?php
  } ?>
<?php } ?>

<!-- FOOTER -->
<? include $_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php"; ?>
<!-- -->

<?php include $_SERVER['DOCUMENT_ROOT'] . "/blocks/bottom.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/blocks/bottom_all.php"; ?>
</body>
</html>