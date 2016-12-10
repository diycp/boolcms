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
        <div class="logo"><a href="index.html"><img src="/bool_cms/Public/Admin/images/dclogo.gif" alt="logo"></a></div>
        <div class="nav">
            <ul>
                <li class="M"><a href="JavaScript:void(0);" class="topAdd">新建</a>
                    <div class="drop mTopad">
                        <a href="product.php?rec=add">商品</a> 
                        <a href="/bool_cms/admin.php/">文章</a> 
                        <a href="/bool_cms/admin.php/Menu/">自定义导航</a> 
                        <a href="show.html">首页幻灯</a> 
                        <a href="page.php?rec=add">单页面</a> 
                        <a href="manager.php?rec=add">管理员</a> 
                        <a href="link.html"></a> 
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
            <li><a href="page.html"><i class="page"></i><em>单页面管理</em></a></li>
        </ul>
        <ul>
            <li><a href="product_category.html"><i class="productCat"></i><em>商品分类</em></a></li>
            <li><a href="product.html"><i class="product"></i><em>商品列表</em></a></li>
        </ul>
        <ul>
            <li><a href="article_category.html"><i class="articleCat"></i><em>文章分类</em></a></li>
            <li><a href="article.html"><i class="article"></i><em>文章列表</em></a></li>
        </ul>
        <ul class="bot">
            <li><a href="backup.html"><i class="backup"></i><em>数据备份</em></a></li>
            <!--<li><a href="mobile.html"><i class="mobile"></i><em>手机版</em></a></li>-->
            <li><a href="theme.html"><i class="theme"></i><em>设置模板</em></a></li>
            <li><a href="manager.html"><i class="manager"></i><em>网站管理员</em></a></li>
            <li><a href="manager.php?rec=manager_log"><i class="managerLog"></i><em>操作记录</em></a></li>
        </ul>
    </div></div>
    <div id="dcMain"> <!-- 当前位置 -->


    

   <!-- 当前位置 -->
<div id="urHere">BoolCMS 管理中心<b>></b><strong>首页幻灯广告</strong> </div>   <div class="mainBox imgModule">
    <h3><a href="/bool_cms/admin.php/Show/index" class="actionBtn">添加幻灯</a>幻灯广告</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
    <tr>
       <th>添加幻灯</th>
       <th>幻灯列表</th>
     </tr>
     <tr>
      <td width="350" valign="top">

       <form action="/bool_cms/admin.php/Show/add" method="post" enctype="multipart/form-data" class="forms">

        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableOnebor">
            <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" />
         <tr>
          <td><b>幻灯名称</b>
            <input type="text" name="title" value="<?php echo ($info["title"]); ?>" size="42" class="inpMain" />
          </td>
         </tr>
         <tr>
          <td><b>幻灯图片</b>
           <input type="file" name="img" class="inpFlie" />
            <input type="text" name="img" class="inpFlie" value="<?php echo ($info["img"]); ?>"/>
          </td>
         </tr>
         <tr>
          <td><b>链接地址</b>
           <input type="text" name="link" value="<?php echo ($info["link"]); ?>" size="50" class="inpMain" />
          </td>
         </tr>
         <tr>
              <td>
                  <b>状态</b>
                    <label>
                        <input type="radio" name="status" id="type_0" value="0"  <?php echo $info['status']==0?'checked="true" ':null ;?>'  >
                        正常
                    </label>
                    <label>
                        <input type="radio" name="status" id="type_1" value="1" <?php echo $info['status']==1?'checked="true" ':null ;?>'>
                        隐藏
                    </label>
              </td>
         </tr>
         <tr>
                <td>
                    <b>启用略缩图</b>
                    <label>
                        <input type="radio" name="thumb" value="1" checked="true">
                        启用
                    </label>
                    <label>
                        <input type="radio" name="thumb"  value="0">
                        关闭
                    </label>
                </td>
            </tr>
         <tr>
         <tr>
                <td>
                    <b>添加水印</b>
                    <label>
                        <input type="radio" name="water" value="1" >
                        启用
                    </label>
                    <label>
                        <input type="radio" name="water"  value="0" checked="true">
                        关闭
                    </label>
                </td>
            </tr>
         <tr>
          <td><b>排序</b>
                <input type="text" name="sort" value="<?php echo $info['sort']?$info['sort']:10;?>" size="20" class="inpMain" />
          </td>
         </tr>
         <tr>
          <td>

           <input class="btn" type="submit" value="提交" />
          </td>
         </tr>
        </table>
       </form>

      </td>
      <td valign="top">
       <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableOnebor">
        <tr>
         <td width="100">幻灯名称</td>
         <td></td>
         <td width="50" align="center">排序</td>
         <td width="80" align="center">操作</td>
        </tr>

<?php if(is_array($show)): $i = 0; $__LIST__ = $show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
         <td><a href="/bool_cms/Public/<?php echo ($vo["img"]); ?>" target="_blank"><img src="/bool_cms/Public/<?php echo ($vo["img"]); ?>" width="100" /></a></td>
         <td><?php echo ($vo["title"]); ?></td>
         <td align="center"><input type="text" value="<?php echo ($vo["sort"]); ?>" size="2" class="inpMain"/></td>
         <td align="center">
             <a href="/bool_cms/admin.php/Show/Index/id/<?php echo ($vo["id"]); ?>">编辑</a> |
             <a href="delshow.htmlid=1">删除</a>
         </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>

       </table>
      </td>
     </tr>
    </table>
   </div>
 </div>
<script>
    $(function(){
        $('.show').parent().parent().addClass('cur');
    });

    //ajax异步提交
//    function send(){
//        $.post("/bool_cms/admin.php/Show/add", $(".forms").serializeArray(),
//                function(data){
//                    layer.msg(data);
//                    console.log(data);
//                });
//    }

</script>


        <div class="clear"></div>
        <div id="dcFooter">
            <div id="footer">
                <div class="line"></div>
                <ul>
                    版权所有 © 2013-2015 漳州豆壳网络科技有限公司，并保留所有权利。
                </ul>
            </div>
        </div><!-- dcFooter 结束 -->
        <div class="clear"></div> </div>
</body>
</html>