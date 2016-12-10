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
<div id="urHere">BoolCMS 管理中心<b>></b><strong>自定义导航栏</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="/bool_cms/admin.php/Menu/add" class="actionBtn">添加导航</a>自定义导航栏</h3>
        <div class="navList">
     <ul class="tab">
      <li><a href="/bool_cms/admin.php/Menu/index/" <?php echo ( I('get.type')=='main'|| I('get.type')=='')?'class="selected"':null;?> >主导航</a></li>
      <li><a href="/bool_cms/admin.php/Menu/index/type/top" <?php echo I('get.type')=='top'?'class="selected"':null;?>>顶部</a></li>
      <li><a href="/bool_cms/admin.php/Menu/index/type/bottom" <?php echo I('get.type')=='bottom'?'class="selected"':null;?>>底部</a></li>
     </ul>

     <table width="100%" border="0" cellpadding="10" cellspacing="0" class="tableBasic">

      <tr>
       <th width="35" align="center">排序</th>
       <th width="35" align="center">ID</th>
       <th width="113" align="center">导航名称</th>
       <th align="left">链接地址</th>
       <th width="60" align="center">状态</th>
       <th width="120" align="center">操作</th>
      </tr>

<?php if(is_array($menu_list)): $i = 0; $__LIST__ = $menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
       <td align="center"><input type="text" value="<?php echo ($vo["sort"]); ?>" class="inpMain" style="width:30px; " onchange="send_sort('/bool_cms/admin.php/Menu/AjaxOrder',<?php echo ($vo["child_id"]); ?>,this.value)"/></td>
       <td><?php echo ($vo["child_id"]); ?></td>
       <td> <?php echo ($vo['level']?'├':null); echo str_repeat('┈┈',$vo['level']); echo ($vo["cat_name"]); ?></td>
       <td><?php echo $vo['link']?'<a href="'.$vo['link'].'"  target="_blank">'.mb_substr($vo['link'],0,75,'utf-8').'</a>':'暂无链接';?></td>
       <td align="center"><?php echo ($vo['status']?'[ 隐藏 ]':'[ 正常 ]'); ?></td>
       <td align="center">
           <a href="/bool_cms/admin.php/Menu/edit/id/<?php echo ($vo["child_id"]); ?>">编辑</a> |
           <a href="javascript:;" onclick="deletes('/bool_cms/admin.php/Menu/del/id/<?php echo ($vo["child_id"]); ?>')">删除</a>
       </td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
     </table>
    </div>
               </div>
 </div>
<script>
    //排序
    function send_sort(url,id,value){

        $.ajax({
            type: "POST",
            url: url,
            data:  { child_id: id,sort:value },
            success: function(msg){
                if(msg.status==0){
                    // console.log(msg.status);
                    layer.msg('修改失败!',{icon: 5});
                }

            }
        });

    }


    //删除
    function deletes(url){
        layer.confirm('你真的要删除吗?', {icon: 3, title:'提示'}, function(index){
            location.href=url;
            layer.close(index);
        });
    }

    $(function(){
      $('.nav').parent().parent().addClass('cur');
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