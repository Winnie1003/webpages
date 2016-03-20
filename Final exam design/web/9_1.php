<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 00px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.d1 {
	background-color: #F2F2F2;
	width: 800px;
	padding: 0px;
	margin-top: 0px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
}
</style>
</head>

<body>
<div class="d1">

  <form action="9_2.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
    
    <table width="600" border="1" align="center">
    <caption style="font-size:16px; font-weight:bold; padding-top:8px; padding-bottom:4px;">填写个人信息</caption>
      <tr>
        <td align="right">姓名：</td>
        <td><label for="name"></label>
        <input type="text" name="name" id="name" /></td>
      </tr>
      <tr>
        <td align="right">性别：</td>
        <td>
          <label>
            &nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="man" id="sex_0" />
            男</label>&nbsp;&nbsp;&nbsp;
          <label>
            <input type="radio" name="sex" value="woman" id="sex_1" />
            女</label>
        </td>
      </tr>
      <tr>
        <td align="right">民族：</td>
        <td><label for="nation"></label>
        <input type="text" name="nation" id="nation" /></td>
      </tr>
      <tr>
        <td align="right">出生日期：</td>
        <td><label for="birth"></label>
        <input type="text" name="birth" id="birth" />
        格式：2000-03-02</td>
      </tr>
      <tr>
        <td align="right">籍贯：</td>
        <td><label for="jg"></label>
        <input type="text" name="jg" id="jg" /></td>
      </tr>
      <tr>
        <td align="right">身份证号：</td>
        <td><label for="id"></label>
        <input type="text" name="id" id="id" /></td>
      </tr>
      <tr>
        <td align="right">政治面貌：</td>
        <td><label for="zzmm"></label>
          <select name="zzmm" size="1" id="zzmm">
            <option value="1" selected="selected">群众</option>
            <option value="2">共青团员</option>
            <option value="3">共产党员</option>
            <option value="4">民主党派成员</option>
        </select></td>
      </tr>
      <tr>
        <td align="right">学历：</td>
        <td><label for="xl"></label>
          <select name="xl" size="1" id="xl">
            <option selected="selected">无</option>
            <option>小学</option>
            <option>中学</option>
            <option>高中</option>
            <option>大专</option>
            <option>本科 </option>
            <option>硕士研究生</option>
            <option>博士研究生</option>
        </select></td>
      </tr>
      <tr>
        <td align="right">学位：</td>
        <td><label for="xw"></label>
          <select name="xw" size="1" id="xw">
            <option>学士</option>
            <option>硕士</option>
            <option>博士</option>
        </select></td>
      </tr>
      <tr>
        <td align="right">专业：</td>
        <td><label for="zy"></label>
        <input type="text" name="zy" id="zy" /></td>
      </tr>
      <tr>
        <td align="right">毕业院校：</td>
        <td><label for="byxx"></label>
        <input name="byxx" type="text" id="byyx" size="30" /></td>
      </tr>
      <tr>
        <td align="right">联系电话：</td>
        <td><label for="tel"></label>
        <input type="text" name="tel" id="tel" /></td>
      </tr>
      <tr>
        <td align="right">手机：</td>
        <td><label for="phone"></label>
        <input type="text" name="phone" id="phone" /></td>
      </tr>
      <tr>
        <td align="right">联系地址：</td>
        <td><label for="addr"></label>
        <input name="addr" type="text" id="addr" size="30" /></td>
      </tr>
      <tr>
        <td align="right">邮编：</td>
        <td><label for="email"></label>
          <label for="yb"></label>
        <input type="text" name="yb" id="yb" /></td>
      </tr>
      <tr>
        <td align="right">E-mail：</td>
        <td><label for="email"></label>
        <input name="email" type="text" id="email" size="30" /></td>
      </tr>
      <tr>
        <td align="right">上传相片：</td>
        <td><label for="photo"></label>
        <input type="file" name="photo" id="photo" /></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="确定" />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          <input type="reset" name="renew" id="renew" value="重置" /></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>