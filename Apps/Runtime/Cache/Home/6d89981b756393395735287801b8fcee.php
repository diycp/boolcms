<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    
      <li><a href="http://localhost/dede/douphp/m">手机版</a><s></s></li>
       
      <li><a href="http://localhost/dede/douphp/.php">测试</a><s></s></li>
    
      <li><a href="javascript:AddFavorite('/bool_cms/index.php', '<?php echo ($system_config["title"]); ?>')">收藏本站</a></li>
  </ul>
 </div>
</div>
<div id="header">
 <div class="wrap">
  <ul class="logo">
   <a href="/bool_cms/index.php"><img src="/bool_cms/Public/<?php echo ($system_config["logo"]); ?>" alt="<?php echo ($system_config["title"]); ?>" title="<?php echo ($system_config["title"]); ?>" /></a>
  </ul>
  <!-- 搜索 -->
  <ul class="search">
   <div class="searchBox">
    <form name="search" id="search" method="get" action="http://localhost/dede/douphp/">
     <label for="keyword"></label>
     <input name="s" type="text" class="keyword" title="输入您要搜索的产品名称" autocomplete="off" onclick="formClick(this,'产品搜索')" value="产品搜索" size="32" maxlength="128">
     <input type="submit" class="btnSearch" value="提交">
    </form>
   </div>
  </ul>

 </div>
</div>

<div id="mainNav">
 <ul class="wrap">

<?php echo dump($main_list);?>
<!-- 第一级菜单 -->
<?php if(is_array($main_list)): $i = 0; $__LIST__ = $main_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="cur"><a href="<?php echo ($vo["link"]); ?>" class="first"><?php echo ($vo["cat_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?> 

  <li><a href="http://localhost/dede/douphp/page.php?id=1">公司简介</a> 
      <ul>
      <li><a href="http://localhost/dede/douphp/page.php?id=2">企业荣誉</a> </li>
     </ul>
  </li>
   

    <div class="clear"></div>
 </ul>
</div>


{__CONTENT__}

   <div id="footer">
 <div class="wrap">
  <div class="footNav"><a href="http://localhost/dede/douphp/page.php?id=1">公司简介</a><i>|</i><a href="http://localhost/dede/douphp/page.php?id=6">营销网络</a><i>|</i><a href="http://localhost/dede/douphp/page.php?id=2">企业荣誉</a><i>|</i><a href="http://localhost/dede/douphp/page.php?id=5">人才招聘</a><i>|</i><a href="http://localhost/dede/douphp/page.php?id=4">联系我们</a><i>|</i><a href="http://localhost/dede/douphp/m">手机版</a></div>

  <div class="copyRight"><?php echo ($system_config["copy"]); ?> <a href='/bool_cms/index.php' target='_blank'><?php echo ($system_config["title"]); ?></a> </div>

  </div>
</div>
 </div>
</body>
</html>