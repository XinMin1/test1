<?php global $DEFAULT_VIEW_MODE, $MODE_HTML, $MODE_FLASH, $host_url, $mode, $user, $SID, $locale, $page, $DEFAULT_PAGE, $SEARCH_PAGE;
include $_SERVER['DOCUMENT_ROOT'] . "/blocks/all_header.php"; ?>

<?php if (id_to_symlink == 'blog' && !isset($_GET['n'])) { ?>
  <div class="wpap"></div>
<?php } ?>

<!-- HEADER -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php"; ?>
<!-- -->

<main>
  <?php if (isset($_GET['n'])) { ?>
    <section class="blog-page-item">
      <?php html_block('news', 'news', 'news'); ?>
    </section>
  <?php } else { ?>
    <section class="blog-page">
      <div class="container-cast">
        <div class="blog-page-section"><span><?= BB_BLOG ?></span></div>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/blocks/getBlogCategory.php"; ?>
        <?php
        if (id_to_symlink == 'blog')
          html_block('news', 'news', 'news');
        ?>
      </div>
    </section>
  <?php } ?>
</main>

<!-- FOOTER -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php"; ?>
<!-- -->

<?php include $_SERVER['DOCUMENT_ROOT'] . "/blocks/bottom.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/blocks/bottom_all.php"; ?>
</body>
</html>