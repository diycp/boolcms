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
<div id="urHere">BoolCMS管理中心<b>></b><strong>数据备份</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="/bool_cms/admin.php/Back/recovery" class="actionBtn">恢复备份</a>数据备份</h3>
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <form name="myform" method="post" action="/bool_cms/admin.php/Back/backup">
      <tr>
       <th align="center">
        <input name='checkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check' checked>
       </th>
       <th align="left">表名</th>
       <th align="center">类型</th>
       <th align="center">记录数</th>
       <th align="center">数据</th>
       <th align="center">索引</th>
       <th align="center">编码</th>
       <th align="center">注释</th>
       <th align="center">碎片</th>
       <th align="center">创建时间</th>
      </tr>

<?php if(is_array($tables)): $i = 0; $__LIST__ = $tables;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
       <td align="center"><input type='checkbox' name='tables[]' value='<?php echo ($vo["table_name"]); ?>' checked></td>
       <td align="left"><?php echo ($vo["table_name"]); ?></td>
       <td align="center"><?php echo ($vo["engine"]); ?></td>
       <td align="center"><?php echo ($vo["table_rows"]); ?></td>
       <td align="center"><?php echo transByte($vo['data_length']);?></td>
       <td align="center"><?php echo transByte($vo['index_length']);?></td>
       <td align="center"><?php echo ($vo["table_collation"]); ?></td>
       <td align="center"><?php echo ($vo["table_comment"]); ?></td>
       <td align="center"><?php echo ($vo["data_free"]); ?></td>
       <td align="center"><?php echo ($vo["create_time"]); ?></td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>

            <tr>
       <td colspan="10" align="right">数据库共 <?php echo count($tables);?> 张表 </td>
      </tr>
      <tr>
       <td colspan="10" align="center">分卷备份设置</td>
      </tr>
      <tr>
       <td colspan="10" align="center">
        备份文件名：<input type="text" class="inpMain" name="file_name" value="backup<?php echo date('Ymd_His',time() );?>" size='40'>
        文件大小：<input type="text" class="inpMain" name="size" value="2048" size="5">K

       </td>
      </tr>
      <tr>
       <td height="26" colspan="10">
        <input type="submit"  class="btn" value="确定备份"  onClick="/bool_cms/admin.php/Back/backup">
       </td>
      </tr>
     </form>
    </table>
           </div>
 </div>
 <script>
    $(function(){
        $('.backup').parent().parent().addClass('cur');
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