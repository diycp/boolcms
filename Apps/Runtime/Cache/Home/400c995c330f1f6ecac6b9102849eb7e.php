<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo ($system_config["language"]); ?>" />
<meta name="keywords" content="<?php echo ($system_config["keywords"]); ?>" />
<meta name="description" content="<?php echo ($system_config["description"]); ?>" />
<title><?php echo ($system_config["title"]); ?></title>
<link href="/bool_cms/Public/Home/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/bool_cms/Public/Home/js/jquery.min.js"></script>
<script type="text/javascript" src="/bool_cms/Public/Home/js/global.js"></script>
<script type="text/javascript" src="/bool_cms/Public/Home/js/slide_show.js"></script>
</head>
<body>
<div id="wrapper"> <div id="top">
 <div class="wrap">
    <ul class="topNav">

    <!-- 顶部导航栏 -->
    <?php if(is_array($top_list)): $i = 0; $__LIST__ = $top_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['type'] == 'top' ): ?><li><a href="<?php echo ($vo["link"]); ?>"><?php echo ($vo["cat_name"]); ?></a><s></s></li>
      <?php else: endif; endforeach; endif; else: echo "" ;endif; ?> 

      <li><a href="javascript:AddFavorite('/bool_cms/index.php', '<?php echo ($system_config["title"]); ?>')">收藏本站</a></li>
  </ul>
 </div>
</div>
<div id="header">
 <div class="wrap">

 <!-- logo -->
  <ul class="logo">
   <a href="/bool_cms/index.php"><img src="/bool_cms/Public/<?php echo ($system_config["logo"]); ?>" alt="<?php echo ($system_config["title"]); ?>" title="<?php echo ($system_config["title"]); ?>" /></a>
  </ul>

  <!-- 搜索 -->
  <ul class="search">
   <div class="searchBox">
    <form name="search" id="search" method="get" action="http://localhost/dede/douphp/">
     <label for="keyword"></label>
     <input name="s" type="text" class="keywords" title="输入您要搜索的产品名称" autocomplete="off" onclick="formClick(this,'产品搜索')" value="产品搜索" size="32" maxlength="128">
     <input type="submit" class="btnSearch" value="提交">
    </form>
   </div>
  </ul>

 </div>
</div>

<div id="mainNav">
 <ul class="wrap">


<!-- 第一级菜单 -->
<?php if(is_array($main_list)): $k = 0; $__LIST__ = $main_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li <?php echo $vo['child_id']==I('get.parent_id/d')?'class="cur"':null;?> >

  <?php if($vo['parent_id'] == 0 ): if($vo['page_id']){ $link='/bool_cms/index.php/page/id/'.$vo['page_id'].'/parent_id/'.$v['child_id']; }else if($vo['cont_id']){ $link='/bool_cms/index.php/lists/id/'.$vo['cont_id']; }else{ $link=$vo['link']; } ?>
    <a href="<?php echo ($link); ?>" <?php echo $k==1?'class="first"':null;?>  <?php echo $k==count($main_list)?'class="last"':null ;?> ><?php echo ($vo["cat_name"]); ?></a>

      <!-- 第二级菜单 -->
      <ul>
        <?php if(is_array($main_list)): $i = 0; $__LIST__ = $main_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if($v['page_id']){ $links='/bool_cms/index.php/page/id/'.$v['page_id'].'/parent_id/'.$v['child_id']; }else if($v['cont_id']){ }else{ $links=$v['link']; } ?>
          <?php if($vo['child_id'] == $v['parent_id'] ): ?><li>  
                <a href="<?php echo ($links); ?>"><?php echo ($v["cat_name"]); ?></a> 
              </li>
          <?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
      </ul><?php endif; ?>

  </li><?php endforeach; endif; else: echo "" ;endif; ?> 
   
    <div class="clear"></div>
 </ul>
</div>


﻿


 <div id="index" class="wrap mb"> <div class="slideShow">
 <ul class="slides">
<!-- 图片轮播 -->
 <?php if(is_array($slide)): $i = 0; $__LIST__ = $slide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
      <a href="<?php echo ($vo["link"]); ?>" target="_blank" style="background-image:url(/bool_cms/Public/<?php echo ($vo["img"]); ?>)"></a>
    </li><?php endforeach; endif; else: echo "" ;endif; ?>
   </ul>
</div>

<script type="text/javascript">

$(document).ready(function(){
 $('.slides').bxSlider({
   mode: 'fade'
 });
})


