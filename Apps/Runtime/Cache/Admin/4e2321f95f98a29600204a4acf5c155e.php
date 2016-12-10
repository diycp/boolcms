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
<div id="urHere">BoolCMS 管理中心<b>></b><strong>编辑内容</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="/bool_cms/admin.php/Content/index" class="actionBtn">内容列表</a>编辑内容</h3>

    <form action="/bool_cms/admin.php/Content/edit/id/21" method="post" enctype="multipart/form-data">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="90" align="right">内容名称</td>
       <td>
        <input type="text" name="name" value="<?php echo ($info["name"]); ?>" size="80" class="inpMain" required/>
       </td>
      </tr>
      <tr>
       <td align="right">内容分类</td>
       <td>
<select name="parent_id">
         <option value="0">未分类</option>
  <!-- 分类列表 -->
  <?php if(is_array($menu_list)): $i = 0; $__LIST__ = $menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["child_id"]); ?>"
          <?php echo $vo['child_id']==$info['parent_id']?'selected="selected"':null ;?> 
          > <?php echo ($vo['level']?'├':null); echo str_repeat('┈',$vo['level']); echo ($vo["cat_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?> 
</select>
       </td>
      </tr>
      <tr>
       <td align="right">缩略图</td>
         <td>
          <input type="file" name="image" size="38" class="inpFlie" />
          <img src="/bool_cms/Public/Admin/images/icon_no.png"> &nbsp;&nbsp;&nbsp;&nbsp;
          略缩&nbsp;<input type="checkbox" checked="checked" name="thumb" value="1"> &nbsp;&nbsp;&nbsp;&nbsp;
          水印&nbsp;<input type="checkbox" name="water" value="1"> 
        </td>
      </tr>
      <tr>
       <td align="right">辅助选项</td>
         <td>
          置顶&nbsp;<input type="checkbox" name="is_top" value="1" <?php echo $info['is_top']==1?'checked="checked"':null;?> > &nbsp;&nbsp;&nbsp;&nbsp;
          推荐&nbsp;<input type="checkbox" name="is_recommend" value="1" <?php echo $info['is_recommend']==1?'checked="checked"':null;?> > &nbsp;&nbsp;&nbsp;&nbsp;
          热门&nbsp;<input type="checkbox" name="is_hot" value="1" <?php echo $info['is_hot']==1?'checked="checked"':null;?> > 
        </td>
      </tr>
      <tr>
       <td align="right" valign="top">内容描述</td>
       <td>
        <!-- KindEditor -->   
      <link rel="stylesheet" href="/bool_cms/Public/Admin/js/kindeditor/themes/default/default.css" />
      <link rel="stylesheet" href="/bool_cms/Public/Admin/js/kindeditor/plugins/code/prettify.css" />
      <script charset="utf-8" src="/bool_cms/Public/Admin/js/kindeditor/kindeditor.js"></script>
      <script charset="utf-8" src="/bool_cms/Public/Admin/js/kindeditor/lang/zh_CN.js"></script>
      <script charset="utf-8" src="/bool_cms/Public/Admin/js/kindeditor/plugins/code/prettify.js"></script>
        <script>
          KindEditor.ready(function(K) {
            var editor1 = K.create('textarea[name="content"]', {
              cssPath : '/bool_cms/Public/Admin/js/kindeditor/plugins/code/prettify.css',
              uploadJson : '/bool_cms/Public/Admin/js/kindeditor/php/upload_json.php',
              fileManagerJson : '/bool_cms/Public/Admin/js/kindeditor/php/file_manager_json.php',
              allowFileManager : true,
              afterCreate : function() {
                var self = this;
                K.ctrl(document, 13, function() {
                  self.sync();
                  K('form[name=example]')[0].submit();
                });
                K.ctrl(self.edit.doc, 13, function() {
                  self.sync();
                  K('form[name=example]')[0].submit();
                });
              }
            });
            prettyPrint();
          });
        </script>
        <!-- /KindEditor -->
        <textarea id="content" name="content" style="width:780px;height:400px;" class="textArea"><?php echo ($info["content"]); ?></textarea>
       </td>
      </tr>
      <tr>
       <td align="right">关键字</td>
       <td>
        <input type="text" name="keywords" value="<?php echo ($info["keywords"]); ?>" size="50" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">简单描述</td>
       <td>
        <input type="text" name="desc" value="<?php echo ($info["desc"]); ?>" size="50" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">排序</td>
       <td>
        <input type="text" name="sort" value="<?php echo ($info["sort"]); ?>" size="5" class="inpMain" />
       </td>
      </tr>

      <tr>
       <td></td>
       <td>
        <input type="hidden" name="image" value="<?php echo ($info["img"]); ?>">
        <input type="hidden" name="cont_id" value="<?php echo ($info["cont_id"]); ?>">
        <input class="btn" type="submit" value="提交" />
       </td>
      </tr>
     </table>
    </form>
       </div>
 </div>

 <script type="text/javascript">
 
 onload = function(){
   document.forms['action'].reset();
 }

 function douAction(){
     var frm = document.forms['action'];

     frm.elements['new_cat_id'].style.display = frm.elements['action'].value == 'category_move' ? '' : 'none';
 }
 
    $(function(){
        $('.article').parent().parent().addClass('cur');
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