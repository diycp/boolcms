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


    

   <!-- 当前位置 -->
<div id="urHere">BoolCMS 管理中心<b>></b><strong>网站管理员</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="/bool_cms/admin.php/Admin/add" class="actionBtn">添加管理员</a>网站管理员</h3>
  <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <th width="30" align="center">编号</th>
      <th align="left">管理员名称</th>
      <th align="center">E-mail地址</th>
      <th align="center">添加时间</th>
      <th align="center">最后登录时间</th>
      <th align="center">操作</th>
     </tr>

     <?php if(is_array($admin_list)): $i = 0; $__LIST__ = $admin_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td align="center"><?php echo ($vo["id"]); ?></td>
        <td><?php echo ($vo["username"]); ?></td>
        <td align="center"><?php echo ($vo["email"]); ?></td>
        <td align="center"><?php echo date('Y-m-d',$vo['add_time']);?></td>
        <td align="center"><?php echo date('Y-m-d H:i:s',$vo['last_time']);?></td>
        <td align="center">
          <a href="/bool_cms/admin.php/Admin/edit/id/<?php echo ($vo["id"]); ?>">编辑</a> | 
          <a href="javascript:;" onclick="deletes('/bool_cms/admin.php/Admin/del/id/<?php echo ($vo["id"]); ?>')">删除</a>
        </td>
       </tr><?php endforeach; endif; else: echo "" ;endif; ?> 

  </table>
                       </div>
 </div>
<script>
    $(function(){
        $('.manager').parent().parent().addClass('cur');
    });

    //删除
    function deletes(url){
        layer.confirm('你真的要删除吗?', {icon: 3, title:'提示'}, function(index){
            location.href=url;
            layer.close(index);
        });
    }
    
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