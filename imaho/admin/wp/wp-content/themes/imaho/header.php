<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?> | 今井保育園 | 社会福祉法人光道会。東京都青梅市今井の認可保育園。</title>
<!--css-->
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link href="../src/css/base.css" rel="stylesheet" type="text/css">
<!--jquery-->
<script type="text/javascript" src="../src/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../src/js/jquery-ui-1.7.1.custom.min.js"></script>
<!--jquery.smooth scroll-->
<script type="text/javascript" src="../src/js/jquery.page-scroller-308.js"></script>
<!--jquery.menu float-->
<script type="text/javascript" src="../src/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../src/js/jquery.scrollfollow.js"></script>
<script type="text/javascript">
$( document ).ready( function () {
	$('#sideMenu').scrollFollow({});
});
//オプション
$( document ).ready( function () {
	$('#sideMenu').scrollFollow( {
		//アニメーションの速度の設定。0 にするとアニメーションなしになります。
		speed: 0,
		//ブラウザの領域とフロート要素との余白。0にするとぴったりくっつきます。
		offset: 10
	} );
} );
</script>
<!--jquery.prettyPopin-->
<link href="../css/prettyPopin.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../js/jquery.prettyPopin.js"></script>
<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
	$("a[rel^='prettyPopin']").prettyPopin({
		modal : false, /* モーダル設定：true/false */
		width : 500, /* 幅：false/integer */
		height: 410, /* 高さ：false/integer */
		opacity: 0.5, /* 透過度：value from 0 to 1 */
		animationSpeed: 'fast', /* 描写速度：slow/medium/fast/integer */
		followScroll: false, /* スクロール：true/false */
		loader_path: 'images/prettyPopin/loader.gif', /* ローディングイメージ */
		callback: function(){} /* ポップアップを閉じた時のコールバック */
	});
});
</script>
<!--Google-->
<!--script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-779505-41', 'imaho.net');
  ga('send', 'pageview');

</script-->
<!--Google-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42490919-1', 'kodokai.jp');
  ga('send', 'pageview');

</script>
<?php wp_head(); ?>
</head>

<body>
<!--Facebook Like Box-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=134437139983901";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--Facebook Like Box-->
<div class="cnt">
	<div class="head clearfix">
<h1><a href="../index.html" target="_self"><img src="../src/img/logoHead.png" alt="<?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?> | 今井保育園 | 社会福祉法人光道会。東京都青梅市今井の認可保育園。" width="190" height="86" border="0" /></a></h1>
		<div class="menu">
			<ul>
				<li><a href="../index.html" target="_self"><img src="../src/img/tabMenuHead-1.png" alt="トップ" width="46" height="18" border="0"></a></li>
				<li><a href="../kosodate-shien.html" target="_self"><img src="../src/img/tabMenuHead-9.png" alt="子育て支援" width="94" height="18" border="0"></a></li>
				<li><a href="../kenkokanri.html" target="_self"><img src="../src/img/tabMenuHead-7.png" alt="健康管理" width="75" height="18" border="0"></a></li>
				<li><a href="../johokaiji.html" target="_self"><img src="../src/img/tabMenuHead-8.png" alt="情報開示" width="75" height="18" border="0"></a></li>
				<li><a href="../blog/" target="_self" class="on"><img src="../src/img/tabMenuHead-6.png" alt="園長ブログ" width="54" height="18" border="0"></a></li>
				<li><a href="../otoiawase.html" target="_self"><img src="../src/img/tabMenuHead-4.png" alt="お問合せ" width="73" height="18" border="0"></a></li>
				<li><a href="../recruit.html" target="_self"><img src="../src/img/tabMenuHead-10.png" alt="採用情報" width="75" height="18" border="0"></a></li>
				<li><a href="../reservation.html" target="_self"><img src="../src/img/tabMenuHead-11.png" alt="見学予約" width="75" height="18" border="0"></a></li>
			</ul>
		</div>
	</div>
	<div class="content">
		<!--ここから-->
