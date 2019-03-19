<? global $DEFAULT_VIEW_MODE, $MODE_HTML, $MODE_FLASH, $host_url, $mode, $user, $SID, $locale, $page, $DEFAULT_PAGE, $SEARCH_PAGE, $goodsIDArray;
require_once("lib/output.php");
include $_SERVER['DOCUMENT_ROOT'] . "/blocks/all_header.php";
include "etc/host_config.php";
include_once "lib/db_fns.php";
include_once "lib/output.php";


if (id_to_symlink == 'order') {
  if (isset($_REQUEST['sendemail'])) {
    if (isset($_POST['subject']))
      $subject = htmlspecialchars(addslashes(strip_tags($_POST['subject'])));
    else
      $subject = 'Запрос с сайта';
    $err = '';
    if (trim($_REQUEST['W_SPOS']) == '') $err .= '<li>Вы не выбрали способ оплаты.</b>';
    if (trim($_POST['W_DOST']) == '') $err .= '<li><b>Вы не выбрали способ доставки.</b>';
    if (trim($_POST['W_USER']) == '') $err .= '<li><b>Вы не ввели ФИО.</b>';
    //if (trim($_POST['W_EMAIL'])=='') 	$err.='<li><b>Вы не ввели адрес электронной почты.</b>';
    //if (trim($_POST['W_ADRES'])=='') 	$err.='<li><b>Вы не ввели почтовый адрес.</b>';
    if (trim($_POST['W_CITYY']) == '') $err .= '<li><b>Вы не ввели город доставки.</b>';
    if (valid_email($_POST['W_EMAIL']) == false) $err .= '<li><b>Вы ввели некорректный адрес электронной почты.</b>';
    if (trim($_POST['W_PHONE']) == '') $err .= '<li><b>Вы не ввели контактный телефон.</b>';
    if ($err == '') {
      html_block('makeorder', '', '');
      exit;
    }
  }
} ?>

<!-- HEADER -->
<? include $_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php"; ?>
<!-- -->

<? if (id_to_symlink == 'catalog') {
  
  if (isset($_GET['cat_id'])) {
    $cat_id = $_GET['cat_id'];
  } else {
    $cat_id = 0;
  }
  
  $sql          = "SELECT ParentID FROM tblCategories WHERE Id=" . $_GET['cat_id'];
  $r            = query_result_as_rows($sql, $conn);
  $count_parent = $r['ParentID'][0];
  
  if (isset($_GET['cat_id'])) {// and $count_parent != 0
    $sql = "select Name from tblCategoriesInfo where CategoryID='{$_GET['cat_id']}'";
    $r   = query_result_as_rows($sql, $conn);
    
    $sql_parent  = "select Name from tblCategoriesInfo where CategoryID='{$count_parent}'";
    $r_parent    = query_result_as_rows($sql_parent, $conn);
    $parent_Name = $r_parent['Name'][0];
    
    $sql_img = "SELECT Name, Txt, Image FROM tblCategoriesInfo LEFT JOIN tblCategoriesTxt ON tblCategoriesInfo.CategoryID=tblCategoriesTxt.CategoryID WHERE tblCategoriesInfo.CategoryID='{$_GET['cat_id']}'";
    $r_img   = query_result_as_rows($sql_img, $conn);
    $cat_txt = trim(strip_tags(base64_decode($r_img['Txt'][0]), "<br></br></ br><strong><p>"));
    
    $parent_back_link = $host_url . "/" . $locale . "/catalog.html";
    ?>
    <? //print_path($_GET['cat_id'],$conn);?>
    <main>
      <section class="geleri">
        <div class="container-cast">
          <nav class="geleri-nav">
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/blocks/get_menu_catalog.php"; ?>
          </nav>
          <div class="isotope">
            <div class="isotope-items-wrap">
              <div class="grid-sizer"></div>
              <?php html_block('catalog', 'hidden', ''); ?>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?
    
  } else { // category thumbs
    ?>
    
    <?
    if ($cat_id != 0) {
      $sql_img   = "SELECT Name, Txt, Image FROM tblCategoriesInfo LEFT JOIN tblCategoriesTxt ON tblCategoriesInfo.CategoryID=tblCategoriesTxt.CategoryID WHERE tblCategoriesInfo.CategoryID='{$_GET['cat_id']}'";
      $r_img     = query_result_as_rows($sql_img, $conn);
      $cat_title = $r_img['Name'][0];
      $cat_img   = $r_img['Image'][0];
      $cat_txt   = base64_decode($r_img['Txt'][0]);
    } else {
      $cat_title = XCATALOG;
      $cat_img   = "";
      $cat_txt   = "";
    }
    
    ?>
    <?//print_path($_GET['cat_id'],$conn);?>
    <main>
    <section class="geleri">
      <div class="container-cast">
        <div class="isotope">
          <div class="row">
            <?php html_block('catalog', 'hidden', ''); ?>
          </div>
        </div>
      </div>
    </section>
    </main><?
  }
  
} elseif (id_to_symlink == 'details') {
  
  $cat_id = $_GET['cat_id'];
  ?>
  <main>
    <section class="geleri item">
      <?php html_block('catalog', 'hidden', ''); ?>
    </section>
  </main>
  <?
} ?>


<!-- FOOTER -->
<? include $_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php"; ?>
<!-- -->

<?php include $_SERVER['DOCUMENT_ROOT'] . "/blocks/bottom.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/blocks/bottom_all.php"; ?>
</body>
</html>