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

 <div class="wrap mb">
  <div id="pageLeft"> <div class="treeBox">
 <h3><?php echo ($child_menu[0]['parent_name']); ?></h3>
 <ul>
<!--   <li class="cur"><a href="http://localhost/dede/douphp/page.php?id=1">公司简介</a></li> -->
  <?php if(is_array($child_menu)): $i = 0; $__LIST__ = $child_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php echo $vo['page_id']==$page['id']?'class="cur"':null ;?> >
        <a href=" /bool_cms/index.php/page/id/<?php echo ($vo['page_id']); ?>/parent_id/<?php echo ($v['child_id']); ?> " ><?php echo ($vo["cat_name"]); ?></a>
      </li><?php endforeach; endif; else: echo "" ;endif; ?>

     </ul>
</div> </div>
  <div id="pageIn"> <div class="urHere">当前位置：<a href="index">首页</a><b>></b><?php echo ($page["name"]); ?></div>   
    <div id="page">
      <h1><?php echo ($page["name"]); ?></h1>
      <div class="content"> <?php echo html_entity_decode(html_entity_decode($page['content'])) ;?> </div>
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