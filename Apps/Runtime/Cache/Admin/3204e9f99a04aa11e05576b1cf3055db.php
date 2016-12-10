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
                        <a href="manager.php?rec=edit&id=1">编辑我的个人资料</a>
                        <a href="manager.php?rec=cloud_account">设置云账户</a>
                    </div>
                </li>
                <li class="noRight"><a href="login.php?rec=logout">退出</a></li>
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
    <h3><a href="/bool_cms/admin.php/Admin/index" class="actionBtn">返回列表</a>网站管理员</h3>

    <form action="/bool_cms/admin.php/Admin/edit/id/1" method="post">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="100" align="right">管理员名称</td>
       <td>
        <input type="text" name="username" size="40" class="inpMain" value="<?php echo ($info["username"]); ?>" />
       </td>
      </tr>
      <tr>
       <td width="100" align="right">E-mail地址</td>
       <td>
        <input type="text" name="email" size="40" class="inpMain" value="<?php echo ($info["email"]); ?>" />
       </td>
      </tr>
      <tr>
           <td width="100" align="right">状态</td>
              <td>
                    <label>
                        <input type="radio" name="status" id="type_0" value="0"  <?php echo $info['status']==0?'checked="true" ':null ;?>'  >
                        正常
                    </label>
                    &nbsp;&nbsp; 
                    <label>
                        <input type="radio" name="status" id="type_1" value="1" <?php echo $info['status']==1?'checked="true" ':null ;?>'>
                        隐藏
                    </label>
              </td>
      </tr>
      <tr>
       <td align="right">密码</td>
       <td>
        <input type="password" name="password" size="40" class="inpMain" value="<?php echo ($info["password"]); ?>" />
       </td>
      </tr>
      <tr>
       <td align="right">确认密码</td>
       <td>
        <input type="password" name="password_confirm" size="40" class="inpMain" value="<?php echo ($info["password"]); ?>" />
       </td>
      </tr>
      <tr>
       <td></td>
       <td>
        <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" />
        <input type="submit" class="btn" value="提交" />
       </td>
      </tr>
     </table>
    </form>
                   </div>
 </div>
<script>
    $(function(){
        $('.manager').parent().parent().addClass('cur');
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