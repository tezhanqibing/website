<?php if (!defined('THINK_PATH')) exit();?><link href="__PUBLIC__/images/skin.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
    <!--
    body {
        margin-left: 0px;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        background-color: #EEF2FB;
    }
    -->
</style>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
    <td width="17" valign="top" background="__PUBLIC__/images/mail_leftbg.gif"><img src="__PUBLIC__/images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="__PUBLIC__/images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
        <tr>
            <td height="31"><div class="titlebt">联系人设置</div></td>
        </tr>
    </table></td>
    <td width="16" valign="top" background="__PUBLIC__/images/mail_rightbg.gif"><img src="__PUBLIC__/images/nav-right-bg.gif" width="16" height="29" /></td>
</tr>
<tr>
	<td valign="middle" background="__PUBLIC__/images/mail_leftbg.gif">&nbsp;</td>
	<td bgcolor="#F7F8F9">
	<form action="../Admin/linkManAdmin" method="post" style="margin-left:40px">
		<table>
			<tr>
				<td>姓名:</td>
				<td> <input name="name" type="text" value="<?php echo ($name); ?>"/> </td>
			</tr>
			<tr>
				<td>手机号码:</td>
				<td> <input name="mobile" type="text" value="<?php echo ($mobile); ?>"/> </td>
			</tr>
			<tr>
				<td>地址:</td>
				<td> <input name="address" type="text" value="<?php echo ($address); ?>"/> </td>
			</tr>
			<tr>
				<td>传真:</td>
				<td> <input name="fax" type="text" value="<?php echo ($fax); ?>"/> </td>
			</tr>
			<tr>
				<td>固定电话:</td>
				<td> <input name="telNum" type="text" value="<?php echo ($telNum); ?>"/> </td>
			</tr>
			<tr>
				<td>邮政编码:</td>
				<td> <input name="postCode" type="text" value="<?php echo ($postCode); ?>"/> </td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input value="提交" type="submit"/>
					<input value="重置" type="reset"/>
				</td>
			</tr>
		</table>
	</form>
	</td>
	<td background="__PUBLIC__/images/mail_rightbg.gif">&nbsp;</td>
</tr>
<tr>
<td valign="middle" background="__PUBLIC__/images/mail_leftbg.gif">&nbsp;</td>
<td valign="top" bgcolor="#F7F8F9"></td>
<td background="__PUBLIC__/images/mail_rightbg.gif">&nbsp;</td>
</tr>
<tr>
    <td valign="bottom" background="__PUBLIC__/images/mail_leftbg.gif"><img src="__PUBLIC__/images/buttom_left2.gif" width="17" height="17" /></td>
    <td background="__PUBLIC__/images/buttom_bgs.gif"><img src="__PUBLIC__/images/buttom_bgs.gif" width="17" height="17"></td>
    <td valign="bottom" background="__PUBLIC__/images/mail_rightbg.gif"><img src="__PUBLIC__/images/buttom_right2.gif" width="16" height="17" /></td>
</tr>
</table>
</body>