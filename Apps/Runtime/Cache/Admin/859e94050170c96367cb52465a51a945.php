<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Bool CMS 管理中心</title>
    <meta name="Copyright" content="Douco Design." />

    <meta http-equiv="Expires" CONTENT="0">
    <meta http-equiv="Cache-Control" CONTENT="no-cache">
    <meta http-equiv="Pragma" CONTENT="no-cache">

    <link href="/bool_cms/Public/Admin/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/bool_cms/Public/Admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="/bool_cms/Public/Admin/js/global.js"></script>
    <script type="text/javascript" src="/bool_cms/Public/Admin/js/jquery.tab.js"></script>
    <script type="text/javascript" src="/bool_cms/Public/Admin/layer/layer.js"></script>
</head>
<body>
<div id="dcWrap"> <div id="dcHead">
    <div id="head">
        <div class="logo"><a href="index.html"><img src="/bool_cms/Public/Admin/images/dclogo.gif" alt="logo" width="130"></a></div>
        <div class="nav">
            <ul>
                <li class="M"><a href="JavaScript:void(0);" class="topAdd">新建</a>
                    <div class="drop mTopad">
                        <a href="/bool_cms/admin.php/Content">发布内容</a> 
                        <a href="/bool_cms/admin.php/Menu/">自定义导航</a> 
                        <a href="/bool_cms/admin.php/Show/">首页幻灯</a> 
                        <a href="/bool_cms/admin.php/Page/">单页面</a> 
                        <a href="/bool_cms/admin.php/Admin/">管理员</a> 
                        <a href="/bool_cms/admin.php/Back/">数据备份</a> 
                    </div>
                </li>
                <li><a href="" target="_blank">查看站点</a></li>
                <li><a href="">清除缓存</a></li>
                <li><a href="" target="_blank">帮助</a></li>
                <li class="noRight"><a href="">Bool CMS</a></li>
            </ul>
            <ul class="navRight">
                <li class="M noLeft"><a href="JavaScript:void(0);">您好，admin</a>
                    <div class="drop mUser">
                        <a href="/bool_cms/admin.php/Admin/">编辑我的个人资料</a>
                        <!-- <a href="manager.php?rec=cloud_account">设置云账户</a> -->
                    </div>
                </li>
                <li class="noRight"><a href="/bool_cms/admin.php/Login/loginout">退出</a></li>
            </ul>
        </div>
    </div>
</div>
    <!-- dcHead 结束 --> <div id="dcLeft"><div id="menu">
        <ul class="top">
            <li><a href="/bool_cms/admin.php/Index"><i class="home"></i><em>管理首页</em></a></li>
        </ul>
        <ul>
            <li><a href="/bool_cms/admin.php/Config/"><i class="system"></i><em>系统设置</em></a></li>
            <li><a href="/bool_cms/admin.php/Menu/"><i class="nav"></i><em>管理导航栏</em></a></li>
            <li><a href="/bool_cms/admin.php/Show/"><i class="show"></i><em>幻灯广告</em></a></li>
            <li><a href="/bool_cms/admin.php/Page/"><i class="page"></i><em>单页面管理</em></a></li>
        </ul>
<!--         <ul>
            <li><a href="product_category.html"><i class="productCat"></i><em>商品分类</em></a></li>
            <li><a href="product.html"><i class="product"></i><em>商品列表</em></a></li>
        </ul> -->
        <ul>
            <li><a href="/bool_cms/admin.php/Category/"><i class="articleCat"></i><em>内容分类</em></a></li>
            <li><a href="/bool_cms/admin.php/Content/"><i class="article"></i><em>内容列表</em></a></li>
        </ul>
        <ul class="bot">
            <li><a href="/bool_cms/admin.php/Back/"><i class="backup"></i><em>数据备份</em></a></li>
            <!--<li><a href="mobile.html"><i class="mobile"></i><em>手机版</em></a></li>-->
            <!-- <li><a href="theme.html"><i class="theme"></i><em>设置模板</em></a></li> -->
            <li><a href="/bool_cms/admin.php/Admin/"><i class="manager"></i><em>网站管理员</em></a></li>
            <!-- <li><a href="manager.php?rec=manager_log"><i class="managerLog"></i><em>操作记录</em></a></li> -->
        </ul>
    </div></div>
    <div id="dcMain"> <!-- 当前位置 -->


    

