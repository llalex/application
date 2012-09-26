<?php defined('SYSPATH') or die('No direct script access.');?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="<?php echo $lan = substr(I18n::$lang, 0, 2) ?>"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="<?php echo $lan = substr(I18n::$lang, 0, 2) ?>"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="<?php echo $lan = substr(I18n::$lang, 0, 2) ?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="<?php echo $lan = substr(I18n::$lang, 0, 2) ?>"> <!--<![endif]-->
<head>
	<!-- Basic Page Needs
	   ================================================== -->
	<meta charset="utf-8" />
	<title><?php echo $title;?> </title>
	<meta name="keywords" content="<?php echo $keywords?>" />
	<meta name="description" content="<?php echo $description?>" />
	<meta name="author" content="LiuJie" />
	<meta name="generator" content="kohana" />
	<meta name="copyright" content="Copyright (c) 2012 LiuJie. All Rights Reserved." />
	<meta name="robots" content="index, follow" />
	<meta name="revisit-after" content="1 days" />
	<!-- CSS
	   ================================================== -->
	<?php echo $media->render_css();?>

	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="media/ico/favicon.ico">
</head>
<body>

    <div class="top-bar navbar-fixed-top">
        <ul>
            <li class="brand"><a href="/"><?php echo $sitename;?></a></li>
			<?php foreach($top_links as $top_link):?>
			<li><a href="<?php echo $top_link->url;?>"><?php echo $top_link->name;?></a></li>
	        <?php endforeach;?>
        </ul>

        <ul class="menu">
			<?php if($login_user):?>
			<li><a href="<?php echo URL::site('/account/logout')?>">退出</li>
			<?php if(Auth::instance()->logged_in('login')):?>
			<li><a href="<?php echo URL::site('/admin')?>">管理中心</a>|</li>
			<?php endif?>
			<li><a href="<?php echo URL::site('/user')?>">个人中心</a>|</li>
			<li><a href="<?php echo URL::site('/user')?>"><?php echo $login_user->username;?></a>|</li>
			<?php else:?>
			<li><a href="<?php echo URL::site('account/login');?>">登录</a></li>
			<li><a href="<?php echo URL::site('account/register');?>">注册</a>|</li>
			<?php endif;?>
        </ul>
    </div>

    <div class="container">
        <div class="row">
            <div class="span2 logo">
                <a href="/"><img width="141" height="42" src="<?php echo URL::site('/media/ico/logo.png')?>"></a>
            </div>
            <div class="span6">
                <h4 class="site-dec">全国高级私人教练培训信息查询发布网站</h4>
            </div>
            <div class="pull-right">
                <form class="form-search">
                    <input class="input-medium search-query" type="text" name="keyword" />
                    <input class="btn" type="submit" value="搜索"/>
                </form>
            </div>
        </div>
    </div> <!-- // container -->

    <div class="nav-bar" id="nav">
        <div class="inner clearfix">
            <ul>
                <li><a href="<?php echo URL::site('/')?>" class="active">首页</a></li>
                <li>
                    <a href="<?php echo URL::site('/coach/list/tiyu')?>">体育教练</a>
                    <div class="nav-content hide left-1">
						<?php
							$label = 'tiyu';
							$item_list = ORM::factory('coach_category')->get_item_byparent($label);
							if($item_list){
								foreach($item_list as $item){
									echo '<a href="'.URL::site('/coach/list/'.$label.'/'.$item->label).'">'.$item->name.'</a>';
								}

								echo '<span class="more"><a href="'.URL::site('/coach/list/'.$label).'">MORE>></a></span>';
							}
						?>
                    </div>
                </li>
                <li>
                    <a href="<?php echo URL::site('/coach/list/wenyi')?>">文艺老师</a>
                    <div class="nav-content hide left-2">
						<?php
						$label = 'wenyi';
						$item_list = ORM::factory('coach_category')->get_item_byparent($label);
						if($item_list){
							foreach($item_list as $item){
								echo '<a href="'.URL::site('/coach/list/'.$label.'/'.$item->label).'">'.$item->name.'</a>';
							}

							echo '<span class="more"><a href="'.URL::site('/coach/list/'.$label).'">MORE>></a></span>';
						}
						?>
                    </div>
                </li>
                <li>
                    <a href="<?php echo URL::site('/coach/list/jiajiao')?>">家教老师</a>
                    <div class="nav-content hide left-3">
						<?php
						$label = 'jiajiao';
						$item_list = ORM::factory('coach_category')->get_item_byparent($label);
						if($item_list){
							foreach($item_list as $item){
								echo '<a href="'.URL::site('/coach/list/'.$label.'/'.$item->label).'">'.$item->name.'</a>';
							}

							echo '<span class="more"><a href="'.URL::site('/coach/list/'.$label).'">MORE>></a></span>';
						}
						?>
                    </div>
                </li>
                <li>
                    <a href="<?php echo URL::site('/coach/list/shenghuo')?>">生活教练</a>
                    <div class="nav-content hide left-4">
						<?php
						$label = 'jiajiao';
						$item_list = ORM::factory('coach_category')->get_item_byparent($label);
						if($item_list){
							foreach($item_list as $item){
								echo '<a href="'.URL::site('/coach/list/'.$label.'/'.$item->label).'">'.$item->name.'</a>';
							}

							echo '<span class="more"><a href="'.URL::site('/coach/list/'.$label).'">MORE>></a></span>';
						}
						?>
                    </div>
                </li>
                <li>
                    <a href="<?php echo URL::site('/article')?>" id="article">教学文章</a>
                    <div class="nav-content hide left-5">
                        <a href="#">驾驶</a>
                        <a href="#">陪驾</a>
                        <a href="#">律师</a>
                        <a href="#">老年护理</a>
                        <a href="#">月子护理</a>
                        <a href="#">保健</a>
                        <a href="#">心理咨询</a>
                        <a href="#">营养</a>
                        <a href="#">造型</a>
                        <a href="#">美容</a>
                        <a href="#">美发</a>
                        <a href="#">计算机</a>
                    </div>
                </li>
                <li><a href="<?php echo URL::site('/video')?>" id="video">教学视频</a></li>
                <li><a href="<?php echo URL::site('/train')?>" id="train">教练培训</a></li>
            </ul>
        </div>
    </div> <!-- // nav-bar -->

    <?php echo $breadcrumb->render();?>

    <div class="container-fluid content">
		<?php echo $content;?>
    </div>

    <div class="container footer">
        <div>
			<?php foreach($bottom_links as $item):?>
            <span><a href="<?php echo URL::site($item->url);?>"><?php echo $item->name;?></a></span>
			<?php endforeach;?>
        </div>
        <div>
            Copyright © 2012
            <a title="爱教练私教网" href="http://icoach.dev" target="_blank"> 爱教练私教网</a>
            All Rights Reserved 粤icp备11009703号
        </div>
    </div>
<hr>
<?php if (Kohana::$environment == Kohana::DEVELOPMENT) :?>
<div id="kohana-profiler" style="padding: 100px 0 20px 0;"><?php echo View::factory('profiler/stats') ?></div>
<?php endif;?>
</body>
<!--[if lt IE 9]>
<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- JS
================================================== -->
<?php echo $media->render_js();?>
</html>