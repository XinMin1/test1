<?php
global $DEFAULT_VIEW_MODE, $MODE_HTML, $MODE_FLASH, $host_url, $mode, $user, $SID, $locale, $page, $DEFAULT_PAGE, $SEARCH_PAGE;
include $_SERVER['DOCUMENT_ROOT'] . "/blocks/all_header.php"; ?>

<!-- HEADER -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php"; ?>
<!-- -->

<main>
  <section class="pairs all-text">
    <div class="container-fluid">
      <?php //html_block('gallery-one-banner', 'gallery-one-banner-' . id_to_symlink, 'gallery-one-banner'); ?>
    </div>
    <div class="container-cast">
      <?php switch (id_to_symlink) {
        case 'myprofil':
          ?>
          <div class="title-section"><span>Администрирование</span></div>
          <div class="about-text">
            <?php html_block('profil', 'hidden', ''); ?>
          </div>
          <?php
          break;
        default:
          {
            ?>
            <div class="title-section"><span>Администрирование</span></div>
            <div class="about-text">
              <?php html_block('emaildesign', '', ''); ?>
              <?php html_block('login', 'hidden', ''); ?>
            </div>
            <?php
          }
          break;
      } ?>
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