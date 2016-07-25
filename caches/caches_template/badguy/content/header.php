<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=11" />
<meta property="qc:admins" content="167127164764630107176375" />
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="baidu-site-verification" content="jyXJ4xJOeK" />
<meta name="sogou_site_verification" content="CpL6RsIP6e"/>
<!-- <meta http-equiv="Cache-Control" content="no-transform" />  --><!-- 禁止百度搜索转码 -->
<meta http-equiv="Cache-Control" content="no-siteapp" /> <!-- 禁止神马搜索转码 -->
<meta name="format-detection" content="telephone=no">
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>badguy/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo CSS_PATH;?>badguy/bootstrap-self.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo CSS_PATH;?>badguy/liMarquee.css">
<link rel="Shortcut Icon" href="favicon.ico" />

<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>badguy/index.js"></script>
</head>
<body>

<!--NAV 导航区 开始-->
<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">赣州律师网</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        
        
 
        
         <map>
    	 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b2693892c35a89956d5574d578ef8350&action=category&catid=0&num=4&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'4',));}?>
          <ul class="nav navbar-nav">
          
            <li class="active"><a href="<?php echo siteurl($siteid);?>">首页</a></li>
            
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li><a href="<?php echo $r['url'];?>"><span><?php echo $r['catname'];?></span></a></li>
			<?php $n++;}unset($n); ?>
          </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<?php echo runhook('glogal_menu')?>
        </map>
          <ul class="nav navbar-nav navbar-right">
            <?php if($_userpic) { ?>
              <li><div class="mytouxiang center"><img src="<?php echo $_userpic;?>" class="img-circle" style="border: solid 1px white;"></div></li>
              <li><a href="index.php?m=member&amp;c=index&amp;a=logout" target="_blank">退出</a></li>
            <?php } else { ?>
            <li><a href="../navbar/">联系我们</a></li>
              <li><a href="index.php?m=member&amp;c=index&amp;a=public_qq_loginnew" target="_blank" class="qq_login">QQ登录</a></li>
            <?php } ?>
          </ul>
          <form action="<?php echo APP_PATH;?>index.php" method="get"  target="_blank" class="navbar-form navbar-right" rol="search">
   	    	<input type="hidden" name="m" value="search"/>
			<input type="hidden" name="c" value="index"/>
			<input type="hidden" name="a" value="init"/>
			<input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
			<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
	   	    <div class="form-group">
	   		   <input type="text" class="form-control" name="q"  id="q" placeholder="请输入关键词" />
	   	    </div>
	        <button type="submit" class="btn btn-default">搜索</button>
	     </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!--NAV 导航区 结束-->

<!-- Header 区域开始 -->

<header class="jumbotron subhead" style="background: #E16903">
    <div class="container">
    	<div class="logo-desc">
    		<h1><strong>赣州律师网</strong></h1>
       		<p>www.lvshi0797.com</p>
    	</div>
      
        <a href="<?php echo siteurl($siteid);?>/"><img alt="赣州律师网 使弱者得到保护，使强者得到公正
使每个人感到公平公正" style="width: 100%;" src="<?php echo IMG_PATH;?>badguy/resource/banner.gif" /></a>
        <div style="clear: both;"></div>
    </div>
</header>

<!-- Header 区域结束 -->




 
</div>