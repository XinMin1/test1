<? global $DEFAULT_VIEW_MODE,$MODE_HTML,$MODE_FLASH,$host_url,$mode,$user,$SID,$locale,$page,$DEFAULT_PAGE,$SEARCH_PAGE;
include $_SERVER['DOCUMENT_ROOT']."/blocks/all_header.php";?>

	<!-- HEADER -->
	<?include $_SERVER['DOCUMENT_ROOT']."/blocks/header.php";?>
	<!-- -->

	<main class="content">
		<section class="catalog">
	        <h1 class="content__title"><?html_block('h1','textonly','');?> <?=XSEARCH_PAGE?> "<?=urldecode($_GET['s'])?>"</h1>
	        <div class="innerContainer">
	            <div class="catalogThumbnails">
				<?html_block('search','hidden','');
				if (isset($_SESSION['search_sql']))
					html_block('catalog','hidden','');?>
				</div>
			</div>
	    </section>
	    <?php include $_SERVER['DOCUMENT_ROOT']."/blocks/info_block.php";?>
	</main>

	<!-- FOOTER -->
	<?include $_SERVER['DOCUMENT_ROOT']."/blocks/footer.php";?>
	<!-- -->

<?php include $_SERVER['DOCUMENT_ROOT']."/blocks/bottom.php";?>		
<?php include $_SERVER['DOCUMENT_ROOT']."/blocks/bottom_all.php";?>
</body>
</html>