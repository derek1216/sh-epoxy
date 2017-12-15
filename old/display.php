<?php 
/*
 * Nice Panel
 *
 * @version 2011-09-14
 * @path /display.php
 * @include 
 * @argument 
 * @copyright Copyright (C) 2004 - 2011  Nice Creative Co., Ltd. Sheng Kung Chien
 * @license Nice Creative Co., Ltd. License
 */
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="<?php echo strip_tags($aHead['keyword']); ?>" />
<meta name="description" content="<?php echo strip_tags($aHead['description']); ?>" />
<meta name="author" content="奈思網頁計公司" />
<meta name="copyright" content="<?php echo CFG_CORE_WEBSITE_NAME?>" />
<meta name="robots" content="all" />
<meta property="og:title" content="<?php echo strip_tags($aHead['title']); ?>" />
<meta property="og:description" content="<?php echo strip_tags($aHead['description']); ?>" />
<meta property="og:url" content="<?php echo link_current(); ?>" />
<meta property="og:image" content="<?php echo strip_tags($aHead['image']); ?>" />
<meta property="og:site_name" content="<?php echo CFG_CORE_WEBSITE_NAME?>"/>

<?php echo CFG_CORE_HEAD != 'CFG_CORE_HEAD' ? stripslashes(CFG_CORE_HEAD) : ''; ?>
<title><?php echo strip_tags($aHead['title']); ?></title>

<link rel="stylesheet" type="text/css" href="<?php echo URL_THEME; ?>/core.css" />
<link rel="stylesheet" type="text/css" href="<?php echo URL_THEME; ?>/customize.css" />
<link rel="stylesheet" type="text/css" href="<?php echo URL_THEME; ?>/jquery.css" />
<?php foreach ((array)$aCss as $v) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo URL_THEME; ?>/<?php echo $v; ?>.css" />
<?php } ?>
<?php foreach ((array)$aMethodCss as $v) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo $v; ?>" />
<?php } ?>

<script type="text/javascript" src="<?php echo JQUERY; ?>"></script>
<script type="text/javascript" src="<?php echo JQUERY_UI; ?>"></script>
<script type="text/javascript" src="<?php echo URL_JAVASCRIPT; ?>/nim.js"></script>

<?php foreach ((array)$aMethodJavaScript as $v) { ?>
<script type="text/javascript" src="<?php echo $v; ?>"></script>
<?php } ?>

<script type="text/javascript">
$(function() {
	if ($.browser.msie && ($.browser.version == "6.0")) {
		if (confirm("您使用的是舊版Internet Explorer " + $.browser.version + "，\n強烈建議您使用新版的Internet Explorer 9.0 版本，以獲得更快更安全及更好的網頁視覺效果。\n\n按下「確定」前往更新，或按「取消」繼續瀏覽")) {
			window.location.href = "http://www.microsoft.com/taiwan/windows/internet-explorer/";
		}
	}
		
	$.getScript('<?php echo URL_JAVASCRIPT; ?>/jquery.droppy.js', function() {
		$("#header .navigation ul").droppy();
	});

	
	<?php
	// 將 navigation current 頁面連結點加上 hover
	$aPath['id'] = explode(',', $aNodePage[0]['path'].','.$aNodePage[0]['node_id']);
	
	foreach ((array)$aPath['id'] as $k => $v) {
		$aPath['class'][] = '.navigation-'.$v.' > a';
	}
	
	unset($aPath['class'][0]);
	?>
	$('<?php echo rank($aPath['class'], $sKey=''); ?>').addClass('hover');
	
	<?php 
	foreach ((array)$aMethodScript as $v) { 
		echo $v;
	}
	?>
});
</script>

<?php
if (stristr($aHead['head'], '<link') || stristr($aHead['head'], '<style') || stristr($aHead['head'], '<script')) {
	echo $aHead['head'];
}
?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109592609-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109592609-1');
</script>


</head>
<body>
<div id="header">
  <div class="left">
    <div class="logo" title="<?php echo CFG_CORE_WEBSITE_NAME; ?>" onclick="goTo('<?php echo HTTP; ?>');"></div>
    <div class="slogan"><?php echo CFG_CORE_WEBSITE_SLOGAN; ?></div>
  </div>
  <div class="right">
    <div class="top-navigation">
			<?php echo $GLOBALS['website_top_navigation']; ?>
    </div>
    <div class="navigation">
      <?php echo $GLOBALS['website_main_navigation']; ?>
    </div>
  </div>