</script>  <div id="indexLeft"> 
      <div class="incBox">
 <h3><a href="http://localhost/dede/douphp/product_category.php">产品展示</a></h3>
 <ul class="recommendProduct">
    <li>
  <p class="img"><a href="http://localhost/dede/douphp/product.php?id=7"><img src="/bool_cms/Public/Home/picture/7_thumb.jpg" width="135" height="135" /></a></p>
  <p class="name"><a href="http://localhost/dede/douphp/product.php?id=7">MacBook Air笔记本电脑</a></p>
  <p class="price">￥7,650.00 元</p>
  </li>
    <li>
  <p class="img"><a href="http://localhost/dede/douphp/product.php?id=15"><img src="/bool_cms/Public/Home/picture/15_thumb.jpg" width="135" height="135" /></a></p>
  <p class="name"><a href="http://localhost/dede/douphp/product.php?id=15">亨氏Heinz金装粒粒面鳕鱼胡萝卜面</a></p>
  <p class="price">￥68.00 元</p>
  </li>
    <li>
  <p class="img"><a href="http://localhost/dede/douphp/product.php?id=14"><img src="/bool_cms/Public/Home/picture/14_thumb.jpg" width="135" height="135" /></a></p>
  <p class="name"><a href="http://localhost/dede/douphp/product.php?id=14">PES宽口套装奶瓶</a></p>
  <p class="price">￥280.00 元</p>
  </li>
    <li class="clearBorder">
  <p class="img"><a href="http://localhost/dede/douphp/product.php?id=13"><img src="/bool_cms/Public/Home/picture/13_thumb.jpg" width="135" height="135" /></a></p>
  <p class="name"><a href="http://localhost/dede/douphp/product.php?id=13">法国合生元奶粉</a></p>
  <p class="price">￥128.00 元</p>
  </li>
   </ul>
</div>
      <div class="incBox">
 <h3>公司简介</h3>
 <div class="about">
  <p><img src="/bool_cms/Public/Home/picture/img_company.jpg" /></p>
  <dl>
   <dt>Bool CMs轻量级企业网站管理系统</dt>
   <dd>Bool CMs是一款轻量级企业网站管理系统，基于PHP+Mysql架构的，可运行在Linux、Windows、MacOSX、Solaris等各种平台上，系统搭载Smarty模板引擎，支持自定义伪静态，前台模板采用DIV+CSS设计，后台界面设计简洁明了，功能简单易具有良好的用户体验，稳定性好、扩展性及安全性强，可面向中小型站点提供网站建设解决方案。</dd>
  </dl>
  <div class="clear"></div>
  <a href="http://localhost/dede/douphp/page.php?id=1" class="aboutBtn">查看详细公司简介</a>
 </div>
</div> </div>
  <div id="indexRight">
      <div class="incBox">
 <h3><a href="http://localhost/dede/douphp/article_category.php">新闻中心</a></h3>
 <ul class="recommendArticle">
    <li><b>06-26</b><a href="http://localhost/dede/douphp/article.php?id=10">移动互联网产品设计的核心要素有哪些？</a></li>
    <li><b>06-26</b><a href="http://localhost/dede/douphp/article.php?id=9">详解如何利用RSS进行网络推广</a></li>
    <li><b>06-26</b><a href="http://localhost/dede/douphp/article.php?id=8">企业网站文章标题该如何去撰写</a></li>
    <li><b>06-26</b><a href="http://localhost/dede/douphp/article.php?id=7">移动互联网发展下的企业网变革</a></li>
    <li class="last"><b>06-26</b><a href="http://localhost/dede/douphp/article.php?id=6">新手如何选购虚拟主机</a></li>
   </ul>
</div>
      <div class="contact">
 <h3>联系我们</h3>
 <div class="box">
  <dl><dt class="address"></dt><dd>公司地址：<?php echo ($system_config["address"]); ?></dd></dl>
  <dl><dt class="tel"></dt><dd>销售热线：<?php echo ($system_config["tel"]); ?></dd></dl>
  <dl><dt class="fax"></dt><dd>传真号码：<?php echo ($system_config["fax"]); ?></dd></dl>
  <dl><dt class="url"></dt><dd>公司网址：<a href="<?php echo ($system_config["url"]); ?>"><?php echo ($system_config["url"]); ?></a> </dd></dl>
  <dl><dt class="email"></dt><dd>电子邮箱：<?php echo ($system_config["email"]); ?></dd></dl>
 </div>
</div>
 </div>
  <div class="clear"></div>
 </div>


   <div id="footer">
 <div class="wrap">
  <div class="footNav">
  <!-- 底部导航栏 -->
<?php if(is_array($bottom_list)): $i = 0; $__LIST__ = $bottom_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['type'] == 'bottom' ): ?><a href="<?php echo ($vo["link"]); ?>"><?php echo ($vo["cat_name"]); ?></a><i>|</i>
  <?php else: endif; endforeach; endif; else: echo "" ;endif; ?> 

  <div class="copyRight"><?php echo ($system_config["copy"]); ?> <a href='/bool_cms/index.php' target='_blank'><?php echo ($system_config["title"]); ?></a> </div>

  </div>
</div>
 </div>
</body>
</html>