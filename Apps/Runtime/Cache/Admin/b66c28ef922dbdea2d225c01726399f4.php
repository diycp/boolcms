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
<div id="urHere">BoolCMS 管理中心<b>></b><strong>系统设置</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3>系统设置</h3>
    <script type="text/javascript">
     
     $(function(){ $(".idTabs").idTabs(); });
     
    </script>
    <div class="idTabs">
      <ul class="tab">
        <li><a href="#main">常规设置</a></li>
        <li><a href="#display">显示设置</a></li>-
        <li><a href="#mail">邮件服务器</a></li>
              </ul>
      <div class="items">

       <form action="/bool_cms/admin.php/Config/" method="post" enctype="multipart/form-data">

        <div id="main">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
         <tr>
           <th width="131">名称</th>
           <th>内容</th>
         </tr>

         <tr>
                <td align="right">站点标志</td>
                <td>
                    <input type="file" name="logo" size="18" />
                    <input type="hidden" name="logo" value="<?php echo $config['logo']?$config['logo']:null;?>"/>
                    <a href="/bool_cms/Public/<?php echo ($config["logo"]); ?>" target="_blank"><img src="/bool_cms/Public/<?php echo ($config["logo"]); ?>"></a>
                </td>
         </tr>
         <tr>
         <td align="right">图片水印</td>
                <td>
                    <input type="file" name="watermark" size="18" />
                    <input type="hidden" name="watermark" value="<?php echo $config['watermark']?$config['watermark']:null;?>"/>
                    <a href="/bool_cms/Public/<?php echo ($config["watermark"]); ?>" target="_blank"><img src="/bool_cms/Public/<?php echo ($config["watermark"]); ?>"></a>
                </td>
         </tr>
         <tr>
          <td align="right">站点标题</td>
          <td>
                    <input type="text" name="title" value="<?php echo ($config["title"]); ?>" size="80" class="inpMain" />
          </td>
         </tr>
         <tr>
          <td align="right">站点网址</td>
          <td>
                    <input type="text" name="url" value="<?php echo ($config["url"]); ?>" size="80" class="inpMain" />
          </td>
         </tr>
         <tr>
          <td align="right">站点关键字</td>
          <td>
                      <input type="text" name="keywords" value="<?php echo ($config["keywords"]); ?>" size="80" class="inpMain" />
          </td>
         </tr>
         <tr>
          <td align="right">站点描述</td>
          <td>
                      <input type="text" name="description" value="<?php echo ($config["description"]); ?>" size="80" class="inpMain" />
          </td>
         </tr>

          <tr>
          <td align="right">公司地址</td>
          <td>
                      <input type="text" name="address" value="<?php echo ($config["address"]); ?>" size="80" class="inpMain" />
                                </td>
         </tr>
          <tr>
          <td align="right">ICP备案号</td>
          <td>
                      <input type="text" name="icp" value="<?php echo ($config["icp"]); ?>" size="80" class="inpMain" />
                                </td>
         </tr>
         <tr>
                <td align="right">版权</td>
                <td>
                    <input type="text" name="copy" value="<?php echo ($config["copy"]); ?>" size="80" class="inpMain" />
                </td>
         </tr>
         <tr>
          <td align="right">客服电话</td>
          <td>
                      <input type="text" name="tel" value="<?php echo ($config["tel"]); ?>" size="80" class="inpMain" />
                                </td>
         </tr>
                  <tr>
          <td align="right">传真</td>
          <td>
                      <input type="text" name="fax" value="<?php echo ($config["fax"]); ?>" size="80" class="inpMain" />
                                </td>
         </tr>
                  <tr>
          <td align="right">客服QQ号码</td>
          <td>
                      <input type="text" name="qq" value="<?php echo ($config["qq"]); ?>" size="80" class="inpMain" />
                      <p class="cue">多个客服的QQ号码请以半角逗号（,）分隔，如果需要设定昵称则在号码后跟 /昵称。</p>
          </td>
         </tr>
                  <tr>
          <td align="right">邮件地址</td>
          <td>
                      <input type="text" name="email" value="<?php echo ($config["email"]); ?>" size="80" class="inpMain" />
                                </td>
         </tr>
                  <tr>
          <td align="right">网页编码</td>
          <td>
                      <select name="language">
                        <option value="utf-8" <?php echo $config['language']=='utf-8'?'selected':null ;?> >utf-8</option>
                        <option value="gbk" <?php echo $config['language']=='gbk'?'selected':null ;?>>gbk</option>
                        <option value="gb2312" <?php echo $config['language']=='gb2312'?'selected':null ;?> >gb2312</option>
                       </select>
           </td>
         </tr>

         <!--<tr>-->
          <!--<td align="right">启用验证码</td>-->
          <!--<td>-->
                      <!--<label for="captcha_0">-->
            <!--<input type="radio" name="captcha" id="captcha_0" value="0">-->
            <!--否</label>-->
           <!--<label for="captcha_1">-->
            <!--<input type="radio" name="captcha" id="captcha_1" value="1" checked="true">-->
            <!--是</label>-->
                                <!--</td>-->
         <!--</tr>-->

         <tr>
          <td align="right">统计/客服代码调用</td>
          <td>
                      <textarea name="code" cols="83" rows="5" class="textArea" /><?php echo ($config["code"]); ?></textarea>
          </td>
         </tr>

    </table>
        </div>
        <div id="display">