</div>
<div id="wrapper">
	<?php 
	$oFactory = new factory($sPort='frontend', $sQuery='customize/marquee');
	$aResult = array_merge((array)$aResult, (array)$oFactory->output());
	?>
	<?php 
	if ($aNodeBlockLeft[0] != '' && $aNodeBlockRight[0] != '') {
	?>
	<div id="left">
	<?php
	}

	foreach ((array)$aNodeBlockLeft as $vNodeBlock) {		
		echo '<!-- start '.$aApplicationBlock[$vNodeBlock]['application'].' '.$vNodeBlock." -->\n";
		echo $aObject[$vNodeBlock]['body']."\n";
		echo '<!-- end '.$aApplicationBlock[$vNodeBlock]['application'].' '.$vNodeBlock." -->\n";
	}
	
	if ($aNodeBlockLeft[0] != '' && $aNodeBlockRight[0] != '') {
	?>
	</div>
	<div id="right">
	<?php
	}

	foreach ((array)$aNodeBlockRight as $vNodeBlock) {
		echo '<!-- start '.$aApplicationBlock[$vNodeBlock]['application'].' '.$vNodeBlock." -->\n";
		echo $aObject[$vNodeBlock]['body']."\n";
		echo '<!-- end '.$aApplicationBlock[$vNodeBlock]['application'].' '.$vNodeBlock." -->\n";
	}
	
	if ($aNodeBlockLeft[0] != '' && $aNodeBlockRight[0] != '') {
	?>
	</div>
	<?php } ?>
</div>
<div id="footer">
  <span style=" display:block;padding:20px 10px;">
   公司地址：111台北市士林區臨溪路100巷92號1樓
   0916366575王經理&nbsp;&nbsp; 傳真專線：(02)28812496&nbsp;&nbsp; 電子郵件：service@sh-epoxy.com
  </span>
  <span style="display:block; padding:20px 10px;">   
  <a href="http://sh-epoxy.com/">Epoxy施工/</a><a href="http://sh-epoxy.com/">環氧樹脂</a>施工材料製造/<a href="http://sh-epoxy.com/">防水塗料/</a>尚輝樹脂品質第一
  </span>

  <div class="bottom-navigation">
		 <?php echo $GLOBALS['website_bottom_navigation']; ?>
  </div>
  <div class="copyright"><?php echo CFG_CORE_WEBSITE_FOOTER != 'CFG_CORE_WEBSITE_FOOTER' ? stripslashes(CFG_CORE_WEBSITE_FOOTER) : ''; ?></div>
  <div class="author">    
    <a title="網頁設計" href="http://nim.com.tw" target="_blank">網頁設計</a> by：奈思<a title="網頁設計公司" href="http://nim.com.tw" target="_blank">網頁設計公司</a>
  </div>
</div>
<div class="float">
  <div id="js-float"></div>
</div>
<noscript>您的瀏覽器不支援Javascript</noscript>
<script type="text/javascript">
	// 取得 window 高度 document 高度 element 高度 
	//alert('window -> ' + $(window).height() + ' document -> ' + $(document).height() + ' id -> ' + $('.main').height());
	<?php	if ($_GET['developer'] == 'true') {	?>
	// 開發者模式 觀察區塊位置 
	$('<?php $_GET['method']; ?>').css('position' : 'relative');
	$('<?php $_GET['method']; ?>').append('<div></div>').css({'position' : 'absolute', 'width' : $('<?php $_GET['method']; ?>').width(), 'height' : $('<?php $_GET['method']; ?>').height() });
	<?php } ?>
	// 觀察 body 中的 jquery get
	$('.jquery-get').live('click', function() {
		$.get($(this).attr('href'), function(response) { $('body').append(response); });
		return false;
	});
	// 觀察 body 中的 jquery confirm get
	$('.jquery-confirm-get').live('click', function() {
		if (confirm($('.' + $(this).attr('data-text')).text())) {
			$.get($(this).attr('href'), function(response) { $('body').append(response); });
		}
		return false;
	});
	// 觀察 body 中的 jquery post append
	$('.jquery-post-append').live('click', function() {
		var form = $(this).parent('form').attr('id');
		
		$.post($(this).attr('href') + '&validator=' + form, $('#' + form).serialize(), function(response) { $('#' + form).append(response); });
		return false;
	});
	<?php
	if (!strstr($_SERVER['HTTP_USER_AGENT'], 'Googlebot') && $_SESSION['TRAFFIC']['IP'] != $_SERVER['REMOTE_ADDR'] && $_SESSION['TRAFFIC']['COUNT'] == 0) {
		$sReferrer = $_SERVER['HTTP_REFERER'] != '' ? '&referrer='.urlencode($_SERVER['HTTP_REFERER']) : '';
	?>
	var s = '';
	
	$.each($.browser, function(i, v) {
		if (v == true) {
			browser = i;
		}
	});

	$.get('<?php echo URL;?>/middle.php?q=traffic/analytic<?php echo $sReferrer; ?>&vb=' + browser + ',' + $.browser.version/*, function(response) { alert(response); }*/);
	<?php } ?>
	
	<?php if ($_GET['mid'] != '' && $_COOKIE['MARKETING']['MID'] != $_GET['mid']) { ?>
	$.get('<?php echo URL; ?>/middle.php?q=marketing_traffic&mid=<?php echo $_GET['mid']; ?>'/*, function(response) { alert(response); }*/);
	<?php } ?>
</script>
<?php echo CFG_CORE_BODY != 'CFG_CORE_BODY' ? stripslashes(CFG_CORE_BODY) : ''; ?>
</body>
</html>