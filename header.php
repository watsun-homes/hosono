<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<title>calzeria HOSONO</title>
<?php wp_head(); ?>
<meta name="description" content="カルツェリア・ホソノは東京 青山にある手作り靴のお店です。既製品からオーダーメイドまで扱っており、細幅から幅広まで揃えた豊富なサイズ展開と、工房と一体になった店内での、きめ細かなフィッティングで皆様の足を守ります。">
<meta name="keywords" content="靴,オーダーメイド,渋谷,青山,カルツェリアホソノ,HOSONO">
<meta name="author" content="カルツェリア・ホソノ">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/lightbox/lightbox.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/wow/animate.css" media="screen" />
<script src="<?php echo get_template_directory_uri(); ?>/js/wow/wow.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide"
	  });
	});
</script>
<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="image/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="icon" href="image/favicon.ico" type="image/vnd.microsoft.icon">
</head>
<body <?php body_class(); ?>>

<?php
	
	if(is_page()):	/* 固定ページの場合スラッグ取得 */
		$now_slug = $post->post_name;
	elseif(is_archive()):	/* カテゴリの場合親スラッグ取得 */
		/* 現在のカテゴリ */
		$current_category = get_category($cat);
		if ($current_category->parent):
			$parent_category = get_category($current_category->parent);
			$now_slug = esc_attr($parent_category->slug);
		endif;
		if($now_slug == false): /* 親カテゴリか判定 */
			$now_slug = $current_category -> slug;
		endif;
	elseif(is_single()):	/* 一覧の場合スラッグ取得 */
		$cat = get_the_category();
		foreach($cat as $k):
			if($k->slug == 'item'):
				$now_slug = 'item';
			endif;
		endforeach;
	endif;
?>

<div class="wrap <?php echo $now_slug; ?>">


	
<header id="head" class="flex f-center f-middle">
	<a href="<?php echo home_url('/'); ?>" class="logo-head"><img src="<?php echo get_template_directory_uri(); ?>/image/logo-head2.png" alt="HOSONO"></a>
	<div class="menu-btn-sp">
		<a class="menu-trigger" href="javascript:void(0)">
			<span></span>
			<span></span>
			<span></span>
		</a>
	</div>
	<ul class="lst-btn-sns flex f-between">
		<li><a href="https://www.facebook.com/calzeriahosono/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/icon-hd-fb.png" alt="facebook"></a></li>
		<li><a href="https://www.instagram.com/calzeria_hosono/?hl=ja" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/icon-hd-ig.png" alt="instagram"></a></li>
	</ul>
</header>

<nav id="glnv" class="flex f-middle">
	<div class="inner-wrap">
		<div class="lay-glnv flex f-between f-middle">
			<ul class="lst-glnv flex f-between">
				<li class="glnv-top">
					<a href="<?php echo home_url('/'); ?>" class="noalp">
						<p class="txt-glnv-en">TOP</p>
						<p class="txt-glnv-ja">トップ</p>
					</a>
				</li>
				<li class="glnv-news">
					<a href="<?php echo home_url('/'); ?>news/" class="noalp">
						<p class="txt-glnv-en">NEWS</p>
						<p class="txt-glnv-ja">お知らせ</p>
					</a>
				</li>
				<li class="glnv-lineup">
					<a href="<?php echo home_url('/'); ?>item/" class="noalp">
						<p class="txt-glnv-en">PRODUCTS</p>
						<p class="txt-glnv-ja">商品情報</p>
					</a>
				</li>
				<li class="glnv-ready">
					<a href="<?php echo home_url('/'); ?>ready-made/" class="noalp">
						<p class="txt-glnv-en">READY MADE</p>
						<p class="txt-glnv-ja">既製品について</p>
					</a>
				</li>
				<li class="glnv-order">
					<a href="<?php echo home_url('/'); ?>order/" class="noalp view-pc">
						<p class="txt-glnv-en">ORDER MADE</p>
						<p class="txt-glnv-ja">オーダーメイドについて</p>
					</a>
					<a class="view-sp">
						<p class="txt-glnv-en">ORDER MADE</p>
						<p class="txt-glnv-ja">オーダーメイド</p>
					</a>
					<ul class="subnv-order">
						<li>
							<a href="<?php echo home_url('/'); ?>order/" class="noalp view-sp">ORDER MADE オーダーメイド</a>
							<a href="<?php echo home_url('/'); ?>order/semi/" class="noalp">SEMI セミオーダーメイド</a>
							<a href="<?php echo home_url('/'); ?>order/semi/designlist/" class="noalp">　Lデザイン一覧</a>
							<a href="<?php echo home_url('/'); ?>order/full/" class="noalp">FULL フルオーダーメイド</a>
						</li>
					</ul>
				</li>
				<li class="glnv-adjuster">
					<a href="<?php echo home_url('/'); ?>adjuster/" class="noalp">
						<p class="txt-glnv-en">ADJUSTER</p>
						<p class="txt-glnv-ja">調整について</p>
					</a>
				</li>
				<li class="glnv-company">
					<a href="<?php echo home_url('/'); ?>company/" class="noalp view-pc">
						<p class="txt-glnv-en">COMPANY INFO</p>
						<p class="txt-glnv-ja">会社情報</p>
					</a>
					<a class="view-sp">
						<p class="txt-glnv-en">COMPANY INFO</p>
						<p class="txt-glnv-ja">会社情報</p>
					</a>
					<ul class="subnv-company">
						<li>
							<!--a href="<?php echo home_url('/'); ?>concept/" class="noalp">POLICY&amp;HISTORY 理念・歴史</a-->
							<a href="<?php echo home_url('/'); ?>company/" class="noalp">COMPANY 会社情報</a>
						</li>
					</ul>
				</li>
				<!--li class="glnv-blog">
					<a href="<?php echo home_url('/'); ?>blog/" class="noalp">
						<p class="txt-glnv-en">STAFF BLOG</p>
						<p class="txt-glnv-ja">ブログ</p>
					</a>
				</li-->
				<li class="glnv-shop">
					<a href="<?php echo home_url('/'); ?>shoplist/" class="noalp">
						<p class="txt-glnv-en">SHOP LIST</p>
						<p class="txt-glnv-ja">店舗一覧</p>
					</a>
				</li>
				<li class="glnv-contact">
					<a href="<?php echo home_url('/'); ?>contact/" class="noalp">
						<p class="txt-glnv-en">CONTACT</p>
						<p class="txt-glnv-ja">お問い合わせ<br>・来店予約</p>
					</a>
				</li>
			</ul>
			<ul class="lst-btn-sns flex f-between">
				<li><a href="https://www.facebook.com/calzeriahosono/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="https://www.instagram.com/calzeria_hosono/?hl=ja" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</nav>