<!--显示设置-->
<table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
         <tr>
           <th width="131">名称</th>
           <th>内容</th>
         </tr>
    <tr>
        <td> <b>启用略缩图</b></td>
        <td>

            <label>
                <input type="radio" name="thumb" value="1" <?php echo $config['thumb']==1?'checked="true"':null ;?> >
                启用
            </label>
            <label>
                <input type="radio" name="thumb"  value="0" <?php echo $config['thumb']==0?'checked="true"':null ;?>>
                关闭
            </label>
        </td>
    </tr>
    <tr>
    <tr>
        <td><b>添加水印</b></td>
        <td>

            <label>
                <input type="radio" name="water" value="1" <?php echo $config['water']==1?'checked="true"':null ;?>>
                启用
            </label>
            <label>
                <input type="radio" name="water"  value="0" <?php echo $config['water']==0?'checked="true"':null ;?>>
                关闭
            </label>
        </td>
    </tr>
    <tr>
         <tr>
          <td align="right">缩略图</td>
          <td>
           宽度:&nbsp;<input type="text" name="thumb_width" value="<?php echo ($config["thumb_width"]); ?>" size="3" class="inpMain" />&nbsp; px
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           高度:&nbsp;<input type="text" name="thumb_height" value="<?php echo ($config["thumb_height"]); ?>" size="3" class="inpMain" />&nbsp; px
           </td>
         </tr>
        <tr>
            <td align="right">Logo</td>
            <td>
                宽度:&nbsp;<input type="text" name="logo_width" value="<?php echo ($config["logo_width"]); ?>" size="3" class="inpMain" />&nbsp; px
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                高度:&nbsp;<input type="text" name="logo_height" value="<?php echo ($config["logo_height"]); ?>" size="3" class="inpMain" />&nbsp; px
            </td>
        </tr>
        <tr>
            <td align="right">图片水印</td>
            <td>
                宽度:&nbsp;<input type="text" name="watermark_width" value="<?php echo ($config["watermark_width"]); ?>" size="3" class="inpMain" />&nbsp; px
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                高度:&nbsp;<input type="text" name="watermark_height" value="<?php echo ($config["watermark_height"]); ?>" size="3" class="inpMain" />&nbsp; px
            </td>
        </tr>
        <tr>
            <td align="right">前台幻灯</td>
            <td>
                宽度:&nbsp;<input type="text" name="show_width" value="<?php echo ($config["show_width"]); ?>" size="3" class="inpMain" />&nbsp; px
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                高度:&nbsp;<input type="text" name="show_height" value="<?php echo ($config["show_height"]); ?>" size="3" class="inpMain" />&nbsp; px
            </td>
        </tr>
</table>

        </div>

                <div id="mail">
<!--邮件设置-->
<table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
         <tr>
           <th width="131">名称</th>
           <th>内容</th>
         </tr>
                  <tr>
          <td align="right">SMTP服务器</td>
          <td>
                      <input type="text" name="mail_host" value="<?php echo ($config["mail_host"]); ?>" size="80" class="inpMain" />
                       <p class="cue">一般邮件服务器地址为：smtp.domain.com，如果是本机则对应localhost即可</p>
          </td>
         </tr>
                  <tr>
          <td align="right">服务器端口</td>
          <td>
                      <input type="text" name="mail_port" value="<?php echo ($config["mail_port"]); ?>" size="80" class="inpMain" />
                                </td>
         </tr>
                  <tr>
          <td align="right">发件邮箱</td>
          <td>
                      <input type="text" name="mail_username" value="<?php echo ($config["mail_username"]); ?>" size="80" class="inpMain" />
                                </td>
         </tr>
                  <tr>
          <td align="right">发件邮箱密码</td>
          <td>
                      <input type="password" name="mail_password" value="<?php echo ($config["mail_password"]); ?>" size="80" class="inpMain" />
                                </td>
         </tr>
                 </table>
        </div>
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
         <tr>
          <td width="131"></td>
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

<script>
    $(function(){
      $('.system').parent().parent().addClass('cur');
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