<div id="urHere">BoolCMS 管理中心</div>

 <div id="index" class="mainBox" style="padding-top:18px;height:auto!important;height:550px;min-height:550px;">
      <div class="warning">
          您还没有删除 install 文件夹，出于安全的考虑，我们建议您删除 install 文件夹。
      </div>
    
   <div id="douApi"></div>
      <div class="indexBox">
    <div class="boxTitle">单页面快速管理</div>
    <ul class="ipage">
      
     <a href="page.php?rec=edit&id=1">公司简介</a> 
      
     <a href="page.php?rec=edit&id=2" class="child1">企业荣誉</a> 
      
     <a href="page.php?rec=edit&id=3" class="child1">发展历程</a> 
      
     <a href="page.php?rec=edit&id=4" class="child1">联系我们</a> 
      
     <a href="page.php?rec=edit&id=5">人才招聘</a> 
      
     <a href="page.php?rec=edit&id=6">营销网络</a> 
          <div class="clear"></div>
    </ul>
   </div>
   <table width="100%" border="0" cellspacing="0" cellpadding="0" class="indexBoxTwo">
    <tr>
     <td width="65%" valign="top" class="pr">
      <div class="indexBox">
       <div class="boxTitle">网站基本信息</div>
       <ul>
        <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
         <tr>
          <td width="120">单页面数：</td>
          <td><strong>6</strong></td>
          <td width="100">文章总数：</td>
          <td><strong>10</strong></td>
         </tr>
         <tr>
          <td>商品总数：</td>
          <td><strong>15</strong></td>
          <td>系统语言：</td>
          <td><strong>zh_cn</strong></td>
         </tr>
         <tr>
          <td>URL 重写：</td>
          <td><strong>关闭<a href="system.php" class="cueRed ml">（点击开启）</a> 
           </strong></td>
          <td>编码：</td>
          <td><strong>UTF-8</strong></td>
         </tr>
         <tr>
          <td>站点地图：</td>
          <td><strong>开启</strong></td>
          <td>站点模板：</td>
          <td><strong>default</strong></td>
         </tr>
         <tr>
          <td>Bool CMS版本：</td>
          <td><strong>v1.0</strong></td>
          <td>安装日期：</td>
          <td><strong>2016-02-25</strong></td>
         </tr>
        </table>
       </ul>
      </div>
     </td>
     <td valign="top" class="pl">
      <div class="indexBox">
       <div class="boxTitle">管理员  登录记录</div>
       <ul>
        <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
         <tr>
          <th width="45%">IP地址</th>
          <th width="55%">操作时间</th>
         </tr>
                  <tr>
          <td align="center">127.0.0.1</td>
          <td align="center">2016-02-25 23:29:08</td>
         </tr>
                  <tr>
          <td align="center">127.0.0.1</td>
          <td align="center">2016-02-25 13:48:48</td>
         </tr>
                  <tr>
          <td align="center">127.0.0.1</td>
          <td align="center">2013-10-16 09:43:01</td>
         </tr>
                  <tr>
          <td align="center">127.0.0.1</td>
          <td align="center">2013-10-16 09:42:58</td>
         </tr>
                 </table>
       </ul>
      </div>
     </td>
    </tr>
   </table>
   <div class="indexBox">
    <div class="boxTitle">服务器信息</div>
    <ul>
     <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
         <tr>
             <td><strong>主机名IP端口：</strong></td>
             <td colspan="5"><?php echo $_SERVER['SERVER_NAME'] ."( $_SERVER[SERVER_PORT]端口 )";?></td>
         </tr>
      <tr>
       <td width="90" valign="top"><strong>PHP 版本：</strong></td>
       <td valign="top"><?php echo PHP_VERSION;?> </td>
       <td width="100" valign="top"><strong>MySQL 版本：</strong></td>
       <td valign="top"><?php echo ($system_info["mysql"]); ?></td>
       <td width="90" valign="top"><strong>操作系统：</strong></td>
       <td valign="top"><?php echo ($system_info["system"]); ?></td>
      </tr>
      <tr>
       <td valign="top"><strong>上传限制：</strong></td>
       <td valign="top"><?php echo ($system_info["upload_size"]); ?></td>
       <td valign="top"><strong>服务器：</strong></td>
       <td valign="top"><?php echo ($_SERVER['SERVER_SOFTWARE']); ?></td>
       <td valign="top"><strong>GD 库版本：</strong></td>
       <td valign="top"><?php echo ($system_info["gd"]); ?></td>
      </tr>
      <tr>
          <td><strong>Think版本：</strong></td>
          <td><?php echo THINK_VERSION;?></td>
          <td><strong>程序目录：</strong></td>
          <td><?php echo dirname( THINK_PATH );?></td>
          <td><strong>Zend版本：</strong></td>
          <td><?php echo zend_version();?></td>
      </tr>
      <tr>
          <td><strong>执行时间限制：</strong></td>
          <td><?php echo ($system_info["exec_time"]); ?></td>
          <td><strong>服务器时间：</strong></td>
          <td><?php echo date('Y-m-d H:i:s',time() );?></td>
          <td><strong>剩余空间：</strong></td>
          <td><?php echo ($system_info["disk_free"]); ?></td>
      </tr>
     </table>
    </ul>
   </div>
   <div class="indexBox">
    <div class="boxTitle">系统开发</div>
    <ul>
     <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
      <tr>
       <td width="120"> Bool CMS官网： </td>
       <td><a href="http://www.douco.com" target="_blank">http://www.douco.com</a></td>
      </tr>
      <tr>
       <td> 贡献者： </td>
       <td>bool</td>
      </tr>
      <tr>
       <td> 联系我们： </td>
       <td>
           <a href="http://www.douco.com/license.html" target="_blank">
                <img  style="CURSOR: pointer" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=81001985&o=boolcms&q=7', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');"  border="0" SRC=http://wpa.qq.com/pa?p=1:81001985:3 alt="点击这里给我发消息">
                &nbsp; &nbsp;<a target="_blank" href="http://amos1.taobao.com/msg.ww?v=2&uid=taobao181860&s=1" ><img border="0" src="http://amos1.taobao.com/online.ww?v=2&uid=taobao181860&s=1" alt="点击这里给我发消息" /></a>
           </a>
       </td>
      </tr>
     </table>
    </ul>
   </div>
    
  </div>
 </div>
<script>
    $(function(){
      $('.home').parent().parent().addClass('cur');
    });
</script>


        <div class="clear"></div>
        <div id="dcFooter">
            <div id="footer">
                <div class="line"></div>
                <ul>
                    版权所有 © 2013-2016 布尔网络科技有限公司，并保留所有权利。
                </ul>
            </div>
        </div><!-- dcFooter 结束 -->
        <div class="clear"></div> </div>
</body>
</html>