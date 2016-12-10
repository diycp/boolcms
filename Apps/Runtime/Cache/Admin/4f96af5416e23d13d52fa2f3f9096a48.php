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


    

<div id="urHere">BoolCMS 管理中心<b>></b><strong>自定义导航栏</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="/bool_cms/admin.php/Menu/index" class="actionBtn">返回列表</a>自定义导航栏</h3>
            <script type="text/javascript">
     
     $(function(){ $(".idTabs").idTabs(); });
     
    </script>
    <div class="idTabs">
      <ul class="tab">
        <li><a href="#nav_add">添加站内导航</a></li>
        <!--<li><a href="#nav_defined">添加自定义链接</a></li>-->
      </ul>
      <div class="items">
        <div id="nav_add">
         <form action="/bool_cms/admin.php/Menu/edit/id/5" method="post">
          <table width="100%" border="0" cellpadding="5" cellspacing="1" class="tableBasic">
              <!--id-->
              <input type="hidden" name="child_id" value="<?php echo ($info["child_id"]); ?>"/>
           <tr>
            <td width="80" height="35" align="right">导航名称</td>
            <td>
             <input type="text" id="cat_name" name="cat_name" value="<?php echo ($info["cat_name"]); ?>" size="40" class="inpMain" />
            </td>
           </tr>
           <tr>
            <td height="35" align="right">位置</td>
            <td>
             <label for="type_0">
              <input type="radio" name="type" id="type_main" value="main" <?php echo ($info['type']=='main')?'checked="checked"':null;?>  onChange="callback('/bool_cms/admin.php/Menu/AjaxMenu',this.value)">
              主导航</label>
             <label for="type_1">
              <input type="radio" name="type" id="type_top" value="top" <?php echo ($info['type']=='top')?'checked="checked"':null;?> onChange="callback('/bool_cms/admin.php/Menu/AjaxMenu',this.value)">
              顶部</label>
             <label for="type_2">
              <input type="radio" name="type" id="type_bottom" value="bottom" <?php echo ($info['type']=='bottom')?'checked="checked"':null;?> onChange="callback('/bool_cms/admin.php/Menu/AjaxMenu',this.value)">
              底部</label>
            </td>
           </tr>
           <tr>
              <tr>
                  <td height="35" align="right">状态</td>
                  <td>
                      <label for="type_0">
                          <input type="radio" name="status" id="type_0" value="0" <?php echo $info['status']==0 ?'checked="true"':null;?>>
                          正常</label>
                      <label for="type_1">
                          <input type="radio" name="status" id="type_1" value="1"  <?php echo $info['status']==1 ?'checked="true"':null;?>>
                          隐藏</label>
                  </td>
              </tr>
              <tr>
            <td height="35" align="right">上级分类</td>
            <td id="parent">
              <select name="parent_id" class="menu">
                            <option value="0">顶级</option>
              </select>
            </td>
           </tr>
           <tr>
            <td height="35" align="right">排序</td>
            <td>
             <input type="text" name="sort" size="5" class="inpMain" value="<?php echo ($info["sort"]); ?>"/>
            </td>
           </tr>
           <tr>
                  <td height="35" align="right">链接地址</td>
                  <td>
                      <input type="text" name="link" value="<?php echo ($info["link"]); ?>" size="80" class="inpMain" />
                  </td>
           </tr>
           <tr>
              <td height="35" align="right">关联单页</td>
              <td>
                  <select name="page_id">
                      <option value="0">暂无</option>

                      <?php if(is_array($page_list)): $i = 0; $__LIST__ = $page_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php echo ($info['page_id']==$vo['id']?'selected="selected"':null); ?> ><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>    
                  </select>
              </td>
           </tr>
           <tr>
              <td height="35" align="right">关联内容列表</td>
              <td>
                  <select name="cont_id">
                      <option value="0">暂无</option>

                      <?php if(is_array($menu_list)): $i = 0; $__LIST__ = $menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["child_id"]); ?>" <?php echo ($info['cont_id']==$vo['child_id']?'selected="selected"':null); ?>> <?php echo ($vo['level']?'├':null); echo str_repeat('┈',$vo['level']); echo ($vo["cat_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>    
                  </select>
              </td>
           </tr>
           <tr>
            <td></td>
            <td>
             <input class="btn" type="submit" value="提交" />
            </td>
           </tr>
          </table>
         </form>
        </div>

      </div>
    </div>
           </div>
 </div>
<script>

    //打印输出无限级分类
    function callback(url,value){

        $('.menu').html('<option value="0">顶级</option>');
        $.get(url, { type: value },
                function(data){
//                    console.log(data);
                    var str='';
                    var prefix='├';
                    var self_id=<?php echo ($info["child_id"]); ?>; //自己id
                    $.each(data,function(k,v){
                        var counts=parseInt(v.level);   //转为整数
                        //无限级前缀---
                        for(var i=0;i< counts;i++){
                            prefix+='┈';
                            console.log(v.level);
                        }

                        //禁止或隐藏自身选项
                        if(v.child_id==self_id){
                            var disableds='disabled="disabled" style="background:#60BBFF;"';
                        }else{
                            var disableds='';
                        }

                        str+='<option value="'+v.child_id+'" id="list'+v.child_id+'" '+disableds+'>'+prefix+v.cat_name+'</option>';
                        prefix='├';
                    });

                    $('.menu').append(str);
                }
        );
    }

    $(function(){
        var checked_radio='<?php echo ($info["type"]); ?>';
        $("#type_"+checked_radio).change();
        var checked_num=<?php echo ($info["parent_id"]); ?>;
        var self_id=<?php echo ($info["child_id"]); ?>;
        setTimeout(function () {
            $('#list'+checked_num).attr("selected",true);
            $('#list'+self_id).attr("disabled ","disabled");
        }, 300);

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